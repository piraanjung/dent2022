@extends('layout');

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>รายการรักษา</h2>
            <a href="#" data-toggle="modal" data-target="#ModalCreate" class="btn btn-success my-3"> เพิ่มใหม่</a>
        </div>
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

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>รายการรักษา</th>
            <th>ราคา</th>
            <th width="280px">Active</th>
        </tr>

        @foreach ($data as $kay => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->treatment_name }}</td>
                <td>{{ Str::limit($value->description, 100) }}</td>
                <td>
                    <form action="{{ route('treatment.destroy', $value->id) }}">
                        <a href="{{ route('treatment.show', $value->id) }}" class="btn btn-primary">ดู</a>
                        <a href="{{ route('treatment.edit', $value->id) }}" class="btn btn-secondary">แก้ไข</a>
                        @csrf
                        @method('ลบ')
                        <button type="submit" class="btn btn-danger">ลบ</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@include('treatment.modal.create')
@endsection
