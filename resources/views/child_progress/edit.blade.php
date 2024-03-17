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
          
        
          <h5 class="text-center">update  child_Progress</h5>
          {{-- {{dd($errors)}} --}}

       <form class="row g-3" method="post" action="{{route('child_progress.update',$childProgress)}}" >
            @csrf
            @method('PUT')
    
            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>month </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="month" value="{{old('month',$childProgress->month)}}"  class="@error('month') is-invalid @enderror">
                @error('month')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>
            
            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>abdominal_recumbency </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="abdominal_recumbency" value="{{old('abdominal_recumbency',$childProgress->abdominal_recumbency)}}"  class="@error('abdominal_recumbency') is-invalid @enderror">
                @error('abdominal_recumbency')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>dorsal_recumbency </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="dorsal_recumbency" value="{{old('dorsal_recumbency',$childProgress->dorsal_recumbency)}}"  class="@error('dorsal_recumbency') is-invalid @enderror">
                @error('dorsal_recumbency')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>visual_development </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="visual_development" value="{{old('visual_development',$childProgress->visual_development)}}"  class="@error('visual_development') is-invalid @enderror">
                @error('visual_development')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>social </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="social" value="{{old('social',$childProgress->social)}}"  class="@error('social') is-invalid @enderror">
                @error('social')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>sitting </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="sitting" value="{{old('sitting',$childProgress->sitting)}}"  class="@error('sitting') is-invalid @enderror">
                @error('sitting')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>stand_up </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="stand_up" value="{{old('stand_up',$childProgress->stand_up)}}"  class="@error('stand_up') is-invalid @enderror">
                @error('stand_up')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>


            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>adaptation </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="adaptation" value="{{old('adaptation',$childProgress->adaptation)}}"  class="@error('adaptation') is-invalid @enderror">
                @error('adaptation')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>movement </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="movement" value="{{old('movement',$childProgress->movement)}}"  class="@error('movement') is-invalid @enderror">
                @error('movement')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>language </b> </label>
                <input type="text" class="form-control" id="inputNanme4" name="language" value="{{old('language',$childProgress->language)}}"  class="@error('language') is-invalid @enderror">
                @error('language')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-info">save</button>
            </div>
          </form>

        </body>
        </html>