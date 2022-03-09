@extends('layouts.admin_lte')

@section('page-title')
    ข้อมูลหมอ
@endsection

@section('content')

<div class="card card-default">
    <div class="card-header">
        <a href="{{ route('dentist.create') }}" class="btn btn-info me-md-2 float-right">เพิ่มหมอใหม่</a>
    </div><!--card-header-->
    
    <div class="card-body" style="margin-left: 10px; margin-right: 10px">
        {{-- <div class="callout callout-danger">
            <div class="row">
                <div class="col-3" style="display: flex; justify-content: center; align-items: center;">
                    <img class="mx-auto d-block img-fluid" src="http://www.smileprofiledental.com/wp-content/uploads/2019/04/doctor.png" alt="dentist" width="150">
                </div>
                <div class="col-3" style="display: flex;align-items: center;">
                    <div class="row">
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small">
                                <span class="fa-li" style="margin-top: 5px"><i class="fas fa-lg fa-user"></i></span>
                                <h4>หมอเอ</h4>
                            </li>
                            <br>
                            <li class="small">
                                <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                Phone: test@gmail.com
                            </li>
                            <br>
                            <li class="small">
                                <span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span>
                                Email: (+66)87 523 4512
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 45%">รายการรักษา</th>
                                        <th>อัตราส่วนเวลาต่อการรักษา(1:นาที)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td align="center"><span class="badge bg-danger">15</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td align="center"><span class="badge bg-danger">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td align="center"><span class="badge bg-danger">10</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td align="center"><span class="badge bg-danger">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td align="center"><span class="badge bg-danger">15</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td align="center"><span class="badge bg-danger">15</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td align="center"><span class="badge bg-danger">15</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        </div>
                </div>
            </div>
        </div> --}}

        @foreach ($data as $dentist)
        <div class="callout callout-info">
            <div align="end" style="margin-bottom: 10px">
                <a href="{{ route('dentist.edit', $dentist->id) }}" class="btn btn-secondary">
                    <i class="fa fa-edit"></i>
                    แก้ไข
                </a>
                <a href="" class="btn btn-danger delete-confirm" role="button">ลบ</a>
            </div>

            <div class="row">
                <div class="col-3" style="display: flex; justify-content: center; align-items: center;">
                    <img class="mx-auto d-block img-fluid" src="{{ $dentist->image }}" alt="dentist" width="150">
                </div>
                <div class="col-3" style="display: flex;align-items: center;">
                    <div class="row">
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small">
                                <span class="fa-li" style="margin-top: 8px"><i class="fas fa-lg fa-user"></i></span>
                                <h4>{{ $dentist->dentist_name }}</h4>
                            </li>
                            <br>
                            <li class="small">
                                <span class="fa-li" style="margin-top: 1px"><i class="fas fa-lg fa-phone"></i></span>
                                Phone: (+66) {{ Str::substr($dentist->phone, 1, 9) }}
                            </li>
                            <br>
                            <li class="small">
                                <span class="fa-li" style="margin-top: 2px"><i class="fas fa-lg fa-envelope"></i></span>
                                Email: {{ $dentist->email }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Striped Full Width Table</h3>
                        </div> --}}
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 45%">รายการรักษา</th>
                                        <th>อัตราส่วนเวลาต่อการรักษา(1:นาที)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td align="center"><span class="badge bg-info">15</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td align="center"><span class="badge bg-info">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td align="center"><span class="badge bg-info">10</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td align="center"><span class="badge bg-info">10</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection