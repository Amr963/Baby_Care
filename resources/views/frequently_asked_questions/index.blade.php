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

        <h2 class="text-center">All frequently_asked_questions</h2>

        <div class="my-5 col-8 mx-auto">
            <a href="{{ route('frequently_asked_questions.create') }}" class="btn btn-primary">Add frequently_asked_questions</a>
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
                        <th scope="col">question</th>
                        <th scope="col">answer</th>
                        <th scope="col">image</th>
                        <th scope="col">options</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($frequently_asked_questions as $freq)
                        <tr>
                            <th scope="row">{{ $freq->id }}</th>
                            <td>{{ $freq->question }}</td>
                            <td>{{ $freq->answer }}</td>
                            <td><img src="{{Storage::url($freq->image)}}" alt="" width="80" height="80"></td>
                            <td>
                                <a href="{{ route('frequently_asked_questions.show', $freq->id) }}">show</a>
                                <a href="{{ route('frequently_asked_questions.edit', $freq->id) }}">edit</a>
                       
                                {{-- <a href="{{ route('category.delete', $category->id) }}">delete</a> --}}
                                <form action="{{ route('frequently_asked_questions.destroy', $freq->id) }}" method="post">
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