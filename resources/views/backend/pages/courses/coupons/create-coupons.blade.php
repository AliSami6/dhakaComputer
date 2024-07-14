@extends('backend.layouts.master')
@section('title', 'Create Coupon')
@section('styles')

@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h6 class="nk-block-title page-title">Add new coupons</h6>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><a href="{{route('coupons.courses')}}" class="btn btn-primary"> <em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            <div class="card card-bordered card-preview">
                                <div class="card-title ml-5">
                                    <h6 class="title pt-3 mt-3 pl-5 text-uppercase ml-3">&nbsp; Coupon add form</h6>
                                </div>
                                <div class="card-inner">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="form-label" for="coupon_code">Coupon code*</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="coupon_code" name="coupon_code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="discounts_percentage">Discount percentage</label>
                                            <div class="form-control-wrap">
                                                <input type="number" class="form-control" id="discounts_percentage">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Phone No</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="phone-no">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="form-label" for="expire_date">Expire Date</label>
                                            <div class="form-control-wrap">
                                                <input type="number" class="form-control" id="expire_date">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Submit </button>
                                        </div>
                                    </form>

                                </div>
                            </div><!-- .card-preview -->

                        </div><!-- .row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_js')
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/editors/summernote.css?ver=3.2.2">
    <script src="{{ asset('/') }}backend/assets/js/libs/editors/summernote.js?ver=3.2.2"></script>
    <script src="{{ asset('/') }}backend/assets/js/editors.js?ver=3.2.2"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let i = 1;
            $('.add_field_button').click(function() {
                i++;
                let newRow = '<div class="row mb-3">' +
                    '<label for="course-faq" class="col-sm-2 col-form-label form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" id="course-faq" name="faq[]" placeholder="Faq">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<button type="button" class="btn btn-sm btn-danger remove_row"><em class="icon ni ni-minus"></em></button>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row mb-3">' +
                    '<label for="inputPassword3" class="col-sm-2 col-form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<textarea class="form-control form-control-sm py-2 mb-2" name="answer[]" placeholder="Answer"></textarea>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2"></div>' +
                    '</div>';
                $('.input_fields_wrap').append(newRow);
            });

            $(document).on('click', '.remove_row', function() {
                $(this).closest('.row').next('.row').remove(); // Remove the answer row
                $(this).closest('.row').remove(); // Remove the question row
            });
        });
        let counter = 1;
        $('.add_rq__field_button').click(function() {
            counter++;
            let RnewRow = '<div class="row mb-3">' +
                '<label for="requirments" class="col-sm-2 col-form-label form-label"></label>' +
                '<div class="col-sm-8">' +
                '<div class="form-group">' +
                '<input type="text" class="form-control" id="requirments" name="requirments[]" placeholder="Provide Requirements">' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" class="btn btn-sm btn-danger remove_rq_row"><em class="icon ni ni-minus" ></em></button>' +
                '</div>' +
                '</div>';
            $('.req_fields').append(RnewRow);
        });

        $(document).on('click', '.remove_rq_row', function() {
            $(this).closest('.row').remove(); // Remove the entire row containing the Requirments field
        });
        let outcomed = 1;
        $('.add_out_field_button').click(function() {
            outcomed++;
            var OutnewRow = '<div class="row mb-3">' +
                '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
                '<div class="col-sm-8">' +
                '<div class="form-group">' +
                '<input type="text" class="form-control" id="outcomes' + counter +
                '" name="outcomes[]" placeholder="Provide Outcomes">' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" class="btn btn-sm btn-danger remove_out_field_button"><em class="icon ni ni-minus"></em></button>' +
                '</div>' +
                '</div>';
            $('.out_fields').append(OutnewRow);
        });

        $(document).on('click', '.remove_out_field_button', function() {
            $(this).closest('.row').remove(); // Remove the entire row containing the Outcome field
        });
    </script>
@endsection
