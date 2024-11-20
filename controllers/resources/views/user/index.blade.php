<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>User list:</h1>
    <ul>
        @if ($users->isEmpty())
            <P>The user list is empty</P>
        @else

        @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
        @endif

        @switch($age)
            @case(18)
                <h1>18 years old</h1>
                @break
            @case(2)

                @break
            @default

        @endswitch
    </ul>
</body>
</html>
