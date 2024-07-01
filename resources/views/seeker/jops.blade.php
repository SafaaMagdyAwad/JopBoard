@extends('layout.app')
@section('title')
    JOPS
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


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> title</th>
        <th scope="col"> salary</th>
        <th scope="col">type</th>
        <th scope="col">company</th>
        <th scope="col"> </th>
        <th scope="col"> </th>
        <th scope="col"> </th>
        <th scope="col"> </th>
        
      

      </tr>
    </thead>
    <tbody>
{{-- //foreach --}}

@if (@isset($sjops))
    @foreach ($sjops as $jop)

    <tr>
        <th scope="row">*</th>
        <td>{{$jop['title']}}</td>
        <td>{{$jop['salary']}}</td>
        <td>{{$jop['type']}}</td>
        <td>{{$jop['company']}}</td>
        <td><a href="{{route('jop',[$jop['id']])}}" class="btn btn-success">view the jop</a></td>
        {{-- <td> <a href="{{route('waitingList',[$jop['id']])}}" class="btn btn-warning">waiting list</a></td>
        <td><a href="{{route('allJopRequests',[$jop['id']])}}" class="btn btn-success">view the jop requests</a></td> --}}
        <td><a href="{{route('updateJopForm',[$jop['id']])}}" class="btn btn-warning">update the jop</a></td>
        <td><a href="{{route('deleteJop',[$jop['id']])}}" class="btn btn-danger">delete the jop</a></td>
        
    </tr>
   
    @endforeach
@else
{{-- all jops he cant update or delete --}}
    @foreach ($jops as $jop)
    <tr>
        <td>{{$jop['id']}}</td>
        <td>{{$jop['title']}}</td>
        <td>{{$jop['salary']}}</td>
        <td>{{$jop['type']}}</td>
        <td>{{$jop['company']}}</td>
        <td><a href="{{route('jop',[$jop['id']])}}" class="btn btn-light">view the jop</a></td>
        @if ($user['id']==$jop['user_id'])
        <td><a href="{{route('updateJopForm',[$jop['id']])}}" class="btn btn-light">update the jop</a></td>
        <td><a href="{{route('deleteJop',[$jop['id']])}}" class="btn btn-light">delete the jop</a></td>
        @endif
    </tr>
    @endforeach
@endif


    </tbody>
</table>






   
@endsection
   
