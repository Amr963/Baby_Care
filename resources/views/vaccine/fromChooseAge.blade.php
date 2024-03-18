<!DOCTYPE html>
<html>
<head>
    <title>ادخال عمر الطفل</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9eef1;
        }

        .form-container {
            max-width: 800px;
            padding: 60px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #8b405a;
        }

        .form-group select {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            border-radius: 8px;
            border: 2px solid #f4ccd7;
            transition: border-color 0.3s ease-in-out;
        }

        .form-group select:focus {
            border-color: #ed8db1;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(237, 141, 177, 0.25);
       }
  


        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 18px;
            text-align: center;
            border-radius: 8px;
            border: none;
            background-color: #ed8db1;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
            /* تحجيم الزر عند التمرير عليه */
        }

        .btn:hover {
            background-color: #d9729e;
            transform: scale(1.1); /* تكبير حجم الزر */
        }

        .animated-card {
            animation: fadeInUp 1s;
        }
        css


        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 20px, 0);
            }
            100% {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container animated-card">
            <h1 style="color: #8b405a;">لمعرفة اللقاح المناسب لطفلك</h1>
            <form method="POST" action="{{route('rightVaccine')}}">
                @csrf
                <div class="form-group">
                    <label for="selection">اختر العمر</label>
                    <select id="selection" name="select_month" style="border: none; background-color: #f4ccd7; color: #914f66; padding: 15px; font-size: 18px; border-radius: 8px; transition: background-color 0.3s ease-in-out;">
                       @foreach ($allVaccines as $allVaccines)
                           
                       <option value="{{$allVaccines->recommended_age}}">{{$allVaccines->recommended_age}}</option>
                       
                       @endforeach
                    </select>
                </div>
                <button class="btn" type="submit">تأكيد الاختيار</button>
            </form>
        </div>
    </div>
</body>
</html>