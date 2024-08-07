@extends('layouts.frontend')
@section('title', 'Cart Page')
@push('styles')
@endpush
@section('content')
    <!-- cart area -->
    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="table-content table-responsive mt-4">
                        <table class="table table-bordered mt-4 mb-3">
                            <thead>
                                <tr>
                                    <th>Courses</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="mb-4 mt-3">
                                @php
                                    $total = 0;
                                @endphp
                                @if (session('cart') && count(session('cart')) > 0)
                                    @foreach (session('cart') as $id => $details)
                                        @php
                                            $subtotal = $details['price'] * $details['quantity'];
                                            $total += $subtotal;
                                        @endphp
                                        <tr data-id="{{ $id }}">
                                            <td>{{ $details['course_title'] }}</td>
                                            <td>{{ $details['price'] }}</td>
                                            <td>
                                                <input type="number" value="{{ $details['quantity'] }}"
                                                    class="form-control cart-input quantity cart_update" min="1" />
                                            </td>
                                            <td>{{ $subtotal }} &#2547;</td>
                                            <td>
                                                <button class="btn btn-danger btn-sm cart_remove">
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Cart is Empty</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                   
                    <div class="row justify-content-end mb-4 mt-3">
                        <div class="col-md-5 mb-3 mt-4">
                            <div class="cart-page-total mb-3">
                                <h2>Cart totals</h2>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total <span> {{ $total }} &#2547;</span>
                                    </li>
                                </ul>
                                <a class="tp-btn btn btn-primary mt-3" href="{{ route('process_cheakout') }}">Proceed to
                                    checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart area end-->
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
