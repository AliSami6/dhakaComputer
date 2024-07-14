@extends('layouts.frontend')
@section('title', 'Cart Page')
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
                            <h3 class="breadcrumb__title mb-20">Shopping Cart</h3>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('index') }}">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span><a href="#">Pages</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Shopping Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- cart area -->
        <section class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Images</th>
                                            <th class="cart-product-name">Courses</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Sub Total</th>
                                            <th class="product-remove">Remove</th>
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
                                                <tr data-id="{{ $id }}">
                                                    <td class="product-thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('uploaded_files/course_thumbnails/' . $details['course_thumbnail']) }}"
                                                                alt="">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">{{ $details['course_title'] }} </a>
                                                     
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">${{ $details['price'] }}</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <span class="cart-minus">-</span>
                                                        <input type="number" value="{{ $details['quantity'] }}"
                                                            class="form-control cart-input quantity cart_update"
                                                            min="1" />
                                                        <span class="cart-plus">+</span>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">${{ $subtotal }}</span>
                                                    </td>
                                                    <td class="product-remove">
                                                        <button class="btn btn-danger btn-sm cart_remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                                placeholder="Coupon code" type="text">
                                            <button class="tp-btn" name="apply_coupon" type="submit">Apply
                                                coupon</button>
                                        </div>
                                        <div class="coupon2">
                                            <button class="tp-btn" name="update_cart" type="submit">Update cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row justify-content-end">
                                <div class="col-md-5 ">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul class="mb-20">
                                          
                                            <li>Total <span>${{ $total }}</span></li>
                                        </ul>
                                        <a class="tp-btn" href="{{route('process_cheakout')}}">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart area end-->

    </main>
@endsection
@push('scripts')
    <script>
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
@endpush
