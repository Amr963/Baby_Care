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
        
        <div class="col-8 mx-auto">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          <h5 class="text-center">Detials vacciens</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">image_path_vaccines</th>
                        <th scope="col">short_video_path_vaccines</th>
                        <th scope="col">indication</th>
                        <th scope="col">recommended_age</th>
                        <th scope="col">guidelines</th>
                        <th scope="col">injection_location</th>
                        <th scope="col">options</th>
                    </tr>
                </thead>
                <tbody>
                    
                   
                        <tr>
                            <th scope="row">{{ $vaccine->id }}</th>
                            <td>{{ $vaccine->name }}</td>
                            <td>{{ $vaccine->description }}</td>
                            <td><img src="{{Storage::url($vaccine->image_path_vaccines)}}" alt="" width="40" height="40"></td>
                            <td><video controls src="{{Storage::url($vaccine->short_video_path_vaccines)}}" width="150" height="130" outoplay></video></td>
                            <td>{{ $vaccine->indication }}</td>
                            <td>{{ $vaccine->recommended_age }}</td>
                            <td>{{ $vaccine->guidelines }}</td>
                            <td>{{ $vaccine->injection_location }}</td>
                            <td>
                               
                                <a href="{{ route('vaccines.edit', $vaccine->id) }}">edit</a>
                       
                                {{-- <a href="{{ route('category.delete', $category->id) }}">delete</a> --}}
                                <form action="{{ route('vaccines.destroy', $vaccine->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" name="delete" value="delete">
                                </form>
                            </td>
                        </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>