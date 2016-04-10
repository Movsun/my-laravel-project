@extends('layouts.app')

@section('content')

  {{ $material->name }} <br/>

  {{ $material->description }} <br/>

  {{ $material->user->userProfile->first_name }} <br/>

  <a href='{{ $material->link }}'> url </a>

@endsection
