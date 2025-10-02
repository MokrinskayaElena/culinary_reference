<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>609-11</title>
</head>
<body>
    <h2>Список категорий:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Наименование</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>