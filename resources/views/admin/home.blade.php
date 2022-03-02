@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>Welcome to the NEWBIZ Admin!</p>

                    <p class="text-danger">To edit your website, click the section you want to edit from the navigation
                        links to your left above. </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection