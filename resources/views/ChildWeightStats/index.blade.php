@extends('layout.master')
@section('title', 'Chart')

@section('mainContent')

<div class="container-fluid p-0">
    {{-- <div class="row m-0">ضيف لبدك تعرضو هون</div> --}}
    <div class="row m-0 ">
        <div class="col-md-6 p-1">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    الوزن المناسب لطفلك على حسب عمره
                </div>
                <div class="card-body">
                    @include('partials.weight_chart')
                </div>
            </div>
        </div>
        <div class="col-md-6 p-1">
            <div class="card h-100">
                <div class="card-header bg-success text-white">
                    الطول المناسب لطفلك على حسب عمره
                </div>
                <div class="card-body">
                    @include('partials.length_chart')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
