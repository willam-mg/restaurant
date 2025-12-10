<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>JETGO API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
            <img src="../img/logo.png" alt="logo" class="logo" style="padding-top: 10px;" width="100%"/>
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-administrador" class="tocify-header">
                <li class="tocify-item level-1" data-unique="administrador">
                    <a href="#administrador">Administrador</a>
                </li>
                                    <ul id="tocify-subheader-administrador" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="administrador-GETapi-administradores">
                                <a href="#administrador-GETapi-administradores">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administrador-POSTapi-administradores">
                                <a href="#administrador-POSTapi-administradores">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administrador-GETapi-administradores--id-">
                                <a href="#administrador-GETapi-administradores--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administrador-PUTapi-administradores--id-">
                                <a href="#administrador-PUTapi-administradores--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administrador-DELETEapi-administradores--id-">
                                <a href="#administrador-DELETEapi-administradores--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administrador-PATCHapi-administradores--id-">
                                <a href="#administrador-PATCHapi-administradores--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-appcliente" class="tocify-header">
                <li class="tocify-item level-1" data-unique="appcliente">
                    <a href="#appcliente">AppCliente</a>
                </li>
                                    <ul id="tocify-subheader-appcliente" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-oferta-recomendada">
                                <a href="#appcliente-POSTapi-clientes-oferta-recomendada">1.- Oferta Recomendada</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-taxis-disponibles">
                                <a href="#appcliente-POSTapi-clientes-taxis-disponibles">4.- Taxis Disponibles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-confirmar-viaje">
                                <a href="#appcliente-POSTapi-clientes-confirmar-viaje">5.- Confirmar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-descartar-viaje">
                                <a href="#appcliente-POSTapi-clientes-descartar-viaje">5.1.- Descartar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-cancelar-viaje">
                                <a href="#appcliente-POSTapi-clientes-cancelar-viaje">5.5.- cancelar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-finalizar-viaje">
                                <a href="#appcliente-POSTapi-clientes-finalizar-viaje">9.- llego al destino</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-calificar-viaje">
                                <a href="#appcliente-POSTapi-clientes-calificar-viaje">10.- calificar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-GETapi-clientes--id--viajes">
                                <a href="#appcliente-GETapi-clientes--id--viajes">Mis viajes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="appcliente-POSTapi-clientes-on-my-way">
                                <a href="#appcliente-POSTapi-clientes-on-my-way">6.5.- establecer voy en camino</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-apptaxi" class="tocify-header">
                <li class="tocify-item level-1" data-unique="apptaxi">
                    <a href="#apptaxi">AppTaxi</a>
                </li>
                                    <ul id="tocify-subheader-apptaxi" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="apptaxi-GETapi-taxis--id--viajes">
                                <a href="#apptaxi-GETapi-taxis--id--viajes">Mis viajes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-aplicar">
                                <a href="#apptaxi-POSTapi-taxis-aplicar">3.- Aplicar a viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-descartar-viaje">
                                <a href="#apptaxi-POSTapi-taxis-descartar-viaje">3.1.- Descartar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-recoger-cliente">
                                <a href="#apptaxi-POSTapi-taxis-recoger-cliente">6.- recoger cliente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-cancelar-viaje">
                                <a href="#apptaxi-POSTapi-taxis-cancelar-viaje">7.5.- cancelar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-acaba-de-llegar">
                                <a href="#apptaxi-POSTapi-taxis-acaba-de-llegar">7.- acaba de llegar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-iniciar-viaje">
                                <a href="#apptaxi-POSTapi-taxis-iniciar-viaje">8.- iniciar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-finalizar-viaje">
                                <a href="#apptaxi-POSTapi-taxis-finalizar-viaje">9.- finalizar viaje</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-POSTapi-taxis-update-position--id-">
                                <a href="#apptaxi-POSTapi-taxis-update-position--id-">Update position</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="apptaxi-GETapi-taxis-my-receipts--id-">
                                <a href="#apptaxi-GETapi-taxis-my-receipts--id-">Mis comprobantes</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-app-version" class="tocify-header">
                <li class="tocify-item level-1" data-unique="app-version">
                    <a href="#app-version">App version</a>
                </li>
                                    <ul id="tocify-subheader-app-version" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="app-version-GETapi-versions">
                                <a href="#app-version-GETapi-versions">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="app-version-POSTapi-versions">
                                <a href="#app-version-POSTapi-versions">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="app-version-GETapi-versions--id-">
                                <a href="#app-version-GETapi-versions--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="app-version-PUTapi-versions--id-">
                                <a href="#app-version-PUTapi-versions--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="app-version-DELETEapi-versions--id-">
                                <a href="#app-version-DELETEapi-versions--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="app-version-PATCHapi-versions--id-">
                                <a href="#app-version-PATCHapi-versions--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-askquestions" class="tocify-header">
                <li class="tocify-item level-1" data-unique="askquestions">
                    <a href="#askquestions">AskQuestions</a>
                </li>
                                    <ul id="tocify-subheader-askquestions" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="askquestions-GETapi-ask-questions">
                                <a href="#askquestions-GETapi-ask-questions">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="askquestions-POSTapi-ask-questions">
                                <a href="#askquestions-POSTapi-ask-questions">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="askquestions-GETapi-ask-questions--id-">
                                <a href="#askquestions-GETapi-ask-questions--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="askquestions-PUTapi-ask-questions--id-">
                                <a href="#askquestions-PUTapi-ask-questions--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="askquestions-DELETEapi-ask-questions--id-">
                                <a href="#askquestions-DELETEapi-ask-questions--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="askquestions-PATCHapi-ask-questions--id-">
                                <a href="#askquestions-PATCHapi-ask-questions--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                                    <ul id="tocify-subheader-auth" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-send-code">
                                <a href="#auth-POSTapi-auth-send-code">Send code verification</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-cliente">
                                <a href="#auth-POSTapi-auth-cliente">Login cliente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-taxi">
                                <a href="#auth-POSTapi-auth-taxi">Login taxi</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-administrador">
                                <a href="#auth-POSTapi-auth-administrador">Login administrador</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-brand" class="tocify-header">
                <li class="tocify-item level-1" data-unique="brand">
                    <a href="#brand">Brand</a>
                </li>
                                    <ul id="tocify-subheader-brand" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="brand-GETapi-brands">
                                <a href="#brand-GETapi-brands">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="brand-GETapi-brands-all">
                                <a href="#brand-GETapi-brands-all">List all</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="brand-POSTapi-brands">
                                <a href="#brand-POSTapi-brands">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="brand-GETapi-brands--id-">
                                <a href="#brand-GETapi-brands--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="brand-PUTapi-brands--id-">
                                <a href="#brand-PUTapi-brands--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="brand-DELETEapi-brands--id-">
                                <a href="#brand-DELETEapi-brands--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="brand-PATCHapi-brands--id-">
                                <a href="#brand-PATCHapi-brands--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-carmodel" class="tocify-header">
                <li class="tocify-item level-1" data-unique="carmodel">
                    <a href="#carmodel">CarModel</a>
                </li>
                                    <ul id="tocify-subheader-carmodel" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="carmodel-GETapi-car-models">
                                <a href="#carmodel-GETapi-car-models">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="carmodel-GETapi-car-models-all">
                                <a href="#carmodel-GETapi-car-models-all">List all</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="carmodel-POSTapi-car-models">
                                <a href="#carmodel-POSTapi-car-models">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="carmodel-GETapi-car-models--id-">
                                <a href="#carmodel-GETapi-car-models--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="carmodel-PUTapi-car-models--id-">
                                <a href="#carmodel-PUTapi-car-models--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="carmodel-DELETEapi-car-models--id-">
                                <a href="#carmodel-DELETEapi-car-models--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="carmodel-PATCHapi-car-models--id-">
                                <a href="#carmodel-PATCHapi-car-models--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-cliente" class="tocify-header">
                <li class="tocify-item level-1" data-unique="cliente">
                    <a href="#cliente">Cliente</a>
                </li>
                                    <ul id="tocify-subheader-cliente" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="cliente-GETapi-clientes">
                                <a href="#cliente-GETapi-clientes">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="cliente-POSTapi-clientes">
                                <a href="#cliente-POSTapi-clientes">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="cliente-GETapi-clientes--id-">
                                <a href="#cliente-GETapi-clientes--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="cliente-PUTapi-clientes--id-">
                                <a href="#cliente-PUTapi-clientes--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="cliente-DELETEapi-clientes--id-">
                                <a href="#cliente-DELETEapi-clientes--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="cliente-PATCHapi-clientes--id-">
                                <a href="#cliente-PATCHapi-clientes--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-comprobante" class="tocify-header">
                <li class="tocify-item level-1" data-unique="comprobante">
                    <a href="#comprobante">Comprobante</a>
                </li>
                                    <ul id="tocify-subheader-comprobante" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="comprobante-GETapi-comprobantes">
                                <a href="#comprobante-GETapi-comprobantes">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="comprobante-POSTapi-comprobantes">
                                <a href="#comprobante-POSTapi-comprobantes">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="comprobante-GETapi-comprobantes--id-">
                                <a href="#comprobante-GETapi-comprobantes--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="comprobante-PUTapi-comprobantes--id-">
                                <a href="#comprobante-PUTapi-comprobantes--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="comprobante-PUTapi-comprobantes-verificar--id-">
                                <a href="#comprobante-PUTapi-comprobantes-verificar--id-">Verificar comprobante</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="comprobante-DELETEapi-comprobantes--id-">
                                <a href="#comprobante-DELETEapi-comprobantes--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="comprobante-PATCHapi-comprobantes--id-">
                                <a href="#comprobante-PATCHapi-comprobantes--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-configuracion" class="tocify-header">
                <li class="tocify-item level-1" data-unique="configuracion">
                    <a href="#configuracion">Configuracion</a>
                </li>
                                    <ul id="tocify-subheader-configuracion" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="configuracion-GETapi-configuraciones-active">
                                <a href="#configuracion-GETapi-configuraciones-active">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracion-GETapi-configuraciones">
                                <a href="#configuracion-GETapi-configuraciones">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracion-POSTapi-configuraciones">
                                <a href="#configuracion-POSTapi-configuraciones">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracion-GETapi-configuraciones--id-">
                                <a href="#configuracion-GETapi-configuraciones--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracion-PUTapi-configuraciones--id-">
                                <a href="#configuracion-PUTapi-configuraciones--id-">Update</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-constants" class="tocify-header">
                <li class="tocify-item level-1" data-unique="constants">
                    <a href="#constants">Constants</a>
                </li>
                                    <ul id="tocify-subheader-constants" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="constants-GETapi-constants">
                                <a href="#constants-GETapi-constants">List</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-taxis-approve--id-">
                                <a href="#endpoints-PUTapi-taxis-approve--id-">PUT api/taxis/approve/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-empresas">
                                <a href="#endpoints-GETapi-empresas">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-empresas">
                                <a href="#endpoints-POSTapi-empresas">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-empresas--id-">
                                <a href="#endpoints-GETapi-empresas--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-empresas--id-">
                                <a href="#endpoints-PUTapi-empresas--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-empresas--id-">
                                <a href="#endpoints-DELETEapi-empresas--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-empresas--id-">
                                <a href="#endpoints-PATCHapi-empresas--id-">PATCH api/empresas/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-charts-viajes-vs-date">
                                <a href="#endpoints-GETapi-charts-viajes-vs-date">get Viajes Vs Date To Chart</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-qr" class="tocify-header">
                <li class="tocify-item level-1" data-unique="qr">
                    <a href="#qr">Qr</a>
                </li>
                                    <ul id="tocify-subheader-qr" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="qr-GETapi-qrs-current">
                                <a href="#qr-GETapi-qrs-current">Current</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="qr-GETapi-qrs">
                                <a href="#qr-GETapi-qrs">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="qr-POSTapi-qrs">
                                <a href="#qr-POSTapi-qrs">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="qr-GETapi-qrs--id-">
                                <a href="#qr-GETapi-qrs--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="qr-PUTapi-qrs--id-">
                                <a href="#qr-PUTapi-qrs--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="qr-DELETEapi-qrs--id-">
                                <a href="#qr-DELETEapi-qrs--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="qr-PATCHapi-qrs--id-">
                                <a href="#qr-PATCHapi-qrs--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-receiptlog" class="tocify-header">
                <li class="tocify-item level-1" data-unique="receiptlog">
                    <a href="#receiptlog">ReceiptLog</a>
                </li>
                                    <ul id="tocify-subheader-receiptlog" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="receiptlog-GETapi-receipts-log">
                                <a href="#receiptlog-GETapi-receipts-log">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="receiptlog-GETapi-receipts-log-by-receipt--id-">
                                <a href="#receiptlog-GETapi-receipts-log-by-receipt--id-">List by receipt id</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="receiptlog-POSTapi-receipts-log">
                                <a href="#receiptlog-POSTapi-receipts-log">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="receiptlog-GETapi-receipts-log--id-">
                                <a href="#receiptlog-GETapi-receipts-log--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="receiptlog-PUTapi-receipts-log--id-">
                                <a href="#receiptlog-PUTapi-receipts-log--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="receiptlog-DELETEapi-receipts-log--id-">
                                <a href="#receiptlog-DELETEapi-receipts-log--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="receiptlog-PATCHapi-receipts-log--id-">
                                <a href="#receiptlog-PATCHapi-receipts-log--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-taxi" class="tocify-header">
                <li class="tocify-item level-1" data-unique="taxi">
                    <a href="#taxi">Taxi</a>
                </li>
                                    <ul id="tocify-subheader-taxi" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="taxi-GETapi-taxis">
                                <a href="#taxi-GETapi-taxis">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-POSTapi-taxis">
                                <a href="#taxi-POSTapi-taxis">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-GETapi-taxis--id-">
                                <a href="#taxi-GETapi-taxis--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-PUTapi-taxis--id-">
                                <a href="#taxi-PUTapi-taxis--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-DELETEapi-taxis--id-">
                                <a href="#taxi-DELETEapi-taxis--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-PATCHapi-taxis--id-">
                                <a href="#taxi-PATCHapi-taxis--id-">Restore</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-GETapi-observaciones-atendidas">
                                <a href="#taxi-GETapi-observaciones-atendidas">Observacioenes atendidas</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-taxi-observaciones" class="tocify-header">
                <li class="tocify-item level-1" data-unique="taxi-observaciones">
                    <a href="#taxi-observaciones">Taxi - observaciones</a>
                </li>
                                    <ul id="tocify-subheader-taxi-observaciones" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="taxi-observaciones-GETapi-observaciones">
                                <a href="#taxi-observaciones-GETapi-observaciones">Observacioens search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-GETapi-observaciones-list">
                                <a href="#taxi-observaciones-GETapi-observaciones-list">Observacioens list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-GETapi-observaciones-pendientes">
                                <a href="#taxi-observaciones-GETapi-observaciones-pendientes">Observacioens pendientes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-POSTapi-observaciones">
                                <a href="#taxi-observaciones-POSTapi-observaciones">Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-GETapi-observaciones--id-">
                                <a href="#taxi-observaciones-GETapi-observaciones--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-PUTapi-observaciones--id-">
                                <a href="#taxi-observaciones-PUTapi-observaciones--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-DELETEapi-observaciones--id-">
                                <a href="#taxi-observaciones-DELETEapi-observaciones--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taxi-observaciones-PATCHapi-observaciones--id-">
                                <a href="#taxi-observaciones-PATCHapi-observaciones--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-viaje" class="tocify-header">
                <li class="tocify-item level-1" data-unique="viaje">
                    <a href="#viaje">Viaje</a>
                </li>
                                    <ul id="tocify-subheader-viaje" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="viaje-GETapi-viajes">
                                <a href="#viaje-GETapi-viajes">List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="viaje-POSTapi-viajes">
                                <a href="#viaje-POSTapi-viajes">2.- Create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="viaje-GETapi-viajes--id-">
                                <a href="#viaje-GETapi-viajes--id-">Show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="viaje-PUTapi-viajes--id-">
                                <a href="#viaje-PUTapi-viajes--id-">Update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="viaje-DELETEapi-viajes--id-">
                                <a href="#viaje-DELETEapi-viajes--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="viaje-PATCHapi-viajes--id-">
                                <a href="#viaje-PATCHapi-viajes--id-">Restore</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="viaje-POSTapi-testing-socketio">
                                <a href="#viaje-POSTapi-testing-socketio">Test Socketio viaje obj</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-configuracion" class="tocify-header">
                <li class="tocify-item level-1" data-unique="configuracion">
                    <a href="#configuracion">configuracion</a>
                </li>
                                    <ul id="tocify-subheader-configuracion" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="configuracion-DELETEapi-configuraciones--id-">
                                <a href="#configuracion-DELETEapi-configuraciones--id-">Delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracion-PATCHapi-configuraciones--id-">
                                <a href="#configuracion-PATCHapi-configuraciones--id-">Restore</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: September 23, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="administrador">Administrador</h1>

    

                                <h2 id="administrador-GETapi-administradores">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-administradores">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/administradores" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/administradores"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-administradores">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre_completo&quot;: &quot;Juanita la huerfanita x2&quot;,
            &quot;src_foto&quot;: null,
            &quot;user_id&quot;: 2,
            &quot;email&quot;: &quot;juanita@lahuerfanita.com&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/administradores?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/administradores?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/administradores?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/administradores&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 1,
        &quot;total&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-administradores" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-administradores"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-administradores"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-administradores" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-administradores">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-administradores" data-method="GET"
      data-path="api/administradores"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-administradores', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-administradores"
                    onclick="tryItOut('GETapi-administradores');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-administradores"
                    onclick="cancelTryOut('GETapi-administradores');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-administradores"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/administradores</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-administradores"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-administradores"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="administrador-POSTapi-administradores">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>

<span id="example-requests-POSTapi-administradores">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/administradores" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/administradores"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-administradores">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;nombre_completo&quot;: &quot;Juanita la huerfanita&quot;,
    &quot;user_id&quot;: 2,
    &quot;updated_at&quot;: &quot;2023-12-07T20:09:57.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-07T20:09:57.000000Z&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo nombre_completo es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-administradores" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-administradores"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-administradores"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-administradores" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-administradores">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-administradores" data-method="POST"
      data-path="api/administradores"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-administradores', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-administradores"
                    onclick="tryItOut('POSTapi-administradores');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-administradores"
                    onclick="cancelTryOut('POSTapi-administradores');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-administradores"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/administradores</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-administradores"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-administradores"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="administrador-GETapi-administradores--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-administradores--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/administradores/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/administradores/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-administradores--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;nombre_completo&quot;: &quot;Juanita la huerfanita&quot;,
    &quot;src_foto&quot;: null,
    &quot;user_id&quot;: 2,
    &quot;email&quot;: &quot;juanita@lahuerfanita.com&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Administrador] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-administradores--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-administradores--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-administradores--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-administradores--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-administradores--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-administradores--id-" data-method="GET"
      data-path="api/administradores/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-administradores--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-administradores--id-"
                    onclick="tryItOut('GETapi-administradores--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-administradores--id-"
                    onclick="cancelTryOut('GETapi-administradores--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-administradores--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/administradores/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-administradores--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="administrador-PUTapi-administradores--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-administradores--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/administradores/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/administradores/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-administradores--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;nombre_completo&quot;: &quot;Juanita la huerfanita x2&quot;,
    &quot;src_foto&quot;: null,
    &quot;user_id&quot;: 2,
    &quot;created_at&quot;: &quot;2023-12-07T20:09:57.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-12-07T20:21:04.000000Z&quot;,
    &quot;deleted_at&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo nombre_completo es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-administradores--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-administradores--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-administradores--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-administradores--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-administradores--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-administradores--id-" data-method="PUT"
      data-path="api/administradores/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-administradores--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-administradores--id-"
                    onclick="tryItOut('PUTapi-administradores--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-administradores--id-"
                    onclick="cancelTryOut('PUTapi-administradores--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-administradores--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/administradores/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-administradores--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="administrador-DELETEapi-administradores--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-administradores--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/administradores/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/administradores/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-administradores--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Administrador] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-administradores--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-administradores--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-administradores--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-administradores--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-administradores--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-administradores--id-" data-method="DELETE"
      data-path="api/administradores/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-administradores--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-administradores--id-"
                    onclick="tryItOut('DELETEapi-administradores--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-administradores--id-"
                    onclick="cancelTryOut('DELETEapi-administradores--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-administradores--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/administradores/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-administradores--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="administrador-PATCHapi-administradores--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-administradores--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/administradores/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/administradores/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-administradores--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Administrador] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-administradores--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-administradores--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-administradores--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-administradores--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-administradores--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-administradores--id-" data-method="PATCH"
      data-path="api/administradores/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-administradores--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-administradores--id-"
                    onclick="tryItOut('PATCHapi-administradores--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-administradores--id-"
                    onclick="cancelTryOut('PATCHapi-administradores--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-administradores--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/administradores/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-administradores--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-administradores--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="appcliente">AppCliente</h1>

    

                                <h2 id="appcliente-POSTapi-clientes-oferta-recomendada">1.- Oferta Recomendada</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-clientes-oferta-recomendada">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/oferta-recomendada" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"kilometros\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/oferta-recomendada"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "kilometros": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-oferta-recomendada">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;precio_recomendado&quot;: 50,
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-oferta-recomendada" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-oferta-recomendada"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-oferta-recomendada"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-oferta-recomendada" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-oferta-recomendada">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-oferta-recomendada" data-method="POST"
      data-path="api/clientes/oferta-recomendada"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-oferta-recomendada', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-oferta-recomendada"
                    onclick="tryItOut('POSTapi-clientes-oferta-recomendada');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-oferta-recomendada"
                    onclick="cancelTryOut('POSTapi-clientes-oferta-recomendada');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-oferta-recomendada"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/oferta-recomendada</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-oferta-recomendada"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-oferta-recomendada"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>kilometros</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="kilometros"                data-endpoint="POSTapi-clientes-oferta-recomendada"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="appcliente-POSTapi-clientes-taxis-disponibles">4.- Taxis Disponibles</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-clientes-taxis-disponibles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/taxis-disponibles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/taxis-disponibles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-taxis-disponibles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;fecha&quot;: &quot;2024-08-16&quot;,
            &quot;hora&quot;: &quot;11:08:53&quot;,
            &quot;comentario&quot;: &quot;&quot;,
            &quot;viaje_id&quot;: 1,
            &quot;taxi_id&quot;: 1,
            &quot;cancelado&quot;: 0,
            &quot;viaje&quot;: {
                &quot;id&quot;: 1,
                &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
                &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
                &quot;origen_latitude&quot;: -17.398691,
                &quot;origen_longitude&quot;: -66.163545,
                &quot;destino_latitude&quot;: -17.400398,
                &quot;destino_longitude&quot;: -66.140818,
                &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
                &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
                &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
                &quot;tarifa_final&quot;: &quot;10.00&quot;,
                &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
                &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
                &quot;hora_registro&quot;: &quot;17:18:00&quot;,
                &quot;fecha_aceptado&quot;: null,
                &quot;hora_aceptado&quot;: null,
                &quot;fecha_recojo&quot;: null,
                &quot;hora_recojo&quot;: null,
                &quot;fecha_cancelado&quot;: null,
                &quot;hora_cancelado&quot;: null,
                &quot;fecha_concluido&quot;: null,
                &quot;hora_concluido&quot;: null,
                &quot;calificacion&quot;: null,
                &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
                &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
                &quot;estado&quot;: &quot;ofertado&quot;,
                &quot;tipo_pago&quot;: null,
                &quot;observacion&quot;: null,
                &quot;numero_pasajeros&quot;: null,
                &quot;taxi_id&quot;: null,
                &quot;cliente_id&quot;: 1,
                &quot;created_at&quot;: &quot;2024-08-16T15:01:33.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-08-16T15:01:33.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            &quot;taxi&quot;: {
                &quot;id&quot;: 1,
                &quot;nombre&quot;: &quot;pepe&quot;,
                &quot;apellido&quot;: &quot;el toro&quot;,
                &quot;celular&quot;: &quot;75977665&quot;,
                &quot;email&quot;: &quot;pepe@gmail.com&quot;,
                &quot;fecha_nacimiento&quot;: &quot;2024-08-16&quot;,
                &quot;src_foto&quot;: null,
                &quot;credito_disponible&quot;: 0,
                &quot;calificacion&quot;: 0,
                &quot;player_id&quot;: null,
                &quot;latitude&quot;: null,
                &quot;longitude&quot;: null,
                &quot;numero_licencia&quot;: &quot;234324324&quot;,
                &quot;modelo_auto&quot;: null,
                &quot;numero_placa&quot;: null,
                &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
                &quot;src_licencia_amberso&quot;: null,
                &quot;src_licencia_reverso&quot;: null,
                &quot;src_soat&quot;: null,
                &quot;src_foto_vehiculo&quot;: null,
                &quot;src_ruat&quot;: null,
                &quot;user_id&quot;: 2,
                &quot;estado_filiacion&quot;: 3,
                &quot;estado&quot;: 0,
                &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
                &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
                &quot;empresa_id&quot;: null,
                &quot;created_at&quot;: &quot;2024-08-16T15:01:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-08-16T15:01:16.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
                &quot;nombre_completo&quot;: &quot;pepe el toro&quot;,
                &quot;foto&quot;: null,
                &quot;licencia_amberso&quot;: null,
                &quot;licencia_reverso&quot;: null,
                &quot;soat&quot;: null,
                &quot;foto_vehiculo&quot;: null,
                &quot;ruat&quot;: null
            }
        },
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles?page=1&quot;,
        &quot;last&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/taxis-disponibles&quot;,
        &quot;per_page&quot;: 2,
        &quot;to&quot;: 2,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-taxis-disponibles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-taxis-disponibles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-taxis-disponibles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-taxis-disponibles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-taxis-disponibles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-taxis-disponibles" data-method="POST"
      data-path="api/clientes/taxis-disponibles"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-taxis-disponibles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-taxis-disponibles"
                    onclick="tryItOut('POSTapi-clientes-taxis-disponibles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-taxis-disponibles"
                    onclick="cancelTryOut('POSTapi-clientes-taxis-disponibles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-taxis-disponibles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/taxis-disponibles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-taxis-disponibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-taxis-disponibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-clientes-taxis-disponibles"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="appcliente-POSTapi-clientes-confirmar-viaje">5.- Confirmar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Sockets chanels emmit:</p>
<p>'taxi/viaje-aceptar'</p>

<span id="example-requests-POSTapi-clientes-confirmar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/confirmar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_taxi_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/confirmar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_taxi_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-confirmar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;aplicado&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-confirmar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-confirmar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-confirmar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-confirmar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-confirmar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-confirmar-viaje" data-method="POST"
      data-path="api/clientes/confirmar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-confirmar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-confirmar-viaje"
                    onclick="tryItOut('POSTapi-clientes-confirmar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-confirmar-viaje"
                    onclick="cancelTryOut('POSTapi-clientes-confirmar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-confirmar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/confirmar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-confirmar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-confirmar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_taxi_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_taxi_id"                data-endpoint="POSTapi-clientes-confirmar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="appcliente-POSTapi-clientes-descartar-viaje">5.1.- Descartar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'taxi/viaje-descartar'</p>

<span id="example-requests-POSTapi-clientes-descartar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/descartar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_taxi_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/descartar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_taxi_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-descartar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Descartado&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-descartar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-descartar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-descartar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-descartar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-descartar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-descartar-viaje" data-method="POST"
      data-path="api/clientes/descartar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-descartar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-descartar-viaje"
                    onclick="tryItOut('POSTapi-clientes-descartar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-descartar-viaje"
                    onclick="cancelTryOut('POSTapi-clientes-descartar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-descartar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/descartar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-descartar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-descartar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_taxi_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_taxi_id"                data-endpoint="POSTapi-clientes-descartar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="appcliente-POSTapi-clientes-cancelar-viaje">5.5.- cancelar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-cancelar'</p>

<span id="example-requests-POSTapi-clientes-cancelar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/cancelar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586,
    \"motivo_cancelacion\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/cancelar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586,
    "motivo_cancelacion": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-cancelar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;aplicado&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-cancelar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-cancelar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-cancelar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-cancelar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-cancelar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-cancelar-viaje" data-method="POST"
      data-path="api/clientes/cancelar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-cancelar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-cancelar-viaje"
                    onclick="tryItOut('POSTapi-clientes-cancelar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-cancelar-viaje"
                    onclick="cancelTryOut('POSTapi-clientes-cancelar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-cancelar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/cancelar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-cancelar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-cancelar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-clientes-cancelar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>motivo_cancelacion</code></b>&nbsp;&nbsp;
<small>text</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="motivo_cancelacion"                data-endpoint="POSTapi-clientes-cancelar-viaje"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="appcliente-POSTapi-clientes-finalizar-viaje">9.- llego al destino</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'taxi/viaje-finalizar'</p>

<span id="example-requests-POSTapi-clientes-finalizar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/finalizar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/finalizar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-finalizar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;finalizado&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-finalizar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-finalizar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-finalizar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-finalizar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-finalizar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-finalizar-viaje" data-method="POST"
      data-path="api/clientes/finalizar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-finalizar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-finalizar-viaje"
                    onclick="tryItOut('POSTapi-clientes-finalizar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-finalizar-viaje"
                    onclick="cancelTryOut('POSTapi-clientes-finalizar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-finalizar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/finalizar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-finalizar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-finalizar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-clientes-finalizar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="appcliente-POSTapi-clientes-calificar-viaje">10.- calificar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-cancelar'</p>

<span id="example-requests-POSTapi-clientes-calificar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/calificar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586,
    \"observacion\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/calificar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586,
    "observacion": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-calificar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;aplicado&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-calificar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-calificar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-calificar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-calificar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-calificar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-calificar-viaje" data-method="POST"
      data-path="api/clientes/calificar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-calificar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-calificar-viaje"
                    onclick="tryItOut('POSTapi-clientes-calificar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-calificar-viaje"
                    onclick="cancelTryOut('POSTapi-clientes-calificar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-calificar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/calificar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-calificar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-calificar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-clientes-calificar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>observacion</code></b>&nbsp;&nbsp;
<small>text</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="observacion"                data-endpoint="POSTapi-clientes-calificar-viaje"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="appcliente-GETapi-clientes--id--viajes">Mis viajes</h2>

<p>
</p>



<span id="example-requests-GETapi-clientes--id--viajes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/clientes/consequatur/viajes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/consequatur/viajes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-clientes--id--viajes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;lugar_origen&quot;: &quot;Cl&iacute;nica Copacabana y Calle Potos&iacute; y Portales&quot;,
            &quot;lugar_destino&quot;: &quot;Donal y Avenida General Jos&eacute; Manuel Pando y Queru Queru Central&quot;,
            &quot;origen_latitude&quot;: -17.3783833,
            &quot;origen_longitude&quot;: -66.154075,
            &quot;destino_latitude&quot;: -17.372252309008,
            &quot;destino_longitude&quot;: -66.152522064843,
            &quot;tarifa_ideal&quot;: &quot;4.00&quot;,
            &quot;tarifa_propuesta_cliente&quot;: null,
            &quot;tarifa_propuesta_taxi&quot;: null,
            &quot;tarifa_final&quot;: null,
            &quot;comentario&quot;: null,
            &quot;fecha_registro&quot;: &quot;2024-10-08&quot;,
            &quot;hora_registro&quot;: &quot;17:59:25&quot;,
            &quot;fecha_aceptado&quot;: null,
            &quot;hora_aceptado&quot;: null,
            &quot;fecha_recojo&quot;: null,
            &quot;hora_recojo&quot;: null,
            &quot;fecha_cancelado&quot;: null,
            &quot;hora_cancelado&quot;: null,
            &quot;fecha_concluido&quot;: null,
            &quot;hora_concluido&quot;: null,
            &quot;calificacion&quot;: null,
            &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
            &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
            &quot;estado&quot;: &quot;ofertado&quot;,
            &quot;tipo_pago&quot;: &quot;efectivo&quot;,
            &quot;observacion&quot;: null,
            &quot;taxi_id&quot;: null,
            &quot;cliente_id&quot;: 2,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;cliente&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre_completo&quot;: &quot;sda&quot;,
                &quot;email&quot;: &quot;asd@gmail.com&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;src_foto&quot;: &quot;cliente_2240920142224.jpg&quot;,
                &quot;latitude&quot;: &quot;-17.3753993&quot;,
                &quot;longitude&quot;: &quot;-66.1994751&quot;,
                &quot;user_id&quot;: 3,
                &quot;created_at&quot;: &quot;2024-08-28T17:08:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T14:44:38.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/cliente_2240920142224.jpg&quot;,
                &quot;count_total_arboles&quot;: 3,
                &quot;count_total_mes_arboles&quot;: 3
            },
            &quot;taxi&quot;: null,
            &quot;ridePositions&quot;: [
                {
                  &quot;id&quot;: 1,
                  &quot;latitude&quot;: &quot;-17.3753982&quot;,
                  &quot;longitude&quot;: &quot;-66.1994676&quot;,
                  &quot;viaje_id&quot;: 1
                },
                {
                  &quot;id&quot;: 2,
                  &quot;latitude&quot;: &quot;-17.3753982&quot;,
                  &quot;longitude&quot;: &quot;-66.1994676&quot;,
                  &quot;viaje_id&quot;: 1
                }
             ]
        },
        {
            &quot;id&quot;: 2,
            &quot;lugar_origen&quot;: &quot;Hospital Corporaci&oacute;n de Seguro Social Militar 1 y Avenida Ram&oacute;n Rivero y Seminario San Luis&quot;,
            &quot;lugar_destino&quot;: &quot;Fundaci&oacute;n Sedes Sapientiae y Parque Facundo Quiroga S. y Tupuraya&quot;,
            &quot;origen_latitude&quot;: -17.378882683887,
            &quot;origen_longitude&quot;: -66.145344776864,
            &quot;destino_latitude&quot;: -17.373468238545,
            &quot;destino_longitude&quot;: -66.142304109773,
            &quot;tarifa_ideal&quot;: &quot;6.00&quot;,
            &quot;tarifa_propuesta_cliente&quot;: null,
            &quot;tarifa_propuesta_taxi&quot;: null,
            &quot;tarifa_final&quot;: null,
            &quot;comentario&quot;: &quot;ljdfsnd&quot;,
            &quot;fecha_registro&quot;: &quot;2024-10-09&quot;,
            &quot;hora_registro&quot;: &quot;17:10:37&quot;,
            &quot;fecha_aceptado&quot;: &quot;2024-10-09&quot;,
            &quot;hora_aceptado&quot;: &quot;17:10:48&quot;,
            &quot;fecha_recojo&quot;: &quot;2024-10-09&quot;,
            &quot;hora_recojo&quot;: &quot;17:23:05&quot;,
            &quot;fecha_cancelado&quot;: null,
            &quot;hora_cancelado&quot;: null,
            &quot;fecha_concluido&quot;: &quot;2024-10-09&quot;,
            &quot;hora_concluido&quot;: &quot;17:23:35&quot;,
            &quot;calificacion&quot;: 5,
            &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
            &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
            &quot;estado&quot;: &quot;finalizado&quot;,
            &quot;tipo_pago&quot;: &quot;efectivo&quot;,
            &quot;observacion&quot;: null,
            &quot;taxi_id&quot;: 2,
            &quot;cliente_id&quot;: 2,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;cliente&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre_completo&quot;: &quot;sda&quot;,
                &quot;email&quot;: &quot;asd@gmail.com&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;src_foto&quot;: &quot;cliente_2240920142224.jpg&quot;,
                &quot;latitude&quot;: &quot;-17.3753993&quot;,
                &quot;longitude&quot;: &quot;-66.1994751&quot;,
                &quot;user_id&quot;: 3,
                &quot;created_at&quot;: &quot;2024-08-28T17:08:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T14:44:38.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/cliente_2240920142224.jpg&quot;,
                &quot;count_total_arboles&quot;: 3,
                &quot;count_total_mes_arboles&quot;: 3
            },
            &quot;taxi&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre&quot;: &quot;Prueba&quot;,
                &quot;apellido&quot;: &quot;Taxi&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;email&quot;: &quot;taxi@gmail.com&quot;,
                &quot;fecha_nacimiento&quot;: &quot;2000-09-12&quot;,
                &quot;src_foto&quot;: &quot;taxi_foto_2240912155855.jpg&quot;,
                &quot;credito_disponible&quot;: 100,
                &quot;calificacion&quot;: 0,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;latitude&quot;: &quot;-17.3753982&quot;,
                &quot;longitude&quot;: &quot;-66.1994676&quot;,
                &quot;numero_licencia&quot;: &quot;12355&quot;,
                &quot;modelo_auto&quot;: &quot;123-22&quot;,
                &quot;numero_placa&quot;: &quot;222222&quot;,
                &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
                &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_2240912155855.jpg&quot;,
                &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_2240912155855.jpg&quot;,
                &quot;src_soat&quot;: &quot;taxi_soat_2240912155855.jpg&quot;,
                &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_2240912155855.jpg&quot;,
                &quot;src_ruat&quot;: &quot;taxi_ruat_2240912155855.jpg&quot;,
                &quot;user_id&quot;: 3,
                &quot;estado_filiacion&quot;: 3,
                &quot;estado&quot;: 0,
                &quot;porcentaje_comision&quot;: &quot;0.8&quot;,
                &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
                &quot;empresa_id&quot;: null,
                &quot;created_at&quot;: &quot;2024-08-28T20:22:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T15:01:59.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
                &quot;nombre_completo&quot;: &quot;Prueba Taxi&quot;,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_foto_2240912155855.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/taxi_foto_2240912155855.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/taxi_foto_2240912155855.jpg&quot;,
                &quot;licencia_amberso&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_licencia_amberso_2240912155855.jpg&quot;,
                &quot;licencia_reverso&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_licencia_reverso_2240912155855.jpg&quot;,
                &quot;soat&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_soat_2240912155855.jpg&quot;,
                &quot;foto_vehiculo&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_vehiculo_2240912155855.jpg&quot;,
                &quot;ruat&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_ruat_2240912155855.jpg&quot;
            },
            &quot;ridePositions&quot;: [
                {
                  &quot;id&quot;: 1,
                  &quot;latitude&quot;: &quot;-17.3753982&quot;,
                  &quot;longitude&quot;: &quot;-66.1994676&quot;,
                  &quot;viaje_id&quot;: 1
                },
                {
                  &quot;id&quot;: 2,
                  &quot;latitude&quot;: &quot;-17.3753982&quot;,
                  &quot;longitude&quot;: &quot;-66.1994676&quot;,
                  &quot;viaje_id&quot;: 1
                }
             ]
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=6&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 6,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.naudi.local:8080/api/v1/clientes/2/viajes&quot;,
        &quot;per_page&quot;: 2,
        &quot;to&quot;: 2,
        &quot;total&quot;: 11
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-clientes--id--viajes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-clientes--id--viajes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clientes--id--viajes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-clientes--id--viajes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clientes--id--viajes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-clientes--id--viajes" data-method="GET"
      data-path="api/clientes/{id}/viajes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-clientes--id--viajes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-clientes--id--viajes"
                    onclick="tryItOut('GETapi-clientes--id--viajes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-clientes--id--viajes"
                    onclick="cancelTryOut('GETapi-clientes--id--viajes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-clientes--id--viajes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/clientes/{id}/viajes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-clientes--id--viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-clientes--id--viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-clientes--id--viajes"
               value="consequatur"
               data-component="url">
    <br>
<p>id cliente Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>perPage</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="perPage"                data-endpoint="GETapi-clientes--id--viajes"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="appcliente-POSTapi-clientes-on-my-way">6.5.- establecer voy en camino</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-clientes-on-my-way">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes/on-my-way" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/on-my-way"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes-on-my-way">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;encamino&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes-on-my-way" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes-on-my-way"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes-on-my-way"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes-on-my-way" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes-on-my-way">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes-on-my-way" data-method="POST"
      data-path="api/clientes/on-my-way"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes-on-my-way', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes-on-my-way"
                    onclick="tryItOut('POSTapi-clientes-on-my-way');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes-on-my-way"
                    onclick="cancelTryOut('POSTapi-clientes-on-my-way');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes-on-my-way"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes/on-my-way</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes-on-my-way"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes-on-my-way"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-clientes-on-my-way"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                <h1 id="apptaxi">AppTaxi</h1>

    

                                <h2 id="apptaxi-GETapi-taxis--id--viajes">Mis viajes</h2>

<p>
</p>



<span id="example-requests-GETapi-taxis--id--viajes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/taxis/consequatur/viajes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/consequatur/viajes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-taxis--id--viajes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;lugar_origen&quot;: &quot;Hospital Corporaci&oacute;n de Seguro Social Militar 1 y Avenida Ram&oacute;n Rivero y Seminario San Luis&quot;,
            &quot;lugar_destino&quot;: &quot;Fundaci&oacute;n Sedes Sapientiae y Parque Facundo Quiroga S. y Tupuraya&quot;,
            &quot;origen_latitude&quot;: -17.378882683887,
            &quot;origen_longitude&quot;: -66.145344776864,
            &quot;destino_latitude&quot;: -17.373468238545,
            &quot;destino_longitude&quot;: -66.142304109773,
            &quot;tarifa_ideal&quot;: &quot;6.00&quot;,
            &quot;tarifa_propuesta_cliente&quot;: null,
            &quot;tarifa_propuesta_taxi&quot;: null,
            &quot;tarifa_final&quot;: null,
            &quot;comentario&quot;: &quot;ljdfsnd&quot;,
            &quot;fecha_registro&quot;: &quot;2024-10-09&quot;,
            &quot;hora_registro&quot;: &quot;17:10:37&quot;,
            &quot;fecha_aceptado&quot;: &quot;2024-10-09&quot;,
            &quot;hora_aceptado&quot;: &quot;17:10:48&quot;,
            &quot;fecha_recojo&quot;: &quot;2024-10-09&quot;,
            &quot;hora_recojo&quot;: &quot;17:23:05&quot;,
            &quot;fecha_cancelado&quot;: null,
            &quot;hora_cancelado&quot;: null,
            &quot;fecha_concluido&quot;: &quot;2024-10-09&quot;,
            &quot;hora_concluido&quot;: &quot;17:23:35&quot;,
            &quot;calificacion&quot;: 5,
            &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
            &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
            &quot;estado&quot;: &quot;finalizado&quot;,
            &quot;tipo_pago&quot;: &quot;efectivo&quot;,
            &quot;observacion&quot;: null,
            &quot;taxi_id&quot;: 2,
            &quot;cliente_id&quot;: 2,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;cliente&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre_completo&quot;: &quot;sda&quot;,
                &quot;email&quot;: &quot;asd@gmail.com&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;src_foto&quot;: &quot;cliente_2240920142224.jpg&quot;,
                &quot;latitude&quot;: &quot;-17.3753993&quot;,
                &quot;longitude&quot;: &quot;-66.1994751&quot;,
                &quot;user_id&quot;: 3,
                &quot;created_at&quot;: &quot;2024-08-28T17:08:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T14:44:38.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/cliente_2240920142224.jpg&quot;,
                &quot;count_total_arboles&quot;: 3,
                &quot;count_total_mes_arboles&quot;: 3
            },
            &quot;taxi&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre&quot;: &quot;Prueba&quot;,
                &quot;apellido&quot;: &quot;Taxi&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;email&quot;: &quot;taxi@gmail.com&quot;,
                &quot;fecha_nacimiento&quot;: &quot;2000-09-12&quot;,
                &quot;src_foto&quot;: &quot;taxi_foto_2240912155855.jpg&quot;,
                &quot;credito_disponible&quot;: 100,
                &quot;calificacion&quot;: 0,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;latitude&quot;: &quot;-17.3753982&quot;,
                &quot;longitude&quot;: &quot;-66.1994676&quot;,
                &quot;numero_licencia&quot;: &quot;12355&quot;,
                &quot;modelo_auto&quot;: &quot;123-22&quot;,
                &quot;numero_placa&quot;: &quot;222222&quot;,
                &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
                &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_2240912155855.jpg&quot;,
                &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_2240912155855.jpg&quot;,
                &quot;src_soat&quot;: &quot;taxi_soat_2240912155855.jpg&quot;,
                &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_2240912155855.jpg&quot;,
                &quot;src_ruat&quot;: &quot;taxi_ruat_2240912155855.jpg&quot;,
                &quot;user_id&quot;: 3,
                &quot;estado_filiacion&quot;: 3,
                &quot;estado&quot;: 0,
                &quot;porcentaje_comision&quot;: &quot;0.8&quot;,
                &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
                &quot;empresa_id&quot;: null,
                &quot;created_at&quot;: &quot;2024-08-28T20:22:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T15:01:59.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
                &quot;nombre_completo&quot;: &quot;Prueba Taxi&quot;,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_foto_2240912155855.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/taxi_foto_2240912155855.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/taxi_foto_2240912155855.jpg&quot;,
                &quot;licencia_amberso&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_licencia_amberso_2240912155855.jpg&quot;,
                &quot;licencia_reverso&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_licencia_reverso_2240912155855.jpg&quot;,
                &quot;soat&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_soat_2240912155855.jpg&quot;,
                &quot;foto_vehiculo&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_vehiculo_2240912155855.jpg&quot;,
                &quot;ruat&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_ruat_2240912155855.jpg&quot;
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;lugar_origen&quot;: &quot;Calle Oscar Dorado V&aacute;squez y San Rafael&quot;,
            &quot;lugar_destino&quot;: &quot;Unidad Educativa Jorge Vasquez y Avenida Beijing y Magisterio&quot;,
            &quot;origen_latitude&quot;: -17.375399,
            &quot;origen_longitude&quot;: -66.1994761,
            &quot;destino_latitude&quot;: -17.374059813053,
            &quot;destino_longitude&quot;: -66.180938578638,
            &quot;tarifa_ideal&quot;: &quot;10.00&quot;,
            &quot;tarifa_propuesta_cliente&quot;: null,
            &quot;tarifa_propuesta_taxi&quot;: null,
            &quot;tarifa_final&quot;: null,
            &quot;comentario&quot;: null,
            &quot;fecha_registro&quot;: &quot;2024-10-14&quot;,
            &quot;hora_registro&quot;: &quot;11:06:00&quot;,
            &quot;fecha_aceptado&quot;: &quot;2024-10-14&quot;,
            &quot;hora_aceptado&quot;: &quot;11:06:23&quot;,
            &quot;fecha_recojo&quot;: &quot;2024-10-14&quot;,
            &quot;hora_recojo&quot;: &quot;11:07:05&quot;,
            &quot;fecha_cancelado&quot;: null,
            &quot;hora_cancelado&quot;: null,
            &quot;fecha_concluido&quot;: &quot;2024-10-14&quot;,
            &quot;hora_concluido&quot;: &quot;11:07:40&quot;,
            &quot;calificacion&quot;: null,
            &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
            &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
            &quot;estado&quot;: &quot;finalizado&quot;,
            &quot;tipo_pago&quot;: &quot;efectivo&quot;,
            &quot;observacion&quot;: null,
            &quot;taxi_id&quot;: 2,
            &quot;cliente_id&quot;: 2,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;cliente&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre_completo&quot;: &quot;sda&quot;,
                &quot;email&quot;: &quot;asd@gmail.com&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;src_foto&quot;: &quot;cliente_2240920142224.jpg&quot;,
                &quot;latitude&quot;: &quot;-17.3753993&quot;,
                &quot;longitude&quot;: &quot;-66.1994751&quot;,
                &quot;user_id&quot;: 3,
                &quot;created_at&quot;: &quot;2024-08-28T17:08:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T14:44:38.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/cliente_2240920142224.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/cliente_2240920142224.jpg&quot;,
                &quot;count_total_arboles&quot;: 3,
                &quot;count_total_mes_arboles&quot;: 3
            },
            &quot;taxi&quot;: {
                &quot;id&quot;: 2,
                &quot;nombre&quot;: &quot;Prueba&quot;,
                &quot;apellido&quot;: &quot;Taxi&quot;,
                &quot;celular&quot;: &quot;76905227&quot;,
                &quot;email&quot;: &quot;taxi@gmail.com&quot;,
                &quot;fecha_nacimiento&quot;: &quot;2000-09-12&quot;,
                &quot;src_foto&quot;: &quot;taxi_foto_2240912155855.jpg&quot;,
                &quot;credito_disponible&quot;: 100,
                &quot;calificacion&quot;: 0,
                &quot;player_id&quot;: &quot;1234556&quot;,
                &quot;latitude&quot;: &quot;-17.3753982&quot;,
                &quot;longitude&quot;: &quot;-66.1994676&quot;,
                &quot;numero_licencia&quot;: &quot;12355&quot;,
                &quot;modelo_auto&quot;: &quot;123-22&quot;,
                &quot;numero_placa&quot;: &quot;222222&quot;,
                &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
                &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_2240912155855.jpg&quot;,
                &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_2240912155855.jpg&quot;,
                &quot;src_soat&quot;: &quot;taxi_soat_2240912155855.jpg&quot;,
                &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_2240912155855.jpg&quot;,
                &quot;src_ruat&quot;: &quot;taxi_ruat_2240912155855.jpg&quot;,
                &quot;user_id&quot;: 3,
                &quot;estado_filiacion&quot;: 3,
                &quot;estado&quot;: 0,
                &quot;porcentaje_comision&quot;: &quot;0.8&quot;,
                &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
                &quot;empresa_id&quot;: null,
                &quot;created_at&quot;: &quot;2024-08-28T20:22:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-10-14T15:01:59.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
                &quot;nombre_completo&quot;: &quot;Prueba Taxi&quot;,
                &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_foto_2240912155855.jpg&quot;,
                &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/taxi_foto_2240912155855.jpg&quot;,
                &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/taxi_foto_2240912155855.jpg&quot;,
                &quot;licencia_amberso&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_licencia_amberso_2240912155855.jpg&quot;,
                &quot;licencia_reverso&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_licencia_reverso_2240912155855.jpg&quot;,
                &quot;soat&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_soat_2240912155855.jpg&quot;,
                &quot;foto_vehiculo&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_vehiculo_2240912155855.jpg&quot;,
                &quot;ruat&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_ruat_2240912155855.jpg&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.naudi.local:8080/api/v1/taxis/2/viajes&quot;,
        &quot;per_page&quot;: 2,
        &quot;to&quot;: 2,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-taxis--id--viajes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-taxis--id--viajes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-taxis--id--viajes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-taxis--id--viajes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-taxis--id--viajes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-taxis--id--viajes" data-method="GET"
      data-path="api/taxis/{id}/viajes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-taxis--id--viajes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-taxis--id--viajes"
                    onclick="tryItOut('GETapi-taxis--id--viajes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-taxis--id--viajes"
                    onclick="cancelTryOut('GETapi-taxis--id--viajes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-taxis--id--viajes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/taxis/{id}/viajes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-taxis--id--viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-taxis--id--viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-taxis--id--viajes"
               value="consequatur"
               data-component="url">
    <br>
<p>id taxi Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="apptaxi-POSTapi-taxis-aplicar">3.- Aplicar a viaje</h2>

<p>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-aplicar'</p>

<span id="example-requests-POSTapi-taxis-aplicar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/aplicar" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"tarifa_propuesta_taxi\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/aplicar"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tarifa_propuesta_taxi": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-aplicar">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;id&quot;: 3,
    &quot;fecha&quot;: &quot;2024-08-16&quot;,
    &quot;hora&quot;: &quot;11:08:53&quot;,
    &quot;comentario&quot;: &quot;&quot;,
    &quot;viaje_id&quot;: 1,
    &quot;taxi_id&quot;: 1,
    &quot;cancelado&quot;: null,
    &quot;viaje&quot;: {
        &quot;id&quot;: 1,
        &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
        &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
        &quot;origen_latitude&quot;: -17.398691,
        &quot;origen_longitude&quot;: -66.163545,
        &quot;destino_latitude&quot;: -17.400398,
        &quot;destino_longitude&quot;: -66.140818,
        &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
        &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
        &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
        &quot;tarifa_final&quot;: &quot;10.00&quot;,
        &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
        &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
        &quot;hora_registro&quot;: &quot;17:18:00&quot;,
        &quot;fecha_aceptado&quot;: null,
        &quot;hora_aceptado&quot;: null,
        &quot;fecha_recojo&quot;: null,
        &quot;hora_recojo&quot;: null,
        &quot;fecha_cancelado&quot;: null,
        &quot;hora_cancelado&quot;: null,
        &quot;fecha_concluido&quot;: null,
        &quot;hora_concluido&quot;: null,
        &quot;calificacion&quot;: null,
        &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
        &quot;estado&quot;: &quot;ofertado&quot;,
        &quot;tipo_pago&quot;: null,
        &quot;observacion&quot;: null,
        &quot;numero_pasajeros&quot;: null,
        &quot;taxi_id&quot;: null,
        &quot;cliente_id&quot;: 1,
        &quot;created_at&quot;: &quot;2024-08-16T15:01:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:01:33.000000Z&quot;,
        &quot;deleted_at&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;el toro&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: &quot;pepe@gmail.com&quot;,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-16&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: &quot;234324324&quot;,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:01:07.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:01:16.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe el toro&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-aplicar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-aplicar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-aplicar"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-aplicar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-aplicar">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-aplicar" data-method="POST"
      data-path="api/taxis/aplicar"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-aplicar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-aplicar"
                    onclick="tryItOut('POSTapi-taxis-aplicar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-aplicar"
                    onclick="cancelTryOut('POSTapi-taxis-aplicar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-aplicar"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/aplicar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-aplicar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-aplicar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tarifa_propuesta_taxi</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tarifa_propuesta_taxi"                data-endpoint="POSTapi-taxis-aplicar"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-descartar-viaje">3.1.- Descartar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Sockets chanels emmit:</p>
<p>'taxi/viaje-descartar'</p>

<span id="example-requests-POSTapi-taxis-descartar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/descartar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_taxi_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/descartar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_taxi_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-descartar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Descartado&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-descartar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-descartar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-descartar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-descartar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-descartar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-descartar-viaje" data-method="POST"
      data-path="api/taxis/descartar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-descartar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-descartar-viaje"
                    onclick="tryItOut('POSTapi-taxis-descartar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-descartar-viaje"
                    onclick="cancelTryOut('POSTapi-taxis-descartar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-descartar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/descartar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-descartar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-descartar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_taxi_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_taxi_id"                data-endpoint="POSTapi-taxis-descartar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-recoger-cliente">6.- recoger cliente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-recojer'</p>

<span id="example-requests-POSTapi-taxis-recoger-cliente">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/recoger-cliente" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/recoger-cliente"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-recoger-cliente">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;recojer&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-recoger-cliente" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-recoger-cliente"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-recoger-cliente"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-recoger-cliente" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-recoger-cliente">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-recoger-cliente" data-method="POST"
      data-path="api/taxis/recoger-cliente"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-recoger-cliente', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-recoger-cliente"
                    onclick="tryItOut('POSTapi-taxis-recoger-cliente');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-recoger-cliente"
                    onclick="cancelTryOut('POSTapi-taxis-recoger-cliente');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-recoger-cliente"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/recoger-cliente</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-recoger-cliente"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-recoger-cliente"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-taxis-recoger-cliente"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-cancelar-viaje">7.5.- cancelar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-cancelar'</p>

<span id="example-requests-POSTapi-taxis-cancelar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/cancelar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586,
    \"motivo_cancelacion\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/cancelar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586,
    "motivo_cancelacion": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-cancelar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;cancelado&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-cancelar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-cancelar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-cancelar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-cancelar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-cancelar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-cancelar-viaje" data-method="POST"
      data-path="api/taxis/cancelar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-cancelar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-cancelar-viaje"
                    onclick="tryItOut('POSTapi-taxis-cancelar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-cancelar-viaje"
                    onclick="cancelTryOut('POSTapi-taxis-cancelar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-cancelar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/cancelar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-cancelar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-cancelar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-taxis-cancelar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>motivo_cancelacion</code></b>&nbsp;&nbsp;
<small>text</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="motivo_cancelacion"                data-endpoint="POSTapi-taxis-cancelar-viaje"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-acaba-de-llegar">7.- acaba de llegar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-llegar'</p>

<span id="example-requests-POSTapi-taxis-acaba-de-llegar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/acaba-de-llegar" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/acaba-de-llegar"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-acaba-de-llegar">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;llegar&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-acaba-de-llegar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-acaba-de-llegar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-acaba-de-llegar"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-acaba-de-llegar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-acaba-de-llegar">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-acaba-de-llegar" data-method="POST"
      data-path="api/taxis/acaba-de-llegar"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-acaba-de-llegar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-acaba-de-llegar"
                    onclick="tryItOut('POSTapi-taxis-acaba-de-llegar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-acaba-de-llegar"
                    onclick="cancelTryOut('POSTapi-taxis-acaba-de-llegar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-acaba-de-llegar"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/acaba-de-llegar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-acaba-de-llegar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-acaba-de-llegar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-taxis-acaba-de-llegar"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-iniciar-viaje">8.- iniciar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-iniciar'</p>

<span id="example-requests-POSTapi-taxis-iniciar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/iniciar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/iniciar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-iniciar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;llegar&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-iniciar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-iniciar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-iniciar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-iniciar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-iniciar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-iniciar-viaje" data-method="POST"
      data-path="api/taxis/iniciar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-iniciar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-iniciar-viaje"
                    onclick="tryItOut('POSTapi-taxis-iniciar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-iniciar-viaje"
                    onclick="cancelTryOut('POSTapi-taxis-iniciar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-iniciar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/iniciar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-iniciar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-iniciar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-taxis-iniciar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-finalizar-viaje">9.- finalizar viaje</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Socket chanels emmit:</p>
<p>'cliente/viaje-finalizar'</p>

<span id="example-requests-POSTapi-taxis-finalizar-viaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/finalizar-viaje" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/finalizar-viaje"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-finalizar-viaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;lugar_origen&quot;: &quot;Avenida america&quot;,
    &quot;lugar_destino&quot;: &quot;Avenida america&quot;,
    &quot;origen_latitude&quot;: -17.398691,
    &quot;origen_longitude&quot;: -66.163545,
    &quot;destino_latitude&quot;: -17.400398,
    &quot;destino_longitude&quot;: -66.140818,
    &quot;tarifa_ideal&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: &quot;20.00&quot;,
    &quot;tarifa_propuesta_taxi&quot;: &quot;20.00&quot;,
    &quot;tarifa_final&quot;: &quot;10.00&quot;,
    &quot;comentario&quot;: &quot;tiene parrilla para un mueble&quot;,
    &quot;fecha_registro&quot;: &quot;2024-03-27&quot;,
    &quot;hora_registro&quot;: &quot;17:18:00&quot;,
    &quot;fecha_aceptado&quot;: null,
    &quot;hora_aceptado&quot;: null,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;finalizado&quot;,
    &quot;tipo_pago&quot;: null,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;juanita la huerfanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: &quot;fdsfdsfdsfds&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:03.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;pepe&quot;,
        &quot;apellido&quot;: &quot;matias&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: &quot;2024-08-18&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 0,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-16T15:52:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-16T15:52:42.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;pepe matias&quot;,
        &quot;foto&quot;: null,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-finalizar-viaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-finalizar-viaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-finalizar-viaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-finalizar-viaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-finalizar-viaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-finalizar-viaje" data-method="POST"
      data-path="api/taxis/finalizar-viaje"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-finalizar-viaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-finalizar-viaje"
                    onclick="tryItOut('POSTapi-taxis-finalizar-viaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-finalizar-viaje"
                    onclick="cancelTryOut('POSTapi-taxis-finalizar-viaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-finalizar-viaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/finalizar-viaje</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-finalizar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-finalizar-viaje"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-taxis-finalizar-viaje"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-POSTapi-taxis-update-position--id-">Update position</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-taxis-update-position--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis/update-position/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": 11613.31890586,
    \"longitude\": 11613.31890586,
    \"viaje_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/update-position/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": 11613.31890586,
    "longitude": 11613.31890586,
    "viaje_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis-update-position--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Guardado&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis-update-position--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis-update-position--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis-update-position--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis-update-position--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis-update-position--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis-update-position--id-" data-method="POST"
      data-path="api/taxis/update-position/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis-update-position--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis-update-position--id-"
                    onclick="tryItOut('POSTapi-taxis-update-position--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis-update-position--id-"
                    onclick="cancelTryOut('POSTapi-taxis-update-position--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis-update-position--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis/update-position/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis-update-position--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis-update-position--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-taxis-update-position--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update position. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="POSTapi-taxis-update-position--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="POSTapi-taxis-update-position--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>viaje_id</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="viaje_id"                data-endpoint="POSTapi-taxis-update-position--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>id del viaje Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="apptaxi-GETapi-taxis-my-receipts--id-">Mis comprobantes</h2>

<p>
</p>



<span id="example-requests-GETapi-taxis-my-receipts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/taxis/my-receipts/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fecha_registro_start\": \"consequatur\",
    \"fecha_registro_end\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/my-receipts/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fecha_registro_start": "consequatur",
    "fecha_registro_end": "consequatur"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-taxis-my-receipts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
{
  &quot;data&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;comprobante_src&quot;: &quot;comprobante_1250912145622.jpg&quot;,
      &quot;comentario&quot;: &quot;This is the comment&quot;,
      &quot;fecha_registro&quot;: &quot;2025-09-12&quot;,
      &quot;hora_registro&quot;: &quot;14:56:22&quot;,
      &quot;fecha_verificacion&quot;: &quot;2025-09-12&quot;,
      &quot;hora_verificacion&quot;: &quot;15:51:11&quot;,
      &quot;verificado&quot;: true,
      &quot;monto&quot;: &quot;13.00&quot;,
      &quot;taxi_id&quot;: 1,
      &quot;user_id&quot;: 1,
      &quot;created_at&quot;: &quot;2025-09-12T18:56:22.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2025-09-12T19:51:11.000000Z&quot;,
      &quot;deleted_at&quot;: null,
      &quot;comprobante&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/comprobante_1250912145622.jpg&quot;,
      &quot;comprobante_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/comprobante_1250912145622.jpg&quot;,
      &quot;comprobante_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/comprobante_1250912145622.jpg&quot;,
      &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Pedro&quot;,
        &quot;apellido&quot;: &quot;Guti&eacute;rrez&quot;,
        &quot;celular&quot;: &quot;70123456&quot;,
        &quot;ci&quot;: &quot;12345678 LP&quot;,
        &quot;email&quot;: &quot;taxi.pruebas@example.com&quot;,
        &quot;fecha_nacimiento&quot;: &quot;1985-05-10&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 190.5,
        &quot;calificacion&quot;: 5,
        &quot;player_id&quot;: &quot;PLAYER_ID_TAXI&quot;,
        &quot;latitude&quot;: &quot;-16.500000&quot;,
        &quot;longitude&quot;: &quot;-68.150000&quot;,
        &quot;car_color&quot;: &quot;Rojo&quot;,
        &quot;numero_licencia&quot;: &quot;LIC123456&quot;,
        &quot;modelo_auto&quot;: &quot;Toyota Corolla&quot;,
        &quot;numero_placa&quot;: &quot;1234ABC&quot;,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_licencia_reverso&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_soat&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_foto_vehiculo&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_ruat&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;estado_filiacion&quot;: 3,
        &quot;empresa_id&quot;: null,
        &quot;porcentaje_comision&quot;: &quot;0.8&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;Pedro Guti&eacute;rrez&quot;,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null,
        &quot;licencia_amberso&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;licencia_reverso&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;soat&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;soat_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;soat_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;foto_vehiculo&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;ruat&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;ruat_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;ruat_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;empresa&quot;: null,
        &quot;totalViajes&quot;: 0,
        &quot;totalComision&quot;: 0,
        &quot;totalComisionEmpresa&quot;: 0,
        &quot;count_total_arboles&quot;: 0,
        &quot;count_total_mes_arboles&quot;: 0
      },
      &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;admin&quot;,
        &quot;email&quot;: &quot;admin@admin.com&quot;,
        &quot;password&quot;: &quot;$2y$12$VBgG5rd9MwnwRqRLb1//Q.xeK3moaxcD6tJFnU.FQlyULlpoT8nRW&quot;
      }
    },
    {
      &quot;id&quot;: 2,
      &quot;comprobante_src&quot;: &quot;comprobante_2250912152419.jpg&quot;,
      &quot;comentario&quot;: &quot;This is the comment&quot;,
      &quot;fecha_registro&quot;: &quot;2025-09-12&quot;,
      &quot;hora_registro&quot;: &quot;15:24:19&quot;,
      &quot;fecha_verificacion&quot;: null,
      &quot;hora_verificacion&quot;: null,
      &quot;verificado&quot;: false,
      &quot;monto&quot;: &quot;90.00&quot;,
      &quot;taxi_id&quot;: 1,
      &quot;user_id&quot;: null,
      &quot;created_at&quot;: &quot;2025-09-12T19:24:19.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2025-09-12T19:24:19.000000Z&quot;,
      &quot;deleted_at&quot;: null,
      &quot;comprobante&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/comprobante_2250912152419.jpg&quot;,
      &quot;comprobante_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/comprobante_2250912152419.jpg&quot;,
      &quot;comprobante_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/comprobante_2250912152419.jpg&quot;,
      &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Pedro&quot;,
        &quot;apellido&quot;: &quot;Guti&eacute;rrez&quot;,
        &quot;celular&quot;: &quot;70123456&quot;,
        &quot;ci&quot;: &quot;12345678 LP&quot;,
        &quot;email&quot;: &quot;taxi.pruebas@example.com&quot;,
        &quot;fecha_nacimiento&quot;: &quot;1985-05-10&quot;,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: 190.5,
        &quot;calificacion&quot;: 5,
        &quot;player_id&quot;: &quot;PLAYER_ID_TAXI&quot;,
        &quot;latitude&quot;: &quot;-16.500000&quot;,
        &quot;longitude&quot;: &quot;-68.150000&quot;,
        &quot;car_color&quot;: &quot;Rojo&quot;,
        &quot;numero_licencia&quot;: &quot;LIC123456&quot;,
        &quot;modelo_auto&quot;: &quot;Toyota Corolla&quot;,
        &quot;numero_placa&quot;: &quot;1234ABC&quot;,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_licencia_reverso&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_soat&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_foto_vehiculo&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;src_ruat&quot;: &quot;https://via.placeholder.com/150&quot;,
        &quot;estado_filiacion&quot;: 3,
        &quot;empresa_id&quot;: null,
        &quot;porcentaje_comision&quot;: &quot;0.8&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;Pedro Guti&eacute;rrez&quot;,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null,
        &quot;licencia_amberso&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;licencia_reverso&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;soat&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;soat_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;soat_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;foto_vehiculo&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;ruat&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/https://via.placeholder.com/150&quot;,
        &quot;ruat_thumbnail&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail/https://via.placeholder.com/150&quot;,
        &quot;ruat_thumbnail_sm&quot;: &quot;http://api.jetgo.local:8080/storage/uploads/thumbnail-small/https://via.placeholder.com/150&quot;,
        &quot;empresa&quot;: null,
        &quot;totalViajes&quot;: 0,
        &quot;totalComision&quot;: 0,
        &quot;totalComisionEmpresa&quot;: 0,
        &quot;count_total_arboles&quot;: 0,
        &quot;count_total_mes_arboles&quot;: 0
      },
      &quot;user&quot;: null
    }
  ],
  &quot;links&quot;: {
    &quot;first&quot;: &quot;http://api.jetgo.local:8080/api/taxis/my-receipts/1?page=1&quot;,
    &quot;last&quot;: &quot;http://api.jetgo.local:8080/api/taxis/my-receipts/1?page=1&quot;,
    &quot;prev&quot;: null,
    &quot;next&quot;: null
  },
  &quot;meta&quot;: {
    &quot;current_page&quot;: 1,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 1,
    &quot;links&quot;: [
      {
        &quot;url&quot;: null,
        &quot;label&quot;: &quot;&amp;laquo; Anterior&quot;,
        &quot;active&quot;: false
      },
      {
        &quot;url&quot;: &quot;http://api.jetgo.local:8080/api/taxis/my-receipts/1?page=1&quot;,
        &quot;label&quot;: &quot;1&quot;,
        &quot;active&quot;: true
      },
      {
        &quot;url&quot;: null,
        &quot;label&quot;: &quot;Siguiente &amp;raquo;&quot;,
        &quot;active&quot;: false
      }
    ],
    &quot;path&quot;: &quot;http://api.jetgo.local:8080/api/taxis/my-receipts/1&quot;,
    &quot;per_page&quot;: 20,
    &quot;to&quot;: 2,
    &quot;total&quot;: 2
  }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-taxis-my-receipts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-taxis-my-receipts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-taxis-my-receipts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-taxis-my-receipts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-taxis-my-receipts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-taxis-my-receipts--id-" data-method="GET"
      data-path="api/taxis/my-receipts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-taxis-my-receipts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-taxis-my-receipts--id-"
                    onclick="tryItOut('GETapi-taxis-my-receipts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-taxis-my-receipts--id-"
                    onclick="cancelTryOut('GETapi-taxis-my-receipts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-taxis-my-receipts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/taxis/my-receipts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-taxis-my-receipts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-taxis-my-receipts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-taxis-my-receipts--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>id taxi Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fecha_registro_start</code></b>&nbsp;&nbsp;
<small>data</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fecha_registro_start"                data-endpoint="GETapi-taxis-my-receipts--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fecha_registro_end</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fecha_registro_end"                data-endpoint="GETapi-taxis-my-receipts--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                <h1 id="app-version">App version</h1>

    

                                <h2 id="app-version-GETapi-versions">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-versions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versions">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;current_page&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;plataforma&quot;: &quot;android&quot;,
            &quot;version&quot;: &quot;1.0.0&quot;,
            &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;first_page_url&quot;: &quot;http://api.indrive.local/api/v1/versions?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 1,
    &quot;last_page_url&quot;: &quot;http://api.indrive.local/api/v1/versions?page=1&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;active&quot;: false,
            &quot;under_review&quot;: false,
        },
        {
            &quot;url&quot;: &quot;http://api.indrive.local/api/v1/versions?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;active&quot;: true,
            &quot;under_review&quot;: false,
        },
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;active&quot;: false,
            &quot;under_review&quot;: false,
        }
    ],
    &quot;next_page_url&quot;: null,
    &quot;path&quot;: &quot;http://api.indrive.local/api/v1/versions&quot;,
    &quot;per_page&quot;: 5,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 1,
    &quot;total&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-versions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versions" data-method="GET"
      data-path="api/versions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versions"
                    onclick="tryItOut('GETapi-versions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versions"
                    onclick="cancelTryOut('GETapi-versions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-versions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-versions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="app-version-POSTapi-versions">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>

<span id="example-requests-POSTapi-versions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/versions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"plataforma\": \"consequatur\",
    \"version\": \"consequatur\",
    \"under_review\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "plataforma": "consequatur",
    "version": "consequatur",
    "under_review": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-versions">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;under_review&quot;: true,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-versions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-versions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-versions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-versions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-versions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-versions" data-method="POST"
      data-path="api/versions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-versions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-versions"
                    onclick="tryItOut('POSTapi-versions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-versions"
                    onclick="cancelTryOut('POSTapi-versions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-versions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/versions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-versions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-versions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="app-version-GETapi-versions--id-">Show</h2>

<p>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-versions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 17
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;under_review&quot;: true,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1,
    &quot;under_review&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-versions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versions--id-" data-method="GET"
      data-path="api/versions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versions--id-"
                    onclick="tryItOut('GETapi-versions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versions--id-"
                    onclick="cancelTryOut('GETapi-versions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the version. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-versions--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="app-version-PUTapi-versions--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-versions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/versions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-versions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;id&quot;: 1,
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;under_review&quot;: true,
    &quot;version&quot;: &quot;1.1.0&quot;,
    &quot;under_review&quot;: &quot;1.1.0&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:47:49.000000Z&quot;,
    &quot;deleted_at&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-versions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-versions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-versions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-versions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-versions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-versions--id-" data-method="PUT"
      data-path="api/versions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-versions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-versions--id-"
                    onclick="tryItOut('PUTapi-versions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-versions--id-"
                    onclick="cancelTryOut('PUTapi-versions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-versions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/versions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-versions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the version. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="app-version-DELETEapi-versions--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-versions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/versions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 17
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-versions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;message&quot;: &quot;Eliminado&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-versions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-versions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-versions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-versions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-versions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-versions--id-" data-method="DELETE"
      data-path="api/versions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-versions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-versions--id-"
                    onclick="tryItOut('DELETEapi-versions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-versions--id-"
                    onclick="cancelTryOut('DELETEapi-versions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-versions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/versions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-versions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the version. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-versions--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="app-version-PATCHapi-versions--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-versions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/versions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 17
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-versions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;message&quot;: &quot;Restaurado&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-versions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-versions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-versions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-versions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-versions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-versions--id-" data-method="PATCH"
      data-path="api/versions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-versions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-versions--id-"
                    onclick="tryItOut('PATCHapi-versions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-versions--id-"
                    onclick="cancelTryOut('PATCHapi-versions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-versions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/versions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-versions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PATCHapi-versions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the version. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-versions--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                <h1 id="askquestions">AskQuestions</h1>

    

                                <h2 id="askquestions-GETapi-ask-questions">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-ask-questions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/ask-questions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ask-questions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-ask-questions">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 4,
            &quot;src_qr&quot;: &quot;qr_4240917172629.jpg&quot;,
            &quot;fecha&quot;: &quot;2024-09-17&quot;,
            &quot;hora&quot;: &quot;17:26:29&quot;,
            &quot;user_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-09-17T21:26:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-09-17T21:26:29.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;src_qr&quot;: &quot;qr_3240917172308.jpg&quot;,
            &quot;fecha&quot;: &quot;2024-09-17&quot;,
            &quot;hora&quot;: &quot;17:23:08&quot;,
            &quot;user_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-09-17T21:23:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-09-17T21:23:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 1,
            &quot;src_qr&quot;: &quot;qr_1240917173032.jpg&quot;,
            &quot;fecha&quot;: &quot;2024-09-17&quot;,
            &quot;hora&quot;: &quot;17:20:37&quot;,
            &quot;user_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-09-17T21:20:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-09-17T21:32:25.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs?page=1&quot;,
        &quot;last&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 3,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-ask-questions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-ask-questions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ask-questions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-ask-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ask-questions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-ask-questions" data-method="GET"
      data-path="api/ask-questions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-ask-questions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-ask-questions"
                    onclick="tryItOut('GETapi-ask-questions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-ask-questions"
                    onclick="cancelTryOut('GETapi-ask-questions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-ask-questions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/ask-questions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-ask-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-ask-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="askquestions-POSTapi-ask-questions">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store new item</p>

<span id="example-requests-POSTapi-ask-questions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/ask-questions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"src_qr\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ask-questions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "src_qr": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-ask-questions">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;question&quot;: &quot;this is the cuestion&quot;,
    &quot;answer&quot;: &quot;this is the answer&quot;,
    &quot;updated_at&quot;: &quot;2025-09-23T16:28:32.000000Z&quot;,
    &quot;created_at&quot;: &quot;2025-09-23T16:28:32.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-ask-questions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-ask-questions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ask-questions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-ask-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ask-questions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-ask-questions" data-method="POST"
      data-path="api/ask-questions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-ask-questions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-ask-questions"
                    onclick="tryItOut('POSTapi-ask-questions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-ask-questions"
                    onclick="cancelTryOut('POSTapi-ask-questions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-ask-questions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/ask-questions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-ask-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-ask-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="askquestions-GETapi-ask-questions--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-ask-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/ask-questions/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ask-questions/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-ask-questions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;question&quot;: &quot;this is the cuestion zzz&quot;,
    &quot;answer&quot;: &quot;this is the answer&quot;,
    &quot;created_at&quot;: &quot;2025-09-23T16:28:49.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-09-23T16:28:50.000000Z&quot;,
    &quot;deleted_at&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\AskQuestion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-ask-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-ask-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ask-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-ask-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ask-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-ask-questions--id-" data-method="GET"
      data-path="api/ask-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-ask-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-ask-questions--id-"
                    onclick="tryItOut('GETapi-ask-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-ask-questions--id-"
                    onclick="cancelTryOut('GETapi-ask-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-ask-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/ask-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-ask-questions--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="askquestions-PUTapi-ask-questions--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-ask-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/ask-questions/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"src_qr\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ask-questions/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "src_qr": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-ask-questions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;question&quot;: &quot;this is the cuestion zzz&quot;,
    &quot;answer&quot;: &quot;this is the answer&quot;,
    &quot;created_at&quot;: &quot;2025-09-23T16:28:49.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-09-23T16:28:50.000000Z&quot;,
    &quot;deleted_at&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-ask-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-ask-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-ask-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-ask-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-ask-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-ask-questions--id-" data-method="PUT"
      data-path="api/ask-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-ask-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-ask-questions--id-"
                    onclick="tryItOut('PUTapi-ask-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-ask-questions--id-"
                    onclick="cancelTryOut('PUTapi-ask-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-ask-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/ask-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-ask-questions--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="askquestions-DELETEapi-ask-questions--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-ask-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/ask-questions/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ask-questions/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-ask-questions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\AskQuestion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-ask-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-ask-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-ask-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-ask-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-ask-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-ask-questions--id-" data-method="DELETE"
      data-path="api/ask-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-ask-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-ask-questions--id-"
                    onclick="tryItOut('DELETEapi-ask-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-ask-questions--id-"
                    onclick="cancelTryOut('DELETEapi-ask-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-ask-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/ask-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-ask-questions--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="askquestions-PATCHapi-ask-questions--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-ask-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/ask-questions/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ask-questions/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-ask-questions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\AskQuestion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-ask-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-ask-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-ask-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-ask-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-ask-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-ask-questions--id-" data-method="PATCH"
      data-path="api/ask-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-ask-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-ask-questions--id-"
                    onclick="tryItOut('PATCHapi-ask-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-ask-questions--id-"
                    onclick="cancelTryOut('PATCHapi-ask-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-ask-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/ask-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-ask-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-ask-questions--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="auth">Auth</h1>

    

                                <h2 id="auth-POSTapi-auth-send-code">Send code verification</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-send-code">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/send-code" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/send-code"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-send-code">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;codigo&quot;: 93008,
    &quot;celular&quot;: &quot;75977665&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:19:23.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:19:23.000000Z&quot;,
    &quot;id&quot;: 2
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-send-code" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-send-code"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-send-code"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-send-code" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-send-code">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-send-code" data-method="POST"
      data-path="api/auth/send-code"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-send-code', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-send-code"
                    onclick="tryItOut('POSTapi-auth-send-code');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-send-code"
                    onclick="cancelTryOut('POSTapi-auth-send-code');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-send-code"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/send-code</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-send-code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-send-code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="auth-POSTapi-auth-cliente">Login cliente</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-cliente">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/cliente" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/cliente"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-cliente">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: null,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: null,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null
    },
    &quot;access_token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMWMyMGZjNTkwNGQzMDFmY2Y5MzFkY2NkNzc3NmFkNGU0MWEzMDU5M2M1MWVjMmEwODcyMGZjOTNmYzllNTBkMjc1NWEzNjBkY2U2MDc3MjciLCJpYXQiOjE3MDE2OTI1MjEuNjUzNzAxLCJuYmYiOjE3MDE2OTI1MjEuNjUzNzIyLCJleHAiOjE3MTc1MDM3MjEuNjE4NDI5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.bLEYpb7BiaHdc07z2Bg7EpMVm4EtL9wf_Hsmomhw5VkQmu6Qs31hfaVM4_3wExsh8d8aaOTWY15jCtcsUHzQzDmw5GGZ3c3K8W6sjvjoMYbIAmYq3qU_OU9FQvG16dMG7d-lnXOQ8e2vjPfcRth5KZxJHgYnW2aPl75DDmm1DlbX1lINraR68eBVW5OEqDZ5oo-4swQX_LlN0KIj10ub2aMKYkAbc9EZhc5yIR7OLJdaUmfZ0v3_etXrSLmXXFf_hkc7DqYS_EexGL10Ege3O3A6zdMWwwthUlM45eTZidSeGKQZ2MiH3yBV2BMJaEyHDsxe4mmoEW-vuar64bLll0TGD1cpZYGpYyeUnhz80JZRENrRihEwaJLPFCFsVvEmuzv-cFS6nbCfQo07WZo6qjZSWK-G87Hi0Y6oS3NCY5GjLNpZVweHYUj-P8j2UMPQniJLdHYVOQvilXBJJvAgeEzbNl3jgnK_RpvW0oRriYh6kMG9cuh3gvEorpM6zbStLxBDVo2T6XcyoNDaPb0lubJxz3MoGQ4wkaFc_RC6poMBc6nwjePJen0U3Bawyv2UdwxalAOnOFFcFoFd4pjfLUz7OmNvz_BYD9UwX3GHkzcj4LlchaSYdt30mlbcm7m36aWxixyiHXpU_SwZh2KBa32gXXoVpCsLF4x33dB0e6A&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-cliente" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-cliente"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-cliente"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-cliente" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-cliente">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-cliente" data-method="POST"
      data-path="api/auth/cliente"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-cliente', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-cliente"
                    onclick="tryItOut('POSTapi-auth-cliente');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-cliente"
                    onclick="cancelTryOut('POSTapi-auth-cliente');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-cliente"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/cliente</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-cliente"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-cliente"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="auth-POSTapi-auth-taxi">Login taxi</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-taxi">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/taxi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/taxi"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-taxi">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: null,
        &quot;apellido&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: null,
        &quot;fecha_nacimiento&quot;: null,
        &quot;src_foto&quot;: null,
        &quot;credito_disponible&quot;: null,
        &quot;calificacion&quot;: null,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: null,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null
    },
    &quot;access_token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZTYyNDA0MGVlMTRmYWRhOTVmZWVhYjc2Y2JmMTkzZDliYjVlNTdkNjBjNjYwN2ZiMDhkOTQwODQ4OTQ4NzRjYjNhZGFlNjU0OTMwODg5YTYiLCJpYXQiOjE3MDE5NzE3MzMuODkyNTMsIm5iZiI6MTcwMTk3MTczMy44OTI1NDIsImV4cCI6MTcxNzc4MjkzMy44Nzg2ODQsInN1YiI6IjIiLCJzY29wZXMiOltdfQ.ibSRb-rVEJu_Ukm256BawRt_TdS6WbmnDnL9atZ9k326wIMNuABOk0ak1qF3NfOCoDXkwKiJfG1_kPNLgbbbimwMDjuM6oKMkBTFs7Rd3bC7ntkJOuCO6WasdXOVYFzlBAtSJcxzaqc_EK-Tskey6Zepab5lg4jqQHQlSniU633ZE-Ym_FLiWC1MUqMXr9AlzRo9gG1EZ9hDMR2JEnAtjmicH35MDd6Jy8ybf4TSPnwF1r2LD2edf51wElQ0J8ZzG_wTIjz4y_BiPMLroK_VhZNEJb2TSFjt1ZhbhtemKojFnoWjKInFZJ7i6_i8X-WcFXKg_2dT9ZuWSVqg5WDJBM2eHtraNjhOtXuXRZgDWzsyQM2wzC2TFFHqHpVM5n_OZ064Yccegb6QE4-5OSZZbiC6woJN81KbnhQS8cZvQKPa5MmiExLqj8Mya7zP9YDaNHR6rR-BNR33h3BaoX1zKPph64VytJKJelPgOBeToWV8hG0VOmBa77M9FXjbchjLXVB5ouViEH2x6I2hLLk7p9H8cxeqmo9j5I8o9arh8Xt9RYoEyi8m51StyDA9FA8K4x0VpbaLHKovtkthmRP-DHuMxca7e9BPnMM6pfjuU6_2sEk8H77geaaU5UOnNLitLF5ugVo7OJPKkY_Ov-2_3rfAFc1C6EqqBytHQcwHxy8&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-taxi" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-taxi"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-taxi"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-taxi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-taxi">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-taxi" data-method="POST"
      data-path="api/auth/taxi"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-taxi', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-taxi"
                    onclick="tryItOut('POSTapi-auth-taxi');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-taxi"
                    onclick="cancelTryOut('POSTapi-auth-taxi');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-taxi"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/taxi</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-taxi"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-taxi"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="auth-POSTapi-auth-administrador">Login administrador</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-administrador">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/administrador" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/administrador"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-administrador">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
{
    &quot;administrador&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;Juanita la huerfanita x2&quot;,
        &quot;src_foto&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;email&quot;: &quot;juanita@lahuerfanita.com&quot;
    },
    &quot;access_token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODcyZGZlNzg0MmVkNWM3MjJhYTU3YmEwMTc3MTA3MDY3Zjc1MzkzNDllNzE0MGMzY2E0NzEwMDZhZmExMzBmNDJhY2EyZTIzNWI1YWU3ZGQiLCJpYXQiOjE3MDE5ODE4NzEuMjkyNDUxLCJuYmYiOjE3MDE5ODE4NzEuMjkyNDYyLCJleHAiOjE3MTc3OTMwNzEuMjc4NzUyLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.gy0_ecnmNcaZmTZupLWS_sGmg6LVtNlYgVimCovy1DgCsFT8BeC6K0kzqMyDgMlZrzMRhtzVhezs_qpiGgJZAbVbC1nncfd88aWW6UX19OQyKqfft7XWFD2BE1uvAHyq6hh2hN2TtZdxLkxZIuYDB6LHhloTnK6Vb303Q7SVsnIlIU6B5BWEumjAsq3zE3nDNOBay2_LyE8wzCoZGk8uYV9FVxbW6OuYIPhBpXDhQ0ZUZf0_ZAStAQc8hkyrIEbuoFT94A6HyHRS74SLgFmXHUCxhPEqjJFDJ8QaIyX4ypwqhEiiwZvT46mLPp4-1gsePAxCFTWxsf4EjOA7yZEWzgm4Xrd-OIGXYYdRxhLYcJK3aIy9m-D0T4AO9hfh46fvQOUtH-xKa9Naoi6dod1wChLJ5HjDoaZC_i4yRGpynoFbnBIdO8js4RGuXlyK7NJL_GvDJyL2pz3tCDORi6mBXHSN2qYvYcx_DdXHGNR7vgEBg6OP5tjmYIgmbq7Nn9ShSS9rYDuRzqs3Ox4tE1DrEckI2HzJ00CKVzIe2jy_3Ng0T2KtTh32z7tbJObWvzYHlnwTg0uLsUnsjsuQeI6P8-5cRx0YRCGBkpRyudtXK18wfFp3e5aC1X9BZXbrtlx4OI93ZekPP1zSlrMVTFGErPFvEJIZMeYMLsl8QfvyiQA&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-administrador" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-administrador"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-administrador"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-administrador" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-administrador">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-administrador" data-method="POST"
      data-path="api/auth/administrador"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-administrador', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-administrador"
                    onclick="tryItOut('POSTapi-auth-administrador');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-administrador"
                    onclick="cancelTryOut('POSTapi-auth-administrador');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-administrador"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/administrador</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-administrador"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-administrador"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                <h1 id="brand">Brand</h1>

    

                                <h2 id="brand-GETapi-brands">List</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-brands">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/brands" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-brands">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;nombre&quot;: &quot;leopoldo&quot;,
            &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
            &quot;celular&quot;: &quot;78978978&quot;,
            &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
            &quot;fecha_nacimiento&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;8899900&quot;,
            &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
            &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: null,
            &quot;src_licencia_reverso&quot;: null,
            &quot;src_soat&quot;: null,
            &quot;src_foto_vehiculo&quot;: null,
            &quot;src_ruat&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
            &quot;foto&quot;: null,
            &quot;foto_thumbnail&quot;: null,
            &quot;foto_thumbnail_sm&quot;: null,
            &quot;licencia_amberso&quot;: null,
            &quot;licencia_amberso_thumbnail&quot;: null,
            &quot;licencia_amberso_thumbnail_sm&quot;: null,
            &quot;licencia_reverso&quot;: null,
            &quot;licencia_reverso_thumbnail&quot;: null,
            &quot;licencia_reverso_thumbnail_sm&quot;: null,
            &quot;soat&quot;: null,
            &quot;soat_thumbnail&quot;: null,
            &quot;soat_thumbnail_sm&quot;: null,
            &quot;foto_vehiculo&quot;: null,
            &quot;foto_vehiculo_thumbnail&quot;: null,
            &quot;foto_vehiculo_thumbnail_sm&quot;: null,
            &quot;ruat&quot;: null,
            &quot;ruat_thumbnail&quot;: null,
            &quot;ruat_thumbnail_sm&quot;: null
            &quot;empresa_id&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;nombre&quot;: &quot;malvina maria&quot;,
            &quot;apellido&quot;: &quot;ramirez odoria&quot;,
            &quot;celular&quot;: &quot;6786786&quot;,
            &quot;email&quot;: &quot;fdsf@sfds.com&quot;,
            &quot;fecha_nacimiento&quot;: &quot;1969-12-25&quot;,
            &quot;src_foto&quot;: &quot;taxi_foto_7231220175252.jpg&quot;,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;543543&quot;,
            &quot;modelo_auto&quot;: &quot;53454gfdgfd&quot;,
            &quot;numero_placa&quot;: &quot;gfdg3454&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;src_soat&quot;: &quot;taxi_soat_7231220175350.jpg&quot;,
            &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;src_ruat&quot;: &quot;taxi_ruat_7231220175430.jpg&quot;,
            &quot;empresa_id&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;malvina maria ramirez odoria&quot;,
            &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_7231220175252.jpg&quot;,
            &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_7231220175350.jpg&quot;,
            &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_7231220175430.jpg&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/taxis&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 5,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-brands" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-brands"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-brands"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-brands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-brands">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-brands" data-method="GET"
      data-path="api/brands"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-brands', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-brands"
                    onclick="tryItOut('GETapi-brands');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-brands"
                    onclick="cancelTryOut('GETapi-brands');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-brands"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/brands</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fieldSearch</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fieldSearch"                data-endpoint="GETapi-brands"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-brands"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>apellido</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="apellido"                data-endpoint="GETapi-brands"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETapi-brands"
               value="qkunze@example.com"
               data-component="url">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>celular</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="celular"                data-endpoint="GETapi-brands"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="brand-GETapi-brands-all">List all</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-brands-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/brands/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-brands-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;nombre&quot;: &quot;leopoldo&quot;,
            &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
            &quot;celular&quot;: &quot;78978978&quot;,
            &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
            &quot;fecha_nacimiento&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;8899900&quot;,
            &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
            &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: null,
            &quot;src_licencia_reverso&quot;: null,
            &quot;src_soat&quot;: null,
            &quot;src_foto_vehiculo&quot;: null,
            &quot;src_ruat&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
            &quot;foto&quot;: null,
            &quot;foto_thumbnail&quot;: null,
            &quot;foto_thumbnail_sm&quot;: null,
            &quot;licencia_amberso&quot;: null,
            &quot;licencia_amberso_thumbnail&quot;: null,
            &quot;licencia_amberso_thumbnail_sm&quot;: null,
            &quot;licencia_reverso&quot;: null,
            &quot;licencia_reverso_thumbnail&quot;: null,
            &quot;licencia_reverso_thumbnail_sm&quot;: null,
            &quot;soat&quot;: null,
            &quot;soat_thumbnail&quot;: null,
            &quot;soat_thumbnail_sm&quot;: null,
            &quot;foto_vehiculo&quot;: null,
            &quot;foto_vehiculo_thumbnail&quot;: null,
            &quot;foto_vehiculo_thumbnail_sm&quot;: null,
            &quot;ruat&quot;: null,
            &quot;ruat_thumbnail&quot;: null,
            &quot;ruat_thumbnail_sm&quot;: null
            &quot;empresa_id&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;nombre&quot;: &quot;malvina maria&quot;,
            &quot;apellido&quot;: &quot;ramirez odoria&quot;,
            &quot;celular&quot;: &quot;6786786&quot;,
            &quot;email&quot;: &quot;fdsf@sfds.com&quot;,
            &quot;fecha_nacimiento&quot;: &quot;1969-12-25&quot;,
            &quot;src_foto&quot;: &quot;taxi_foto_7231220175252.jpg&quot;,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;543543&quot;,
            &quot;modelo_auto&quot;: &quot;53454gfdgfd&quot;,
            &quot;numero_placa&quot;: &quot;gfdg3454&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;src_soat&quot;: &quot;taxi_soat_7231220175350.jpg&quot;,
            &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;src_ruat&quot;: &quot;taxi_ruat_7231220175430.jpg&quot;,
            &quot;empresa_id&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;malvina maria ramirez odoria&quot;,
            &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_7231220175252.jpg&quot;,
            &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_7231220175350.jpg&quot;,
            &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_7231220175430.jpg&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/taxis&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 5,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-brands-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-brands-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-brands-all"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-brands-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-brands-all">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-brands-all" data-method="GET"
      data-path="api/brands/all"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-brands-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-brands-all"
                    onclick="tryItOut('GETapi-brands-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-brands-all"
                    onclick="cancelTryOut('GETapi-brands-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-brands-all"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/brands/all</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-brands-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-brands-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="brand-POSTapi-brands">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-POSTapi-brands">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/brands" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"nombre\": \"consequatur\",
    \"apellido\": \"consequatur\",
    \"fecha_nacimiento\": \"consequatur\",
    \"credito_disponible\": \"consequatur\",
    \"calificacion\": \"consequatur\",
    \"numero_licencia\": \"consequatur\",
    \"modelo_auto\": \"consequatur\",
    \"numero_placa\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\",
    \"src_licencia_amberso\": \"consequatur\",
    \"src_licencia_reverso\": \"consequatur\",
    \"src_soat\": \"consequatur\",
    \"src_foto_vehiculo\": \"consequatur\",
    \"src_ruat\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "nombre": "consequatur",
    "apellido": "consequatur",
    "fecha_nacimiento": "consequatur",
    "credito_disponible": "consequatur",
    "calificacion": "consequatur",
    "numero_licencia": "consequatur",
    "modelo_auto": "consequatur",
    "numero_placa": "consequatur",
    "tipo_vehiculo": "consequatur",
    "src_licencia_amberso": "consequatur",
    "src_licencia_reverso": "consequatur",
    "src_soat": "consequatur",
    "src_foto_vehiculo": "consequatur",
    "src_ruat": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-brands">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-brands" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-brands"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-brands"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-brands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-brands">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-brands" data-method="POST"
      data-path="api/brands"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-brands', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-brands"
                    onclick="tryItOut('POSTapi-brands');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-brands"
                    onclick="cancelTryOut('POSTapi-brands');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-brands"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/brands</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="brand-GETapi-brands--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-brands--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/brands/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-brands--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;count_total_arboles&quot;: 20,
    &quot;count_total_mes_arboles&quot;: 3,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Brand] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-brands--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-brands--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-brands--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-brands--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-brands--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-brands--id-" data-method="GET"
      data-path="api/brands/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-brands--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-brands--id-"
                    onclick="tryItOut('GETapi-brands--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-brands--id-"
                    onclick="cancelTryOut('GETapi-brands--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-brands--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/brands/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-brands--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="brand-PUTapi-brands--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-PUTapi-brands--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/brands/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"nombre\": \"consequatur\",
    \"apellido\": \"consequatur\",
    \"fecha_nacimiento\": \"consequatur\",
    \"credito_disponible\": \"consequatur\",
    \"calificacion\": \"consequatur\",
    \"numero_licencia\": \"consequatur\",
    \"modelo_auto\": \"consequatur\",
    \"numero_placa\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\",
    \"src_licencia_amberso\": \"consequatur\",
    \"src_licencia_reverso\": \"consequatur\",
    \"src_soat\": \"consequatur\",
    \"src_foto_vehiculo\": \"consequatur\",
    \"src_ruat\": \"consequatur\",
    \"empresa_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "nombre": "consequatur",
    "apellido": "consequatur",
    "fecha_nacimiento": "consequatur",
    "credito_disponible": "consequatur",
    "calificacion": "consequatur",
    "numero_licencia": "consequatur",
    "modelo_auto": "consequatur",
    "numero_placa": "consequatur",
    "tipo_vehiculo": "consequatur",
    "src_licencia_amberso": "consequatur",
    "src_licencia_reverso": "consequatur",
    "src_soat": "consequatur",
    "src_foto_vehiculo": "consequatur",
    "src_ruat": "consequatur",
    "empresa_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-brands--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;empresa_id&quot;: null,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-brands--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-brands--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-brands--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-brands--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-brands--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-brands--id-" data-method="PUT"
      data-path="api/brands/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-brands--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-brands--id-"
                    onclick="tryItOut('PUTapi-brands--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-brands--id-"
                    onclick="cancelTryOut('PUTapi-brands--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-brands--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/brands/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-brands--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="brand-DELETEapi-brands--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-DELETEapi-brands--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/brands/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-brands--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Brand] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-brands--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-brands--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-brands--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-brands--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-brands--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-brands--id-" data-method="DELETE"
      data-path="api/brands/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-brands--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-brands--id-"
                    onclick="tryItOut('DELETEapi-brands--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-brands--id-"
                    onclick="cancelTryOut('DELETEapi-brands--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-brands--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/brands/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-brands--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="brand-PATCHapi-brands--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-PATCHapi-brands--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/brands/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brands/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-brands--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Brand] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-brands--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-brands--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-brands--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-brands--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-brands--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-brands--id-" data-method="PATCH"
      data-path="api/brands/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-brands--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-brands--id-"
                    onclick="tryItOut('PATCHapi-brands--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-brands--id-"
                    onclick="cancelTryOut('PATCHapi-brands--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-brands--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/brands/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-brands--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-brands--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="carmodel">CarModel</h1>

    

                                <h2 id="carmodel-GETapi-car-models">List</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-car-models">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/car-models" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-car-models">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;nombre&quot;: &quot;leopoldo&quot;,
            &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
            &quot;celular&quot;: &quot;78978978&quot;,
            &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
            &quot;fecha_nacimiento&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;8899900&quot;,
            &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
            &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: null,
            &quot;src_licencia_reverso&quot;: null,
            &quot;src_soat&quot;: null,
            &quot;src_foto_vehiculo&quot;: null,
            &quot;src_ruat&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
            &quot;foto&quot;: null,
            &quot;foto_thumbnail&quot;: null,
            &quot;foto_thumbnail_sm&quot;: null,
            &quot;licencia_amberso&quot;: null,
            &quot;licencia_amberso_thumbnail&quot;: null,
            &quot;licencia_amberso_thumbnail_sm&quot;: null,
            &quot;licencia_reverso&quot;: null,
            &quot;licencia_reverso_thumbnail&quot;: null,
            &quot;licencia_reverso_thumbnail_sm&quot;: null,
            &quot;soat&quot;: null,
            &quot;soat_thumbnail&quot;: null,
            &quot;soat_thumbnail_sm&quot;: null,
            &quot;foto_vehiculo&quot;: null,
            &quot;foto_vehiculo_thumbnail&quot;: null,
            &quot;foto_vehiculo_thumbnail_sm&quot;: null,
            &quot;ruat&quot;: null,
            &quot;ruat_thumbnail&quot;: null,
            &quot;ruat_thumbnail_sm&quot;: null
            &quot;empresa_id&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;nombre&quot;: &quot;malvina maria&quot;,
            &quot;apellido&quot;: &quot;ramirez odoria&quot;,
            &quot;celular&quot;: &quot;6786786&quot;,
            &quot;email&quot;: &quot;fdsf@sfds.com&quot;,
            &quot;fecha_nacimiento&quot;: &quot;1969-12-25&quot;,
            &quot;src_foto&quot;: &quot;taxi_foto_7231220175252.jpg&quot;,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;543543&quot;,
            &quot;modelo_auto&quot;: &quot;53454gfdgfd&quot;,
            &quot;numero_placa&quot;: &quot;gfdg3454&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;src_soat&quot;: &quot;taxi_soat_7231220175350.jpg&quot;,
            &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;src_ruat&quot;: &quot;taxi_ruat_7231220175430.jpg&quot;,
            &quot;empresa_id&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;malvina maria ramirez odoria&quot;,
            &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_7231220175252.jpg&quot;,
            &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_7231220175350.jpg&quot;,
            &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_7231220175430.jpg&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/taxis&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 5,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-car-models" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-car-models"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-car-models"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-car-models" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-car-models">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-car-models" data-method="GET"
      data-path="api/car-models"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-car-models', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-car-models"
                    onclick="tryItOut('GETapi-car-models');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-car-models"
                    onclick="cancelTryOut('GETapi-car-models');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-car-models"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/car-models</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-car-models"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-car-models"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fieldSearch</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fieldSearch"                data-endpoint="GETapi-car-models"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-car-models"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>apellido</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="apellido"                data-endpoint="GETapi-car-models"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETapi-car-models"
               value="qkunze@example.com"
               data-component="url">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>celular</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="celular"                data-endpoint="GETapi-car-models"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="carmodel-GETapi-car-models-all">List all</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-car-models-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/car-models/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-car-models-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;nombre&quot;: &quot;leopoldo&quot;,
            &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
            &quot;celular&quot;: &quot;78978978&quot;,
            &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
            &quot;fecha_nacimiento&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;8899900&quot;,
            &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
            &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: null,
            &quot;src_licencia_reverso&quot;: null,
            &quot;src_soat&quot;: null,
            &quot;src_foto_vehiculo&quot;: null,
            &quot;src_ruat&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
            &quot;foto&quot;: null,
            &quot;foto_thumbnail&quot;: null,
            &quot;foto_thumbnail_sm&quot;: null,
            &quot;licencia_amberso&quot;: null,
            &quot;licencia_amberso_thumbnail&quot;: null,
            &quot;licencia_amberso_thumbnail_sm&quot;: null,
            &quot;licencia_reverso&quot;: null,
            &quot;licencia_reverso_thumbnail&quot;: null,
            &quot;licencia_reverso_thumbnail_sm&quot;: null,
            &quot;soat&quot;: null,
            &quot;soat_thumbnail&quot;: null,
            &quot;soat_thumbnail_sm&quot;: null,
            &quot;foto_vehiculo&quot;: null,
            &quot;foto_vehiculo_thumbnail&quot;: null,
            &quot;foto_vehiculo_thumbnail_sm&quot;: null,
            &quot;ruat&quot;: null,
            &quot;ruat_thumbnail&quot;: null,
            &quot;ruat_thumbnail_sm&quot;: null
            &quot;empresa_id&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;nombre&quot;: &quot;malvina maria&quot;,
            &quot;apellido&quot;: &quot;ramirez odoria&quot;,
            &quot;celular&quot;: &quot;6786786&quot;,
            &quot;email&quot;: &quot;fdsf@sfds.com&quot;,
            &quot;fecha_nacimiento&quot;: &quot;1969-12-25&quot;,
            &quot;src_foto&quot;: &quot;taxi_foto_7231220175252.jpg&quot;,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;543543&quot;,
            &quot;modelo_auto&quot;: &quot;53454gfdgfd&quot;,
            &quot;numero_placa&quot;: &quot;gfdg3454&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;src_soat&quot;: &quot;taxi_soat_7231220175350.jpg&quot;,
            &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;src_ruat&quot;: &quot;taxi_ruat_7231220175430.jpg&quot;,
            &quot;empresa_id&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;malvina maria ramirez odoria&quot;,
            &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_7231220175252.jpg&quot;,
            &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_7231220175350.jpg&quot;,
            &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_7231220175430.jpg&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/taxis&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 5,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-car-models-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-car-models-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-car-models-all"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-car-models-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-car-models-all">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-car-models-all" data-method="GET"
      data-path="api/car-models/all"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-car-models-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-car-models-all"
                    onclick="tryItOut('GETapi-car-models-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-car-models-all"
                    onclick="cancelTryOut('GETapi-car-models-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-car-models-all"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/car-models/all</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-car-models-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-car-models-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="carmodel-POSTapi-car-models">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-POSTapi-car-models">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/car-models" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"nombre\": \"consequatur\",
    \"apellido\": \"consequatur\",
    \"fecha_nacimiento\": \"consequatur\",
    \"credito_disponible\": \"consequatur\",
    \"calificacion\": \"consequatur\",
    \"numero_licencia\": \"consequatur\",
    \"modelo_auto\": \"consequatur\",
    \"numero_placa\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\",
    \"src_licencia_amberso\": \"consequatur\",
    \"src_licencia_reverso\": \"consequatur\",
    \"src_soat\": \"consequatur\",
    \"src_foto_vehiculo\": \"consequatur\",
    \"src_ruat\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "nombre": "consequatur",
    "apellido": "consequatur",
    "fecha_nacimiento": "consequatur",
    "credito_disponible": "consequatur",
    "calificacion": "consequatur",
    "numero_licencia": "consequatur",
    "modelo_auto": "consequatur",
    "numero_placa": "consequatur",
    "tipo_vehiculo": "consequatur",
    "src_licencia_amberso": "consequatur",
    "src_licencia_reverso": "consequatur",
    "src_soat": "consequatur",
    "src_foto_vehiculo": "consequatur",
    "src_ruat": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-car-models">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-car-models" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-car-models"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-car-models"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-car-models" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-car-models">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-car-models" data-method="POST"
      data-path="api/car-models"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-car-models', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-car-models"
                    onclick="tryItOut('POSTapi-car-models');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-car-models"
                    onclick="cancelTryOut('POSTapi-car-models');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-car-models"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/car-models</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-car-models"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-car-models"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="carmodel-GETapi-car-models--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-car-models--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/car-models/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-car-models--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;count_total_arboles&quot;: 20,
    &quot;count_total_mes_arboles&quot;: 3,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Brand] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-car-models--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-car-models--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-car-models--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-car-models--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-car-models--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-car-models--id-" data-method="GET"
      data-path="api/car-models/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-car-models--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-car-models--id-"
                    onclick="tryItOut('GETapi-car-models--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-car-models--id-"
                    onclick="cancelTryOut('GETapi-car-models--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-car-models--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/car-models/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-car-models--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="carmodel-PUTapi-car-models--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-PUTapi-car-models--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/car-models/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"nombre\": \"consequatur\",
    \"apellido\": \"consequatur\",
    \"fecha_nacimiento\": \"consequatur\",
    \"credito_disponible\": \"consequatur\",
    \"calificacion\": \"consequatur\",
    \"numero_licencia\": \"consequatur\",
    \"modelo_auto\": \"consequatur\",
    \"numero_placa\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\",
    \"src_licencia_amberso\": \"consequatur\",
    \"src_licencia_reverso\": \"consequatur\",
    \"src_soat\": \"consequatur\",
    \"src_foto_vehiculo\": \"consequatur\",
    \"src_ruat\": \"consequatur\",
    \"empresa_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "nombre": "consequatur",
    "apellido": "consequatur",
    "fecha_nacimiento": "consequatur",
    "credito_disponible": "consequatur",
    "calificacion": "consequatur",
    "numero_licencia": "consequatur",
    "modelo_auto": "consequatur",
    "numero_placa": "consequatur",
    "tipo_vehiculo": "consequatur",
    "src_licencia_amberso": "consequatur",
    "src_licencia_reverso": "consequatur",
    "src_soat": "consequatur",
    "src_foto_vehiculo": "consequatur",
    "src_ruat": "consequatur",
    "empresa_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-car-models--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;empresa_id&quot;: null,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-car-models--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-car-models--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-car-models--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-car-models--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-car-models--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-car-models--id-" data-method="PUT"
      data-path="api/car-models/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-car-models--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-car-models--id-"
                    onclick="tryItOut('PUTapi-car-models--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-car-models--id-"
                    onclick="cancelTryOut('PUTapi-car-models--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-car-models--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/car-models/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-car-models--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="carmodel-DELETEapi-car-models--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-DELETEapi-car-models--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/car-models/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-car-models--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Brand] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-car-models--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-car-models--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-car-models--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-car-models--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-car-models--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-car-models--id-" data-method="DELETE"
      data-path="api/car-models/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-car-models--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-car-models--id-"
                    onclick="tryItOut('DELETEapi-car-models--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-car-models--id-"
                    onclick="cancelTryOut('DELETEapi-car-models--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-car-models--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/car-models/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-car-models--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="carmodel-PATCHapi-car-models--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/brands'</p>

<span id="example-requests-PATCHapi-car-models--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/car-models/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/car-models/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-car-models--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Brand] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-car-models--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-car-models--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-car-models--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-car-models--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-car-models--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-car-models--id-" data-method="PATCH"
      data-path="api/car-models/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-car-models--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-car-models--id-"
                    onclick="tryItOut('PATCHapi-car-models--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-car-models--id-"
                    onclick="cancelTryOut('PATCHapi-car-models--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-car-models--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/car-models/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-car-models--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-car-models--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="cliente">Cliente</h1>

    

                                <h2 id="cliente-GETapi-clientes">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-clientes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/clientes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-clientes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
            &quot;email&quot;: &quot;teresa@gmail.com&quot;,
            &quot;celular&quot;: &quot;75555555&quot;,
            &quot;player_id&quot;: &quot;8980808908080808&quot;,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: &quot;0&quot;,
            &quot;longitude&quot;: &quot;0&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;nombre_completo&quot;: null,
            &quot;email&quot;: null,
            &quot;celular&quot;: &quot;75977665&quot;,
            &quot;player_id&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/clientes&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-clientes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-clientes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clientes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-clientes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clientes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-clientes" data-method="GET"
      data-path="api/clientes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-clientes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-clientes"
                    onclick="tryItOut('GETapi-clientes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-clientes"
                    onclick="cancelTryOut('GETapi-clientes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-clientes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/clientes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-clientes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-clientes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="cliente-POSTapi-clientes">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>

<span id="example-requests-POSTapi-clientes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clientes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clientes">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-clientes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clientes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clientes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clientes" data-method="POST"
      data-path="api/clientes"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clientes"
                    onclick="tryItOut('POSTapi-clientes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clientes"
                    onclick="cancelTryOut('POSTapi-clientes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clientes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clientes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clientes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clientes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="cliente-GETapi-clientes--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-clientes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/clientes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-clientes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
        &quot;email&quot;: &quot;teresa@gmail.com&quot;,
        &quot;celular&quot;: &quot;75555555&quot;,
        &quot;player_id&quot;: &quot;8980808908080808&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: &quot;0&quot;,
        &quot;longitude&quot;: &quot;0&quot;
        &quot;count_total_arboles&quot;: 20,
        &quot;count_total_mes_arboles&quot;: 3,
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Cliente] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-clientes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-clientes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clientes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-clientes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clientes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-clientes--id-" data-method="GET"
      data-path="api/clientes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-clientes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-clientes--id-"
                    onclick="tryItOut('GETapi-clientes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-clientes--id-"
                    onclick="cancelTryOut('GETapi-clientes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-clientes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/clientes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-clientes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="cliente-PUTapi-clientes--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-clientes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/clientes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-clientes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-clientes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-clientes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-clientes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-clientes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-clientes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-clientes--id-" data-method="PUT"
      data-path="api/clientes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-clientes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-clientes--id-"
                    onclick="tryItOut('PUTapi-clientes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-clientes--id-"
                    onclick="cancelTryOut('PUTapi-clientes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-clientes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/clientes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-clientes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="cliente-DELETEapi-clientes--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-clientes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/clientes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-clientes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Cliente] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-clientes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-clientes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-clientes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-clientes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-clientes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-clientes--id-" data-method="DELETE"
      data-path="api/clientes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-clientes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-clientes--id-"
                    onclick="tryItOut('DELETEapi-clientes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-clientes--id-"
                    onclick="cancelTryOut('DELETEapi-clientes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-clientes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/clientes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-clientes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="cliente-PATCHapi-clientes--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-clientes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/clientes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clientes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-clientes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Cliente] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-clientes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-clientes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-clientes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-clientes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-clientes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-clientes--id-" data-method="PATCH"
      data-path="api/clientes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-clientes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-clientes--id-"
                    onclick="tryItOut('PATCHapi-clientes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-clientes--id-"
                    onclick="cancelTryOut('PATCHapi-clientes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-clientes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/clientes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-clientes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-clientes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="comprobante">Comprobante</h1>

    

                                <h2 id="comprobante-GETapi-comprobantes">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-comprobantes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/comprobantes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-comprobantes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
            &quot;email&quot;: &quot;teresa@gmail.com&quot;,
            &quot;celular&quot;: &quot;75555555&quot;,
            &quot;player_id&quot;: &quot;8980808908080808&quot;,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: &quot;0&quot;,
            &quot;longitude&quot;: &quot;0&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;nombre_completo&quot;: null,
            &quot;email&quot;: null,
            &quot;celular&quot;: &quot;75977665&quot;,
            &quot;player_id&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/clientes&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-comprobantes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-comprobantes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comprobantes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-comprobantes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comprobantes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-comprobantes" data-method="GET"
      data-path="api/comprobantes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-comprobantes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-comprobantes"
                    onclick="tryItOut('GETapi-comprobantes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-comprobantes"
                    onclick="cancelTryOut('GETapi-comprobantes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-comprobantes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/comprobantes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-comprobantes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-comprobantes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="comprobante-POSTapi-comprobantes">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/comprobantes-create'</p>

<span id="example-requests-POSTapi-comprobantes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/comprobantes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"comprobante_src\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "comprobante_src": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-comprobantes">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-comprobantes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-comprobantes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comprobantes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-comprobantes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comprobantes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-comprobantes" data-method="POST"
      data-path="api/comprobantes"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-comprobantes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-comprobantes"
                    onclick="tryItOut('POSTapi-comprobantes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-comprobantes"
                    onclick="cancelTryOut('POSTapi-comprobantes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-comprobantes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/comprobantes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-comprobantes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-comprobantes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="comprobante-GETapi-comprobantes--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-comprobantes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/comprobantes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-comprobantes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
        &quot;email&quot;: &quot;teresa@gmail.com&quot;,
        &quot;celular&quot;: &quot;75555555&quot;,
        &quot;player_id&quot;: &quot;8980808908080808&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: &quot;0&quot;,
        &quot;longitude&quot;: &quot;0&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-comprobantes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-comprobantes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comprobantes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-comprobantes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comprobantes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-comprobantes--id-" data-method="GET"
      data-path="api/comprobantes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-comprobantes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-comprobantes--id-"
                    onclick="tryItOut('GETapi-comprobantes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-comprobantes--id-"
                    onclick="cancelTryOut('GETapi-comprobantes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-comprobantes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/comprobantes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-comprobantes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="comprobante-PUTapi-comprobantes--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-comprobantes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/comprobantes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-comprobantes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-comprobantes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-comprobantes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-comprobantes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-comprobantes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-comprobantes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-comprobantes--id-" data-method="PUT"
      data-path="api/comprobantes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-comprobantes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-comprobantes--id-"
                    onclick="tryItOut('PUTapi-comprobantes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-comprobantes--id-"
                    onclick="cancelTryOut('PUTapi-comprobantes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-comprobantes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/comprobantes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-comprobantes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="comprobante-PUTapi-comprobantes-verificar--id-">Verificar comprobante</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-comprobantes-verificar--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/comprobantes/verificar/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes/verificar/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-comprobantes-verificar--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-comprobantes-verificar--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-comprobantes-verificar--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-comprobantes-verificar--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-comprobantes-verificar--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-comprobantes-verificar--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-comprobantes-verificar--id-" data-method="PUT"
      data-path="api/comprobantes/verificar/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-comprobantes-verificar--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-comprobantes-verificar--id-"
                    onclick="tryItOut('PUTapi-comprobantes-verificar--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-comprobantes-verificar--id-"
                    onclick="cancelTryOut('PUTapi-comprobantes-verificar--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-comprobantes-verificar--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/comprobantes/verificar/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-comprobantes-verificar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-comprobantes-verificar--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-comprobantes-verificar--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="comprobante-DELETEapi-comprobantes--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-comprobantes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/comprobantes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-comprobantes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-comprobantes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-comprobantes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comprobantes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-comprobantes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comprobantes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-comprobantes--id-" data-method="DELETE"
      data-path="api/comprobantes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comprobantes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-comprobantes--id-"
                    onclick="tryItOut('DELETEapi-comprobantes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-comprobantes--id-"
                    onclick="cancelTryOut('DELETEapi-comprobantes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-comprobantes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/comprobantes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-comprobantes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="comprobante-PATCHapi-comprobantes--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-comprobantes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/comprobantes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comprobantes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-comprobantes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-comprobantes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-comprobantes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-comprobantes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-comprobantes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-comprobantes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-comprobantes--id-" data-method="PATCH"
      data-path="api/comprobantes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-comprobantes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-comprobantes--id-"
                    onclick="tryItOut('PATCHapi-comprobantes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-comprobantes--id-"
                    onclick="cancelTryOut('PATCHapi-comprobantes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-comprobantes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/comprobantes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-comprobantes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-comprobantes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="configuracion">Configuracion</h1>

    

                                <h2 id="configuracion-GETapi-configuraciones-active">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display active configuration.</p>

<span id="example-requests-GETapi-configuraciones-active">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/configuraciones/active" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones/active"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-configuraciones-active">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Configuracion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-configuraciones-active" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-configuraciones-active"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-configuraciones-active"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-configuraciones-active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-configuraciones-active">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-configuraciones-active" data-method="GET"
      data-path="api/configuraciones/active"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-configuraciones-active', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-configuraciones-active"
                    onclick="tryItOut('GETapi-configuraciones-active');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-configuraciones-active"
                    onclick="cancelTryOut('GETapi-configuraciones-active');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-configuraciones-active"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/configuraciones/active</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-configuraciones-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-configuraciones-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="configuracion-GETapi-configuraciones">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-configuraciones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/configuraciones" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-configuraciones">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-configuraciones" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-configuraciones"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-configuraciones"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-configuraciones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-configuraciones">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-configuraciones" data-method="GET"
      data-path="api/configuraciones"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-configuraciones', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-configuraciones"
                    onclick="tryItOut('GETapi-configuraciones');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-configuraciones"
                    onclick="cancelTryOut('GETapi-configuraciones');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-configuraciones"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/configuraciones</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-configuraciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-configuraciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="configuracion-POSTapi-configuraciones">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>

<span id="example-requests-POSTapi-configuraciones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/configuraciones" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"precio_por_km\": 11613.31890586,
    \"porcentaje_empresa\": 11613.31890586,
    \"porcentaje\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "precio_por_km": 11613.31890586,
    "porcentaje_empresa": 11613.31890586,
    "porcentaje": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-configuraciones">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-configuraciones" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-configuraciones"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-configuraciones"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-configuraciones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-configuraciones">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-configuraciones" data-method="POST"
      data-path="api/configuraciones"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-configuraciones', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-configuraciones"
                    onclick="tryItOut('POSTapi-configuraciones');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-configuraciones"
                    onclick="cancelTryOut('POSTapi-configuraciones');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-configuraciones"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/configuraciones</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-configuraciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-configuraciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="configuracion-GETapi-configuraciones--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-configuraciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/configuraciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-configuraciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Configuracion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-configuraciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-configuraciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-configuraciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-configuraciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-configuraciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-configuraciones--id-" data-method="GET"
      data-path="api/configuraciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-configuraciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-configuraciones--id-"
                    onclick="tryItOut('GETapi-configuraciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-configuraciones--id-"
                    onclick="cancelTryOut('GETapi-configuraciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-configuraciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/configuraciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-configuraciones--id-"
               value="17"
               data-component="url">
    <br>
<p>optional Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="configuracion-PUTapi-configuraciones--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-configuraciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/configuraciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"precio_por_km\": 11613.31890586,
    \"porcentaje_empresa\": 11613.31890586,
    \"porcentaje\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "precio_por_km": 11613.31890586,
    "porcentaje_empresa": 11613.31890586,
    "porcentaje": 11613.31890586
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-configuraciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-configuraciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-configuraciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-configuraciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-configuraciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-configuraciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-configuraciones--id-" data-method="PUT"
      data-path="api/configuraciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-configuraciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-configuraciones--id-"
                    onclick="tryItOut('PUTapi-configuraciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-configuraciones--id-"
                    onclick="cancelTryOut('PUTapi-configuraciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-configuraciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/configuraciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-configuraciones--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                <h1 id="constants">Constants</h1>

    

                                <h2 id="constants-GETapi-constants">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-constants">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/constants" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/constants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-constants">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;taxi&quot;: {
        &quot;ESTADO_FILIACION_EN_REVISION&quot;: 1,
        &quot;ESTADO_FILIACION_OBSERVADO&quot;: 2,
        &quot;ESTADO_FILIACION_APROBADO&quot;: 3,
        &quot;ESTADO_INACTIVO&quot;: 0,
        &quot;ESTADO_ACTIVO&quot;: 1
    },
    &quot;observacion&quot;: {
        &quot;ESTADO_REVISION_PENDIENTE&quot;: 1,
        &quot;ESTADO_REVISION_ATENDIDA&quot;: 2,
        &quot;ESTADO_REVISION_COMPLETADA&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-constants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-constants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-constants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-constants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-constants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-constants" data-method="GET"
      data-path="api/constants"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-constants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-constants"
                    onclick="tryItOut('GETapi-constants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-constants"
                    onclick="cancelTryOut('GETapi-constants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-constants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/constants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-constants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-constants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-PUTapi-taxis-approve--id-">PUT api/taxis/approve/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-taxis-approve--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/taxis/approve/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/approve/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-taxis-approve--id-">
</span>
<span id="execution-results-PUTapi-taxis-approve--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-taxis-approve--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-taxis-approve--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-taxis-approve--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-taxis-approve--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-taxis-approve--id-" data-method="PUT"
      data-path="api/taxis/approve/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-taxis-approve--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-taxis-approve--id-"
                    onclick="tryItOut('PUTapi-taxis-approve--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-taxis-approve--id-"
                    onclick="cancelTryOut('PUTapi-taxis-approve--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-taxis-approve--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/taxis/approve/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-taxis-approve--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-taxis-approve--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-taxis-approve--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the approve. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-empresas">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-empresas">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/empresas" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/empresas"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-empresas">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-empresas" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-empresas"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-empresas"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-empresas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-empresas">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-empresas" data-method="GET"
      data-path="api/empresas"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-empresas', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-empresas"
                    onclick="tryItOut('GETapi-empresas');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-empresas"
                    onclick="cancelTryOut('GETapi-empresas');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-empresas"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/empresas</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-empresas"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-empresas"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-empresas">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-empresas">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/empresas" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/empresas"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-empresas">
</span>
<span id="execution-results-POSTapi-empresas" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-empresas"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-empresas"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-empresas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-empresas">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-empresas" data-method="POST"
      data-path="api/empresas"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-empresas', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-empresas"
                    onclick="tryItOut('POSTapi-empresas');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-empresas"
                    onclick="cancelTryOut('POSTapi-empresas');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-empresas"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/empresas</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-empresas"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-empresas"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-empresas--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-empresas--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/empresas/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/empresas/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-empresas--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-empresas--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-empresas--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-empresas--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-empresas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-empresas--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-empresas--id-" data-method="GET"
      data-path="api/empresas/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-empresas--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-empresas--id-"
                    onclick="tryItOut('GETapi-empresas--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-empresas--id-"
                    onclick="cancelTryOut('GETapi-empresas--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-empresas--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/empresas/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-empresas--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the empresa. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-empresas--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-empresas--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/empresas/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/empresas/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-empresas--id-">
</span>
<span id="execution-results-PUTapi-empresas--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-empresas--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-empresas--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-empresas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-empresas--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-empresas--id-" data-method="PUT"
      data-path="api/empresas/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-empresas--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-empresas--id-"
                    onclick="tryItOut('PUTapi-empresas--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-empresas--id-"
                    onclick="cancelTryOut('PUTapi-empresas--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-empresas--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/empresas/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-empresas--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the empresa. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-empresas--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-empresas--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/empresas/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/empresas/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-empresas--id-">
</span>
<span id="execution-results-DELETEapi-empresas--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-empresas--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-empresas--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-empresas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-empresas--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-empresas--id-" data-method="DELETE"
      data-path="api/empresas/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-empresas--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-empresas--id-"
                    onclick="tryItOut('DELETEapi-empresas--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-empresas--id-"
                    onclick="cancelTryOut('DELETEapi-empresas--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-empresas--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/empresas/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-empresas--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the empresa. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-empresas--id-">PATCH api/empresas/{id}</h2>

<p>
</p>



<span id="example-requests-PATCHapi-empresas--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/empresas/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/empresas/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-empresas--id-">
</span>
<span id="execution-results-PATCHapi-empresas--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-empresas--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-empresas--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-empresas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-empresas--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-empresas--id-" data-method="PATCH"
      data-path="api/empresas/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-empresas--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-empresas--id-"
                    onclick="tryItOut('PATCHapi-empresas--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-empresas--id-"
                    onclick="cancelTryOut('PATCHapi-empresas--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-empresas--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/empresas/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-empresas--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PATCHapi-empresas--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the empresa. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-charts-viajes-vs-date">get Viajes Vs Date To Chart</h2>

<p>
</p>



<span id="example-requests-GETapi-charts-viajes-vs-date">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/charts/viajes-vs-date" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/charts/viajes-vs-date"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-charts-viajes-vs-date">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-charts-viajes-vs-date" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-charts-viajes-vs-date"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-charts-viajes-vs-date"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-charts-viajes-vs-date" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-charts-viajes-vs-date">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-charts-viajes-vs-date" data-method="GET"
      data-path="api/charts/viajes-vs-date"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-charts-viajes-vs-date', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-charts-viajes-vs-date"
                    onclick="tryItOut('GETapi-charts-viajes-vs-date');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-charts-viajes-vs-date"
                    onclick="cancelTryOut('GETapi-charts-viajes-vs-date');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-charts-viajes-vs-date"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/charts/viajes-vs-date</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-charts-viajes-vs-date"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-charts-viajes-vs-date"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="qr">Qr</h1>

    

                                <h2 id="qr-GETapi-qrs-current">Current</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>get curent qr</p>

<span id="example-requests-GETapi-qrs-current">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/qrs/current" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs/current"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-qrs-current">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;src_qr&quot;: &quot;qr_6240918083441.jpg&quot;,
    &quot;fecha&quot;: &quot;2024-09-18&quot;,
    &quot;hora&quot;: &quot;08:34:34&quot;,
    &quot;user_id&quot;: null,
    &quot;created_at&quot;: &quot;2024-09-18T12:34:34.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-09-18T12:34:42.000000Z&quot;,
    &quot;deleted_at&quot;: null,
    &quot;qr&quot;: &quot;http://api.naudi.local:8080/storage/uploads/qr_6240918083441.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Qr] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-qrs-current" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-qrs-current"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-qrs-current"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-qrs-current" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-qrs-current">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-qrs-current" data-method="GET"
      data-path="api/qrs/current"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-qrs-current', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-qrs-current"
                    onclick="tryItOut('GETapi-qrs-current');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-qrs-current"
                    onclick="cancelTryOut('GETapi-qrs-current');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-qrs-current"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/qrs/current</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-qrs-current"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-qrs-current"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="qr-GETapi-qrs">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-qrs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/qrs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-qrs">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 4,
            &quot;src_qr&quot;: &quot;qr_4240917172629.jpg&quot;,
            &quot;fecha&quot;: &quot;2024-09-17&quot;,
            &quot;hora&quot;: &quot;17:26:29&quot;,
            &quot;user_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-09-17T21:26:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-09-17T21:26:29.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;src_qr&quot;: &quot;qr_3240917172308.jpg&quot;,
            &quot;fecha&quot;: &quot;2024-09-17&quot;,
            &quot;hora&quot;: &quot;17:23:08&quot;,
            &quot;user_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-09-17T21:23:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-09-17T21:23:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 1,
            &quot;src_qr&quot;: &quot;qr_1240917173032.jpg&quot;,
            &quot;fecha&quot;: &quot;2024-09-17&quot;,
            &quot;hora&quot;: &quot;17:20:37&quot;,
            &quot;user_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-09-17T21:20:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-09-17T21:32:25.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs?page=1&quot;,
        &quot;last&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.naudi.local:8080/api/v1/qrs&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 3,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-qrs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-qrs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-qrs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-qrs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-qrs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-qrs" data-method="GET"
      data-path="api/qrs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-qrs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-qrs"
                    onclick="tryItOut('GETapi-qrs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-qrs"
                    onclick="cancelTryOut('GETapi-qrs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-qrs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/qrs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-qrs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-qrs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="qr-POSTapi-qrs">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>

<span id="example-requests-POSTapi-qrs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/qrs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"src_qr\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "src_qr": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-qrs">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;fecha&quot;: &quot;2024-09-17&quot;,
    &quot;hora&quot;: &quot;17:26:29&quot;,
    &quot;created_at&quot;: &quot;2024-09-17T21:26:29.000000Z&quot;,
    &quot;id&quot;: 4,
    &quot;src_qr&quot;: &quot;qr_4240917172629.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-qrs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-qrs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-qrs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-qrs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-qrs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-qrs" data-method="POST"
      data-path="api/qrs"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-qrs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-qrs"
                    onclick="tryItOut('POSTapi-qrs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-qrs"
                    onclick="cancelTryOut('POSTapi-qrs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-qrs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/qrs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-qrs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-qrs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="qr-GETapi-qrs--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-qrs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/qrs/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-qrs--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;src_qr&quot;: null,
    &quot;fecha&quot;: &quot;2024-09-17&quot;,
    &quot;hora&quot;: &quot;17:20:37&quot;,
    &quot;user_id&quot;: null,
    &quot;created_at&quot;: &quot;2024-09-17T21:20:37.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-09-17T21:20:37.000000Z&quot;,
    &quot;deleted_at&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-qrs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-qrs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-qrs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-qrs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-qrs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-qrs--id-" data-method="GET"
      data-path="api/qrs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-qrs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-qrs--id-"
                    onclick="tryItOut('GETapi-qrs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-qrs--id-"
                    onclick="cancelTryOut('GETapi-qrs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-qrs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/qrs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-qrs--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="qr-PUTapi-qrs--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-qrs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/qrs/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"src_qr\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "src_qr": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-qrs--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;src_qr&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-qrs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-qrs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-qrs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-qrs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-qrs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-qrs--id-" data-method="PUT"
      data-path="api/qrs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-qrs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-qrs--id-"
                    onclick="tryItOut('PUTapi-qrs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-qrs--id-"
                    onclick="cancelTryOut('PUTapi-qrs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-qrs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/qrs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-qrs--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="qr-DELETEapi-qrs--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-qrs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/qrs/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-qrs--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Qr] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-qrs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-qrs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-qrs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-qrs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-qrs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-qrs--id-" data-method="DELETE"
      data-path="api/qrs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-qrs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-qrs--id-"
                    onclick="tryItOut('DELETEapi-qrs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-qrs--id-"
                    onclick="cancelTryOut('DELETEapi-qrs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-qrs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/qrs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-qrs--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="qr-PATCHapi-qrs--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-qrs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/qrs/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/qrs/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-qrs--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Qr] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-qrs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-qrs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-qrs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-qrs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-qrs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-qrs--id-" data-method="PATCH"
      data-path="api/qrs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-qrs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-qrs--id-"
                    onclick="tryItOut('PATCHapi-qrs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-qrs--id-"
                    onclick="cancelTryOut('PATCHapi-qrs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-qrs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/qrs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-qrs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-qrs--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="receiptlog">ReceiptLog</h1>

    

                                <h2 id="receiptlog-GETapi-receipts-log">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-receipts-log">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/receipts-log" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-receipts-log">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
            &quot;email&quot;: &quot;teresa@gmail.com&quot;,
            &quot;celular&quot;: &quot;75555555&quot;,
            &quot;player_id&quot;: &quot;8980808908080808&quot;,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: &quot;0&quot;,
            &quot;longitude&quot;: &quot;0&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;nombre_completo&quot;: null,
            &quot;email&quot;: null,
            &quot;celular&quot;: &quot;75977665&quot;,
            &quot;player_id&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/clientes&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-receipts-log" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-receipts-log"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-receipts-log"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-receipts-log" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-receipts-log">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-receipts-log" data-method="GET"
      data-path="api/receipts-log"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-receipts-log', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-receipts-log"
                    onclick="tryItOut('GETapi-receipts-log');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-receipts-log"
                    onclick="cancelTryOut('GETapi-receipts-log');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-receipts-log"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/receipts-log</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-receipts-log"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-receipts-log"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="receiptlog-GETapi-receipts-log-by-receipt--id-">List by receipt id</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-receipts-log-by-receipt--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/receipts-log/by-receipt/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log/by-receipt/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-receipts-log-by-receipt--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
            &quot;email&quot;: &quot;teresa@gmail.com&quot;,
            &quot;celular&quot;: &quot;75555555&quot;,
            &quot;player_id&quot;: &quot;8980808908080808&quot;,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: &quot;0&quot;,
            &quot;longitude&quot;: &quot;0&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;nombre_completo&quot;: null,
            &quot;email&quot;: null,
            &quot;celular&quot;: &quot;75977665&quot;,
            &quot;player_id&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/clientes&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-receipts-log-by-receipt--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-receipts-log-by-receipt--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-receipts-log-by-receipt--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-receipts-log-by-receipt--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-receipts-log-by-receipt--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-receipts-log-by-receipt--id-" data-method="GET"
      data-path="api/receipts-log/by-receipt/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-receipts-log-by-receipt--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-receipts-log-by-receipt--id-"
                    onclick="tryItOut('GETapi-receipts-log-by-receipt--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-receipts-log-by-receipt--id-"
                    onclick="cancelTryOut('GETapi-receipts-log-by-receipt--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-receipts-log-by-receipt--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/receipts-log/by-receipt/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-receipts-log-by-receipt--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-receipts-log-by-receipt--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-receipts-log-by-receipt--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the by receipt. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="receiptlog-POSTapi-receipts-log">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/comprobantes-create'</p>

<span id="example-requests-POSTapi-receipts-log">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/receipts-log" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"comprobante_src\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "comprobante_src": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-receipts-log">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-receipts-log" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-receipts-log"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-receipts-log"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-receipts-log" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-receipts-log">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-receipts-log" data-method="POST"
      data-path="api/receipts-log"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-receipts-log', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-receipts-log"
                    onclick="tryItOut('POSTapi-receipts-log');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-receipts-log"
                    onclick="cancelTryOut('POSTapi-receipts-log');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-receipts-log"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/receipts-log</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-receipts-log"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-receipts-log"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="receiptlog-GETapi-receipts-log--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-receipts-log--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/receipts-log/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-receipts-log--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
        &quot;email&quot;: &quot;teresa@gmail.com&quot;,
        &quot;celular&quot;: &quot;75555555&quot;,
        &quot;player_id&quot;: &quot;8980808908080808&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: &quot;0&quot;,
        &quot;longitude&quot;: &quot;0&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-receipts-log--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-receipts-log--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-receipts-log--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-receipts-log--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-receipts-log--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-receipts-log--id-" data-method="GET"
      data-path="api/receipts-log/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-receipts-log--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-receipts-log--id-"
                    onclick="tryItOut('GETapi-receipts-log--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-receipts-log--id-"
                    onclick="cancelTryOut('GETapi-receipts-log--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-receipts-log--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/receipts-log/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-receipts-log--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="receiptlog-PUTapi-receipts-log--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-receipts-log--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/receipts-log/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-receipts-log--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-receipts-log--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-receipts-log--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-receipts-log--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-receipts-log--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-receipts-log--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-receipts-log--id-" data-method="PUT"
      data-path="api/receipts-log/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-receipts-log--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-receipts-log--id-"
                    onclick="tryItOut('PUTapi-receipts-log--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-receipts-log--id-"
                    onclick="cancelTryOut('PUTapi-receipts-log--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-receipts-log--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/receipts-log/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-receipts-log--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="receiptlog-DELETEapi-receipts-log--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-receipts-log--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/receipts-log/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-receipts-log--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-receipts-log--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-receipts-log--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-receipts-log--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-receipts-log--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-receipts-log--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-receipts-log--id-" data-method="DELETE"
      data-path="api/receipts-log/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-receipts-log--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-receipts-log--id-"
                    onclick="tryItOut('DELETEapi-receipts-log--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-receipts-log--id-"
                    onclick="cancelTryOut('DELETEapi-receipts-log--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-receipts-log--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/receipts-log/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-receipts-log--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="receiptlog-PATCHapi-receipts-log--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-receipts-log--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/receipts-log/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/receipts-log/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-receipts-log--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-receipts-log--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-receipts-log--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-receipts-log--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-receipts-log--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-receipts-log--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-receipts-log--id-" data-method="PATCH"
      data-path="api/receipts-log/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-receipts-log--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-receipts-log--id-"
                    onclick="tryItOut('PATCHapi-receipts-log--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-receipts-log--id-"
                    onclick="cancelTryOut('PATCHapi-receipts-log--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-receipts-log--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/receipts-log/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-receipts-log--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-receipts-log--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="taxi">Taxi</h1>

    

                                <h2 id="taxi-GETapi-taxis">List</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-taxis">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/taxis" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-taxis">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;nombre&quot;: &quot;leopoldo&quot;,
            &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
            &quot;celular&quot;: &quot;78978978&quot;,
            &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
            &quot;fecha_nacimiento&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;8899900&quot;,
            &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
            &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: null,
            &quot;src_licencia_reverso&quot;: null,
            &quot;src_soat&quot;: null,
            &quot;src_foto_vehiculo&quot;: null,
            &quot;src_ruat&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
            &quot;foto&quot;: null,
            &quot;foto_thumbnail&quot;: null,
            &quot;foto_thumbnail_sm&quot;: null,
            &quot;licencia_amberso&quot;: null,
            &quot;licencia_amberso_thumbnail&quot;: null,
            &quot;licencia_amberso_thumbnail_sm&quot;: null,
            &quot;licencia_reverso&quot;: null,
            &quot;licencia_reverso_thumbnail&quot;: null,
            &quot;licencia_reverso_thumbnail_sm&quot;: null,
            &quot;soat&quot;: null,
            &quot;soat_thumbnail&quot;: null,
            &quot;soat_thumbnail_sm&quot;: null,
            &quot;foto_vehiculo&quot;: null,
            &quot;foto_vehiculo_thumbnail&quot;: null,
            &quot;foto_vehiculo_thumbnail_sm&quot;: null,
            &quot;ruat&quot;: null,
            &quot;ruat_thumbnail&quot;: null,
            &quot;ruat_thumbnail_sm&quot;: null
            &quot;empresa_id&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;nombre&quot;: &quot;malvina maria&quot;,
            &quot;apellido&quot;: &quot;ramirez odoria&quot;,
            &quot;celular&quot;: &quot;6786786&quot;,
            &quot;email&quot;: &quot;fdsf@sfds.com&quot;,
            &quot;fecha_nacimiento&quot;: &quot;1969-12-25&quot;,
            &quot;src_foto&quot;: &quot;taxi_foto_7231220175252.jpg&quot;,
            &quot;credito_disponible&quot;: 0,
            &quot;calificacion&quot;: 0,
            &quot;player_id&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null,
            &quot;numero_licencia&quot;: &quot;543543&quot;,
            &quot;modelo_auto&quot;: &quot;53454gfdgfd&quot;,
            &quot;numero_placa&quot;: &quot;gfdg3454&quot;,
            &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
            &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;src_soat&quot;: &quot;taxi_soat_7231220175350.jpg&quot;,
            &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;src_ruat&quot;: &quot;taxi_ruat_7231220175430.jpg&quot;,
            &quot;empresa_id&quot;: null,
            &quot;estado_filiacion&quot;: 1,
            &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
            &quot;nombre_completo&quot;: &quot;malvina maria ramirez odoria&quot;,
            &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_7231220175252.jpg&quot;,
            &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_7231220175252.jpg&quot;,
            &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_7231220175349.jpg&quot;,
            &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_7231220175349.jpg&quot;,
            &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_7231220175350.jpg&quot;,
            &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_7231220175350.jpg&quot;,
            &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_7231220175429.jpg&quot;,
            &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_7231220175430.jpg&quot;,
            &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_7231220175430.jpg&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/taxis?page=2&quot;,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/taxis&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 5,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-taxis" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-taxis"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-taxis"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-taxis" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-taxis">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-taxis" data-method="GET"
      data-path="api/taxis"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-taxis', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-taxis"
                    onclick="tryItOut('GETapi-taxis');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-taxis"
                    onclick="cancelTryOut('GETapi-taxis');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-taxis"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/taxis</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-taxis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-taxis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fieldSearch</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fieldSearch"                data-endpoint="GETapi-taxis"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-taxis"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>apellido</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="apellido"                data-endpoint="GETapi-taxis"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETapi-taxis"
               value="qkunze@example.com"
               data-component="url">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>celular</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="celular"                data-endpoint="GETapi-taxis"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="taxi-POSTapi-taxis">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/taxis'</p>

<span id="example-requests-POSTapi-taxis">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/taxis" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"nombre\": \"consequatur\",
    \"apellido\": \"consequatur\",
    \"fecha_nacimiento\": \"consequatur\",
    \"credito_disponible\": \"consequatur\",
    \"calificacion\": \"consequatur\",
    \"numero_licencia\": \"consequatur\",
    \"modelo_auto\": \"consequatur\",
    \"numero_placa\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\",
    \"src_licencia_amberso\": \"consequatur\",
    \"src_licencia_reverso\": \"consequatur\",
    \"src_soat\": \"consequatur\",
    \"src_foto_vehiculo\": \"consequatur\",
    \"src_ruat\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "nombre": "consequatur",
    "apellido": "consequatur",
    "fecha_nacimiento": "consequatur",
    "credito_disponible": "consequatur",
    "calificacion": "consequatur",
    "numero_licencia": "consequatur",
    "modelo_auto": "consequatur",
    "numero_placa": "consequatur",
    "tipo_vehiculo": "consequatur",
    "src_licencia_amberso": "consequatur",
    "src_licencia_reverso": "consequatur",
    "src_soat": "consequatur",
    "src_foto_vehiculo": "consequatur",
    "src_ruat": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-taxis">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-taxis" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-taxis"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-taxis"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-taxis" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-taxis">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-taxis" data-method="POST"
      data-path="api/taxis"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-taxis', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-taxis"
                    onclick="tryItOut('POSTapi-taxis');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-taxis"
                    onclick="cancelTryOut('POSTapi-taxis');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-taxis"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/taxis</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-taxis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-taxis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="taxi-GETapi-taxis--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-taxis--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/taxis/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-taxis--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;count_total_arboles&quot;: 20,
    &quot;count_total_mes_arboles&quot;: 3,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Taxi] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-taxis--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-taxis--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-taxis--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-taxis--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-taxis--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-taxis--id-" data-method="GET"
      data-path="api/taxis/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-taxis--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-taxis--id-"
                    onclick="tryItOut('GETapi-taxis--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-taxis--id-"
                    onclick="cancelTryOut('GETapi-taxis--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-taxis--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/taxis/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-taxis--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="taxi-PUTapi-taxis--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/taxis'</p>

<span id="example-requests-PUTapi-taxis--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/taxis/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"nombre\": \"consequatur\",
    \"apellido\": \"consequatur\",
    \"fecha_nacimiento\": \"consequatur\",
    \"credito_disponible\": \"consequatur\",
    \"calificacion\": \"consequatur\",
    \"numero_licencia\": \"consequatur\",
    \"modelo_auto\": \"consequatur\",
    \"numero_placa\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\",
    \"src_licencia_amberso\": \"consequatur\",
    \"src_licencia_reverso\": \"consequatur\",
    \"src_soat\": \"consequatur\",
    \"src_foto_vehiculo\": \"consequatur\",
    \"src_ruat\": \"consequatur\",
    \"empresa_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "nombre": "consequatur",
    "apellido": "consequatur",
    "fecha_nacimiento": "consequatur",
    "credito_disponible": "consequatur",
    "calificacion": "consequatur",
    "numero_licencia": "consequatur",
    "modelo_auto": "consequatur",
    "numero_placa": "consequatur",
    "tipo_vehiculo": "consequatur",
    "src_licencia_amberso": "consequatur",
    "src_licencia_reverso": "consequatur",
    "src_soat": "consequatur",
    "src_foto_vehiculo": "consequatur",
    "src_ruat": "consequatur",
    "empresa_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-taxis--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;nombre&quot;: &quot;leopoldo&quot;,
    &quot;apellido&quot;: &quot;nepumuzeno de la cruz&quot;,
    &quot;celular&quot;: &quot;78978978&quot;,
    &quot;email&quot;: &quot;nepumuzeno@gmail.com&quot;,
    &quot;fecha_nacimiento&quot;: &quot;1992-12-15&quot;,
    &quot;src_foto&quot;: &quot;taxi_foto_6231220175034.jpg&quot;,
    &quot;credito_disponible&quot;: 0,
    &quot;calificacion&quot;: 0,
    &quot;player_id&quot;: &quot;fldsjl;fjdlsjf798798&quot;,
    &quot;latitude&quot;: null,
    &quot;longitude&quot;: null,
    &quot;numero_licencia&quot;: &quot;8899900&quot;,
    &quot;modelo_auto&quot;: &quot;DFD - 898a&quot;,
    &quot;numero_placa&quot;: &quot;KPT - 1092&quot;,
    &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
    &quot;src_licencia_amberso&quot;: &quot;taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;src_licencia_reverso&quot;: &quot;taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;src_soat&quot;: &quot;taxi_soat_6231220113518.jpg&quot;,
    &quot;src_foto_vehiculo&quot;: &quot;taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;src_ruat&quot;: &quot;taxi_ruat_6231220113518.jpg&quot;,
    &quot;empresa_id&quot;: null,
    &quot;estado_filiacion&quot;: 1,
    &quot;str_estado_filiacion&quot;: &quot;Solicitud pendiente&quot;,
    &quot;nombre_completo&quot;: &quot;leopoldo nepumuzeno de la cruz&quot;,
    &quot;foto&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_foto_6231220175034.jpg&quot;,
    &quot;foto_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_foto_6231220175034.jpg&quot;,
    &quot;licencia_amberso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_amberso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_amberso_6231220175006.jpg&quot;,
    &quot;licencia_reverso&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;licencia_reverso_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_licencia_reverso_6231220113518.jpg&quot;,
    &quot;soat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_soat_6231220113518.jpg&quot;,
    &quot;soat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_soat_6231220113518.jpg&quot;,
    &quot;foto_vehiculo&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;foto_vehiculo_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_vehiculo_6231220113518.jpg&quot;,
    &quot;ruat&quot;: &quot;http://api.indrive.local/storage/uploads/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail/taxi_ruat_6231220113518.jpg&quot;,
    &quot;ruat_thumbnail_sm&quot;: &quot;http://api.indrive.local/storage/uploads/thumbnail-small/taxi_ruat_6231220113518.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-taxis--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-taxis--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-taxis--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-taxis--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-taxis--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-taxis--id-" data-method="PUT"
      data-path="api/taxis/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-taxis--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-taxis--id-"
                    onclick="tryItOut('PUTapi-taxis--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-taxis--id-"
                    onclick="cancelTryOut('PUTapi-taxis--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-taxis--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/taxis/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-taxis--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="taxi-DELETEapi-taxis--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/taxis'</p>

<span id="example-requests-DELETEapi-taxis--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/taxis/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-taxis--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Taxi] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-taxis--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-taxis--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-taxis--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-taxis--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-taxis--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-taxis--id-" data-method="DELETE"
      data-path="api/taxis/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-taxis--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-taxis--id-"
                    onclick="tryItOut('DELETEapi-taxis--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-taxis--id-"
                    onclick="cancelTryOut('DELETEapi-taxis--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-taxis--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/taxis/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-taxis--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="taxi-PATCHapi-taxis--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>
<p>Socket chanels emmit:</p>
<p>'administrador/taxis'</p>

<span id="example-requests-PATCHapi-taxis--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/taxis/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/taxis/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-taxis--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Taxi] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-taxis--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-taxis--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-taxis--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-taxis--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-taxis--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-taxis--id-" data-method="PATCH"
      data-path="api/taxis/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-taxis--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-taxis--id-"
                    onclick="tryItOut('PATCHapi-taxis--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-taxis--id-"
                    onclick="cancelTryOut('PATCHapi-taxis--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-taxis--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/taxis/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-taxis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-taxis--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="taxi-GETapi-observaciones-atendidas">Observacioenes atendidas</h2>

<p>
</p>

<p>Display a listing of atendidas without pagination</p>

<span id="example-requests-GETapi-observaciones-atendidas">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/observaciones/atendidas" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/atendidas"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-observaciones-atendidas">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success [
    {
        &quot;id&quot;: 13,
        &quot;attribute&quot;: &quot;numero_placa&quot;,
        &quot;observacion&quot;: &quot;no existe el numero de palca&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 2
    },
    {
        &quot;id&quot;: 12,
        &quot;attribute&quot;: &quot;nombre&quot;,
        &quot;observacion&quot;: &quot;No debe contener caracteres especiales&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 2
    },
    {
        &quot;id&quot;: 11,
        &quot;attribute&quot;: &quot;foto_vehiculo&quot;,
        &quot;observacion&quot;: &quot;La fotografia esta muy borrosa&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 2
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-observaciones-atendidas" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-observaciones-atendidas"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-observaciones-atendidas"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-observaciones-atendidas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-observaciones-atendidas">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-observaciones-atendidas" data-method="GET"
      data-path="api/observaciones/atendidas"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-observaciones-atendidas', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-observaciones-atendidas"
                    onclick="tryItOut('GETapi-observaciones-atendidas');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-observaciones-atendidas"
                    onclick="cancelTryOut('GETapi-observaciones-atendidas');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-observaciones-atendidas"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/observaciones/atendidas</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-observaciones-atendidas"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-observaciones-atendidas"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attribute</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="attribute"                data-endpoint="GETapi-observaciones-atendidas"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>taxi_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="taxi_id"                data-endpoint="GETapi-observaciones-atendidas"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="taxi-observaciones">Taxi - observaciones</h1>

    

                                <h2 id="taxi-observaciones-GETapi-observaciones">Observacioens search</h2>

<p>
</p>

<p>Display a listing of the resource to search</p>

<span id="example-requests-GETapi-observaciones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/observaciones" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-observaciones">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;attribute&quot;: &quot;nombre&quot;,
            &quot;observacion&quot;: &quot;no es lo crrecto&quot;,
            &quot;taxi_id&quot;: 1,
            &quot;estado_revision&quot;: 0
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/observaciones?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/observaciones?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/observaciones?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/observaciones&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 1,
        &quot;total&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-observaciones" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-observaciones"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-observaciones"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-observaciones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-observaciones">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-observaciones" data-method="GET"
      data-path="api/observaciones"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-observaciones', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-observaciones"
                    onclick="tryItOut('GETapi-observaciones');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-observaciones"
                    onclick="cancelTryOut('GETapi-observaciones');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-observaciones"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/observaciones</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-observaciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-observaciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="taxi-observaciones-GETapi-observaciones-list">Observacioens list</h2>

<p>
</p>

<p>Display a listing of the resource without pagination</p>

<span id="example-requests-GETapi-observaciones-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/observaciones/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-observaciones-list">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success [
    {
        &quot;id&quot;: 13,
        &quot;attribute&quot;: &quot;numero_placa&quot;,
        &quot;observacion&quot;: &quot;no existe el numero de palca&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 2
    },
    {
        &quot;id&quot;: 12,
        &quot;attribute&quot;: &quot;nombre&quot;,
        &quot;observacion&quot;: &quot;No debe contener caracteres especiales&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 3
    },
    {
        &quot;id&quot;: 11,
        &quot;attribute&quot;: &quot;foto_vehiculo&quot;,
        &quot;observacion&quot;: &quot;La fotografia esta muy borrosa&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 1
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-observaciones-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-observaciones-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-observaciones-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-observaciones-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-observaciones-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-observaciones-list" data-method="GET"
      data-path="api/observaciones/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-observaciones-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-observaciones-list"
                    onclick="tryItOut('GETapi-observaciones-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-observaciones-list"
                    onclick="cancelTryOut('GETapi-observaciones-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-observaciones-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/observaciones/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-observaciones-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-observaciones-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attribute</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="attribute"                data-endpoint="GETapi-observaciones-list"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>observacion</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="observacion"                data-endpoint="GETapi-observaciones-list"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>estado_revision</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="estado_revision"                data-endpoint="GETapi-observaciones-list"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>taxi_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="taxi_id"                data-endpoint="GETapi-observaciones-list"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="taxi-observaciones-GETapi-observaciones-pendientes">Observacioens pendientes</h2>

<p>
</p>

<p>Display a listing of pendientes without pagination</p>

<span id="example-requests-GETapi-observaciones-pendientes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/observaciones/pendientes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/pendientes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-observaciones-pendientes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success [
    {
        &quot;id&quot;: 13,
        &quot;attribute&quot;: &quot;numero_placa&quot;,
        &quot;observacion&quot;: &quot;no existe el numero de palca&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 1
    },
    {
        &quot;id&quot;: 12,
        &quot;attribute&quot;: &quot;nombre&quot;,
        &quot;observacion&quot;: &quot;No debe contener caracteres especiales&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 1
    },
    {
        &quot;id&quot;: 11,
        &quot;attribute&quot;: &quot;foto_vehiculo&quot;,
        &quot;observacion&quot;: &quot;La fotografia esta muy borrosa&quot;,
        &quot;taxi_id&quot;: 1,
        &quot;estado_revision&quot;: 1
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-observaciones-pendientes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-observaciones-pendientes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-observaciones-pendientes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-observaciones-pendientes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-observaciones-pendientes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-observaciones-pendientes" data-method="GET"
      data-path="api/observaciones/pendientes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-observaciones-pendientes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-observaciones-pendientes"
                    onclick="tryItOut('GETapi-observaciones-pendientes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-observaciones-pendientes"
                    onclick="cancelTryOut('GETapi-observaciones-pendientes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-observaciones-pendientes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/observaciones/pendientes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-observaciones-pendientes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-observaciones-pendientes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>attribute</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="attribute"                data-endpoint="GETapi-observaciones-pendientes"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>taxi_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="taxi_id"                data-endpoint="GETapi-observaciones-pendientes"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="taxi-observaciones-POSTapi-observaciones">Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'taxi/taxis'</p>

<span id="example-requests-POSTapi-observaciones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/observaciones" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"attribute\": \"consequatur\",
    \"observacion\": \"consequatur\",
    \"taxi_id\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "attribute": "consequatur",
    "observacion": "consequatur",
    "taxi_id": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-observaciones">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 6,
    &quot;attribute&quot;: &quot;nombre&quot;,
    &quot;observacion&quot;: &quot;no es lo crrecto&quot;,
    &quot;taxi_id&quot;: 1,
    &quot;estado_revision&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-observaciones" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-observaciones"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-observaciones"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-observaciones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-observaciones">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-observaciones" data-method="POST"
      data-path="api/observaciones"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-observaciones', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-observaciones"
                    onclick="tryItOut('POSTapi-observaciones');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-observaciones"
                    onclick="cancelTryOut('POSTapi-observaciones');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-observaciones"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/observaciones</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-observaciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-observaciones"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="taxi-observaciones-GETapi-observaciones--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-observaciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/observaciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-observaciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;attribute&quot;: &quot;nombre&quot;,
    &quot;observacion&quot;: &quot;no es lo crrecto&quot;,
    &quot;taxi_id&quot;: 1,
    &quot;estado_revision&quot;: 0
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Observacion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-observaciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-observaciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-observaciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-observaciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-observaciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-observaciones--id-" data-method="GET"
      data-path="api/observaciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-observaciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-observaciones--id-"
                    onclick="tryItOut('GETapi-observaciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-observaciones--id-"
                    onclick="cancelTryOut('GETapi-observaciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-observaciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/observaciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-observaciones--id-"
               value="17"
               data-component="url">
    <br>
<p>observacion's id Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="taxi-observaciones-PUTapi-observaciones--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>
<p>Socket chanels emmit:</p>
<p>'taxi/taxis'</p>

<span id="example-requests-PUTapi-observaciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/observaciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-observaciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;attribute&quot;: &quot;nombre&quot;,
    &quot;observacion&quot;: &quot;no es lo crrecto&quot;,
    &quot;taxi_id&quot;: 1,
    &quot;estado_revision&quot;: 0
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Observacion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-observaciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-observaciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-observaciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-observaciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-observaciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-observaciones--id-" data-method="PUT"
      data-path="api/observaciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-observaciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-observaciones--id-"
                    onclick="tryItOut('PUTapi-observaciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-observaciones--id-"
                    onclick="cancelTryOut('PUTapi-observaciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-observaciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/observaciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-observaciones--id-"
               value="17"
               data-component="url">
    <br>
<p>observacion's id Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="taxi-observaciones-DELETEapi-observaciones--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-observaciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/observaciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-observaciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Observacion] 22&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Observacion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-observaciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-observaciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-observaciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-observaciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-observaciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-observaciones--id-" data-method="DELETE"
      data-path="api/observaciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-observaciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-observaciones--id-"
                    onclick="tryItOut('DELETEapi-observaciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-observaciones--id-"
                    onclick="cancelTryOut('DELETEapi-observaciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-observaciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/observaciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-observaciones--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="taxi-observaciones-PATCHapi-observaciones--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-observaciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/observaciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/observaciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-observaciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Observacion] 22&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Observacion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-observaciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-observaciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-observaciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-observaciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-observaciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-observaciones--id-" data-method="PATCH"
      data-path="api/observaciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-observaciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-observaciones--id-"
                    onclick="tryItOut('PATCHapi-observaciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-observaciones--id-"
                    onclick="cancelTryOut('PATCHapi-observaciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-observaciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/observaciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-observaciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-observaciones--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="viaje">Viaje</h1>

    

                                <h2 id="viaje-GETapi-viajes">List</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-viajes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/viajes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/viajes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-viajes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">scenario = success {
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
            &quot;email&quot;: &quot;teresa@gmail.com&quot;,
            &quot;celular&quot;: &quot;75555555&quot;,
            &quot;player_id&quot;: &quot;8980808908080808&quot;,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: &quot;0&quot;,
            &quot;longitude&quot;: &quot;0&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;nombre_completo&quot;: null,
            &quot;email&quot;: null,
            &quot;celular&quot;: &quot;75977665&quot;,
            &quot;player_id&quot;: null,
            &quot;src_foto&quot;: null,
            &quot;latitude&quot;: null,
            &quot;longitude&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;last&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.indrive.local/api/v1/clientes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;pagination.next&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.indrive.local/api/v1/clientes&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-viajes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-viajes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-viajes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-viajes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-viajes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-viajes" data-method="GET"
      data-path="api/viajes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-viajes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-viajes"
                    onclick="tryItOut('GETapi-viajes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-viajes"
                    onclick="cancelTryOut('GETapi-viajes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-viajes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/viajes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fecha_registro_start</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fecha_registro_start"                data-endpoint="GETapi-viajes"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fecha_registro_end</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fecha_registro_end"                data-endpoint="GETapi-viajes"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>estado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="estado"                data-endpoint="GETapi-viajes"
               value="consequatur"
               data-component="url">
    <br>
<p>'ofertado', 'aceptado', 'aplicado', 'recojer', 'llegar', 'iniciado', 'finalizado', 'cancelado' Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="viaje-POSTapi-viajes">2.- Create</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created resource in storage.</p>
<p>Socket chanels emmit:</p>
<p>'taxi/viaje-ofertar'</p>

<span id="example-requests-POSTapi-viajes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/viajes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\",
    \"tipo_vehiculo\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/viajes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur",
    "tipo_vehiculo": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-viajes">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-viajes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-viajes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-viajes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-viajes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-viajes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-viajes" data-method="POST"
      data-path="api/viajes"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-viajes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-viajes"
                    onclick="tryItOut('POSTapi-viajes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-viajes"
                    onclick="cancelTryOut('POSTapi-viajes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-viajes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/viajes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-viajes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="viaje-GETapi-viajes--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display the specified resource.</p>

<span id="example-requests-GETapi-viajes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/viajes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/viajes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-viajes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;nombre_completo&quot;: &quot;teresa mendoza&quot;,
        &quot;email&quot;: &quot;teresa@gmail.com&quot;,
        &quot;celular&quot;: &quot;75555555&quot;,
        &quot;player_id&quot;: &quot;8980808908080808&quot;,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: &quot;0&quot;,
        &quot;longitude&quot;: &quot;0&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-viajes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-viajes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-viajes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-viajes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-viajes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-viajes--id-" data-method="GET"
      data-path="api/viajes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-viajes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-viajes--id-"
                    onclick="tryItOut('GETapi-viajes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-viajes--id-"
                    onclick="cancelTryOut('GETapi-viajes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-viajes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/viajes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-viajes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="viaje-PUTapi-viajes--id-">Update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-viajes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/viajes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nombre_completo\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"celular\": \"consequatur\",
    \"player_id\": \"consequatur\",
    \"src_foto\": \"consequatur\",
    \"latitude\": \"consequatur\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/viajes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre_completo": "consequatur",
    "email": "qkunze@example.com",
    "celular": "consequatur",
    "player_id": "consequatur",
    "src_foto": "consequatur",
    "latitude": "consequatur",
    "longitude": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-viajes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;plataforma&quot;: &quot;android&quot;,
    &quot;version&quot;: &quot;1.0.0&quot;,
    &quot;updated_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2023-12-04T12:26:00.000000Z&quot;,
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;El campo celular es obligatorio.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-viajes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-viajes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-viajes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-viajes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-viajes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-viajes--id-" data-method="PUT"
      data-path="api/viajes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-viajes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-viajes--id-"
                    onclick="tryItOut('PUTapi-viajes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-viajes--id-"
                    onclick="cancelTryOut('PUTapi-viajes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-viajes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/viajes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-viajes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                    <h2 id="viaje-DELETEapi-viajes--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-viajes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/viajes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/viajes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-viajes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-viajes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-viajes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-viajes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-viajes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-viajes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-viajes--id-" data-method="DELETE"
      data-path="api/viajes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-viajes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-viajes--id-"
                    onclick="tryItOut('DELETEapi-viajes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-viajes--id-"
                    onclick="cancelTryOut('DELETEapi-viajes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-viajes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/viajes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-viajes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="viaje-PATCHapi-viajes--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-viajes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/viajes/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/viajes/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-viajes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-viajes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-viajes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-viajes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-viajes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-viajes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-viajes--id-" data-method="PATCH"
      data-path="api/viajes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-viajes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-viajes--id-"
                    onclick="tryItOut('PATCHapi-viajes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-viajes--id-"
                    onclick="cancelTryOut('PATCHapi-viajes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-viajes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/viajes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-viajes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-viajes--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="viaje-POSTapi-testing-socketio">Test Socketio viaje obj</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-POSTapi-testing-socketio">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/testing/socketio" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"viaje_id\": 11613.31890586,
    \"chanel\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/testing/socketio"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "viaje_id": 11613.31890586,
    "chanel": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-testing-socketio">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;lugar_origen&quot;: &quot;calle aniceto padilal y porcentaje_comision&quot;,
    &quot;lugar_destino&quot;: &quot;Av america y Av Libertador Bolivar&quot;,
    &quot;origen_latitude&quot;: -17.3784,
    &quot;origen_longitude&quot;: -66.154009,
    &quot;destino_latitude&quot;: -17.372441,
    &quot;destino_longitude&quot;: -66.16264,
    &quot;tarifa_ideal&quot;: &quot;5.00&quot;,
    &quot;tarifa_propuesta_cliente&quot;: null,
    &quot;tarifa_propuesta_taxi&quot;: null,
    &quot;tarifa_final&quot;: null,
    &quot;comentario&quot;: null,
    &quot;fecha_registro&quot;: &quot;2024-08-29&quot;,
    &quot;hora_registro&quot;: &quot;11:28:07&quot;,
    &quot;fecha_aceptado&quot;: &quot;2024-08-29&quot;,
    &quot;hora_aceptado&quot;: &quot;11:28:25&quot;,
    &quot;fecha_recojo&quot;: null,
    &quot;hora_recojo&quot;: null,
    &quot;fecha_cancelado&quot;: null,
    &quot;hora_cancelado&quot;: null,
    &quot;fecha_concluido&quot;: null,
    &quot;hora_concluido&quot;: null,
    &quot;calificacion&quot;: null,
    &quot;porcentaje_comision&quot;: &quot;0.05&quot;,
    &quot;porcentaje_comision_empresa&quot;: &quot;0.03&quot;,
    &quot;estado&quot;: &quot;aplicado&quot;,
    &quot;tipo_pago&quot;: &quot;efectivo&quot;,
    &quot;observacion&quot;: null,
    &quot;taxi_id&quot;: 1,
    &quot;cliente_id&quot;: 1,
    &quot;cliente&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre_completo&quot;: &quot;aqui novivie juanita&quot;,
        &quot;email&quot;: null,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;player_id&quot;: null,
        &quot;src_foto&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-08-29T15:26:10.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-08-29T15:26:10.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;foto&quot;: null,
        &quot;foto_thumbnail&quot;: null,
        &quot;foto_thumbnail_sm&quot;: null
    },
    &quot;taxi&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;WIllam&quot;,
        &quot;apellido&quot;: &quot;Mamani Garcia&quot;,
        &quot;celular&quot;: &quot;75977665&quot;,
        &quot;email&quot;: &quot;will-gm@hotmail.com&quot;,
        &quot;fecha_nacimiento&quot;: null,
        &quot;src_foto&quot;: &quot;taxi_foto_1240829112722.jpg&quot;,
        &quot;credito_disponible&quot;: 9010,
        &quot;calificacion&quot;: 0,
        &quot;player_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;numero_licencia&quot;: null,
        &quot;modelo_auto&quot;: null,
        &quot;numero_placa&quot;: null,
        &quot;tipo_vehiculo&quot;: &quot;taxi&quot;,
        &quot;src_licencia_amberso&quot;: null,
        &quot;src_licencia_reverso&quot;: null,
        &quot;src_soat&quot;: null,
        &quot;src_foto_vehiculo&quot;: null,
        &quot;src_ruat&quot;: null,
        &quot;user_id&quot;: 2,
        &quot;estado_filiacion&quot;: 3,
        &quot;estado&quot;: 0,
        &quot;porcentaje_comision&quot;: &quot;0.1&quot;,
        &quot;porcentaje_comision_empresa&quot;: &quot;0.0&quot;,
        &quot;empresa_id&quot;: null,
        &quot;created_at&quot;: &quot;2024-08-29T15:27:22.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-09-19T18:03:49.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;str_estado_filiacion&quot;: &quot;Aprobado&quot;,
        &quot;nombre_completo&quot;: &quot;WIllam Mamani Garcia&quot;,
        &quot;foto&quot;: &quot;http://api.naudi.local:8080/storage/uploads/taxi_foto_1240829112722.jpg&quot;,
        &quot;foto_thumbnail&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail/taxi_foto_1240829112722.jpg&quot;,
        &quot;foto_thumbnail_sm&quot;: &quot;http://api.naudi.local:8080/storage/uploads/thumbnail-small/taxi_foto_1240829112722.jpg&quot;,
        &quot;licencia_amberso&quot;: null,
        &quot;licencia_reverso&quot;: null,
        &quot;soat&quot;: null,
        &quot;foto_vehiculo&quot;: null,
        &quot;ruat&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Viaje] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-testing-socketio" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-testing-socketio"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-testing-socketio"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-testing-socketio" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-testing-socketio">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-testing-socketio" data-method="POST"
      data-path="api/testing/socketio"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="1"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-testing-socketio', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-testing-socketio"
                    onclick="tryItOut('POSTapi-testing-socketio');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-testing-socketio"
                    onclick="cancelTryOut('POSTapi-testing-socketio');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-testing-socketio"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/testing/socketio</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-testing-socketio"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-testing-socketio"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>The request body is an array (<code>object[]</code>`).</p>

                </form>

                <h1 id="configuracion">configuracion</h1>

    

                                <h2 id="configuracion-DELETEapi-configuraciones--id-">Delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-configuraciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/configuraciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-configuraciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Eliminado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Configuracion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-configuraciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-configuraciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-configuraciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-configuraciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-configuraciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-configuraciones--id-" data-method="DELETE"
      data-path="api/configuraciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-configuraciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-configuraciones--id-"
                    onclick="tryItOut('DELETEapi-configuraciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-configuraciones--id-"
                    onclick="cancelTryOut('DELETEapi-configuraciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-configuraciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/configuraciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-configuraciones--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="configuracion-PATCHapi-configuraciones--id-">Restore</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Restore the specified resource from storage.</p>

<span id="example-requests-PATCHapi-configuraciones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/configuraciones/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/configuraciones/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-configuraciones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Restaurado&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    message&quot;: &quot;No query results for model [App\\Models\\Configuracion] 22&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-configuraciones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-configuraciones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-configuraciones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-configuraciones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-configuraciones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-configuraciones--id-" data-method="PATCH"
      data-path="api/configuraciones/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-configuraciones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-configuraciones--id-"
                    onclick="tryItOut('PATCHapi-configuraciones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-configuraciones--id-"
                    onclick="cancelTryOut('PATCHapi-configuraciones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-configuraciones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/configuraciones/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-configuraciones--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-configuraciones--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
