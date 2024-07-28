@extends('layouts.frontend')
@section('title', $refundPolicyPage->page_title)
@push('styles')
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 66vh;
        }
    </style>
@endpush
@section('content')
 <div class="container center-content">
        <div class="m-auto pt-1">
            {!! $refundPolicyPage->page_description !!}
        </div>
    </div>
@endsection
@push('scripts')
@endpush
