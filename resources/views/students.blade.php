@extends('layouts.layout')
<?php

?>
@section('main')

  <h1>Teacher: {{ $teacher }}</h1>
  @foreach ($students as $student)
    <h2>Studente: {{ $student->nome }} {{ $student->cognome }}</h2>
    <ul>
      <li>Voto: {{ $student->voto }}</li>
    </ul>
  @endforeach
@endsection
