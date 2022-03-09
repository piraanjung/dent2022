@extends('layouts.admin_lte')

@section('page-title')
    แก้ไขข้อมูลส่วนตัว {{ $dentist->dentist_name }}
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

<div class="card card-info">
    <div class="card-header">
        {{-- <h3 class="card-title">เพิ่มรายการรักษา</h3> --}}
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
@endsection

{{-- @section('content')

    <div class="page" align="center">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin: auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Register Example</h3>
                        </div>
    
                        <div class="card-body">
                            <form class="contact-form">
                                @csrf
                                <div class="form-section">
                                    <label for="dentist_name">ชื่อ-สกุล</label>
                                    <input type="text" name="dentist_name" class="form-control" required>
                                </div>
            
                                <div class="form-section">
                                    <label for="phone">เบอร์โทร</label>
                                    <input type="tel" name="phone" class="form-control" required>
            
                                    <label for="email">อีเมล</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
            
                                <div class="form-section">
                                    <label for="image">รูปภาพ</label>
                                    <textarea type="text" name="image" class="form-control" required></textarea>
                                </div>
            
                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info float-left">Previous</button>
                                    <button type="button" class="next btn btn-info float-right">Next</button>
                                    <button type="button" class="btn btn-success float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection --}}