<?php
    setcookie('tema','ligth_mode.css',time() + (365*24*60*60));
    header('Location: index.php');