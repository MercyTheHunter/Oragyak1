@extends("layout")
@section("content")
<h1>Órai feladat</h1>
    <p>Név: {{$diak->nev}}</p>
    <p>Cím: {{$diak->cim}}</p>
    <p>Évfolyam: {{$diak->hanyadik}}</p>
@endsection