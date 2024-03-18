<!DOCTYPE html>
<html>
<head>
    <title>صفحة رسمية</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            border: 2px solid #8b405a;
            border-radius: 10px;
            background-color: #ffffff;
            text-align: right;
        }

        h2 {
            color: #8b405a;
            margin-bottom: 20px;
        }

        p {
            color: #555555;
            margin-bottom: 20px;
        }

        b {
            font-size: 20px;
            color: #141414;
            margin-bottom: 20px;
        }

        .highlight {
            background-color: #e7b3b3;
            padding: 15px;
            border-radius: 5px;
        }

        .image {
            float: left;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($recommended_age as $age)
            <h2>
                <img class="image" src="{{Storage::url($age->image_path_vaccines)}}" alt="صورة" width="100" height="100">
                اللقاح المناسب لطفلك بهذا العمر : <span class="highlight">{{$age->name}}</span>
                <br>
            </h2>

            <b>حول اللقاح  <p>{{$age->description}}</p></b>
        @endforeach
    </div>
</body>
</html>