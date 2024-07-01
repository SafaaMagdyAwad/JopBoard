@extends('layout.app')
@section('title')
  UPDATE JOP
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
     create jop form

    <form action="{{route('updateJop',[$jop['id']])}}" method="post" class="mt-3 w-100 px-3 bg-dark">
        @csrf
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Title*</label>
        <input type="text" placeholder="title" class="form-control form-control-input py-2"  name="title" value="{{$jop['title']}}" required>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Salary*</label>
        <input type="text" placeholder="salary" class="form-control form-control-input py-2" value="{{$jop['salary']}}" name="salary" >
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Requirements*</label>
        <textarea name="requirements" id="" cols="30" rows="10">{{$jop['requirements']}}</textarea>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Discription*</label>
        <textarea name="discription" id="" cols="30" rows="10">{{$jop['discription']}}</textarea>
      </div>
      <input type="hidden" name="user_id" value="{{$jop['user_id']}}">
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Location*</label>
        <input type="text" placeholder="location" class="form-control form-control-input py-2" value="{{$jop['location']}}"  name="location" >
      </div>
      <div class="col-md-10">
        <select name="type" id="" class="form-control py-1">
          <option value="" disabled>select type</option>
          <option {{ $jop['type']=="partTime"?"selected": "" }} value="partTime">part Time</option>
          <option {{ $jop['type']=="fullTime"?"selected":""  }} value="fullTime">full Time</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">company*</label>
        <input type="text" placeholder="company" class="form-control form-control-input py-2" value="{{$jop['company']}}" name="company" >
      </div>
      <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">update</button>
    </form>
@endsection
   
   

