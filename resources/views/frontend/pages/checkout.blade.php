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
                        <h3>Returning customer? <span id="showlogin" class="text-primary" style="cursor:pointer;">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content mt-3">
                            <div class="coupon-info">
                                <p class="coupon-text">If you are not a registered user, complete your registration first.</p>
                                <form action="{{ route('login.save') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="phone_no" class="form-label">User Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('phone_no') is-invalid @enderror" id="phone_no" name="phone_no" />
                                        @error('phone_no')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" />
                                        @error('password')
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
            <!-- Uncomment and modify this section if needed
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
            -->
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
                                $students = DB::table('students')->where('email', auth()->user()->email)->first();
                            @endphp
                            @if(isset($students))
                                <div class="row">
                                    @php
                                        $fields = [
                                            'firstName' => 'First Name',
                                            'lastName' => 'Last Name',
                                            'nationality' => 'Nationality',
                                            'address_one' => 'Address',
                                            'address_two' => 'Address Optional',
                                            'state' => 'State',
                                            'country' => 'Country',
                                            'email' => 'Email Address',
                                            'phone_no' => 'Phone'
                                        ];
                                    @endphp
                                    @foreach ($fields as $field => $label)
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ $label }}</label>
                                            <input type="text" class="form-control" name="{{ $field }}" value="{{ $students->$field }}" readonly />
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                @php
                                    $fields = [
                                        'firstName' => 'First Name',
                                        'lastName' => 'Last Name',
                                        'nationality' => 'Nationality',
                                        'address_one' => 'Address',
                                        'address_two' => 'Address Optional',
                                        'state' => 'State',
                                        'country' => 'Country',
                                        'email' => 'Email Address',
                                        'phone_no' => 'Phone'
                                    ];
                                @endphp
                                <div class="row">
                                    @foreach ($fields as $field => $label)
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">{{ $label }} <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error($field) is-invalid @enderror" name="{{ $field }}" value="{{ auth()->user()->$field ?? 'Input ' . $label }}" />
                                            @error($field)
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @else
                            @php
                                $fields = [
                                    'firstName' => 'First Name',
                                    'lastName' => 'Last Name',
                                    'nationality' => 'Nationality',
                                    'address_one' => 'Address',
                                    'address_two' => 'Address Optional',
                                    'state' => 'State',
                                    'country' => 'Country',
                                    'email' => 'Email Address',
                                    'phone_no' => 'Phone'
                                ];
                            @endphp
                            <div class="row">
                                @foreach ($fields as $field => $label)
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">{{ $label }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error($field) is-invalid @enderror" name="{{ $field }}" placeholder="Input {{ $label }}" />
                                        @error($field)
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                @endforeach
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
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>

<script>
    var obj = {};
    obj.cus_name = $('.customer_name').val();
    obj.cus_phone = $('.phone_no').val();
    obj.cus_email = $('.cus_email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
@endpush
