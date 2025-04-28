@extends('layout.adminlayout')

@section('title', 'Register Page')

@section('content')
    <div class="row mt-4">
        <div class="col-12 mt-4">


        @section('content')
            {{-- <h4 class="card-title">Setting</h4> --}}
            <div class="card-body">

                <table class="table table-responsive">
                    <thead>
                    <tbody>
                        <tr>
                            <th style="text-align: center">ชื่อผู้ใช้</th>
                            <th style="text-align: center">เบอร์โทร</th>
                            <th style="text-align: left; padding-left: 150px; ">เมนู</th>

                        </tr>
                    </tbody>
                    @foreach ($userList as $user)
                        <tr>
                            <td style="text-align: center">{{ $user->username }}</td>
                            <td style="text-align: center">{{ $user->phone }}</td>
                            <td>

                                <a href="" class="btn btn-warning" style="margin-right: 50px;">
                                    เปลี่ยนรหัสผ่าน
                                </a>
                                <a href="" class="btn btn-danger"
                                    style="margin-right: 30px; width: 100px; height: 40px "
                                    onclick="return confirm('คุณต้องการลบการจองหรือไม่')">
                                    ลบ
                                </a>


                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>


        @endsection



    </div>
</div>
@endsection
