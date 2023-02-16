<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contacto" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                        <li> {{ $errors }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" ><br>

        <br>
        <label for="codigo">Codigo  </label>
        <input type="text" name="codigo" id="codigo"><br>

        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>