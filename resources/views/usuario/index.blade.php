@extends('layouts.admin')

<?php $message = Session::get('message') ?>
@if(Session::has('message'))
  <div class="alert alert-success alert-dismissiable">
    <button type="button" class="close" data-dimiss="alert" aria-label="Close" name="button">
      <span aria-hidden="true">
         &times;
      </span>
    </button>
    {{Session::get('message')}}
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
        <td>
          {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!}
        </td>
      </tbody>
    @endforeach
  </table>
@endsection
