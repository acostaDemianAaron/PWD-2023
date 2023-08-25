<?php

class cinemas_control
{
    function datos()
    {
        if (isset($_POST)) {
            return $_POST;
        } else {
            return null;
        }
    }
}
