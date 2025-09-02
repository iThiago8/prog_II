<?php

spl_autoload_register(function ($classe){
    $arquivo = "models/$classe.php";

    if (file_exists($arquivo)){
        require_once ($arquivo);
    }
});

