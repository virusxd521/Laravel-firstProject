<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($authors as $user)
        <div class="about-us__person">
            <h2 class="about-us__person-name">{{$user['name']}}</h2>
            <div class="about-us__person-age">{{$user['age']}}</div>
            <div class="about-us__person-position">{{$user['position']}}</div>
        </div> 
    @endforeach

</body>
</html>