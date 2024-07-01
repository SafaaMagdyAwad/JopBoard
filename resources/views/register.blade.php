@extends('layout.app')
@section('title')
Registeration
@endsection
@section('content')
     <div class="container bg-dark" >
    <div class="row justify-content-center mt-5">
      <div class="col-lg-5 main position-relative mt-5 d-flex flex-column align-items-center">
        <h2 class="text-white mt-5 fw-bold">Registeration Form</h2>
        <h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </h3>

        <form action="{{route('register')}}" method="post" class="mt-3 w-100 px-3 bg-dark">
            @csrf
          <div class="form-group mb-3">
            <label for="" class="text-white form-label">name*</label>
            <input type="text" placeholder="e.g. John Doe" class="form-control form-control-input py-2" name="name" required>
          </div>
         
          <div class="form-group mb-3">
            <label for="" class="text-white form-label">Email*</label>
            <input type="email" placeholder="Email" class="form-control form-control-input py-2"  name="email"  required>
          </div>
          <div class="form-group mb-3">
            <label for="" class="text-white form-label">Password*</label>
            <input type="password" placeholder="Password" class="form-control form-control-input py-2"  name="password"  required>
          </div>
          <div class="form-group mb-3">
            <label for="" class="text-white form-label">RePassword*</label>
            <input type="password" placeholder="Password" class="form-control form-control-input py-2"  name="password_confirmation"  required>
          </div>
          <div class="col-md-10">
            <select name="rule" id="" class="form-control py-1">
              <option value="" disabled>Select rule</option>
              <option value="employee">employee</option>
              <option value="seeker">seeker</option>
            </select>
          </div>
          <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">Register</button>
          <a href="{{route('loginForm')}}" class="text-center d-block fs-4 text-white mb-5">Already have account?</a>
        </form>
       
      </div>
    </div>
  </div>
@endsection
 
