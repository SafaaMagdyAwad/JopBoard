@extends('layout.app')
@section('title')
{{$user['name']}} home
@endsection

@section('link1')
<a href="{{route('allJops')}}" class="nav-link">ALL JOPS</a>
@endsection
@section('link2')
<a href="{{route('notifications')}}" class="nav-link">NOTIFICATIONS</a>
@endsection
@section('link3')
<a href="{{route('reqTrack')}}" class="nav-link"> TRACKING MY REQUEST</a>
@endsection

@section('link8')
<a href="{{route('logout')}}" class="nav-link">LOGOUT</a>
@endsection

@section('content')
        <h1>
        {{$user['name']}}
    </h1>

@endsection
