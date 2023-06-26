<?php
    trait Redirect{
        public function redirect($path){
            header("Location:" . $_SESSION['project-path'] . "/app/pages" . $path);
            exit();
        }
    }

?>