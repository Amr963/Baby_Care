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
          
        
          <h5 class="text-center">Add New vacciens</h5>
          {{-- {{dd($errors)}} --}}

       <form class="row g-3" method="post" action="{{route('vaccines.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>Name </b> </label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{old('name')}}"  class="@error('name') is-invalid @enderror">
              @error('name')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>description</b></label>
              <input type="text" class="form-control" id="inputPassword4" name="description"  value="{{old('description')}}" class="@error('description') is-invalid @enderror">
              @error('description')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>

            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>image_path_vaccines </b> </label>
              <input type="file" class="form-control" id="inputNanme4" name="image_path_vaccines" value="{{old('image_path_vaccines')}}"  class="@error('image_path_vaccines') is-invalid @enderror">
              @error('image_path_vaccines')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>


            <br>

            

            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>short_video_path_vaccines </b> </label>
              <input type="file" class="form-control" id="inputNanme4" name="short_video_path_vaccines" value="{{old('short_video_path_vaccines')}}"  class="@error('short_video_path_vaccines') is-invalid @enderror">
              @error('short_video_path_vaccines')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>


            <br>

            <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>indication</b></label>
                <input type="text" class="form-control" id="inputPassword4" name="indication"  value="{{old('indication')}}" class="@error('indication') is-invalid @enderror">
                @error('indication')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>


              <br>
              <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>recommended_age</b></label>
                <input type="text" class="form-control" id="inputPassword4" name="recommended_age"  value="{{old('recommended_age')}}" class="@error('recommended_age') is-invalid @enderror">
                @error('recommended_age')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>


              <br>
           
              <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>guidelines</b></label>
                <input type="text" class="form-control" id="inputPassword4" name="guidelines"  value="{{old('guidelines')}}" class="@error('guidelines') is-invalid @enderror">
                @error('guidelines')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>


              <br>

              <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>injection_location</b></label>
                <input type="text" class="form-control" id="inputPassword4" name="injection_location"  value="{{old('injection_location')}}" class="@error('injection_location') is-invalid @enderror">
                @error('injection_location')
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