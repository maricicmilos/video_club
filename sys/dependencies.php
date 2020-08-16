<?php
    session_start();
    $db = Database::getInstance()->getConnection();
    $date = date('Y');