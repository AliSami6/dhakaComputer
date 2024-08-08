@extends('layouts.frontend')
@section('title', 'Checkout Page')
@push('styles')
@endpush
@section('content')
    <section class="coupon-area pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        @if (!auth()->check())
                            <!-- ACCORDION START -->
                            <h3>Returning customer? <input type="checkbox" id="toggleLogin" class="ml-2" /></h3>
                            <div id="checkout-login" class="coupon-content mt-3" style="display: none;">
                                <div class="coupon-info">
                                    <p class="coupon-text">If you are not a registered user, complete your registration
                                        first.</p>
                                    <form action="{{ route('login.save') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="contactNumber" class="form-label">User Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('contactNumber') is-invalid @enderror"
                                                id="contactNumber" name="contactNumber" />
                                            @error('contactNumber')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- form-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-5">
        <div class="container">
            <form id="OrderFormID" action="{{ route('order') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            @if (auth()->user())
                                @php
                                    $students = DB::table('students')
                                        ->where('user_id', auth()->user()->id)
                                        ->first();
                                @endphp
                                @if (isset($students))
                                    <div class="mb-3 mt-3">
                                        <label for="applicantName" class="form-label form_label">Student Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('applicantName') is-invalid @enderror"
                                            id="applicantName" name="applicantName"
                                            value="{{ old('applicantName', $students->studentsName ?? '') }}">
                                        @error('applicantName')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="presentAddress" class="form-label form_label">Present Address <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control @error('presentAddress') is-invalid @enderror" id="presentAddress" rows="4"
                                            name="presentAddress">{{ old('presentAddress', $students->address ?? '') }}</textarea>
                                        @error('presentAddress')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label form_label">City</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            id="city" name="city" value="{{ old('city', $students->city ?? '') }}">
                                        @error('city')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="division" class="form-label form_label">Division</label>
                                        <input type="text" class="form-control @error('division') is-invalid @enderror"
                                            id="division" name="division"
                                            value="{{ old('division', $students->division ?? '') }}">
                                        @error('division')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label form_label">Country</label>
                                        <input type="text" class="form-control @error('country') is-invalid @enderror"
                                            id="country" name="country"
                                            value="{{ old('country', $students->country ?? '') }}">
                                        @error('country')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="referral_code" class="form-label form_label">Referral Code</label>
                                        <input type="text" class="form-control" id="referral_code" name="referral_code"
                                            value="{{ old('referral_code') }}">
                                    </div>
                                @endif
                            @else
                                <div class="mb-3 mt-4">
                                    <label for="applicantName" class="form-label form_label">Applicant's Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('applicantName') is-invalid @enderror"
                                        id="applicantName" name="applicantName" value="{{ old('applicantName') }}">
                                    @error('applicantName')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label form_label">City</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                        id="city" name="city" value="{{ old('city') }}">
                                    @error('city')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="division" class="form-label form_label">Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror"
                                        id="division" name="division" value="{{ old('division') }}">
                                    @error('division')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label form_label">Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror"
                                        id="country" name="country" value="{{ old('country') }}">
                                    @error('country')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="referral_code" class="form-label form_label">Referral Code</label>
                                    <input type="text" class="form-control" id="referral_code" name="referral_code"
                                        value="{{ old('referral_code') }}">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="fatherName" class="form-label form_label">Father's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('fatherName') is-invalid @enderror"
                                                id="fatherName" name="fatherName" value="{{ old('fatherName') }}">
                                            @error('fatherName')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fatherOccupation" class="form-label form_label">Father's
                                                Occupation <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('fatherOccupation') is-invalid @enderror"
                                                id="fatherOccupation" name="fatherOccupation"
                                                value="{{ old('fatherOccupation') }}">
                                            @error('fatherOccupation')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="motherName" class="form-label form_label">Mother's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('motherName') is-invalid @enderror"
                                                id="motherName" name="motherName" value="{{ old('motherName') }}">
                                            @error('motherName')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherOccupation" class="form-label form_label">Mother's
                                                Occupation <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('motherOccupation') is-invalid @enderror"
                                                id="motherOccupation" name="motherOccupation"
                                                value="{{ old('motherOccupation') }}">
                                            @error('motherOccupation')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="presentAddress" class="form-label form_label">Present Address <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control @error('presentAddress') is-invalid @enderror" id="presentAddress" rows="4"
                                        name="presentAddress">{{ old('presentAddress') }}</textarea>
                                    @error('presentAddress')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="sameAddressRadio"
                                            value="same">
                                        <label class="form-check-label form_label_1" for="sameAddressRadio">Permanent
                                            Address Same as Present</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="permanentAddress" class="form-label form_label">Permanent Address <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control @error('permanentAddress') is-invalid @enderror" id="permanentAddress" rows="4"
                                        name="permanentAddress">{{ old('permanentAddress') }}</textarea>
                                    @error('permanentAddress')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contactNumber" class="form-label form_label">Contact No. <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('contactNumber') is-invalid @enderror"
                                                id="contactNumber" name="contactNumber"
                                                value="{{ old('contactNumber') }}">
                                            @error('contactNumber')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emailAddress" class="form-label form_label">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email"
                                                class="form-control @error('emailAddress') is-invalid @enderror"
                                                id="emailAddress" name="emailAddress" value="{{ old('emailAddress') }}">
                                            @error('emailAddress')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="dob" class="form-label form_label">Date of Birth <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                                id="dob" name="dob" value="{{ old('dob') }}">
                                            @error('dob')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="registrationNumber" class="form-label form_label">Reg. No. <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('registrationNumber') is-invalid @enderror"
                                                id="registrationNumber" name="registrationNumber"
                                                value="{{ old('registrationNumber') }}">
                                            @error('registrationNumber')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="race" class="form-label form_label">Race <span
                                            class="text-danger">*</span></label>
                                    <div class="form-check form_check d-inline-block">
                                        <input class="form-check-input @error('race') is-invalid @enderror"
                                            type="radio" name="race" id="raceMuslim" value="1">
                                        <label class="form-check-label form_label_1" for="raceMuslim">Muslim</label>
                                    </div>
                                    <div class="form-check form_check d-inline-block">
                                        <input class="form-check-input @error('race') is-invalid @enderror"
                                            type="radio" name="race" id="raceHindu" value="2">
                                        <label class="form-check-label form_label_1" for="raceHindu">Hindu</label>
                                    </div>
                                    <div class="form-check form_check d-inline-block">
                                        <input class="form-check-input @error('race') is-invalid @enderror"
                                            type="radio" name="race" id="raceBuddhist" value="3">
                                        <label class="form-check-label form_label_1" for="raceBuddhist">Buddhist</label>
                                    </div>
                                    <div class="form-check form_check d-inline-block">
                                        <input class="form-check-input @error('race') is-invalid @enderror"
                                            type="radio" name="race" id="raceChristian" value="4">
                                        <label class="form-check-label form_label_1" for="raceChristian">Christian</label>
                                    </div>
                                    @error('race')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="gender" class="form-label form_label">Gender <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-check gender_check form-check-inline">
                                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                                    type="radio" name="gender" id="male" value="1">
                                                <label class="form-check-label form_label_1" for="1">Male</label>
                                            </div>
                                            <div class="form-check gender_check form-check-inline">
                                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                                    type="radio" name="gender" id="female" value="2">
                                                <label class="form-check-label form_label_1" for="female">Female</label>
                                            </div>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="occupation" class="form-label form_label">Occupation <span
                                                    class="text-danger">*</span></label>
                                            <select
                                                class="form-select form_select  @error('occupation') is-invalid @enderror"
                                                aria-label="Default select example" name="occupation">
                                                <option selected>Open this select menu</option>
                                                <option value="Student">Student</option>
                                                <option value="Business">Business</option>
                                                <option value="Service">Service</option>
                                                <option value="Housewife">Housewife</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            @error('occupation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nationalId" class="form-label form_label">National ID No.
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control  @error('nationalId') is-invalid @enderror"
                                                id="nationalId" name="nationalId">
                                            @error('nationalId')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="education" class="form-label form_label">Education <span
                                                    class="text-danger">*</span></label>
                                            <select
                                                class="form-select form_select @error('education') is-invalid @enderror"
                                                aria-label="Default select example" name="education">
                                                <option selected>Open this select menu</option>
                                                <option value="PEC/JSC">PEC/JSC</option>
                                                <option value="SSC">SSC</option>
                                                <option value="HSC">HSC</option>
                                                <option value="Bechelor">Bechelor</option>
                                                <option value="Masters">Masters</option>
                                            </select>
                                            @error('education')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="photo" class="form-label form_label">Photo </label>
                                            <label for="image" class="label_img">
                                                <div class="img_output">
                                                    <img id="output" width="180" height="200" alt="Image Here"
                                                        style="display:none;" />
                                                </div>
                                                <input type="file" name="image" id="image">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="courseDay" class="form-label form_label">Course Day:</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('courseDay') is-invalid @enderror"
                                                type="checkbox" id="saturday" value="1" name="courseDay">
                                            <label class="form-check-label form_label_1" for="saturday">Saturday</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('courseDay') is-invalid @enderror"
                                                type="checkbox" id="monday" value="2" name="courseDay">
                                            <label class="form-check-label form_label_1" for="monday">Monday</label>
                                        </div>
                                    </div>
                                    @error('courseDay')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="courseTime" class="form-label form_label">Time:</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('courseTime') is-invalid @enderror"
                                                type="radio" name="courseTime" id="time1" value="1">
                                            <label class="form-check-label form_label_1" for="time1">9:00 am -
                                                11:00
                                                am</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('courseTime') is-invalid @enderror"
                                                type="radio" name="courseTime" id="time2" value="2">
                                            <label class="form-check-label form_label_1" for="time2">11:00 am -
                                                1:00
                                                pm</label>
                                        </div>
                                    </div>
                                    @error('courseTime')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-3">
                        <div class="your-order mb-3">
                            <h3>Your Order</h3>
                            <div class="table-responsive">
                                <table class="table mt-5 mb-5">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:25%;">Course</th>
                                            <th scope="col" style="width:10%;">Price</th>
                                            <th scope="col" style="width:25%;">Quantity</th>
                                            <th scope="col" style="width:5%;">Action</th>
                                            <th scope="col" style="width:10%;">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart_table">
                                        @php
                                            $total = 0;
                                            $referralCode = Session::get('referral_code') ?? 0;
                                        @endphp
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id => $details)
                                                @php
                                                    // Determine the price to use based on the referral code
                                                    $price = $referralCode
                                                        ? $details['discounted_price']
                                                        : $details['price'];
                                                    $subtotal = $price * $details['quantity'];
                                                    $total += $subtotal;
                                                @endphp
                                                <tr data-id="{{ $id }}">
                                                    <td>{{ $details['course_title'] }}</td>
                                                    <td> {{ $price }} <span class="fs-4"> &#2547;</span></td>
                                                    <td> <input type="number" value="{{ $details['quantity'] }}"
                                                            class="form-control cart-input quantity cart_update"
                                                            min="1" /></td>

                                                    <td>
                                                        <button class="btn btn-danger btn-sm cart_remove text-white">
                                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                        </button>
                                                    </td>
                                                    <td> {{ $subtotal }} <span class="fs-4"> &#2547;</span></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4">Order Total</th>
                                            <td> {{ $total }} <span class="fs-4"> &#2547;</span> </td>
                                            @php
                                                session(['amount' => $total]);
                                            @endphp
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="mt-3 mb-3">
                                <button type="submit" class="btn btn-primary">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sameAddressRadio = document.getElementById('sameAddressRadio');
            if (sameAddressRadio) {
                sameAddressRadio.addEventListener('change', function() {
                    if (this.checked) {
                        const presentAddress = document.getElementById('presentAddress').value;
                        document.getElementById('permanentAddress').value = presentAddress;
                    }
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            var toggleLogin = document.getElementById('toggleLogin');
            if (toggleLogin) {
                toggleLogin.addEventListener('change', function() {
                    var loginForm = document.getElementById('checkout-login');
                    if (this.checked) {
                        loginForm.style.display = 'block';
                    } else {
                        loginForm.style.display = 'none';
                    }
                });
            }


        });


        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);
            $.ajax({
                url: '{{ route('cart.update') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    console.log(response.data);
                    flashMessage(response.status, response.message);
                    if (response.status === 'success') {
                        location.reload();
                    }
                }
            });
        });

        $(".cart_remove").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('cart.remove') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        flashMessage(response.status, response.message);
                        if (response.status === 'success') {
                            location.reload();
                        }
                    }
                });
            }
        });
    </script>
    <script>
        // var obj = {};
        // obj.cus_name = $('.customer_name').val();
        // obj.cus_phone = $('.contactNumber ').val();
        // obj.cus_email = $('.cus_email').val();
        // obj.cus_addr1 = $('#address').val();
        // obj.amount = $('#total_amount').val();

        // $('#sslczPayBtn').prop('postdata', obj);

        // (function(window, document) {
        //     var loader = function() {
        //         var script = document.createElement("script"),
        //             tag = document.getElementsByTagName("script")[0];
        //         // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
        //         script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
        //             7); // USE THIS FOR SANDBOX
        //         tag.parentNode.insertBefore(script, tag);
        //     };

        //     window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
        //         loader);
        // })(window, document);
    </script>
@endpush
