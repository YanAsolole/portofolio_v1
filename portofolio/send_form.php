<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alfianyt282@email.com"; // Ganti dengan alamat email tujuan
    $subject = "Pesan dari " . $_POST["yourname"];
    $message = $_POST["yourmessage"];
    $headers = "From: " . $_POST["youremail"];

    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 587);
    ini_set('username', 'alfianyt282@gmail.com');
    ini_set('password', 'PABUARAN02 ');
    ini_set('auth', 'login');
    ini_set('tls', true);


    if (mail($to, $subject, $message, $headers)) {
        echo "Email berhasil terkirim.";
    } else {
        echo "Email gagal terkirim.";
    }
}
?>
