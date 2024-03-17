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

        <h2 class="text-center">All child_progress stage</h2>

        <div class="my-5 col-8 mx-auto">
            <a href="{{ route('child_progress.create') }}" class="btn btn-primary">Add child_progress</a>
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
                        <th scope="col">month</th>
                        <th scope="col">abdominal_recumbency</th>
                        <th scope="col">dorsal_recumbency</th>
                        <th scope="col">visual_development</th>
                        <th scope="col">social</th>
                        <th scope="col">sitting</th>
                        <th scope="col">stand_up</th>
                        <th scope="col">adaptation</th>
                        <th scope="col">movement</th>
                        <th scope="col">language</th>
                        <th scope="col">options</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($child_progress as $child_progress)
                        <tr>
                            <th scope="row">{{ $child_progress->id }}</th>
                            <td>{{ $child_progress->month }}</td>
                            <td>{{ $child_progress->abdominal_recumbency }}</td>
                            <td>{{ $child_progress->dorsal_recumbency }}</td>
                            <td>{{ $child_progress->visual_development }}</td>
                            <td>{{ $child_progress->social }}</td>
                            <td>{{ $child_progress->sitting }}</td>
                            <td>{{ $child_progress->stand_up }}</td>
                            <td>{{ $child_progress->adaptation }}</td>
                            <td>{{ $child_progress->movement }}</td>
                            <td>{{ $child_progress->language }}</td>
                            <td>
                                <a href="{{ route('child_progress.show', $child_progress->id) }}">show</a>
                                <a href="{{ route('child_progress.edit', $child_progress->id) }}">edit</a>
                       
                                {{-- <a href="{{ route('category.delete', $category->id) }}">delete</a> --}}
                                <form action="{{ route('child_progress.destroy', $child_progress->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
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