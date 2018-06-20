<?php
    session_start();
    if(isset($_SESSION['id'])){
        echo "
            <ol>
                <li><i class=\"fa fa-pencil aparece\"></i></li>
                <li data-toggle=\"modal\" data-target=\"#ModalFoto{$_GET['id']}  \"><i class=\"fa fa-photo aparece\" ></i></li>
            </ol>
            ";
        }
?>