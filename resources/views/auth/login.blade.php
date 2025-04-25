@extends('layout.adminlayout')

@section('title', 'Register Page')

@section('content')
  <div class="row mt-4">
    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-body p-5">
          <h4 class="card-title">Setting</h4>
          <p class="card-text">Register</p>
         
          <div id="big-card-content" style="background-color: #f8f9fa; border: 1px solid #ced4da; padding: 20px; border-radius: 8px;">
            <form >
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
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
