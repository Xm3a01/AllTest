<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/test" method="post">
    
        @csrf

        <input type="date" name = 'data_f1'>
        <input type="date" name = 'data_f2'>

        <input type="submit" value="OK">
    
    </form>
</body>
</html>