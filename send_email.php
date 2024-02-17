<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "azizymiftah@gmail.com";
    $subject = "Pesan dari $name: $subject";
    $body = "Nama: $name\nEmail: $email\nTelepon: $phone\n\nPesan:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Pesan Anda berhasil terkirim.";
    } else {
        echo "Maaf, pesan Anda gagal terkirim.";
    }
}
?>
