@extends('layouts.app')

@section('content')
    <div class="ui tablet stackable padded grid">
        <div class="three wide column">
             <!-- Menu Flotante -->
             <div class="ui left vertical menu">
                 <div class="header">
                    <div class="item">MENU DE OPCIONES</div>
                 </div>
                <div class="item">
                    Seleccionar Lineas (Item 1)
                </div>
                <div class="item">
                    Item 2
                </div>
                <div class="item">
                    Item 3
                </div>
            </div>
        </div>
        <div class="ten wide column">
            <div class="ui segments">
                    <div class="ui segment">
                            <div class="ui header">Mapa de Seguimiento</div>
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            Seguimiento y Control de las diferentes Lineas de Buses Urbanos
                    </div>
                    <div class="ui compact segment" >
                        <div class="ui embed" id="google-map">
    
                        </div>
                    </div>
            </div>
        </div>
        <div class="three wide column">
            <div class="ui segment">
                <div class="ui header">Alertas e Incidentes</div>
            </div>
            <div class="ui segment">
                <div class="ui green card">
                    <div class="content" style="background-color: #00E676;">
                        <div class="header">Arribo de Bus</div>
                        <div class="meta">
                            <span class="right floated time">Hace 1 Min</span>
                            <span class="category">Linea 1</span>
                        </div>
                    </div>
                    <div class="content">
                        <div class="ui small feed">
                                <div class="event">
                                    Fecha de LLegada: 15/07/2018
                                </div>
                                <div class="event">
                                    Hora de LLegada: 17:40
                                </div>
                        </div>
                    </div>
                </div>
                <div class="ui grey card">
                        <div class="content" style="background-color: #CFD8DC;">
                            <div class="header">Salida de Bus</div>
                            <div class="meta">
                                <span class="right floated time">Hace 2 Min</span>
                                <span class="category">Linea 2</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="ui small feed">
                                    <div class="event">
                                        Fecha de LLegada: 15/07/2018
                                    </div>
                                    <div class="event">
                                        Hora de LLegada: 17:38
                                    </div>
                            </div>
                        </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
@section("scripts")
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7E7LP4nqfQbTXkHqs9s2OlXRXGJTGHAc&callback=inicializarMap"></script>
    <script>
        $(document).ready(function() {
            inicializarMap();
        });
        function inicializarMap() {
            // The location of Uluru
            var pos = {lat: -0.180653, lng: -78.467834};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('google-map'), {zoom: 4, center: pos});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: pos, map: map});
        }
    </script>
@endsection
