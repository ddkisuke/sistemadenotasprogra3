<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Lista de docentes

    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Dui</th>
										<th>Telefono</th>
										<th>Email</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $docente->nombre }}</td>
											<td>{{ $docente->apellido }}</td>
											<td>{{ $docente->dui }}</td>
											<td>{{ $docente->telefono }}</td>
											<td>{{ $docente->email }}</td>
											

                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
</body>
</html>