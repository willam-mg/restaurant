<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdministratorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre_completo' => $this->nombre_completo,
            'src_foto' => $this->src_foto,
            'foto' => $this->foto,
            'foto_thumbnail' => $this->foto_thumbnail,
            'foto_thumbnail_sm' => $this->foto_thumbnail_sm,
            'user_id' => $this->user_id,
            'email' => $this->user->email,
        ];
    }
}
