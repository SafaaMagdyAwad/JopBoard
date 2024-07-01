@extends('layout.app')
@section('title')
     applyers
@endsection
@section('link1')
<a href="{{route('createJopForm')}}" class="nav-link">create Jop</a>
@endsection
@section('link2')
<a href="{{route('allJops')}}" class="nav-link">all Jops</a>
@endsection
@section('link3')
<a href="{{route('allSeekerJops')}}" class="nav-link">all my Jops</a>
@endsection






@section('link8')
<a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection

@section('content')
@if (@isset($message))
<div class="container">
  <div class="alert_success">
  <h5>{{$message}}</h5>  
  </div></div>  
@endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">employee name</th>
            <th scope="col"> email</th>
            <th scope="col">jop title</th>
            <th scope="col">salary</th>
            <th scope="col">request created at</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>

          </tr>
        </thead>
        <tbody>
      @foreach ($users as $user)
          <tr>
            <th scope="row">*</th>
            <td>{{$user['employee_name']}}</td>
            <td><a href="mailto:{{$user['employee_email']}}">{{$user['employee_email']}}</a></td>
            <td>{{$user['title']}}</td>
            <td>{{$user['salary']}}</td>
            <td>{{$user['created_at']}}</td>
            @if ($user['status']=="notSeen")
            <td><a href="{{route('contact',[$user['employee_id'],$user['jop_id']])}}" class="btn btn-light">notify employee with interview</a></td>
            @endif
            @if ($user['status']=="waiting")
            <th scope="col"><a href="{{route('accepted',[$user['employee_id'],$user['jop_id']])}}" class="btn btn-success">accepted</a></th>
            <th scope="col"><a href="{{route('rejected',[$user['employee_id'],$user['jop_id']])}}" class="btn btn-danger">rejected</a></th>
            @endif
          </tr>
          
      @endforeach
        </tbody>
    </table>
   
@endsection
   
