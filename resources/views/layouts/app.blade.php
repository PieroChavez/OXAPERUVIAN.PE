<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Sitio Web</title>
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}"> <!-- Asegúrate de que la ruta del archivo CSS sea correcta -->
    <link rel="stylesheet" href="style.css">





</head>
<body>
    
  <header class="">
    <nav>
      <span>oxaperuvian</span>
      <ul>
        <li>Cafeterias</li>
        <li>Hoteles</li>        
        <li>restaurantes</li>
        <li>Tours</li>
        <div class="login-section">
          <a href="/iniciar-sesion">Iniciar Sesión</a>
      </div>
      </ul>
    </nav>
  </header>



  

      
    <main>
        @yield('content') <!-- Aquí se incluirá el contenido de cada vista -->
    </main>

<!-- Agrega esto al final del archivo `welcome.blade.php` antes del cierre de `</body>` -->
<div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send?phone=+51 996 372 728" target="_blank">
        <img src="https://th.bing.com/th/id/R.f5a344f6f4d887788de101a8a6fbc55e?rik=HmE275GCK4VCdg&pid=ImgRaw&r=0" alt="WhatsApp">
        <div class="message">Escríbenos</div>
    </a>
</div>

<footer>
    <nav>
    <ul>
      <li>cafeterias de especialidad</li>
    <li>torneos de baristas</li>
    <li>marcas de cafés</li>
    <li>restauranes</li>
   
    </ul>
  </nav>
     
  <p>&copy; {{ date('Y') }} Barista Estudios</p>
</footer>


</body>
</html>
