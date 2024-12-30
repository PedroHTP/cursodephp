<?php
session_start();
        if (isset($_SESSION['mensagem'])) {
            echo "<script>window.onload = function () {M.toast({html: '".$_SESSION['mensagem']."'});};</script>";
        }
    session_unset();