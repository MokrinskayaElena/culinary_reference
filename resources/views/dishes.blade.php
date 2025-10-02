<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Все блюда с категориями</title>
</head>
<body>
<h2>Список всех блюд с категориями</h2>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Способ приготовления</th>
            <th>Время приготовления</th>
            <!-- <th>Создано</th>
            <th>Обновлено</th>
            <th>Пользователь</th> -->
            <th>Категория</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dishes as $dish)
        <tr>
            <td>{{ $dish->id }}</td>
            <td>{{ $dish->name }}</td>
            <td>{{ $dish->preparation_method }}</td>
            <td>{{ $dish->preparation_time }}</td>
            <!-- <td>{{ $dish->created_at }}</td>
            <td>{{ $dish->updated_at }}</td>
            <td>{{ $dish->user_id }}</td> -->
            <td>{{ $dish->category ? $dish->category->name : 'Без категории' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>