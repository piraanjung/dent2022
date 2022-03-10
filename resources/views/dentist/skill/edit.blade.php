@extends('layouts.admin_lte')

@section('page-title')
    แก้ไขอัตราเร็วหมอต่อการรักษา
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
    
    <form action="{{ route('skill.update', $skill[0]->id) }}" method="POST">
        {{ method_field('patch') }}
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>เวลาที่ใช้ในการรักษา <span style="font-size: 12px">(นาที)</span></label>
                        <select class="form-control" name="skill_name">
                            @foreach ($treatmentList as $key => $treatment)
                                <option value="{{ $treatment->id }}" {{ $treatment->id == $skill[0]->treatment_id ? 'selected' : '' }}> 
                                    {{ $treatment->treatment_name }} 
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>เวลาที่ใช้ในการรักษา <span style="font-size: 12px">(นาที)</span></label>
                        <select class="form-control" name="time_spent">
                            <option value="5" {{ $skill[0]->time_spent == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ $skill[0]->time_spent == 10 ? 'selected' : '' }}>10</option>
                            <option value="15" {{ $skill[0]->time_spent == 15 ? 'selected' : '' }}>15</option>
                            <option value="20" {{ $skill[0]->time_spent == 20 ? 'selected' : '' }}>20</option>
                            <option value="25" {{ $skill[0]->time_spent == 25 ? 'selected' : '' }}>25</option>
                            <option value="30" {{ $skill[0]->time_spent == 30 ? 'selected' : '' }}>30</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">บันทึก</button>
        </div><!--Card body-->
    </form>
</div>
@endsection                    

