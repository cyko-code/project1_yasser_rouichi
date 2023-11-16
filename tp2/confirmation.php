<?php
// Connexion à la base de données
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ecom1_tp2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Affichage des adresses
echo "<h2>Vérification des Adresses</h2>";
for ($i = 1; $i <= $_POST['address_count']; $i++) {
    echo "<p><strong>Adresse $i:</strong></p>";
    echo "<p>Street: {$_POST['street_' . $i]}</p>";
    echo "<p>Street Number: {$_POST['street_nb_' . $i]}</p>";
    echo "<p>Type: {$_POST['type_' . $i]}</p>";
    echo "<p>City: {$_POST['city_' . $i]}</p>";
    echo "<p>Zip Code: {$_POST['zipcode_' . $i]}</p>";

    // Enregistrement dans la base de données
    $street = $_POST['street_' . $i];
    $street_nb = $_POST['street_nb_' . $i];
    $type = $_POST['type_' . $i];
    $city = $_POST['city_' . $i];
    $zipcode = $_POST['zipcode_' . $i];

    $sql = "INSERT INTO addresses (street, street_nb, type, city, zipcode)
            VALUES ('$street', $street_nb, '$type', '$city', '$zipcode')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
