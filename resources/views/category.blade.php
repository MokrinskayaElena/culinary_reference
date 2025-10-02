<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-11</title>
</head>
<body>
<h2>{{ $category ? "Список блюд категории: " . $category->name : 'Неверный ID категории' }}</h2>

@if($category && $category->dishes && $category->dishes->count() > 0)
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>category_id</th>
            <th>Наименование</th>
            <th>Способ приготовления</th>
            <th>Время приготовления (мин)</th>
            <!-- <th>Создано</th>
            <th>Обновлено</th>
            <th>Пользователь</th> -->
        </tr>
    </thead>
    @foreach($category->dishes as $dish)
    <tr>
        <td>{{ $dish->id }}</td>
        <td>{{ $dish->category_id }}</td>
        <td>{{ $dish->name }}</td>
        <td>{{ $dish->preparation_method }}</td>
        <td>{{ $dish->preparation_time }}</td>
        <!-- <td>{{ $dish->created_at }}</td>
        <td>{{ $dish->updated_at }}</td>
        <td>{{ $dish->user_id }}</td> -->
    </tr>
    @endforeach
</table>
@else
<p>Блюда отсутствуют или категория не найдена.</p>
@endif
</body>
</html>