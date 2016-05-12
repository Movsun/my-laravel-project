@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit UserProfile</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($userProfile, ['route' => ['userProfiles.update', $userProfile->user_id], 'method' => 'patch']) !!}

            @include('userProfiles.fields')

            {!! Form::close() !!}
        </div>
@endsection
