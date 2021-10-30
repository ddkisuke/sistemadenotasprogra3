<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Lista de curso

    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Docentes</th>
										<th>Nombrecurso</th>
										<th>Año</th>
										<th>Ciclo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $curso->docente->nombre }}</td>


											<td>{{ $curso->nombrecurso }}</td>
											<td>{{ $curso->año }}</td>
											<td>{{ $curso->ciclo }}</td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                                            

</body>
</html>