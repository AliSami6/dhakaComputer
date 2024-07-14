@extends('layouts.frontend')
@section('title', 'Checkout Page')
@push('styles')
@endpush
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
            data-background="{{ asset('/') }}frontend/assets/img/banner/banner-bg-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title mb-20">Checkout</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- coupon-area start -->
        <section class="coupon-area pt-100 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            @if (!auth()->check())
                                <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                <div id="checkout-login" class="coupon-content">
                                    <div class="coupon-info">
                                        <p class="coupon-text">if you are not registered user complete your registration
                                            first..</p>
                                        <form action="{{ route('login.save') }}" method="POST">
                                            @csrf
                                            <p class="form-row-first">
                                                <label>User Phone Number <span class="required">*</span></label>
                                                <input type="text" class=" @error('phone_no') is-invalid @enderror"
                                                    id="phone_no" name="phone_no" />
                                                <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" name="password"
                                                    class="@error('password') is-invalid @enderror" />
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            </p>
                                            <p class="form-row">
                                                <button class="tp-btn-3 tp-btn" type="submit">Login</button>

                                            </p>

                                        </form>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->
                            @endif
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" placeholder="Coupon Code" />
                                            <button class="tp-btn-3" type="submit">Apply Coupon</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- coupon-area end -->

        <!-- checkout-area start -->
        <section class="checkout-area pb-70">
            <div class="container">
                <form id="OrderFormID" action="{{ route('order') }}" method="POST">
                    @csrf
                    <!-- The rest of your form fields -->
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                            @if (auth()->user())
                                @php
                                    $students = DB::table('students')
                                        ->where('email', auth()->user()->email)
                                        ->first();
                                @endphp
                                @if(isset($students))
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name </label>
                                                <input type="text" placeholder="Input First Name" class="customer_name" name="firstName"
                                                    value="{{ $students->firstName}}"
                                                    style="border: none;" readonly />
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name </label>
                                                <input type="text" placeholder="Input Last Name" name="lastName"
                                                    value="{{ $students->lastName  }}"
                                                   style="border: none;" readonly />
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Nationality</label>
                                                <input type="text" name="nationality" placeholder="Input Nationality"
                                                    value="{{ $students->nationality}}"
                                                   style="border: none;" readonly />
                                            </div>
                                         
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address </label>
                                                <input type="text" placeholder="Street address" name="address_one" class=""
                                                    value="{{ $students->address_one}}"
                                                   style="border: none;" readonly />
                                            </div>
                                         
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address Optional </label>
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)"
                                                    value="{{ $students->address_two}}"
                                                    name="address_two" style="border: none;" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>State </label>
                                                <input type="text" placeholder="Input State" name="state"
                                                    value="{{ $students->state}}"
                                                     style="border: none;" readonly />
                                            </div>
                                          
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Country </label>
                                                <input type="text" placeholder="Input Country" name="country"
                                                    value="{{ $students->country}}"
                                                  style="border: none;" readonly />
                                            </div>
                                         
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address </label>
                                                <input type="email" placeholder="Input Email"
                                                    value="{{ $students->email}}" class="cus_email"
                                                  name="email" style="border: none;" readonly />
                                            </div>
                                         
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone </label>
                                                <input type="text" placeholder="Phone Number"
                                                    value="{{ $students->phone_no}}" id="phone_no" class="phone_no"
                                                    name="phone_no" style="border: none;" readonly />
                                            </div>
                                      
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name </label>
                                                <input type="text" placeholder="Input First Name" name="firstName"
                                                    value="{{ auth()->user()->first_name ?? 'Input First Name' }}"
                                                    class="@error('firstName') is-invalid @enderror customer_name"  />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('firstName') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name </label>
                                                <input type="text" placeholder="Input Last Name" name="lastName"
                                                    value="{{ auth()->user()->last_name ?? 'Input Last Name'}}"
                                                    class="@error('lastName') is-invalid @enderror" />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('lastName') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Nationality</label>
                                                <input type="text" name="nationality" placeholder="Input Nationality"
                                                    value="{{ 'Input Nationality' }}"
                                                    class="@error('nationality') is-invalid @enderror" />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('nationality') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address </label>
                                                <input type="text" placeholder="Street address" name="address_one" id="address"
                                                    value="{{ $students->address_one ?? 'Input Address One' }}"
                                                    class="@error('address_one') is-invalid @enderror address_one"  />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('address_one') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address Optional </label>
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)"
                                                    value="{{ $students->address_two ?? 'Input Address Two' }}"
                                                    class="@error('address_two') is-invalid @enderror" name="address_two"  />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('address_two') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>State </label>
                                                <input type="text" placeholder="Input State" name="state"
                                                    value="{{ $students->state ?? 'Input State' }}"
                                                    class="@error('state') is-invalid @enderror" />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Country </label>
                                                <input type="text" placeholder="Input Country" name="country"
                                                    value="{{ $students->country ?? 'Input Country' }}"
                                                    class="@error('country') is-invalid @enderror" />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address </label>
                                                <input type="email" placeholder="Input Email" id="email"
                                                    value="{{ $students->email ?? (auth()->user()->email ?? 'Input Email') }}"
                                                    class="@error('email') is-invalid @enderror cus_email" name="email" />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone </label>
                                                <input type="text" placeholder="Phone Number"
                                                    value="{{ $students->phone_no ?? (auth()->user()->phone_no ?? 'Input Phone Number') }}"
                                                    class="@error('phone_no') is-invalid @enderror phone_no" name="phone_no" />
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('phone_no') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="Input First Name" name="firstName"
                                                class="@error('firstName') is-invalid @enderror customer_name" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('firstName') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="Input Last Name" name="lastName"
                                                class="@error('lastName') is-invalid @enderror" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('lastName') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nationality</label>
                                            <input type="text" name="nationality" placeholder="Input Nationality"
                                                class="@error('nationality') is-invalid @enderror" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('nationality') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address" name="address_one"
                                                class="@error('address_one') is-invalid @enderror address_one" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('address_one') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)"
                                                class="@error('address_two') is-invalid @enderror " name="address_two" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('address_two') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>State <span class="required">*</span></label>
                                            <input type="text" placeholder="Input State" name="state"
                                                class="@error('state') is-invalid @enderror" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Country <span class="required">*</span></label>
                                            <input type="text" placeholder="Input Country" name="country"
                                                class="@error('country') is-invalid @enderror" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="Input Email" name="email"
                                                class="@error('email') is-invalid @enderror cus_email" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Phone Number" name="phone_no"
                                                class="@error('phone_no') is-invalid @enderror phone_no" />
                                        </div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('phone_no') }}</strong>
                                        </span>
                                    </div>
                                </div>
                            @endif
                            
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="your-order mb-30">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Course</th>
                                                <th class="product-total">Price</th>
                                                <th class="product-total">Quantity</th>
                                                <th class="product-total">Total</th>
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

                                                    <tr class="cart_item" data-id="{{ $id }}">
                                                        <td class="product-name">
                                                            {{ $details['course_title'] }} <strong
                                                                class="product-quantity"> ×
                                                                {{ $details['quantity'] }}</strong>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="amount">${{ $details['price'] }}</span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <strong class="product-quantity"> ×
                                                                    {{ $details['quantity'] }}</strong>
                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal">
                                                            <span class="amount">${{ $subtotal }}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>

                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">${{ $total }}</span></strong></td>
                                                @php
                                                session(['amount' => $total]);
                                            @endphp
                                            

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="order-button-payment mt-20" >
                                        <button type="submit" class="tp-btn">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout-area end -->

    </main>
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
