@extends('layouts.master')
@if(isset($user) and is_object($user))
    @php
        $title='Modificación de un Poeta';
        $boton = 'Actualizar';
        $id = $user->Poet_code;
        $First_name = $user->First_name;
        $Surname = $user->Surname;
        $Address = $user->Address;
        $Postcode = $user->Postcode;
        $Telephone_number = $user->Telephone_number;
    @endphp
@else
    @php
        $title='Dar de alta un nuevo poeta';
        $boton = 'Dar de alta';
        $id = '';
        $First_name = '';
        $Surname = '';
        $Address = '';
        $Postcode = '';
        $Telephone_number = '';
    @endphp
@endif
@section('header')
    @parent
@stop
@section('navbar')
@parent
@stop
@section('content')
    <div class="alta">
        <a href="{{action('Crud@create')}}">Agregar un nuevo Poeta</a>
    </div>
<section class="form-register">
<form action="{{isset($user) ? action('Crud@update') :action('Crud@store')}}" method="post">
    {{csrf_field()}}
    @if(isset($user) and is_object($user))
        <input type="hidden" name="id" value="{{$id}}">
    @endif
    <h4>{{$title}}</h4>
    <label for="First_name"> First Name </label>
    <input class="controls" type="text" name="First_name" value="{{$First_name}}" placeholder="Ingrese su primer Nombre">
    <br>
    <label for="Surname"> Surname </label>
    <input class="controls" type="text" name="Surname" value="{{$Surname}}" placeholder="Ingrese su Apellido">
    <br>
    <label for="Address"> Address </label>
    <input class="controls" type="email" name="Address" value{{$Address}} placeholder="Ingrese su Correo">
    <br>
    <label for="Postcode"> Postcode </label>
    <input class="controls" type="text" name="Postcode" value="{{$Postcode}}" placeholder="Ingrese su Codigo Postal">
    <br>
    <label for="Telephone_number"> Telephone number </label>
    <input class="controls" type="text" name="Telephone_number" value="{{$Telephone_number}}" placeholder="Ingrese su Número Telefonico">
    <input class="botons" type="submit" value="{{$boton}}">
</form>
</section>
@stop
@section('footer')
@parent
@stop
