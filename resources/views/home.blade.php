<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Главная страница</h1>
    <ul>
         <li><a href = {{$about}}>О нас</a></li> 
         <li><a href = {{$contact}}>Контактная информация</a></li> 
    </ul>
    <p> Сообщение: {{$text}}</p>
    <p> Телефон: {{$phone}}</p>
</body>
</html>