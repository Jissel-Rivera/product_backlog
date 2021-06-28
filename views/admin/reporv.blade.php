@extends('adminlte::page') 

@section('title', 'Reporte de ')

@section('content')
    <div id="app">
        <v-app>
            <template>
                <Reporv></Reporv>
            </template>
        </v-app>
    </div>
    
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
@stop

@section('js')
   <!-- <script> console.log('Hi!'); </script> -->
   <script src="{{asset('js/app.js')}}"></script>
@stop