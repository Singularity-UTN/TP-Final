<?php
    namespace Controllers;
    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."cine-add.php");
        }        
    }
?>

