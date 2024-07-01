@extends('layout.app')
@section('title')
JOPS
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
        <th scope="col"> title</th>
        <th scope="col"> salary</th>
        <th scope="col">type</th>
        <th scope="col">company</th>
        <th scope="col">status </th>
        <th scope="col"> </th>
       

      </tr>
    </thead>
    <tbody>
{{-- //foreach --}}

@if (@isset($jops))
    @foreach ($jops as $jop)

    <tr>
        <th scope="row">*</th>
        <td>{{$jop['title']}}</td>
        <td>{{$jop['salary']}}</td>
        <td>{{$jop['type']}}</td>
        <td>{{$jop['company']}}</td>
        <td><a href="{{route('jop',[$jop['id']])}}" class="btn btn-light">view the jop</a></td>
    </tr>
   
    @endforeach
@endif

@if (@isset($jop_Status))
    @foreach ($jop_Status as $jop)

    <tr>
        <th scope="row">*</th>
        <td>{{$jop['title']}}</td>
        <td>{{$jop['salary']}}</td>
        <td>{{$jop['type']}}</td>
        <td>{{$jop['company']}}</td>
        <td>{{$jop['status']}}</td>
        {{-- @if ($jop['status']=='accepted') 
        <td><a href="{{route('takeTheJop',[$jop['id']])}}" class="btn btn-light">take the jop</a></td>
        @endif --}}
        @if ($jop['status']=='rejected')
        <td><a href="{{route('deleteJopREquest',[$jop['id']])}}" class="btn btn-light">delete Jop Request</a></td>
        @endif
        @if ($jop['status']=='notSeen' ||$jop['status']=='waiting')
        <td><a href="{{route('jop',[$jop['id']])}}" class="btn btn-light">view the jop</a></td>
        @endif
    </tr>
   
    @endforeach
    @endif

    </tbody>
</table>



   
@endsection
  
