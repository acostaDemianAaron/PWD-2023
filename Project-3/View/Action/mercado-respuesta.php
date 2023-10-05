<?php
require_once("../../Config/config.php");
require_once('../Structure/header.php');
//require_once('../../vendor/autoload.php')
require_once("../../Controller/mercadoPago.php");
$preferenceId = MercadoPagoModel::createPreference();

?>


<body>
    <!--SDK MercadoPago.js-->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('public_key');
        const bricksBuilder = mp.bricks();
    </script>
    <div id="wallet_container"></div>
    <script>
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "<?php echo $preferenceId; ?>",
            },
        });
    </script>
</body>

<?php
require_once('../Structure/footer.php');
?>