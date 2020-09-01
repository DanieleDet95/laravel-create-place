@extends('layouts.layout')
<?php

?>
@section('main')
  <h2>Stampa con handlebars</h2>
  <div id="student-list"></div>

  <script id="student-template" type="text/x-handlebars-template">
    <h2>Studente: @{{ nome }} @{{ cognome }}</h2>
    <ul>
      <li>Voto: @{{ voto }}</li>
    </ul>
  </script>

  <script src="{{ asset('js/app.js') }}"></script>

@endsection
