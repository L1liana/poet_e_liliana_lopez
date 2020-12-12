@extends('layouts.master')
@section('header')
@parent
@stop
@section('navbar')
@parent
@stop
@section('iside')
@parent
@stop
@section('content')
    <h1>Poetas</h1>
    <div class="u">
        <a href="{{action('Crud@create')}}">Agregar un nuevo Poeta</a>
    </div>
    <div id="main-container">
        <table class="lol">
            <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>Telephone number</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            @foreach($poet as $user)
                <tr>
                    <td>{{$user->Poet_code}}</td>
                    <td>{{$user->First_name}}</td>
                    <td>{{$user->Surname}}</td>
                    <td>{{$user->Address}}</td>
                    <td>{{$user->Postcode}}</td>
                    <td>{{$user->Telephone_number}}</td>
                    <td><a href="{{action('Crud@show',['id'=>$user->Poet_code])}}"><img src="/img/r.png"></a></td>
                    <td><a href="{{action('Crud@destroy',['id'=>$user->Poet_code])}}"><img src="/img/e.png"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
@section('footer')
@parent
@stop
