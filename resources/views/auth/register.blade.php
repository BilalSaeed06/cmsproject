@extends('layouts.app')

@section('content')
  <div class="columns">
    <div class="column is-one-third is-offset-one-third">
      <div class="card m-t-50">
        <div class="card-content">
          <h1 class="title">
            Register
          </h1>
          <form role="form" action="{{route('register')}}" method="post">
            {{ csrf_field() }}

            <div class="field">
              <label for="name" class="label">
                Name
              </label>
              <p class="control">
                <input class="input {{$errors->has('name')? 'is-danger':''}}" type="text" name="name" id="name" value="{{old('name')}}" >
              </p>
              @if ($errors->has('name'))
                <p class="help is-danger">{{$errors->first('name')}}</p>
              @endif
            </div>

            <div class="field">
              <label for="email" class="label">
                Email
              </label>
              <p class="control">
                <input class="input {{$errors->has('email')? 'is-danger':''}}" type="text" name="email" id="email" placeholder="email@example.com" value="{{old('email')}}" >
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label for="password" class="label">
                    Password
                  </label>
                  <p class="control">
                    <input class="input {{$errors->has('password')? 'is-danger':''}}" type="password" name="password" id="password" >
                  </p>
                  @if ($errors->has('password'))
                    <p class="help is-danger">{{$errors->first('password')}}</p>
                  @endif
                </div>
              </div>
              <div class="column">

                <div class="field">
                  <label for="password_confirmation" class="label">
                    Confirm Password
                  </label>
                  <p class="control">
                    <input class="input {{$errors->has('password_confirmation')? 'is-danger':''}}" type="password" name="password_confirmation" id="password_confirmation" >
                  </p>
                  @if ($errors->has('password_confirmation'))
                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                  @endif
                </div>
              </div>
            </div>
            <label>
              <input  name="remember" type="checkbox" class="m-t-10">
              Remember me
            </label>
            <button class="button is-primary is-outlined m-t-20 is-fullwidth">
              Register
            </button>
          </form>
        </div>

      </div>
      <h5 class="has-text-centered m-t-20">
        <a href="{{route('login')}}" class="is-muted">Already have an Account?</a>
      </h5>
    </div>
  </div>

@endsection
