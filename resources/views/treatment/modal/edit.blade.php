<link rel="stylesheet" href="{{asset("backend\dist\css\adminlte.min.css")}}">
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
<div class="modal fade" id="modal-default" style="padding-right: 17px; display: block;" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route ('treatment.update', $value->id) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="container">
                        <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <strong>{{ __('ชื่อรายการรักษา') }}:</strong>
                                {!! Form::text('treatment_name', $value->treatment_name, null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <strong>{{ __('ประเภทย่อย') }}:</strong>
                                {!! Form::text('sub_category', $value->sub_category, null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <strong>{{ __('ราคา') }}:</strong><span style="padding-left: 5px; font-size: 12px;">(บาท)</span>
                                {!! Form::number('price', $value->price, null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <strong>{{ __('ลำดับความสำคัญ') }}:</strong>
                                {!! Form::text('priority', $value->priority, null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <strong>{{ __('คำอธิบาย') }}:</strong>
                                    {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} --}}
                                    {!! Form::textarea('description', $value->description, null, array('class' => 'form-control', 'rows' => 4, 'cols' => 40, 'multiple')) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('กลับ') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('แก้ไข') }}</button>
                    </div>
                </form>
            </div>
            
        </div>

    </div>

</div>


