<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $review = htmlspecialchars($_POST['review']);

    // Format review yang akan disimpan
    $review_entry = "Name: $name\nEmail: $email\nReview: $review\n\n---\n\n";

    // Menyimpan review ke file
    file_put_contents('reviews.txt', $review_entry, FILE_APPEND);

    // Redirect kembali ke halaman utama setelah menyimpan review
    header('Location: index.php');
    exit;
}
?>