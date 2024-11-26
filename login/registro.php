<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuario</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #1a1b5e, #232475);
      font-family: 'Poppins', sans-serif;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .register-container {
      background: #232475;
      border-radius: 15px;
      padding: 40px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }
    .register-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 600;
      color: #ffffff;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      font-weight: 500;
      display: block;
      margin-bottom: 5px;
    }
    .form-control {
      width: 100%;
      padding: 10px 15px;
      background: #1f215a;
      border: 1px solid #44457b;
      border-radius: 8px;
      color: white;
      font-size: 14px;
    }
    .form-control:focus {
      border-color: #28a745;
      outline: none;
      box-shadow: 0 0 8px rgba(40, 167, 69, 0.6);
    }
    .btn-primary {
      width: 100%;
      background-color: #28a745;
      border: none;
      color: white;
      padding: 10px 15px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #218838;
      box-shadow: 0 4px 10px rgba(40, 167, 69, 0.4);
    }
  </style>
</head>
<body>
<div class="register-container">
  <h2>Registro de Usuario</h2>

  <?php
  // Rutas relativas para incluir los archivos necesarios
  include("../modelo/conexion.php");
  include("../controlador/controlador_registro.php");
  ?>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="Nombre_usuario">Nombre</label>
      <input type="text" id="Nombre_usuario" name="Nombre" class="form-control" placeholder="Ingresa tu nombre" required>
    </div>
    <div class="form-group">
      <label for="apellido_usuario">Apellido</label>
      <input type="text" id="apellido_usuario" name="apellido" class="form-control" placeholder="Ingresa tu apellido" required>
    </div>
    <div class="form-group">
      <label for="username">Nombre de Usuario</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Ingresa tu nombre de usuario" required>
    </div>
    <div class="form-group">
      <label for="Correo_electronico">Correo Electrónico</label>
      <input type="email" id="Correo_electronico" name="Correo" class="form-control" placeholder="Ingresa tu correo electrónico" required>
    </div>
    <div class="form-group">
      <label for="Telefono">Teléfono</label>
      <input type="tel" id="Telefono" name="Telefono" class="form-control" placeholder="Ingresa tu número de teléfono" required>
    </div>
    <div class="form-group">
      <label for="Contrasena">Contraseña</label>
      <input type="password" id="Contrasena" name="Contrasena" class="form-control" placeholder="Ingresa tu contraseña" required>
    </div>
     <div class="form-group">
      <label for="Rol">Rol</label>
      <select id="Rol" name="Rol" class="form-control" required >
        <!-- <option value="Administrador">Administrador</option> -->
        <option value="Usuario">Usuario</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="Estado">Estado</label>
      <select id="Estado" name="Estado" class="form-control" required>
        <option value="Activo">Activo</option>
        <!-- <option value="Inactivo">Inactivo</option> -->
      </select>
    </div> 
    <button type="submit" name="Registrar" class="btn-primary">Registrar</button>
  </form>
</div>

</body>
</html>
