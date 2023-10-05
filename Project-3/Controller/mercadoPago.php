<?php
class MercadoPagoModel
{
    public static function createPreference()
    {
        $carrito = json_decode($_POST["carrito"], true);

        MercadoPago\SDK::setAccessToken('TEST-4307504918349233-092817-7ae06736d506a6745ba0a0d6e7ccf1a9-1492918253');

        $preference = new MercadoPago\Preference();

        foreach ($carrito as $product) {
            $item = new Item($product['title'], $product['quantity'], $product['unit_price']);
            $items[] = $item;
        };
        $preference->items = $items;
        $preference->save();
        return $preference->id;
    }
}
