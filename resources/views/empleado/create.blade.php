Formulario de creacion de empleados

<form action="{{url('/empleado')}}" method="post" entype="multipart/form-data">
@csrf
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<label for="Nombre">ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
<br>
<label for="Nombre">ApellidoMaterno</label>
<input type="text"name="ApellidoMaterno" id="ApellidoMaterno">
<br>
<label for="Nombre">Correo</label>
<input type="text" name="Correo" id="Correo">
<br>
<label for="Nombre">Foto</label>
<input type="File" name="Foto" id="Foto">
<br>
<input type="Submit" name="Enviar' id="Enviar">







</form>