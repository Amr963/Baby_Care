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
        
          <h5 class="text-center">Detials child_progress</h5>

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
                    </tr>
                </thead>
                <tbody>
                    
                   
                    <tr>
                        <th scope="row">{{ $childProgress->id }}</th>
                            <td>{{ $childProgress->month }}</td>
                            <td>{{ $childProgress->abdominal_recumbency }}</td>
                            <td>{{ $childProgress->dorsal_recumbency }}</td>
                            <td>{{ $childProgress->visual_development }}</td>
                            <td>{{ $childProgress->social }}</td>
                            <td>{{ $childProgress->sitting }}</td>
                            <td>{{ $childProgress->stand_up }}</td>
                            <td>{{ $childProgress->adaptation }}</td>
                            <td>{{ $childProgress->movement }}</td>
                            <td>{{ $childProgress->language }}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>