<?php
require_once 'config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Test email sending
$test_email = 'antoncianfoski@gmail.com'; // Ganti dengan email Anda untuk testing
$subject = 'Test Email';
$message = '<h2>Test Email</h2><p>Ini adalah email test untuk memeriksa konfigurasi SMTP.</p>';

echo "<h1>Testing Email Configuration</h1>";
echo "<pre>";

try {
    echo "Attempting to send email...\n";
    if (sendEmail($test_email, $subject, $message)) {
        echo "SUCCESS: Email berhasil dikirim!";
    } else {
        echo "FAILED: Gagal mengirim email. Periksa log error.";
    }
} catch (Exception $e) {
    echo "EXCEPTION: " . $e->getMessage();
}

echo "</pre>";
?>
