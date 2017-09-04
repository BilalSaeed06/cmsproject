@extends('layouts.app')

@section('content')

<div class="columns">
  <div class="column is-one-third is-offset-one-third">
    <div class="card m-t-70">
      <div class="card-content">
        <h1 class="title">
          Login
        </h1>
        <form role="form" action="{{route('login')}}" method="post">
{{ csrf_field() }}

        <div class="field">
          <label for="email" class="label">
            Email
          </label>
          <p class="control">
            <input class="input {{$errors->has('email')? 'is-danger':''}}" type="text" name="email" id="email" placeholder="email@examole.com" value="{{old('email')}}" >
          </p>
          @if ($errors->has('email'))
            <p class="help is-danger">{{$errors->first('email')}}</p>
          @endif
        </div>
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

        <label>
          <input  name="remember" type="checkbox" class="m-t-30">
          Remember me
        </label>
<button class="button is-primary is-outlined m-t-20 is-fullwidth" type="submit">
  Login
</button>
</form>
      </div>

    </div>
    <h5 class="has-text-centered m-t-20">
      <a href="{{route('password.request')}}" class="is-muted">Forgot your password?</a>
    </h5>
  </div>
</div>


@endsection
{{-- <div class="field"><label for="" class="label"></label></div> --}}
