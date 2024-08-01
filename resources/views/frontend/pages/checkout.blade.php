@extends('layouts.frontend')
@section('title', 'Checkout Page')
@push('styles')
@endpush
@section('content')
    <!-- form-area start -->
    <section class="coupon-area pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        @if (!auth()->check())
                            <h3>Returning customer? <span id="showlogin" class="text-primary" style="cursor:pointer;">Click
                                    here to login</span></h3>
                            <div id="checkout-login" class="coupon-content mt-3">
                                <div class="coupon-info">
                                    <p class="coupon-text">If you are not a registered user, complete your registration
                                        first.</p>
                                    <form action="{{ route('login.save') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="contactNumber " class="form-label">User Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('contactNumber') is-invalid @enderror"
                                                id="contactNumber " name="contactNumber " />
                                            @error('contactNumber ')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <button class="btn btn-primary" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                        <!-- ACCORDION END -->
                    </div>
                </div>
              
                            <div class="col-md-6">
                                <div class="coupon-accordion">
                                    <h3>Have a coupon? <span id="showcoupon" class="text-primary" style="cursor:pointer;">Click here to enter your code</span></h3>
                                    <div id="checkout_coupon" class="coupon-checkout-content mt-3">
                                        <div class="coupon-info">
                                            <form action="#">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Coupon Code" />
                                                    <button class="btn btn-primary" type="submit">Apply Coupon</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
            </div>
        </div>
    </section>
    <!-- form-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-5">
        <div class="container">
            <form id="OrderFormID" action="{{ route('order') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            @if (auth()->user())
                                @php
                                    $students = DB::table('users')
                                        ->where('emailAddress', auth()->user()->emailAddress)
                                        ->first();
                                @endphp
                                <div class="mb-3">
                                    <label for="applicantName" class="form-label">Student Name </label>
                                    <input type="text" class="form-control @error('applicantName') is-invalid @enderror"
                                        id="applicantName" name="applicantName"
                                        value="{{ auth()->user()->applicantName ?? '' }}">
                                    @error('applicantName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                   
                                 
                               

                                <div class="mb-3">
                                    <label for="presentAddress" class="form-label">Present Address</label>
                                    <textarea class="form-control @error('presentAddress') is-invalid @enderror" id="presentAddress" rows="4"
                                        name="presentAddress">{!! auth()->user()->presentAddress !!}</textarea>
                                    @error('presentAddress')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="city" class="form-label">City </label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                        id="city" name="city">
                                    @error('city')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="division" class="form-label">Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror"
                                        id="division" name="division">
                                    @error('division')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country
                                    </label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror"
                                        id="country" name="country">
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @else
                                <div class="mb-3">
                                    <label for="applicantName" class="form-label">Student Name </label>
                                    <input type="text" class="form-control @error('applicantName') is-invalid @enderror"
                                        id="applicantName" name="applicantName">
                                    @error('applicantName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="fatherName" class="form-label">Father Name </label>
                                    <input type="text" class="form-control @error('fatherName') is-invalid @enderror"
                                        id="fatherName" name="fatherName">
                                    @error('fatherName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="fatherOccupation" class="form-label">Father Occupation </label>
                                    <input type="text"
                                        class="form-control @error('fatherOccupation') is-invalid @enderror"
                                        id="fatherOccupation" name="fatherOccupation">
                                    @error('fatherOccupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="motherName" class="form-label">Mother Name </label>
                                    <input type="text" class="form-control @error('motherName') is-invalid @enderror"
                                        id="motherName" name="motherName">
                                    @error('motherName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="motherOccupation" class="form-label">Mother Occupation </label>
                                    <input type="text"
                                        class="form-control @error('motherOccupation') is-invalid @enderror"
                                        id="motherOccupation" name="motherOccupation">
                                    @error('motherOccupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nationalId" class="form-label"> National Id </label>
                                    <input type="text" class="form-control @error('nationalId') is-invalid @enderror"
                                        id="nationalId" name="nationalId">
                                    @error('nationalId')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="education" class="form-label">Occupation</label>
                                    <select class="form-select form_select  @error('occupation') is-invalid @enderror"
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
                                <div class="mb-3">
                                    <label for="education" class="form-label">Education</label>
                                    <select class="form-select form_select @error('education') is-invalid @enderror"
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
                                <div class="mb-3">
                                    <label for="permanentAddress" class="form-label">Permanent address</label>
                                    <textarea class="form-control @error('permanentAddress') is-invalid @enderror" id="permanentAddress" rows="4"
                                        name="permanentAddress"></textarea>
                                    @error('permanentAddress')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="presentAddress" class="form-label">Present address</label>
                                    <textarea class="form-control @error('presentAddress') is-invalid @enderror" id="presentAddress" rows="4"
                                        name="presentAddress"></textarea>
                                    @error('presentAddress')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email"
                                        class="form-control @error('emailAddress') is-invalid @enderror"
                                        id="emailAddress" name="emailAddress">
                                    @error('emailAddress')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Contact Number</label>
                                    <input type="text"
                                        class="form-control @error('contactNumber') is-invalid @enderror"
                                        id="contactNumber" name="contactNumber">
                                    @error('contactNumber')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                        id="dob" name="dob">
                                    @error('dob')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Registration
                                        Number</label>
                                    <input type="text"
                                        class="form-control @error('registrationNumber') is-invalid @enderror"
                                        id="registrationNumber" name="registrationNumber">
                                    @error('registrationNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="your-order mb-3">
                            <h3>Your Order</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id => $details)
                                                @php
                                                    $subtotal = $details['price'] * $details['quantity'];
                                                    $total += $subtotal;
                                                @endphp
                                                <tr>
                                                   
                                                    <td>{{ $details['course_title'] }}</td>
                                                    <td>${{ $details['price'] }}</td>
                                                    <td>{{ $details['quantity'] }}</td>
                                                    <td>${{ $subtotal }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Order Total</th>
                                            <td>${{ $total }}</td>
                                            @php
                                                session(['amount' => $total]);
                                            @endphp
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="mt-3">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        var obj = {};
        obj.cus_name = $('.customer_name').val();
        obj.cus_phone = $('.contactNumber ').val();
        obj.cus_email = $('.cus_email').val();
        obj.cus_addr1 = $('#address').val();
        obj.amount = $('#total_amount').val();

        $('#sslczPayBtn').prop('postdata', obj);

        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@endpush
