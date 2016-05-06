@extends('layouts.app')

@section('content')

  {{ $material->name }} <br/>

  {{ $material->description }} <br/>

  {{ $material->user->userProfile->first_name }} <br/>

  <a href='{{ URL::to($material->link) }}'> {{$material->link}} </a>

@endsection
