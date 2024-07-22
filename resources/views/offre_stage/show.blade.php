@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $offre->titre }}</h1>
        <p>{{ $offre->description }}</p>
        <p><strong>visibilite :</strong> {{ $offre->visibilite }}</p>
        <p><strong>context :</strong> {{ $offre->context }}</p>
    </div>
@endsection
