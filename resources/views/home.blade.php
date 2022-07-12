<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($trains as $train)
        <li>
            <p>{{$train->company}}</p>
            <p>{{$train->departure_station}}</p>
            <p>{{$train->arrival_station}}</p>
            <p>{{$train->departure_time}}</p>
            <p> {{$train->arrival_time}}</p>
            <p>{{$train->train_code}}</p>
            <p>{{$train->carriage_number}}</p>
            <p>{{$train->in_time}}</p>
            <p>{{$train->cancelled}}</p>
        </li>
        @endforeach
    </ul>

</body>
</html>