@extends('layout.app')
@section('title')
WELCOME
@endsection

@section('link1')
<a href="{{route('loginForm')}}" class="nav-link">login</a>

@endsection
@section('link2')
<a href="{{route('registerForm')}}" class="nav-link">register</a>

@endsection


@section('content')

<div class="container">
    <div class="">
        <div class="row">
          <h1>ترحيب ومعلومات عن الموقع شغل فرونت</h1>
          <div class="card">
            عرض وظائف بدون تفاصيل
          </div>
        </div>
    </div>
</div>
@endsection