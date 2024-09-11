<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST['company-name'];
    $contactName = $_POST['contact-name'];
    $address = $_POST['address'];
    $postalCode = $_POST['postal-code'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $vat = $_POST['vat'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Traitement des données, par exemple, enregistrement dans une base de données
    // ...

    echo "Compte créé avec succès !";
}
?>
