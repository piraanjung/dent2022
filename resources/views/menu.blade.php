@extends('layouts.admin_lte')

@section('page-title')
  Menu
@endsection

@section('content')
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
                  <a href="{{ route('dentist.index') }}" class="btn btn-app col-lg-3 col-12" style="height: 8rem; font-size: 20px;">
                    <i class="fas fa-play"></i> ข้อมูลหมอ
                  </a>
                  <a href="{{ route('treatment.index') }}" class="btn btn-app col-lg-3 col-12" style="height: 8rem; font-size: 20px;">
                      <i class="fas fa-pause"></i> รายการรักษา
                  </a>
              </div>
              <!-- /.card-body -->
          </div>
      </div>
  </div>
</div>
@endsection