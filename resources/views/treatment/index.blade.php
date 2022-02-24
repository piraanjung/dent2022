<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Buttons</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset ('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('backend/dist/css/adminlte.min.css') }}">
</head>

<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
      {{ __('รายการรักษา') }}
  </h2>
</x-slot>

<body class="hold-transition sidebar-mini">
  <div>
    <div class="row">
      <div class="col-4" align="start">
        <button onclick="window.location='{{ url("menu") }}'" type="button" class="btn btn-block btn-primary btn-lg" style="width:60%; margin-bottom:1rem; margin-left:2rem; margin-top:2rem;">หน้าหลัก</button>
      </div>
      <div class="col-4">
        <h2 align="center" style="margin-bottom:1rem; margin-left:2rem; margin-top:2rem;">รายการรักษา</h2>
      </div>
      <div class="col-4">
      </div>
    </div>
  </div>

  <div align="right">
    <button type="button" class="btn btn-block btn-primary" style="width:15%; margin-bottom:1rem; margin-right:2rem;">เพิ่มใหม่</button>
  </div>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row" style="margin-left:2rem; margin-right:2rem;"">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>219</td>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-warning">Pending</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>657</td>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-primary">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>175</td>
                <td>Mike Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-danger">Denied</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

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
