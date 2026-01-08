<?php

// --- KONFIGURASI KHUSUS VERCEL ---
// Karena Vercel bersifat Read-Only, kita harus memindahkan 
// semua file cache yang mau ditulis Laravel ke folder /tmp

$tmpPath = '/tmp';

// Set path untuk cache file sistem Laravel
putenv("APP_PACKAGES_CACHE={$tmpPath}/packages.php");
putenv("APP_SERVICES_CACHE={$tmpPath}/services.php");
putenv("APP_CONFIG_CACHE={$tmpPath}/config.php");
putenv("APP_ROUTES_CACHE={$tmpPath}/routes.php");
putenv("APP_EVENTS_CACHE={$tmpPath}/events.php");

// Set path untuk view yang di-compile (Blade)
putenv("VIEW_COMPILED_PATH={$tmpPath}/views");

// Pastikan folder view cache ada
if (!is_dir($tmpPath . '/views')) {
    mkdir($tmpPath . '/views', 0755, true);
}

// --- JALANKAN LARAVEL ---
// Panggil file utama Laravel dari folder public
require __DIR__ . '/../public/index.php';