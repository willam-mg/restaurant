<?php
namespace App\Services\Helpers;

use Illuminate\Support\Facades\Storage;

class PositionHelperService
{
    protected static $geofences = null;

    /**
     * Calcula la distancia entre dos coordenadas (lat, lon) en kilómetros
     *
     * @param float $lat1 Latitud del punto A
     * @param float $lon1 Longitud del punto A
     * @param float $lat2 Latitud del punto B
     * @param float $lon2 Longitud del punto B
     * @return float Distancia en kilómetros
     */
    function distanceBetweenPoints(float $lat1, float $lon1, float $lat2, float $lon2): float
    {
        $earthRadius = 6371; // Radio de la Tierra en km

        $lat1Rad = deg2rad($lat1);
        $lon1Rad = deg2rad($lon1);
        $lat2Rad = deg2rad($lat2);
        $lon2Rad = deg2rad($lon2);

        $latDelta = $lat2Rad - $lat1Rad;
        $lonDelta = $lon2Rad - $lon1Rad;

        $a = sin($latDelta / 2) ** 2 +
             cos($lat1Rad) * cos($lat2Rad) * sin($lonDelta / 2) ** 2;

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return round($earthRadius * $c, 3); // Retorna con 3 decimales
    }

    /**
     * Comprueba si un punto geogr fico est  dentro de un radio determinado.
     * 
     * @param float $lat Latitud del punto a comprobar.
     * @param float $lng Longitud del punto a comprobar.
     * @param float $centerLat Latitud del centro del radio.
     * @param float $centerLng Longitud del centro del radio.
     * @param float $radiusKm Radio en km, por defecto 5 km.
     * @return bool True si el punto est  dentro del radio, false en caso contrario.
     */
    public function isWithinRadius($lat, $lng, $centerLat, $centerLng, $radiusKm = 5)
    {
        $earthRadius = 6371; // Radio de la tierra en km

        $latDelta = deg2rad($lat - $centerLat);
        $lngDelta = deg2rad($lng - $centerLng);

        $a = sin($latDelta / 2) * sin($latDelta / 2) +
            cos(deg2rad($centerLat)) * cos(deg2rad($lat)) *
            sin($lngDelta / 2) * sin($lngDelta / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;

        return $distance <= $radiusKm;
    }

    /**
     * Verifica si un punto esta dentro de un poligono.
     *
     * @param array $polygon Poligono a verificar, con cada elemento siendo un punto con claves "lat" y "lng" para la latitud y longitud, respectivamente.
     * @return bool True si el punto esta dentro del poligono, false en caso contrario.
     */
    public function isPointInPolygon($point, $polygon) {
        $x = $point['lat'];
        $y = $point['lng'];
    
        $inside = false;
        $j = count($polygon) - 1;
        for ($i = 0; $i < count($polygon); $i++) {
            $xi = $polygon[$i]['lat'];
            $yi = $polygon[$i]['lng'];
            $xj = $polygon[$j]['lat'];
            $yj = $polygon[$j]['lng'];
    
            $intersect = (($yi > $y) != ($yj > $y)) &&
                ($x < ($xj - $xi) * ($y - $yi) / ($yj - $yi) + $xi);
    
            if ($intersect) $inside = !$inside;
            $j = $i;
        }
    
        return $inside;
    }

    /**
     * Verifica si una posicion esta dentro de una geocerca
     * (poligono o circulo) definida en app/config/geofences.json
     *
     * @param float $lat Latitude de la posicion
     * @param float $lng Longitud de la posicion
     * @return bool True si la posicion esta dentro de la geocerca, false en caso contrario
     */
    public function isValidPosition($lat, $lng): bool
    {
        // Cargar geofences solo una vez
        if (self::$geofences === null) {
            $path = storage_path('app/config/geofences.json');

            if (!file_exists($path)) {
                throw new \Exception("El archivo $path no existe.");
            }

            $json = file_get_contents($path);
            $geofences = json_decode($json, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Error al decodificar JSON: " . json_last_error_msg());
            }

            self::$geofences = $geofences;
        }

        $geofences = self::$geofences;

        if (!$lat || !$lng) {
            throw new \Exception("Latitude y longitude son requeridos");
        }

        $point = ['lat' => $lat, 'lng' => $lng];

        // Recorremos todas las ciudades configuradas
        foreach ($geofences as $city => $config) {
            if ($config['type'] === 'polygon') {
                if ($this->isPointInPolygon($point, $config['coordinates'])) {
                    return true; // está dentro de este polígono
                }
            } elseif ($config['type'] === 'circle') {
                $center = $config['center'];
                $radius = $config['radius_km'];
                if ($this->isWithinRadius($point['lat'], $point['lng'], $center['lat'], $center['lng'], $radius)) {
                    return true; // está dentro de este círculo
                }
            }
        }

        return false; // no pertenece a ninguna geocerca
    }
}
