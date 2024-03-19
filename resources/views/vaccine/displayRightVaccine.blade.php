@extends('layout.master')
@section('title', 'اللقاح المناسب')

@section('mainContent')
<style>
    .container-s {
        margin: 50px auto;
        padding: 60px;
        border: 2px solid;
        border-radius: 10px;
        text-align: right;
    }

    h2 {
        color: #8b405a;
        margin-bottom: 20px;
    }

    p {
        color: #555555;
        margin-bottom: 20px;
    }

    b {
        font-size: 20px;
        color: #141414;
        margin-bottom: 20px;
    }

    .highlight {
        /* background-color: #e7b3b3; */
        padding: 15px;
        border-radius: 5px;
    }

    .image {
        float: left;
        margin-right: 20px;
    }

    .video {
        float: left;
        margin-right: 20px;
        margin-block-start: -250px
    }
</style>
@foreach ($recommended_age as $age)
<div class="container-s">
    <h2>
        <img class="image" width="250px" height="250px" src="{{ Storage::url($age->image_path_vaccines) }}" alt="صورة"
            width="170" height="150">
        <span class="highlight">{{ $age->name }}</span> : اللقاح المناسب لطفلك بهذا العمر
        <br>
    </h2>
    <b>حول اللقاح &rarrhk; <p>{{ $age->description }}</p></b><br><br>
    <video width="750px" controls>
        <source src="{{ Storage::url($age->short_video_path_vaccines) }}" type="video/mp4">
    </video>
    @endforeach
    @endsection