{{-- صفحة تعليمات خاصة --}}
@extends('layout.master')
@section('title', 'Books')

@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-center mb-4">: تعليمات خاصة للأم عند تلقيها أو تلقي طفلها اللقاح</h2>
        {{-- allVaccines --}}
        @foreach ($allVaccines as $vaccine)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ Storage::url($vaccine->image_path_vaccines) }}" alt=""
                    style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">اسم اللقاح : {{ $vaccine->name }}</h5>
                    <ul class="list-unstyled">
                        <li>
                            <strong>:موعد اللقاح</strong>
                            <p>{{ $vaccine->recommended_age }}</p>
                        </li>
                        <li>
                            <strong>:مكان الحقن</strong>
                            <p>{{ $vaccine->injection_location }}</p>
                        </li>
                        <li>
                            <strong>:ارشادات</strong>
                            <p>{{ $vaccine->guidelines }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection