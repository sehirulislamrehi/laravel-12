@extends('errors.template.base_error')
@section('title')
    500 | Server Error
@endsection
@push('css')
    <style>
        body {
            background: rgb(2, 0, 36);
            background: -moz-linear-gradient(163deg, rgba(2, 0, 36, 1) 0%, rgb(47, 187, 90) 50%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(163deg, rgba(2, 0, 36, 1) 0%, rgb(36, 208, 95) 50%, rgba(255, 255, 255, 1) 100%);
            background: linear-gradient(163deg, rgba(2, 0, 36, 1) 0%, rgb(51, 192, 36) 50%, rgba(255, 255, 255, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024", endColorstr="#ffffff", GradientType=1);
        }
    </style>
@endpush

@section('content')
    <div class="card p-5">
        <div class="card-body">
            <div class="mb-5 text-center">
                <h1 class="error-header">404 | Page Not Found</h1>
            </div>
            <p class="card-text text-danger text-center font-weight-bold">{{ $message ?? ''}}</p>
        </div>
        <div class="text-center">
            <a href="{{route('admin.login.page')}}" class="btn btn-primary">Return to home</a>
        </div>
    </div>
@endsection
