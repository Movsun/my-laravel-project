@extends('layouts.app')

@section('content')

<div class="container">
  @foreach ($materials as $material)
      <a href="materials/{{$material->id}}" > {{ $material->name }} </a>
  @endforeach
</div>

{!! $materials->render() !!}

@endsection
