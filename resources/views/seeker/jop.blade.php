@extends('layout.app')
@section('title')
    JOP
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
      <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> title</th>
                <th scope="col"> salary</th>
                <th scope="col">type</th>
                <th scope="col">company</th>
                <th scope="col">jop requests</th>
                <th scope="col">waiting list</th>
                <th scope="col">accepted list</th>
              
        
              </tr>
            </thead>
            <tbody>
        {{-- //foreach --}}
        
        
            <tr>
                <th scope="row">*</th>
                <td>{{$jop['title']}}</td>
                <td>{{$jop['salary']}}</td>
                <td>{{$jop['type']}}</td>
                <td>{{$jop['company']}}</td>
                <td><a href="{{route('allJopRequests',[$jop['id']])}}" class="btn btn-success">view the jop requests</a></td>
                <td> <a href="{{route('waitingList',[$jop['id']])}}" class="btn btn-warning">waiting list</a></td>
                <td> <a href="{{route('acceptedList',[$jop['id']])}}" class="btn btn-success">Accepted list</a></td>
               
            </tr>
            </tbody>
        </table>
        </div>

@endsection

    
      
  
