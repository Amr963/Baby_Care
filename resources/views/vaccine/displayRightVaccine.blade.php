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

        .video {
            float: left;
            margin-right: 20px;
            margin-block-start: -250px
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($recommended_age as $age)
            <h2>
                <img class="image" src="{{Storage::url($age->image_path_vaccines)}}" alt="صورة" width="170" height="150">
                اللقاح المناسب لطفلك بهذا العمر : <span class="highlight">{{$age->name}}</span>
                <br>
            </h2>

            
                <b>حول اللقاح &rarrhk; <p>{{$age->description}}</p></b><br><br>
                <b>لماذا يتم اخذ اللقاح &rarrhk;<p>{{$age->indication}}</p></b><br><br>
                <b>ارشادات &rarrhk;<p>{{$age->guidelines}}</p></b><br><br>
                <b class="location">مكان حقن اللقاح &rarrhk;<p>{{$age->injection_location}}</p>
                <div class="video">
                    <video width="250" height="160" controls>
                        <source src="{{Storage::url($age->short_video_path_vaccines)}}" type="video/mp4">
                    </video>
                </b><br><br>
            </div>
        @endforeach
    </div>
</body>
</html>