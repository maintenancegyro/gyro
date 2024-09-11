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

    $to = "info@gyro.fr"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau compte B2B créé";
    $message = "
    <html>
    <head>
    <title>Nouveau compte B2B créé</title>
    </head>
    <body>
    <p>Un nouveau compte B2B a été créé avec les informations suivantes :</p>
    <table>
    <tr><th>Nom de l'entreprise</th><td>$companyName</td></tr>
    <tr><th>Nom du contact</th><td>$contactName</td></tr>
    <tr><th>Adresse</th><td>$address</td></tr>
    <tr><th>Code Postal</th><td>$postalCode</td></tr>
    <tr><th>Ville</th><td>$city</td></tr>
    <tr><th>Pays</th><td>$country</td></tr>
    <tr><th>Numéro de téléphone</th><td>$phone</td></tr>
    <tr><th>Siret ou TVA</th><td>$vat</td></tr>
    <tr><th>Site Internet</th><td>$website</td></tr>
    <tr><th>Adresse e-mail</th><td>$email</td></tr>
    <tr><th>Mot de passe</th><td>$password</td></tr>
    </table>
    </body>
    </html>
    ";

    // Pour envoyer un e-mail HTML, l'en-tête Content-type doit être défini
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // En-têtes additionnels
    $headers .= 'From: <webmaster@gyro.fr>' . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }
}
?>
