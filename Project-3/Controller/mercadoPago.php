<?php
class MercadoPagoModel
{
    public static function createPreference()
    {
        $carrito = json_decode($_POST["carrito"], true);

        MercadoPago\SDK::setAccessToken('access_token');

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
