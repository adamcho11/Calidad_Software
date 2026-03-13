<form action="/personas" method="POST">
    @csrf
    <input type="text" name="nombres">
    <input type="text" name="apellidos">
    <input type="text" name="correo">
    <input type="text" name="sexo">
</form>