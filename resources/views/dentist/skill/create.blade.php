@extends('layouts.admin_lte')

@section('page-title')
    เพิ่มอัตราเร็วหมอต่อการรักษา
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
    
    <form action="{{ route('skill.store') }}" method="post">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>เวลาที่ใช้ในการรักษา <span style="font-size: 12px">(นาที)</span></label>
                        <select class="form-control" name="id">
                            @foreach ($treatmentList_filtered as $treatment)
                                <option value="{{ $treatment->id }}">{{ $treatment->treatment_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>เวลาที่ใช้ในการรักษา <span style="font-size: 12px">(นาที)</span></label>
                        <select class="form-control" name="time_spent">
                            <option>5</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                        </select>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{ $dent_id }}" name="dent_id">
            <button type="submit" class="btn btn-info">บันทึก</button>
        </div><!--Card body-->
    </form>
</div>
@endsection                    

