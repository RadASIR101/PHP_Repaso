<?php
# LOGIN 2
session_start();
// crear un archivo de datos para traer los datos pero para este ejemplo haremos
# ARRAY DE CORREOS para 
$usuarios=[
    'admin@email.es' => ['asd1' , 1],
    'user@email.es' => ['asd1' , 2],
    'manolo@email.es' => ['asd1' , 2],
];

// Recoger las contraseñas
    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        // USER DATA : tiene la contraseña y el rol del usuario
        foreach($usuarios as $user=>$userdata){
             if($user==$email && $password==$userdata[0]){
              $_SESSION['user']=$email;
              $_SESSION['perfil']=$userdata[1];
              header('Location:portal2.php');
              die();
             }
            }
            
            $_SESSION['error'] = '*** User o password incorrecto';
            header('Location:login2.php');
            die();
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP - 2025-10-21</title>
    <!-- CDN icono tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- CDN icono fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css"
        crossorigin="anonymous"></script>
</head>

<body>
<div class="my-8">
    <h2 style="color: blue; text-align: center; font-size: 2.5rem; font-weight: bold; text-transform: uppercase; margin: 2rem 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">Iniciar sesión</h2>
</div>

 <form action="#" method="post" class="w-full max-w-sm mx-auto space-y-4" method="POST" action="login.php">
  <!-- Email -->
  <div>
    <label for="email" class="sr-only">Email</label>
    <div class="relative">
      <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <i class="fa-solid fa-envelope text-gray-400"></i>
      </span>
      <input
        type="email"
        id="email"
        name="email"
        autocomplete="email"
        placeholder="Email"
        class="block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 pl-10 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
      />
    </div>
  </div>

  <!-- Password -->
  <div>
    <label for="password" class="sr-only">Password</label>
    <div class="relative">
      <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <i class="fa-solid fa-lock text-gray-400"></i>
      </span>
      <input
        type="password"
        id="password"
        name="password"
        autocomplete="current-password"
        placeholder="Password"
        class="block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 pl-10 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
      />
    </div>
  </div>

<?php
// Mostrar mensaje de error si existe en la variable de sesión
// Crear variable de sesión de un solo uso para el error
// if (isset($_SESSION['error'])) {
//     echo "<div class='my-1 text-red-500 text-sm italic'>{$_SESSION['error']}</div>";
//         unset($_SESSION['error']); // Remove only the error session variable, not the entire session
// }
// ?>

  <!-- Actions -->
  <div class="flex items-center justify-between gap-3">
    <button
      type="reset"
      class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500"
    >
      <i class="fa-solid fa-rotate-left mr-2"></i>
      Reset
    </button>

    <button
      type="submit"
      class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
    >
      <i class="fa-solid fa-right-to-bracket mr-2"></i>
      Login
    </button>
</div>
</form>
 

</body>

</html>
