@extends('layouts.student_layout')
@section('title', 'Wallet')
@push('styles')
    <style>
       .card-body h3 {
    font-size: 1.5rem;
    font-weight: bold;
}

.card-body .fs-4 {
    font-size: 1.25rem;
    font-weight: 500;
}

.card-body img {
    width: 50px;
}

.btn-outline-light {
    font-size: 1rem;
    padding: 0.5rem 1rem;
}

    </style>
@endpush
@section('student_content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">My Wallet</h1>
            <div class="row">
                 <!-- Wallet Balance -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h3 class="mb-3">Wallet Balance</h3>
                    <div class="d-flex align-items-center">
                        <img src="https://demo.activeitzone.com/ecommerce/assets/img/wallet-icon.png" alt="Wallet Icon" width="50" class="me-3">
                        <div class="fs-4">$11,743.300</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recharge Wallet -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h3 class="mb-3">Recharge Wallet</h3>
                    <div class="d-flex align-items-center">
                        <img src="https://demo.activeitzone.com/ecommerce/assets/img/wallet-icon.png" alt="Wallet Icon" width="50" class="me-3">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Recharge</button>
                    </div>
                </div>
            </div>
        </div>
               
               
            </div>
            <div class="card mb-4">
              
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Wallet Recharge History</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('scripts')
@endpush
