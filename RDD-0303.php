<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo_evaluacion.css">
    <title>Formulario con Radio Buttons</title>
</head>
<body>

<div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>UNIVERSIDAD DE SAN PEDRO SULA</h4>
                        <h5>RDD-0303 EVALUACIÓN POR PARTE DEL ESTUDIANTE MODALIDAD PRESENCIAL</h5>
                        <p>EDICIÓN: 02  FECHA: 00/04/2023</p>
                        <p>REVISIÓN: 02  FECHA: 00/04/2023</p>
                    </div>
                </div>    

                 <!-- Datos de Evaluación -->
                 <div class=" mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ano" class="form-label">Año</label>
                                <input type="text" class="form-control form-control-sm" id="ano" name="ano" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="periodo" class="form-label">Período</label>
                                <input type="text" class="form-control form-control-sm" id="periodo" name="periodo" value="" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="text" class="form-control form-control-sm" id="fecha" name="fecha" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hora" class="form-label">Hora</label>
                                <input type="text" class="form-control form-control-sm" id="hora" name="hora" value="" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aula" class="form-label">Aula</label>
                                <input type="text" class="form-control form-control-sm" id="aula" name="aula" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="escuela" class="form-label">Escuela</label>
                                <input type="text" class="form-control form-control-sm" id="escuela" name="escuela" value="" required>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <label for="asignatura" class="form-label">Asignatura</label>
                    <input type="text" class="form-control form-control-sm" id="asignatura" name="asignatura" value="" required>
                </div>  

                <div class="form-group">
                    <label for="docente" class="form-label">Docente</label>
                    <input type="text" class="form-control form-control-sm" id="docente" name="docente" value="" required>
                </div>  

                </div>


                <div class="container mt-5">
                    <h3 class= text-center>Evaluación</h3>
                    <br>
<form action="procesar_formulario.php" method="post">
<table class="text-justify ">
    <p><b>Instrucciones: Estimado estudiante: Queremos conocer aspectos pedagógicos y metodológicos del desarrollo de la clase, 
        para ello se le presentarán parejas de enunciados en donde usted deberá seleccionar uno, considerando el que es más afín a lo que sucede en clase.
        Recuerde solo debe seleccionar una alternativa y no deje de responder ninguna pregunta, debe marcar con una x la opción seleccionada. 
        Debe tratar de ser lo más objetivo posible.  												
	</b></p>
        <tr>
            <th class="bg-primary text-white text-center">   Grupos   </th>
            <th class="bg-primary text-white text-center">Enunciados</th>
        </tr>
        <tr>
            <td class= text-center>Grupo 1</td>
            <td>
                <input type="radio" name="grupo1" value="opcion1"> Tengo claro la bibliografía a consultar de la asignatura.
                <br><p></p>
                <input type="radio" name="grupo1" value="opcion2"> No tengo claro la bibliografía a consultar de la asignatura.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 2</td>
            <td>
                <input type="radio" name="grupo2" value="opcion1"> En las actividades de la clase o extra clase, el docente utiliza recursos o materiales de estudio tales como: presentaciones, material de consulta, videos u otros recursos.
                <br><p></p>
                <input type="radio" name="grupo2" value="opcion2"> El docente desarrolla la clase con sus propias explicaciones sin utilizar presentaciones, material de consulta, videos u otros recursos.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 3</td>
            <td>
                <input type="radio" name="grupo3" value="opcion1"> Durante la clase, se realizan actividades tales como: resolución de ejercicios, preguntas y respuestas, trabajo en equipo, exposiciones individuales o en equipo, estudio de casos, proyectos entre otros.
                <br><p></p>
                <input type="radio" name="grupo3" value="opcion2"> El docente explica el contenido de la clase sin realizar actividades de aprendizaje.
            </td>   
        </tr>
        <tr>
            <td class= text-center>Grupo 4</td>
            <td>
                <input type="radio" name="grupo4" value="opcion1"> Cada vez que el docente introduce un contenido nuevo, realiza preguntas para detectar qué sabemos del tema.
                <br><p></p>
                <input type="radio" name="grupo4" value="opcion2"> Al iniciar cada contenido nuevo, el docente siempre brinda primero sus explicaciones y no realiza preguntas para detectar qué sabemos sobre el tema.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 5</td>
            <td>
                <input type="radio" name="grupo5" value="opcion1"> Durante nuestras intervenciones el docente nos corrige si nos equivocamos en las respuestas, y realiza las aclaraciones del tema. 
                <br><p></p>
                <input type="radio" name="grupo5" value="opcion2"> Durante nuestras intervenciones, el docente no corrige si nos equivocamos, ni realiza las aclaraciones del tema. 
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 6</td>
            <td>
                <input type="radio" name="grupo6" value="opcion1"> El docente, señala los errores ortográficos y de redacción al momento de corregir nuestros trabajos. 
                <br><p></p>
                <input type="radio" name="grupo6" value="opcion2"> El docente, no señala los errores ortográficos y de redacción al momento de corregir nuestros trabajos. 
            </td>   
        </tr>
        <tr>
            <td class= text-center>Grupo 7</td>
            <td>
                <input type="radio" name="grupo7" value="opcion1"> Cuando el docente asigna actividades individuales o por equipo explica detalladamente la forma en que debemos realizarlas. 
                <br><p></p>
                <input type="radio" name="grupo7" value="opcion2"> Cuando el docente asigna actividades individuales o por equipo explica sin muchos detalles la forma en que debemos realizarlas, por lo que siempre debemos consultarle al respecto. 
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 8</td>
            <td>
                <input type="radio" name="grupo8" value="opcion1"> El docente solicita que cuando expliquemos un concepto o contenido lo hagamos con nuestras propias palabras.
                <br><p></p>
                <input type="radio" name="grupo8" value="opcion2"> El docente solicita que cuando expliquemos un concepto o contenido lo hagamos tal y como lo dice en los textos estudiados.
            </td>
        </tr>
        <tr>
            <td class= text-center>
                Grupo 9</td>
            <td>
                <input type="radio" name="grupo10" value="opcion1"> El docente realiza las discusiones de acumulados y evaluaciones correspondientes y está abierto a explicar a los estudiantes los aciertos y desaciertos en sus trabajos.
                <br><p></p>
                <input type="radio" name="grupo10" value="opcion2"> El docente no realiza las discusiones de acumulados y de las evaluaciones correspondientes
            </td>   
        </tr>
        <tr>
            <td class= text-center>Grupo 10</td>
            <td>
                <input type="radio" name="grupo11" value="opcion1"> Cuando el docente introduce contenido nuevo, lo relaciona con temas estudiados anteriormente.
                <br><p></p>
                <input type="radio" name="grupo11" value="opcion2"> Cuando el docente introduce contenido nuevo, no lo relaciona con temas estudiados anteriormente.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 11</td>
            <td>
                <input type="radio" name="grupo12" value="opcion1"> El docente utiliza términos técnicos de la especialidad y brinda las explicaciones de los mismos.
                <br><p></p>
                <input type="radio" name="grupo12" value="opcion2"> El docente no utiliza términos técnicos de la especialidad.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 12</td>
            <td>
                <input type="radio" name="grupo13" value="opcion1"> El docente relaciona durante sus explicaciones de los contenidos, con ejemplos de la vida real, con casos prácticos, experiencias del entorno o experiencias personales.
                <br><p></p>
                <input type="radio" name="grupo13" value="opcion2"> El docente no relaciona durante las explicaciones de los contenidos, con ejemplos de la vida real, con casos prácticos, experiencias del entorno o experiencias personales.
            </td>   
        </tr>
        <tr>
            <td class= text-center>Grupo 13</td>
            <td>
                <input type="radio" name="grupo14" value="opcion1"> El docente, en el desarrollo de la clase se dirige a los estudiantes de manera respetuosa y profesional.
                <br><p></p>
                <input type="radio" name="grupo14" value="opcion2"> El docente, en el desarrollo de la clase no se dirige a los estudiantes de una manera respetuosa ni profesional.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 14</td>
            <td>
                <input type="radio" name="grupo15" value="opcion1"> El docente reconoce los aciertos de los estudiantes en el desarrollo de las actividades.
                <br><p></p>
                <input type="radio" name="grupo15" value="opcion2"> El docente no reconoce los aciertos de los estudiantes en el desarrollo de las actividades.
            </td>
        </tr>
        <tr>
            <td class= text-center>Grupo 15</td>
            <td>
                <input type="radio" name="grupo16" value="opcion1"> El docente interviene cuando los estudiantes no podemos resolver alguna diferencia de opiniones, ideas o resultados.
                <br><p></p>
                <input type="radio" name="grupo16" value="opcion2"> El docente no interviene cuando los estudiantes no podemos resolver alguna diferencia de opiniones, ideas o resultados.
            </td>   
        </tr>
     

</table>

  

  
 <br>
   <center> <input type="submit" class= "btn btn-primary" value="Enviar"> </center>
</form>

</body>
</html>
