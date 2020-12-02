<?php
//dijalankan agar semua session berjalan
if (!session_id()) {
    session_start();
}
//init (memanggil seluruh file di app)
require_once '../app/init.php';
//menjalankan class App
$app = new App;
