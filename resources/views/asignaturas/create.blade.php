<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        margin: auto;
        padding: 50px;
        }
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
        input[type=submit]:hover {
        background-color: #45a049;
        }
        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
    </style>
</head>
<body>
    <h2>Nueva Asignatura</h2>
    <div>
        <form action="/asignaturas/create" method ="POST">
            @csrf
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <label>Nombre:</label>
            <input type="text" name="nombreAs" placeholder="Nombre de la asignatura">
            <br>
            <label>Nombre Corto:</label>
            <input type="text" name="nombrecortoAs" placeholder="Nombre corto asignatura">
            <br>
            <label>Profesor:</label>
            <input type="text" name="profesorAs" placeholder="Profesor">
            <br>
            <label>Color:</label>
            <input type="color" name="colorAs" placeholder="Color">
            <br>
            <input type="submit" value="Guardar">
        </form>
        <a href="/asignaturas">Volver</a>
    </div>
</body>
</html>