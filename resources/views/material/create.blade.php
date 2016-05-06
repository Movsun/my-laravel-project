@extends('layouts.app')

@section('content')

  <form action="/materials" method="post" role="form" class="form-horizontal">
    {!! csrf_field() !!}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label col-sm-2">Material Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label class="control-label col-sm-2" for="description">Material Description: </label>
        <div class="col-sm-10">
          <textarea name="description" class="form-control" rows="5" id="description" value="{{ old('description')}}"></textarea>
          @if ($errors->has('description'))
              <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
        <label class="control-label col-sm-2" for="link">Material Link: </label>
        <div class="col-sm-10">
          <input type="text" name="link" class="form-control" id="link" value="{{ old('link')}}">
          @if ($errors->has('link'))
              <span class="help-block">
                  <strong>{{ $errors->first('link') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <label for="materialCategory" class="control-label col-sm-2">Material Category:</label>
        <div class="col-sm-10">
          <select class="form-control" id="materialCategory" name="material_category_id" value="{{ old('materialCategories') }}">
            @foreach ($materialCategories as $materialCategory)
              <option value="{{$materialCategory->id}}" > {{$materialCategory->name}} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="language" class="control-label col-sm-2">Material Language:</label>
        <div class="col-sm-10">
          <select class="form-control" id="materialLanguage" name="language_id" value="{{ old('materialLanguage') }}">
            @foreach ($languages as $language)
              <option value="{{$language->id}}" > {{$language->name}} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="materialType" class="control-label col-sm-2">Material Type:</label>
        <div class="col-sm-10">
          <select class="form-control" id="materialType" name="material_type_id" value="{{ old('materialType') }}">
            @foreach ($materialTypes as $materialType)
              <option value="{{$materialType->id}}" > {{$materialType->name}} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="materialFormat" class="control-label col-sm-2">Material Format:</label>
        <div class="col-sm-10">
          <select class="form-control" id="materialFormat" name="material_format_id" value="{{ old('materialFormat') }}">
            @foreach ($materialFormats as $materialFormat)
              <option value="{{$materialFormat->id}}" > {{$materialFormat->name}} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="materialType" class="control-label col-sm-2">Material License:</label>
        <div class="col-sm-10">
          <select class="form-control" id="license" name="license_id" value="{{ old('license') }}">
            @foreach ($licenses as $license)
              <option value="{{$license->id}}" > {{$license->name}} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group" >
        <label for="checkbox" class="control-label col-sm-2">Material Author: </label>
        <div class="col-sm-10">
          <label  class="checkbox-inline">
            <input id="checkbox" type="checkbox"  name="is_sumitter_author">Check myself as author </label>
        </div>
      </div>

      <div id="author">

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
              <div class="col-sm-10 col-sm-offset-2">
                <input id="authorFirstName" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif

              </div>
            </div>


            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
              <div class="col-sm-10 col-sm-offset-2">
              <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
              @if ($errors->has('last_name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('last_name') }}</strong>
                  </span>
              @endif
            </div>
          </div>


        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-sm-10 col-sm-offset-2">
            <input type="text" class="form-control" name="email" placeholder="Author Email Address" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
          <div class="col-sm-10 col-sm-offset-2">
            <input type="text" class="form-control" name="website" placeholder="Author Website" value="{{ old('website') }}">
            @if ($errors->has('website'))
                <span class="help-block">
                    <strong>{{ $errors->first('website') }}</strong>
                </span>
            @endif
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <button type="submit" class="btn btn-default"> Submit </button>
        </div>
      </div>
  </form>

@endsection

@section('footer')
<script>
  $(document).ready(function(){
    // alert('hi');
    if(this.checked) {
      // alert('check box');
        $("#author").hide();
    } else {
        $("#author").show();
    }

    $("#checkbox").change(function() {
      // alert('check box');
      // debugger;
      if(this.checked) {
        // alert('check box');
          $("#author").hide();
      } else {
          $("#author").show();
      }
    });
  });
</script>
@endsection
