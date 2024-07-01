@extends('layout.app')
@section('title')
    JOP
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
       <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> title</th>
                <th scope="col"> salary</th>
                <th scope="col">type</th>
                <th scope="col">company</th>
                <th scope="col">location</th>
                <th scope="col">requirements</th>
                <th scope="col"> discription</th>
                <th scope="col"> </th>
              
        
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
                <td>{{$jop['location']}}</td>
                <td>{{$jop['requirements']}}</td>
                <td>{{$jop['discription']}}</td>
                <td>
                    <form action="{{route('jopApply',[$jop['id']])}}" method="GET">
                        <button {{$button}}  class="btn btn-danger">request this jop</button>
                    </form>
                </td>
                
                {{-- <td><a href="{{route('jopApply',[$jop['id']])}}" class="btn btn-danger"  disabled  >request this jop</a></td> --}}
               
            </tr>
            </tbody>
        </table>
        </div>
@endsection
     
