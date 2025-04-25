<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome CDN link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            align-items: center;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
            justify-content: center;
            /* width: 640; */
            height: 100vh;
            padding: 15px;
            /* background: #d0ebff; */
            background-image: url(images/bg1.jpg);
            background-size: cover;
            /* ขยายภาพให้เต็มพื้นที่ โดยรักษาสัดส่วน */
            background-repeat: no-repeat;
            background-position: center;
            overflow: hidden;
        }

        .wrapper {
            /* max-width: 500px; */
            max-width: 360px;
            width: 100%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            height: 100px;
            /* ลดจาก 120px */
            background: #5aaeec;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 24px;
            /* ลดจาก 30px */
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form {
            /* padding: 25px 35px; */
            padding: 20px 25px;
            /* ลด padding */
        }

        .wrapper form .row {
            height: 50px;
            /* ลดจาก 60px */
            margin-top: 15px;
            margin-bottom: 15px;
            position: relative;
        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 60px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 16px;
            transition: all 0.3s ease;
            margin-bottom: 10px;
        }

        form .row input:focus {
            border-color: #5aaeec;
        }

        form .row input::placeholder {
            color: #999;
        }

        .wrapper form .row i {
            position: absolute;
            width: 45px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #5aaeec;
            border: 1px solid #5aaeec;
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form .pass {
            margin-top: 12px 0;
        }

        .wrapper form .pass a {
            color: #5aaeec;
            font-size: 17px;
            text-decoration: none;
        }

        .wrapper form .pass a:hover {
            text-decoration: underline;
        }

        .wrapper form .button input {
            margin-top: 20px;

            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            background: #5aaeec;
            border: 1px solid #5aaeec;
            cursor: pointer;
        }

        form .button input:hover {
            background: #5aaeec;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="title"><span>เข้าสู่ระบบ</span></div>
        <form action="/loginpost" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <i class="fas fa-user"></i>
                {{-- <input type="text" placeholder="Email or Phone" required /> --}}
                <input type="text" placeholder="รหัสพนักงาน"  name="username" required />
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="รหัสผ่าน" name="password" required />
            </div>
            {{-- <div class="pass"><a href="#">Forgot password?</a></div> --}}
            <div class="row button">
                <input type="submit" value="เข้าสู่ระบบ" />
            </div>
            @if (session('success'))
                <div class="text-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="text-danger">{{ session('error') }}</div>
            @endif

        </form>
    </div>
</body>

</html>
