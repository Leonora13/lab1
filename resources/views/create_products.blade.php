<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Новый продукт </h1>

    <form action="/lab1/public/store" method="get">
        <fieldset>
            <legend>Форма для заполнения</legend>
            <label for="name">Наименование</label>
            <input type="text" id="name" name="name"/>
            <p>
            <label for="price">Цена</label>   
            <input type="text" id="price" name="price" />
            </p>
            <p>
            <label for="description">Описание товара</label>   
            <input type="text" id="description" name="description" />
            </p>
            <p><button>Создать</button></p>
        </fieldset>
    </form>
</body>
</html>