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
            <a href="{{ route('treatment.create') }}" class="btn btn-info me-md-2 float-right">เพิ่มใหม่</a>
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
                            <a href="{{ route('treatment.edit', $value->id) }}" class="btn btn-secondary">
                                <i class="fa fa-edit"></i>
                                แก้ไข
                            </a>
                            <a href="/treatment/{{$value->id}}" class="btn btn-danger delete-confirm" role="button">ลบ</a>
                            {{-- <button class="btn btn-danger delete-confirm" onclick="deleteItem(this)" data-id="{{ $value->id }}" data-action="{{ route('treatment.destroy',$value->id) }}" onclick="deleteConfirmation({{$value->id}})">ลบ</button> --}}
                            {{-- <a href="{{ route('treatment.destroy', $value->id) }}" class="btn btn-danger delete-confirm">
                                <i class="fa fa-trash"></i>
                                ลบ
                            </a> --}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>  <!--card-body-->
    </div><!--card-->        
@endsection

@section('my-script')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- SweetAlert CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#treatment-table').DataTable();
        });
    </script>

<script>
    $('.delete-confirm').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
           }).then(function(value) {
           if (value) {
           window.location.href = url;
         }
       });
      });
 </script>

    {{-- <script type="application/javascript">
        function deleteItem(e){
            let id = e.getAttribute('data-id');
            const swalWithBootstrapButtons = Swal.fire({
                title: 'ยืนยันที่จะลบรายการนี้หรือไม่?',
                text: "คุณจะไม่สามารถย้อนกลับได้!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'สำเร็จ!',
                    'ลบรายการที่เลือกเรียบร้อยแล้ว.',
                    'success',
                    );
                    location.attr('href');
                    
                }
            });

        }

    </script> --}}
@endsection                       

