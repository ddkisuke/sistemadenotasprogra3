<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Lista de notas

    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Alumnos</th>
										<th>Cursos</th>
										<th>Docentes</th>
										<th>Nota1</th>
										<th>Nota2</th>
										<th>Nota3</th>
										<th>Nota4</th>
										<th>Promedio</th>
										<th>Parcial</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $nota->alumno->nombre }}</td>
											<td>{{ $nota->curso->nombrecurso }}</td>
											<td>{{ $nota->docente->nombre }}</td>
											<td>{{ $nota->nota1 }}</td>
											<td>{{ $nota->nota2 }}</td>
											<td>{{ $nota->nota3 }}</td>
											<td>{{ $nota->nota4 }}</td>
											<td>{{ $nota->promedio }}</td>
											<td>{{ $nota->parcial }}</td>

                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

</body>
</html>