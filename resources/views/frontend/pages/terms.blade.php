@extends('layouts.frontend')
@section('title', $termsPage->page_title)
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
@section('content')
 <div class="container center-content">
        
        <div class="m-auto pt-1 mb-5 ">
           <div class="mt-3">
            {!! $termsPage->page_description !!}
           </div> 
        </div>
    </div>
@endsection
@push('scripts')
@endpush
