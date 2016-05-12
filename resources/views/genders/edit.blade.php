@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Gender</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($gender, ['route' => ['genders.update', $gender->id], 'method' => 'patch']) !!}

            @include('genders.fields')

            {!! Form::close() !!}
        </div>
@endsection