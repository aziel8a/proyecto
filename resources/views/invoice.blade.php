<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Socios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
            font-size: 12px; /* Ajusta el tamaño de fuente si es necesario */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: auto; /* Ajusta el ancho de las columnas automáticamente */
        }
        th, td {
            padding: 8px; /* Reduce el padding si es necesario */
            text-align: left;
            font-size: 10px; /* Ajusta el tamaño de fuente en las celdas si es necesario */
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

</head>
<body>

    <h1>Informe de Socios</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Modalidad</th>
                <th>Membresía</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $socio)
                <tr>
                    <td>{{ $socio->id }}</td>
                    <td>{{ $socio->nombre }}</td>
                    <td>{{ $socio->apaterno }}</td>
                    <td>{{ $socio->amaterno }}</td>
                    <td>{{ $socio->telefono }}</td>
                    <td>{{ $socio->email }}</td>
                    <td>{{ $socio->modalidad->nombre }}</td>
                    <td>{{ $socio->membresia->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Generado el {{ now()->format('d/m/Y H:i') }}</p>
    </div>

</body>
</html>
