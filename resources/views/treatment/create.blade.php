@extends('layouts.admin_lte')

@section('page-title')
    เพิ่มรายการรักษา
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
    
    <form action="{{ route('treatment.store') }}" method="post">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="treatment_name">ชื่อรายการรักษา</label>
                        <input type="text" class="form-control" id="treatment_name" name="treatment_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sub_category">ประเภทย่อย</label>
                        <input type="text" class="form-control" id="sub_category" name="sub_category" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">ราคา</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="priority">ลำดับความสำคัญ</label>
                        <input type="text" class="form-control" id="priority" name="priority" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">คำอธิบาย</label>
                        <textarea name="description" rows="4" style="min-width: 100%"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">บันทึก</button>
        </div>
    </form>
</div>
@endsection                    

