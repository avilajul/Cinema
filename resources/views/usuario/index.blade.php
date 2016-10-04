@extends('layouts.admin')

<?php $message = Session::get('message') ?>
@if($message == 'store')
  <div class="alert alert-success alert-dismissiable">
    <button type="button" class="close" data-dimiss="alert" aria-label="Close" name="button">
      <span aria-hidden="true">
         &times;
      </span>
    </button>
    Usuario creado exitosamente
  </div>
@endif

@section('content')
  <table class="table">
    <thead>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Operación</th>
    </thead>
    @foreach($users as $user)
      <tbody>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td></td>
      </tbody>
    @endforeach
  </table>
@endsection
