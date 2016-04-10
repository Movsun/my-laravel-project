@extends('layouts.app')

@section('content')

    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <div class="row">
          <h3> {{ $userProfile->first_name }} 's profile </h3>
        </div>
        <div>
          <div class="col-md-2">
              <img src="{{$userProfile->profile_picture}}" class="img-thumbnail" alt="No Picture" width="200" height="200">
          </div>
          <div class="col-md-10">
              <h4> {{ $userProfile->first_name }} {{ $userProfile->last_name }} </h4>
          </div>
          <div class="row">
            <strong>Primary Discipline:</strong>
          </div>
          <div class="row">
            <strong>Member Type:</strong>
            @foreach($userProfile->user->userTypes as $type)
                {{ $type->name }}
            @endforeach
          </div>
          <div class="row">
            <strong>Last Logon:</strong> {{ date('F d, Y', strtotime($userProfile->last_online)) }}
          </div>
          <div class="row">
            <strong>Member Since:</strong> {{ date('F d, Y', strtotime($userProfile->created_at)) }}
          </div>
        </div>
      </div>
    </div>
@endsection
