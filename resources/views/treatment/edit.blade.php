@extends('layouts.admin_lte')

@section('my-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

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
    
    <form action="{{ route('treatment.update', $treatment->id) }}" method="POST">
        {{ method_field('patch') }}
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="treatment_name">ชื่อรายการรักษา</label>
                        <input type="text" class="form-control" value="{{ $treatment->treatment_name }}" id="treatment_name" name="treatment_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sub_category">ประเภทย่อย</label>
                        <input type="text" class="form-control" value="{{ $treatment->sub_category }}" id="sub_category" name="sub_category" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">ราคา</label>
                        <input type="number" class="form-control" value="{{ $treatment->price }}" id="price" name="price" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="priority">ลำดับความสำคัญ</label>
                        <input type="text" class="form-control" value="{{ $treatment->priority }}" id="priority" name="priority" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">คำอธิบาย</label>
                        <textarea name="description" rows="4" style="min-width: 100%" required>{{ $treatment->description }}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">บันทึก</button>
        </div>
    </form>
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

