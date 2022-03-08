<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset ('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('backend/dist/css/adminlte.min.css') }}">
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card-header" style="align:center">
                        <h3 class="card-title">เมนู</h3>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-app col-lg-3 col-6" style="height: 8rem; font-size: 20px;">
                          <i class="fas fa-edit"></i> ภาพรวม
                        </a>
                        <a class="btn btn-app col-lg-3 col-6" style="height: 8rem; font-size: 20px;">
                          <i class="fas fa-play"></i> คิวประจำวันนี้
                        </a>
                        <a class="btn btn-app col-lg-3 col-6" style="height: 8rem; font-size: 20px;">
                          <i class="fas fa-pause"></i> ตารางนัดหมาย
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-app col-lg-3 col-6" style="height: 8rem; font-size: 20px;">
                          <i class="fas fa-save"></i> เลื่อนนัด
                        </a>
                        <a class="btn btn-app col-lg-3 col-3" style="height: 8rem; font-size: 20px;">
                          <span class="badge bg-warning">3</span>
                          <i class="fas fa-bullhorn"></i> เวรชะเบียน/ประวัติคนไข้
                        </a>
                    </div>

                    <div class="card-header">
                        <h3 class="card-title text-center">การตั้งค่า</h3>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-app col-lg-3 col-12" style="height: 8rem; font-size: 20px;">
                          <i class="fas fa-edit"></i> วันให้บริการประจำเดือน
                        </a>
                        <a href="{{url ("dentist") }}" class="btn btn-app col-lg-3 col-12" style="height: 8rem; font-size: 20px;">
                          <i class="fas fa-play"></i> ข้อมูลหมอ
                        </a>
                        <a href="{{url ("treatment") }}" class="btn btn-app col-lg-3 col-12" style="height: 8rem; font-size: 20px;">
                            <i class="fas fa-pause"></i> รายการรักษา
                        </a>
                    </div>

                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<body class="hold-transition sidebar-mini">

  <!-- jQuery -->
<script src="{{asset ('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('backend/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ('backend/dist/js/demo.js') }}"></script>
</body>
</html>
