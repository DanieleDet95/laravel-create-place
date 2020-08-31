@extends('layouts.layout')
<?php

?>
@section('main')

  <h1>Teacher: {{ $teacher }}</h1>
  <h1>Studenti</h1>
  <ul>
    @foreach ($students as $student)
      <li>Nome: {{ $student['nome'] }}</li>
      <li>Cognome: {{ $student['cognome'] }}</li>
      <li>Voto: {{ $student['voto'] }}</li>
    @endforeach
  </ul>
@endsection
