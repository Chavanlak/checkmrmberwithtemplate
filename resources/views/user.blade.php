<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th style="text-align: center">ชื่อ</th>
                <th style="text-align: center">สกุล</th>
                <th style="text-align: center">อีเมล</th>
                <th style="text-align: center">เเผนก</th>
                <th style="text-align: center">รหัสผู้ใช้</th>
                <th style="text-align: center">เบอร์โทร</th>
                <th style="text-align: left; padding-left: 150px; ">เมนู</th>
            </tr>
        </thead>

        @foreach ($userList as $user)
            <tbody>
                <tr>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->department }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phone }}</td>

                </tr>


    @endforeach

    </tbody>
</table>
</body>

</html>
