@extends('layouts.admin_lte')

@section('my-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('page-title')
    รายการรักษา
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>
        </div><!--card-header-->
        <div class="card-body table-responsive p-3">
            <table class="table table-hover text-nowrap" id="treatment-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>รายการรักษา</th>
                        <th>ประเภทย่อย</th>
                        <th>ราคา</th>
                        <th width="280px"></th>
                    </tr>
                </thead>
                    <?php $i =0;?>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $value->treatment_name }}</td>
                        <td>{{ $value->sub_category }}</td>
                        <td>{{ $value->price }}</td>
                        <td>
                            
                                <a href="#" data-toggle="modal" data-target="#ModalEdit{{$value->id}}" class="btn btn-secondary">
                                    <i class="fa fa-edit"></i>
                                    แก้ไข</a>
                                <a href="#" data-toggle="modal" data-target="#ModalDelete{{$value->id}}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                    ลบ</a>
                        
                        </td>
                        @include('treatment.modal.edit')
                        @include('treatment.modal.delete')
                    </tr>
                @endforeach
            </table>
        </div>  <!--card-body-->
    </div><!--card-->        
@endsection

@section('my-script')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#treatment-table').DataTable();
        });
    </script>
@endsection                       

