<?php

use src\Models\Database;

require_once __DIR__ . '/autoload.php';

require_once __DIR__ . '/../config.php';

if (!DB_INITIALIZED) {
    $db = new Database();
    if (!$db->isDBInitialized()) {
        $db->initializeDB();
    }
}
session_start();
require_once __DIR__ . '/router.php';
