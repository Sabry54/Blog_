<?php 
    if (isset($_POST['submit']) and isset($_POST['password']) and isset($_POST['username'])){

            extract($_POST);

                if (!empty($password) and !empty($username)){
                    
                    }else{
                        $alert= array('alert-error','champs vide(s)');
                    }
    }
?>