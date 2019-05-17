@extends ('welcome')
@section('body')
    <ul>
       @foreach ($films as $film)
        <li> <a href="http://localhost:8000/films/{{$film->id}}">{{ $film->title }}</a> </li>
        @endforeach
    </ul>
@stop
