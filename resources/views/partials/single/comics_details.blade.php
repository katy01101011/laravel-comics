@extends('layouts.app')

@section('main-content')

@include('components.home.jumbotron')

@include('components.details.single_comics')
    
@endsection

{{-- {{ $databaseComics }} --}}