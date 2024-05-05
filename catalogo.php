<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meteora Store</title>
    <link rel="stylesheet"  href="stylecatalogo.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="catalogo.php">Catalogo</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li><a href="#">Oferta</a></li>
                    <li><a href="#">Administrar</a></li>
                    <li><a href="loginvista.php">Cuenta</a></li>
                </ul>   
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="images/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Ofertas especiales</h1>
                <p>
                    Estrena los mejores productos
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="images2/arriba.png" alt="">
            </div>
        </div>
    </header>

    <main class="product container" id="lista-2"> 
    <div class="product-container">
        <div class="product">
            <img src="images2/figura-1.png" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <p>Precio: $100</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>

        <div class="product">
            <img src="images2/figura-1.png" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <p>Precio: $100</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>

        <div class="product">
            <img src="images2/figura-1.png" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <p>Precio: $100</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>

        <div class="product">
            <img src="images2/figura-1.png" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <p>Precio: $100</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>

        <div class="product">
            <img src="images2/figura-1.png" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <p>Precio: $100</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>

        <div class="product">
            <img src="images2/figura-1.png" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <p>Precio: $100</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>
    </div>
</main>


    <footer class="footer container">
        <div class="link">
            <h3 class="titulo1">CLIENTES</h3>
            <ul>
                <li><a href="#">Dudas</a></li>
                <li><a href="#">Preguntas Frecuentes</a></li>
                <li><a href="#">Reseñas</a></li>
                <li><a href="#">Terminos del servicio</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>MI CUENTA</h3>
            <ul>
                <li><a href="#">Iniciar Sesión</a></li>
                <li><a href="#">Crear Cuenta</a></li>
                <li><a href="#">Politicas de Reembolso</a></li>
                <li><a href="#">Creditos</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>CONTACTANOS</h3>
            <ul>
                <li><a href="#">Horario de atencion:</a></li>
                <li><a href="#">Todos los dias 24/7</a></li>
                <li><a href="#">Correo:</a></li>
                <li><a href="#">Meteora@gmail.com</a></li>
            </ul>
        </div>
        <div class="link">
            <h3 class="redes">REDES</h3>
            <ul>
                <li><a href="#"><img src="footer/facebook-logo.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="footer/twitter-logo.jpg" alt="Twitter"></a></li>
                <li><a href="#"><img src="footer/instagram-logo.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="footer/youtube-logo.png" alt="YouTube"></a></li>
            </ul>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
