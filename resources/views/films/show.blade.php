@extends('welcome')

@section('body')
 <h1>Película</h1>
 <h3>{{ $film->title }}</h3>
 <h3>{{ $film->year }}</h3>
 <h3>{{ $film->description }}</h3>
@stop