<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>show</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          <h5 class="text-center">Detials frequently_asked_question</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">question</th>
                        <th scope="col">answer</th>
                        <th scope="col">image</th>
                    </tr>
                </thead>
                <tbody>
                    
                   
                    <tr>
                        <th scope="row">{{ $frequently_asked_question->id }}</th>
                        <td>{{ $frequently_asked_question->question }}</td>
                        <td>{{ $frequently_asked_question->answer }}</td>
                        <td><img src="{{Storage::url($frequently_asked_question->image)}}" alt="" width="80" height="80"></td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>