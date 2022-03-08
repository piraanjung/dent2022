@extends('layout')

@section('header')

<header class="bg-white shadow">
    <div class="max-w-7x1 mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="row align-items-center my-2">
            <div class="col" style="margin-top: 20px; margin-bottom: 20px; margin-left:7px">
                <button type="button" onclick="location.href='{{ url('menu') }}'" class="btn btn-block btn-info btn-lg" style="width: 50%">
                    <i class="fa fa-home"></i>    
                    หน้าหลัก
                </button>
            </div>
            <div class="col" style="margin-top: 20px; margin-bottom: 20px;">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                    ข้อมูลหมอ
                </h2>
            </div>
            <div class="col"></div>
        </div> 
    </div>
</header>

@endsection

@section('content')

<div class="card card-default">
    <div class="card-header">
        {{-- <h3 class="card-title">
            <i class="fas fa-bullhorn"></i>
            Callouts
        </h3> --}}
        <div class="row">
            <div class="col">
                <div class="row align-items-center my-2">
                    <div class="form-inline" style="margin-left: 10px">
                        <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                        </div>
                        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row align-items-center my-2">
                    <div class="col" align="end">
                        {{-- @can('treatment-create') --}}
                            <a href="{{url ('dentist.create') }}" class="btn btn-success" style="margin-right: -2px">
                                <span style="color:white"></span> {{ __('เพิ่มหมอใหม่') }}
                            </a>
                        {{-- @endcan --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card-body" style="margin-left: 10px; margin-right: 10px">
        <div class="callout callout-danger">
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
                                        {{-- <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-danger">15</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        {{-- <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-danger">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        {{-- <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-danger">10</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        {{-- <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-danger">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        {{-- <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td> --}}
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
        </div>
        <div class="callout callout-info">
            <div class="row">
                <div class="col-3" style="display: flex; justify-content: center; align-items: center;">
                    <img class="mx-auto d-block img-fluid" src="http://www.smileprofiledental.com/wp-content/uploads/2019/04/doctor.png" alt="dentist" width="150">
                </div>
                <div class="col-3" style="display: flex;align-items: center;">
                    <div class="row">
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small">
                                <span class="fa-li" style="margin-top: 5px"><i class="fas fa-lg fa-user"></i></span>
                                <h4>หมอโย</h4>
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
                                        {{-- <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-info">15</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        {{-- <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-info">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        {{-- <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-info">10</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        {{-- <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td> --}}
                                        <td align="center"><span class="badge bg-info">10</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        </div>
                </div>
            </div>
        </div>
        <div class="callout callout-warning">
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
                            </table>
                        </div>
                        
                        </div>
                </div>
            </div>
        </div>
        <div class="callout callout-success">
            <h5>I am a success callout!</h5>
            <p>This is a green callout.</p>
        </div>
    </div>
    
</div>

@endsection