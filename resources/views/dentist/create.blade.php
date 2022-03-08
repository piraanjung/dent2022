@extends('layout')

@section('head')

<style>
    .form-section {
        padding-left: 15px;
    }
    .form-section.current {
        display: inline;
    }
    .btn-info, .btn-btn-success {
        margin-top: 10px;
    }
    .parslay-error-list {
        margin: 2px 0 3px;
        padding: 0;
        list-style-type: none;
        color: red;
    }
</style>

@endsection

@section('content')

    <div class="page" align="center">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin: auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Register Example</h3>
                        </div>
    
                        <div class="card-body">
                            <form class="contact-form">
                                @csrf
                                <div class="form-section">
                                    <label for="dentist_name">ชื่อ-สกุล</label>
                                    <input type="text" name="dentist_name" class="form-control" required>
                                </div>
            
                                <div class="form-section">
                                    <label for="phone">เบอร์โทร</label>
                                    <input type="tel" name="phone" class="form-control" required>
            
                                    <label for="email">อีเมล</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
            
                                <div class="form-section">
                                    <label for="image">รูปภาพ</label>
                                    <textarea type="text" name="image" class="form-control" required></textarea>
                                </div>
            
                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info float-left">Previous</button>
                                    <button type="button" class="next btn btn-info float-right">Next</button>
                                    <button type="button" class="btn btn-success float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    $(function() {
        var $sections = $(.form-section);

        function navigateTo(index) {
            $section.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= section.length - 1;
            $('form-navigation .next').toggle(!atTheEnd);
            $('form-navigation [type-submit]').toggle(!atTheEnd);
        }

        function curIndex() {
            return $section.index($sections.filter('current'));
        }

        $('.form-navigation .previous').click(function() {
            navigateTo(curIndex - 1);
        });

        $('.form-navigation .next').click(function() {
            $('.contact-form').parslay().whenValidate({
                group: 'block-' + curIndex();
            }).done(function() {
                navigateTo(curIndex() + 1);
            });
        });

        $section.each(function(index, section) {
            $(section).find(':input').attr('data-parslay-group', 'block' +index);
        });

        navigateTo(0);
    });

@endsection