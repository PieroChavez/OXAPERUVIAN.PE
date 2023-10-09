
@extends('layouts.app') <!-- Ajusta el layout según tu proyecto -->

@section('content')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">




<div class="cover-container">
    <div class="cover-text">
        <h1>TODO EN OXAPAMPA</h1>
        <p>Explora nuestras increíbles ofertas y productos de alta calidad.</p>
           
    <main>
        <div class="contenedor">
          <div class="busqueda">
            <input name="serach" id="search" type="text" />
            <img id="buscar" class="lupa" src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-la-lupa-by-vexels.png" />
            
          </div>
          <div class="contenedorLogo">
          </div>
        </div>
      </main>
        <a href="/productos" class="button-link">Ver Productos</a>
    </div>
    <img src="{{ asset('https://th.bing.com/th/id/R.477270a9b4c685e7564fd3590047edb3?rik=FgDiSjbD%2bXR93w&riu=http%3a%2f%2fcinnamonstyle.pe%2fwp-content%2fuploads%2f2018%2f01%2fportal-oxapampa.jpg&ehk=S09gwGIyGcCx%2fshIpYF7kQphTQfGOIjR8AvS8Czs6RE%3d&risl=&pid=ImgRaw&r=0') }}" alt="Portada" class="background-image">
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



<section>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nesciunt incidunt voluptatibus veniam reiciendis similique sint esse possimus suscipit corrupti rem unde excepturi quaerat consequuntur voluptatum, magnam quisquam id pariatur.</p>
    <ul>
        <li> <p>mas de uno en un afamili hace lo que se puede hca</p></li>
        <li> <p>lo que sugiere la metodolopgia de aprendiza es 2que cada uno de lo que puede se apache_child_terminate</p> </li>
        <li> <p>tener escrito lo puedo hacer mas no queirp</p><p>no solo es lo que uno quiere mas lo que se requiere es lo que uno puede hacer asi como </p></li>
        <li> oe que fue como es eso la</li>
    </ul>
</section>






@endsection













  








  