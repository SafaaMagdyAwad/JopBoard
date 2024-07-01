@extends('layout.app')
@section('title')
     notifications
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
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">company</th>
        <th scope="col">from</th>
        <th scope="col"> title</th>
        <th scope="col">content</th>
        <th scope="col">jop title</th>
        <th scope="col">salary</th>
        
      </tr>
    </thead>
    <tbody>
@foreach ($notifications as $notification)
      <tr>
        <th scope="row">{{$notification['id']}}</th>
        <td>{{$notification['company']}}</td>
        <td>{{$notification['sender_name']}}</td>
        <td>{{$notification['title']}}</td>
        <td>{{$notification['content']}}</td>
        <td>{{$notification['jop_title']}}</td>
        <td>{{$notification['jop_salary']}}</td>
      </tr>
      {{-- $user['id'] is jop id --}}
      @endforeach
    </tbody>
  </table>
@endsection
  
