
@extends('layouts.app') <!-- Ajusta el layout según tu proyecto -->

@section('content')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">





<main class="main-welcome">
    <h1 class="h1-welcome">¿Adónde vamos hoy?</h1>
    <div class="search">
        <input type="text" class="searchTerm" placeholder="¿Qué estás buscando?">
        <button type="button" class="searchButton">
            Buscar
        </button>
    </div>
</main>


        <!-- Carrusel de Portada -->
        <div id="portadaCarrusel" class="carrusel">
            <div class="carrusel-item">
                <img src="https://th.bing.com/th/id/R.fc3daaaf6a0962c97bc3b2eecf951512?rik=WswzcFEFuxj0WQ&pid=ImgRaw&r=0" alt="Imagen 1">
            </div>
            <div class="carrusel-item">
                <img src="https://amagecafe.com/wp-content/uploads/2022/04/IMG_8260-1-2.jpg" alt="Imagen 2">
            </div>
            <div class="carrusel-item">
                <img src="https://th.bing.com/th/id/R.4cb3e39dc4f5465f0ea542d2f52167c0?rik=Aw07LzJCTMourw&riu=http%3a%2f%2fwww.bitacorarevista.com%2fweb%2fwp-content%2fuploads%2fMG_4703.jpg&ehk=cBtAfaQzDF0PHfW94buiMPtMZvnUWo2x%2fJY7b%2f1exF0%3d&risl=&pid=ImgRaw&r=0 alt="Imagen 3">
            </div>
        </div>





    

        <div class="whatsapp-button">
            <a href="https://api.whatsapp.com/send?phone=51945848943" target="_blank" rel="noopener noreferrer">
                <img src="" alt="WhatsApp">
            </a>
        </div>










<main>
    <section class="recommendations">
        <h2>Recomendaciones en Oxapampa</h2>
        <p>Descubre lo mejor que Oxapampa tiene para ofrecer:</p>
        
        <div class="recommendation">
            <img src="https://th.bing.com/th/id/R.ef9c4bca1beef7e0633d84a7e0e93e58?rik=Gf0nAmFnzYHbvw&riu=http%3a%2f%2fsislogicperu.net%2fsislogicperu.net%2fHH%2fwp-content%2fuploads%2f2019%2f01%2fslide2.jpg&ehk=VvgETnI1czDNuGcOvglcbjOMUQNWzwFpeSqoRFV%2bevE%3d&risl=&pid=ImgRaw&r=0" alt="Hotel en Oxapampa">
            <h3>Hotel Los Pinos</h3>
            <p>Un lugar acogedor para tu estadía en Oxapampa. Excelente ubicación y comodidades.</p>
            <a href="/hoteles">Más información</a>
        </div>
        
        <div class="recommendation">
            <img src="cafeteria.jpg" alt="Cafetería en Oxapampa">
            <h3>Cafetería Aromas del Bosque</h3>
            <p>Disfruta de deliciosos cafés y pasteles en un ambiente natural y relajado.</p>
            <a href="/cafeterias">Más información</a>
        </div>
        
        <div class="recommendation">
            <img src="restaurante.jpg" alt="Restaurante en Oxapampa">
            <h3>Restaurante El Sabor Criollo</h3>
            <p>Prueba la auténtica comida peruana en nuestro restaurante en el corazón de Oxapampa.</p>
            <a href="/restaurantes">Más información</a>
        </div>
    </section>
</main>


<main>
    <section class="product">
        <img src="cafe1.jpg" alt="Café 1">
        <h2>Café Arabica</h2>
        <p>Descripción del Café Arabica. Un café suave y aromático.</p>
        <p class="price">$10.99</p>
        <button class="buy-button">Comprar</button>
    </section>

    <section class="product">
        <img src="cafe2.jpg" alt="Café 2">
        <h2>Café Robusta</h2>
        <p>Descripción del Café Robusta. Un café fuerte y vigorizante.</p>
        <p class="price">$9.99</p>
        <button class="buy-button">Comprar</button>
    </section>

    <section class="product">
        <img src="cafe3.jpg" alt="Café 3">
        <h2>Café Descafeinado</h2>
        <p>Descripción del Café Descafeinado. Sin cafeína pero con todo el sabor.</p>
        <p class="price">$11.99</p>
        <button class="buy-button">Comprar</button>
    </section>
</main>




<section class="products">
    <div class="product">
        <img src="https://i.pinimg.com/564x/cc/62/95/cc6295cb12d2c7d706357a1130aab87b.jpg" alt="Producto 1">
        <h2>Producto 1</h2>
        <p>Precio: $25</p>
        <p>Detalles: Descripción del producto 1.</p>
        <div class="rating">
            <!-- Agrega tus estrellas aquí -->
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>

    <div class="product">
        <img src="https://i.pinimg.com/564x/cc/62/95/cc6295cb12d2c7d706357a1130aab87b.jpg" alt="Producto 1">
        <h2>Producto 1</h2>
        <p>Precio: $25</p>
        <p>Detalles: Descripción del producto 1.</p>
        <div class="rating">
            <!-- Agrega tus estrellas aquí -->
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>

    <div class="product">
        <img src="https://i.pinimg.com/564x/cc/62/95/cc6295cb12d2c7d706357a1130aab87b.jpg" alt="Producto 1">
        <h2>Producto 1</h2>
        <p>Precio: $25</p>
        <p>Detalles: Descripción del producto 1.</p>
        <div class="rating">
            <!-- Agrega tus estrellas aquí -->
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>

    <div class="product">
        <img src="https://i.pinimg.com/564x/cc/62/95/cc6295cb12d2c7d706357a1130aab87b.jpg" alt="Producto 1">
        <h2>Producto 1</h2>
        <p>Precio: $25</p>
        <p>Detalles: Descripción del producto 1.</p>
        <div class="rating">
            <!-- Agrega tus estrellas aquí -->
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>

    <div class="product">
        <img src="https://i.pinimg.com/564x/cc/62/95/cc6295cb12d2c7d706357a1130aab87b.jpg" alt="Producto 1">
        <h2>Producto 1</h2>
        <p>Precio: $25</p>
        <p>Detalles: Descripción del producto 1.</p>
        <div class="rating">
            <!-- Agrega tus estrellas aquí -->
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>

    
    
    <!-- Repite este bloque para los otros productos -->
</section>











@endsection













  








  