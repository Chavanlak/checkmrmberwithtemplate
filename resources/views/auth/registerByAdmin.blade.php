@extends('layout.adminlayout')

@section('title', 'Register Page')

@section('content')
  <div class="row mt-4">
    <div class="col-12 mt-4">
      
         
          @section('content')
          {{-- <h4 class="card-title">Setting</h4> --}}
          <p class="card-text">ลงทะเบียนผู้ใช้</p>
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
              </div>
            </div>
          
            <div class="row mb-3">
              <div class="col-md-8 col-lg-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
          
            <div class="row mb-3">
              <div class="col-md-6 col-lg-4">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" required>
              </div>
            </div>
          
            <div class="row mb-3">
              <div class="col-md-6 col-lg-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
            </div>
          
            <div class="row mb-3">
              <div class="col-md-6 col-lg-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
            </div>
          
            <div class="row mb-3">
              <div class="col-md-6 col-lg-4">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
              </div>
            </div>
          
            <div class="row">
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </div>
          </form>
            {{-- <form >
              <div class="mb-3">
                <label for="name" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Department</label>
                <input type="password" class="form-control" id="department" name="department" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Phone</label>
                <input type="password" class="form-control" id="phone" name="phone" required>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
            </form> --}}
            @endsection


  
    </div>
  </div>
@endsection
