<?php
require_once("../../Config/config.php");

new Header("Mercado Pago", $LIBS, $INICIO);
?>

<body>
    <div class="container">
        <h1 class="mt-5">Tienda en línea</h1>

        <!-- Contenedor de productos -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Producto 1</h2>
                        <p class="card-text">Precio: $10</p>
                        <button class="btn btn-primary" onclick="agregarAlCarrito('Producto 1', 1, 10)">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Producto 2</h2>
                        <p class="card-text">Precio: $15</p>
                        <button class="btn btn-primary" onclick="agregarAlCarrito('Producto 2', 1, 15)">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carrito de compras -->
        <br>
        <div id="cart">
        </div>
    </div>

    <script src="../js/carrito.js"></script>
</body>

<?php
new Footer($INICIO);
?>