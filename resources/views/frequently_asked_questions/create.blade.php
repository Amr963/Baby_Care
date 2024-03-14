<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    

<div class="container">
    <div class="row">
          
        
          <h5 class="text-center">Add New frequently_asked_questions</h5>
          {{-- {{dd($errors)}} --}}

       <form class="row g-3" method="post" action="{{route('frequently_asked_questions.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>question </b> </label>
              <input type="text" class="form-control" id="inputNanme4" name="question" value="{{old('question')}}"  class="@error('question') is-invalid @enderror">
              @error('question')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>answer</b></label>
              <input type="text" class="form-control" id="inputPassword4" name="answer"  value="{{old('answer')}}" class="@error('answer') is-invalid @enderror">
              @error('answer')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>

            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>image </b> </label>
              <input type="file" class="form-control" id="inputNanme4" name="image" value="{{old('image')}}"  class="@error('image') is-invalid @enderror">
              @error('image')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>


            <br>
            
            <div class="text-center">
              <button type="submit" class="btn btn-info">Add</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>

        </body>
        </html>