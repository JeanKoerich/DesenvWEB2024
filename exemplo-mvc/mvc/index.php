<?php 

    require_once "lib/application.php";

    new Application();
    //Invoca estrutura de rotas para requerer os arquivos de aplicação e instanciar as classes necessárias.
    Application::getInstance()->route();
    
?>