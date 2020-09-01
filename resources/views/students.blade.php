@extends('layouts.layout')

@section('main_content')

  <h1>Studenti</h1>

  @foreach ($students as $student)

    <div>
      <h2>Nome studente : {{ $student->nome }} {{ $student->cognome }}</h2>
      <ul>
        <li>Classe : {{ $student->classe }}</li>
        <li>Voto : {{ $student->voto }}</li>
      </ul>
    </div>

  @endforeach

@endsection
