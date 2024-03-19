@extends('layout.master')
@section('title', 'تطور الطفل')

@section('mainContent')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4e2e2;
        margin: 0;
        padding: 0;
    }

    .header {
        font-size: 15px;
        background-color: ##FFD4D4;
        color: #fff;
        padding: 10px;
        color: black;
        text-align: center;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 16px;
        color: #ccc;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        color: #6d4343;
        padding: 20px;
    }

    .card {
        width: 40%;
        height: 300px;
        background-color: hsl(0, 100%, 99%);
        border-radius: 10px;
        padding: 30px;
        margin: 10px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s, background-color 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        background-color: #fcc5c5;
    }

    card-subtitle .title_subtitle {
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: right
    }

    .card-title {
        font-size: 23px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: right
    }


    .card-subtitle {
        font-size: 14px;
        color: #5c5b5b;
        text-align: right
    }


    /* Animation */
    @keyframes cardAnimation {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }

        100% {
            transform: translateY(1);
        }
    }

    .animated-card {
        animation: cardAnimation 1s ease-in-out infinite;
    }
</style>
<div class="header">
    <h1>مراحل تطور الطفل</h1>
</div>
<div class="card-container">
    @foreach ($child_progress as $child_progres)
    <div class="card animated-card">
        <h2 class="card-title">{{ $child_progres->month }}</h2>
        <p class="card-subtitle"><b class="title_subtitle"> الاستلقاء البطني :
            </b>{{ $child_progres->abdominal_recumbency }}</p>
        <p class="card-subtitle"><b class="title_subtitle"> الاستلقاء الظهري :
            </b>{{ $child_progres->dorsal_recumbency }}
        </p>
        <p class="card-subtitle"><b class="title_subtitle"> الرؤية البصرية :
            </b>{{ $child_progres->visual_development }}
        </p>
        <p class="card-subtitle"><b class="title_subtitle"> الاجتماعية : </b>{{ $child_progres->social }}</p>
        <p class="card-subtitle"><b class="title_subtitle"> الجلوس : </b>{{ $child_progres->sitting }}</p>
        <p class="card-subtitle"><b class="title_subtitle"> الوقوف : </b>{{ $child_progres->stand_up }}</p>
        <p class="card-subtitle"><b class="title_subtitle"> التكيف : </b>{{ $child_progres->adaptation }}</p>
        <p class="card-subtitle"><b class="title_subtitle"> الحركة : </b>{{ $child_progres->movement }}</p>
        <p class="card-subtitle"><b class="title_subtitle"> اللغة : </b>{{ $child_progres->language }}</p>
    </div>
    @endforeach
</div>
@endsection