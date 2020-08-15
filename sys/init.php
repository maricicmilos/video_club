<?php
    require 'autoload_reg.php';
    $db = Database::getInstance()->getConnection();
    session_start();
    $date = date('Y');
