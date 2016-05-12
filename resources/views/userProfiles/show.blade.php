@extends('layouts.app')

@section('content')
    @include('userProfiles.show_fields')

    <div class="form-group">
           <a href="{!! route('userProfiles.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
