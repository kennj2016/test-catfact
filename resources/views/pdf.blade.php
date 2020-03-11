<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    @foreach ($listFacts as $data)
        <p>{{$data['fact'] }}</p>
    @endforeach
</body>
</html>
