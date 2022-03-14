@extends('layouts.admin_lte')

@section('my-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('page-title')
    ข้อมูล {{ $dentist->dentist_name }}
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>
    There were some problems with your input. <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-md-4">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">ข้อมูลส่วนตัว</h3>
            </div>
            <form action="{{ route('dentist.update', $dentist->id) }}" method="POST">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="dentist_name">ชื่อ-สกุล</label>
                        <input type="text" class="form-control" value="{{ $dentist->dentist_name }}" name="dentist_name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์โทร</label>
                        <input type="tel" class="form-control" value="{{ $dentist->phone }}" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">อีเมล</label>
                        <input type="email" class="form-control" value="{{ $dentist->email }}" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="image">รูปภาพ</label>
                        <input type="text" class="form-control" value="{{ $dentist->image }}" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-info">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">อัตราเร็วหมอต่อการรักษา</h3>
                <a href="{{ url('skill/create/'. $dentist->id) }}" class="btn btn-dark me-md-2 float-right">เพิ่มใหม่</a>
            </div><!--card-header-->
            <div class="card-body table-responsive p-3">
                <table class="table table-hover text-nowrap" id="treatment-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>รายการรักษา</th>
                            <th>เวลาที่ใช้ในการรักษา</th>
                            <th width="280px"></th>
                        </tr>
                    </thead>
                    <?php $i =0;?>
                    @foreach ($skill as $key => $skill)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $skill->treatment_name }}</td>
                            <td>{{ $skill->time_spent }}</td>
                            <td>
                                <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-secondary">
                                    <i class="fa fa-edit"></i>
                                    แก้ไข
                                </a>
                                <a href="/treatment/{{$skill->id}}" class="btn btn-danger delete-confirm" role="button">ลบ</a>
                                {{-- <button class="btn btn-danger delete-confirm" onclick="deleteItem(this)" data-id="{{ $value->id }}" data-action="{{ route('treatment.destroy',$value->id) }}" onclick="deleteConfirmation({{$value->id}})">ลบ</button>
                                <a href="{{ route('treatment.destroy', $value->id) }}" class="btn btn-danger delete-confirm">
                                    <i class="fa fa-trash"></i>
                                    ลบ
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>  <!--card-body-->
        </div><!--card-->       
    </div>
</div> 

@endsection

@section('my-script')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#treatment-table').DataTable();
        });
    </script>
@endsection