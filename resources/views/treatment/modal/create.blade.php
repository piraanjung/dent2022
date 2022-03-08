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

<form action="{{route ('treatment.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('เพิ่มรายการรักษา') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                                <strong>{{ __('ชื่อรายการรักษา') }}:</strong>
                                {!! Form::text('treatment_name', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                                <strong>{{ __('ประเภทย่อย') }}:</strong>
                                {!! Form::text('sub_category', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col">
                              <div class="form-group">
                                  <strong>{{ __('ราคา') }}:</strong><span style="padding-left: 5px; font-size: 12px;">(บาท)</span>
                                  {!! Form::number('price', null, array('placeholder' => '','class' => 'form-control')) !!}
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                  <strong>{{ __('ลำดับความสำคัญ') }}:</strong>
                                  {!! Form::text('priority', null, array('placeholder' => '','class' => 'form-control')) !!}
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <strong>{{ __('คำอธิบาย') }}:</strong>
                                    {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} --}}
                                    {!! Form::textarea('description', null, array('class' => 'form-control', 'rows' => 4, 'cols' => 40, 'multiple')) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </div>
            </div><!---eser-->
        </div>
    </div>
</form>