<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>create</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="{{ route('ChildLengthStats.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label"><b>age </b> </label>
                    <input type="text" class="form-control" id="inputNanme4" name="age"
                        class="@error('age') is-invalid @enderror">
                    @error('age')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">create</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>