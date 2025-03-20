<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .email {
            width: 30em;
            border: 1px solid green;
            padding: 2rem;
            box-shadow: 10px 10px 20px lightblue;
            border-radius: 20px;
        }

        .email h1 {
            color: red;
        }
    </style>
</head>
<body>
    <div class="email">
        <h1 class="text-center">Contact from {{ $name }}</h1>
        <p>{{ $body }}</p><br><br>
        from the {{ $email }}
    </div>
</body>

</html>
