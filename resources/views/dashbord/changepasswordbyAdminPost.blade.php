@extends('layout.mainlayout')

<!-- @section('title', 'Register Page') -->

@section('content')
    <div class="row mt-4">
    @section('content')
        <p class="card-text">เปลี่ยนรหัสผ่าน</p>
        {{-- <form action="/updatepassword" id="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <form >
            <div class="form-group">
                <label for="username">Username</label>
                {{-- <input class="form-control form-control-lg border-left-0" type="text" value="{{ $username }}"
                    disabled> --}}
                    <input class="form-control form-control-lg border-left-0" type="text" 
                    disabled>
            </div>
            <div class= "form-group">
                <label for="change_password" style="font-size:14px;">{{ 'Change Password' }}</label>


                <input id="change_password" type="password" class="form-control form-control-lg border-left-0"
                    name="change_password" required autocomplete="new-password"maxlength="6" minlength="6" required
                    pattern = "(?=.*\d)(?=.* [a-z])(?=.* [A-Z])(?=.*?[0-9])(?=.*?[~`!@#$%\^&*()\-_=+[\]{};:\x27.,\x22\\|/?><]).{4,}">

            </div>

            <div class="form-group">
                <label for="change_password_comfirmtion" style="font-size:14px;">{{ 'Confirm Password' }}</label>


                <input id="change_password_comfirmtion" type="password"
                    class="form-control form-control-lg border-left-0  @error('change_password') is-invalid @enderror"
                    name="change_password_comfirmtion" required autocomplete="new-password" maxlength="6" minlength="6"
                    required
                    pattern = "(?=.*\d)(?=.* [a-z])(?=.* [A-Z])(?=.*?[0-9])(?=.*?[~`!@#$%\^&*()\-_=+[\]{};:\x27.,\x22\\|/?><]).{4,}">
                @error('change_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            @if (session('success'))
                <div class="text-success">Password updated successfully!</div>
            @endif
            <input value="update password" type="submit"
                class="my-3 btn btn-primary"onclick="return confirm('คุณต้องการเปลี่ยนรหัสผ่านหรือไม่')">

    </div>


    </form>

@endsection
</div>
</div>
@endsection
