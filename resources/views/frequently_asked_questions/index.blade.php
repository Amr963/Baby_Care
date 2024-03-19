@extends('layout.master')
@section('title', 'Books')

@section('mainContent')
<div class="container">
    <div class="row">

        {{-- add new frequently_asked_questions --}}
        {{-- <div class="my-5 col-8 mx-auto">
            <a href="{{ route('frequently_asked_questions.create') }}" class="btn btn-primary">Add
                frequently_asked_questions</a>
        </div> --}}

        @foreach ($frequently_asked_questions as $frequently_asked_questions)
        <div class="all-Q">
            <div class="one-Q">
                <div class="Question">
                    <img style="width: 200px; height: 200px; border-radius: 10px;"
                        src="{{ Storage::url($frequently_asked_questions->image) }}" alt="" />
                    <div>
                        <h4 style="text-align: end;">{{ $frequently_asked_questions->question }}؟</h4>
                        <p style="text-align: end;"> {{ $frequently_asked_questions->answer }}</p>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">اقرأ المزيد</a>
                <hr style="margin-top: 10px;" />
            </div>

        </div>

        @endforeach
    </div>
</div>
@endsection