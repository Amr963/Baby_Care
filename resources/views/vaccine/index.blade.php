<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="my-5 col-8 mx-auto">
            <a href="{{ route('vaccines.create') }}" class="btn btn-primary">Add vaccien</a>
        </div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
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
                    
                    @forelse ($allVaccines as $allVaccines)
                        <tr>
                            <th scope="row">{{ $allVaccines->id }}</th>
                            <td>{{ $allVaccines->name }}</td>
                            <td>{{ $allVaccines->description }}</td>
                            <td><img src="{{Storage::url($allVaccines->image_path_vaccines)}}" alt="" width="80" height="80"></td>
                            <td><video controls src="{{Storage::url($allVaccines->short_video_path_vaccines)}}" width="150" height="130" outoplay></video></td>
                            <td>{{ $allVaccines->indication }}</td>
                            <td>{{ $allVaccines->recommended_age }}</td>
                            <td>{{ $allVaccines->guidelines }}</td>
                            <td>{{ $allVaccines->injection_location }}</td>
                            <td>
                                <a href="{{ route('vaccines.show', $allVaccines->id) }}">show</a>
                                <a href="{{ route('vaccines.edit', $allVaccines->id) }}">edit</a>
                       
                                {{-- <a href="{{ route('category.delete', $category->id) }}">delete</a> --}}
                                <form action="{{ route('vaccines.destroy', $allVaccines->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" name="delete" value="delete">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100">there is no records on categories table</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>