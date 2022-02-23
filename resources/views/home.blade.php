<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/movies/rate">
        @csrf
        <label>Please enter something </label>
        <input type="hidden" name="movie_id" id="movie_id">
        <input type="number" name="value" id="value">
        <button>Submit</button>        
    </form>
</body>
</html>