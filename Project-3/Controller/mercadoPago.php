<?php
class MercadoPagoModel
{
    public static function createPreference()
    {
        $carrito = json_decode($_POST["carrito"], true);
        if (isset($carrito[0]) && isset($carrito[1])) {
            $producto1 = $carrito[0];
            $producto2 = $carrito[1];
        } elseif (!empty($carrito[0]) && empty($carrito[1])) {
            $producto1 = $carrito[0];
        } else {
            $producto2 = $carrito[1];
        }

        MercadoPago\SDK::setAccessToken('TEST-4307504918349233-092817-7ae06736d506a6745ba0a0d6e7ccf1a9-1492918253');

        $preference = new MercadoPago\Preference();

        // Crear un objeto Item utilizando la clase Item
        if (isset($product1[0]) && isset($product2[0])) {
            $product1 = $producto1;
            $product2 = $producto2;
            $item1 = new Item($product1['title'], $product1['quantity'], $product1['unit_price']);
            $item2 = new Item($product2['title'], $product2['quantity'], $product2['unit_price']);
            $preference->items = array($item1, $item2);
        } elseif ($producto1) {
            $product1 = $producto1;
            $item1 = new Item($product1['title'], $product1['quantity'], $product1['unit_price']);
            $preference->items = array($item1);
        } else {
            $product2 = $producto2;
            $item2 = new Item($product2['title'], $product2['quantity'], $product2['unit_price']);
            $preference->items = array($item2);
        }
        $preference->save();
        return $preference->id;
    }
}
