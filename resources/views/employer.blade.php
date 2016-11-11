@extends('layouts.app');


@section('content')
    <div class="container-fluid">
    <div class="row">
        @include('partials.applicant-menu')
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid">
        <div class="col-md-4">
            @include('partials.sidebar')
        </div>
        <div class="col-md-8">
            @include('partials.applicant-details')
        </div>
    </div>
    </div>
@endsection