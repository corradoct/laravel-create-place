@extends('layouts.layout')

@section('main_content')

  <h1>Studenti</h1>

  <div id="studentList"></div>

  <script id="student-template" type="text/x-handlebars-template">
    <div >
      <h2>Nome studente : @{{ nome }} @{{ cognome }}</h2>
      <ul>
        <li>Classe : @{{ classe }}</li>
        <li>Voto : @{{ voto }}</li>
      </ul>
    </div>
  </script>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
