@extends('layouts.student_layout')
@section('title', 'Student Profle')
@push('styles')
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
@endpush
@section('student_content')
    <main>
        <div class="container-fluid px-4">
 <div class="container aiz-user-panel mt-5">
        <div class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fs-20 fw-700 text-dark">My Wallet</h1>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <!-- Wallet Balance -->
            <div class="col-md-4 mb-4">
                <div class="wallet-balance">
                    <img src="https://demo.activeitzone.com/ecommerce/assets/img/wallet-icon.png" alt="Wallet Icon">
                    <div class="py-2">
                        <div class="balance-title">Wallet Balance</div>
                        <div class="balance-amount">$11,743.300</div>
                    </div>
                </div>
            </div>

            <!-- Recharge Wallet -->
            <div class="col-md-4 mb-4">
                <div class="recharge-wallet" onclick="show_wallet_modal()">
                    <div class="icon">
                        <i class="las la-plus la-3x"></i>
                    </div>
                    <div class="title">Recharge Wallet</div>
                </div>
            </div>

            <!-- Offline Recharge Wallet -->
            <div class="col-md-4 mb-4">
                <div class="offline-recharge-wallet" onclick="show_make_wallet_recharge_modal()">
                    <div class="icon">
                        <i class="las la-plus la-3x"></i>
                    </div>
                    <div class="title">Offline Recharge Wallet</div>
                </div>
            </div>
        </div>

        <!-- Wallet Recharge History -->
        <div class="card wallet-history rounded-0 shadow-none border">
            <div class="card-header border-bottom-0">
                <h5 class="mb-0 fs-20 fw-700 text-dark">Wallet Recharge History</h5>
            </div>
            <div class="card-body py-0">
                <table class="table table-striped">
                    <thead class="text-gray fs-12">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th class="text-end">Status</th>
                        </tr>
                    </thead>
                    <tbody class="fs-14">
                        <tr>
                            <td>01</td>
                            <td>05-06-2022</td>
                            <td class="fw-700">$12.150</td>
                            <td>Refund</td>
                            <td class="text-end">N/A</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>19-04-2022</td>
                            <td class="fw-700">$12.150</td>
                            <td>Refund</td>
                            <td class="text-end">N/A</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>08-03-2021</td>
                            <td class="fw-700">$0.000</td>
                            <td>Club Point Convert</td>
                            <td class="text-end">N/A</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>08-03-2021</td>
                            <td class="fw-700">$0.000</td>
                            <td>Club Point Convert</td>
                            <td class="text-end">N/A</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>08-03-2021</td>
                            <td class="fw-700">$0.000</td>
                            <td>Club Point Convert</td>
                            <td class="text-end">N/A</td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>08-03-2021</td>
                            <td class="fw-700">$550.000</td>
                            <td>Club Point Convert</td>
                            <td class="text-end">N/A</td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>23-02-2021</td>
                            <td class="fw-700">$5,000.000</td>
                            <td></td>
                            <td class="text-end">
                                <span class="badge bg-info">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>23-02-2021</td>
                            <td class="fw-700">$2,500.000</td>
                            <td>Stripe</td>
                            <td class="text-end">N/A</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    <nav>
                        <ul class="pagination mb-4">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

        </div>
    </main>

@endsection
@push('scripts')
@endpush
