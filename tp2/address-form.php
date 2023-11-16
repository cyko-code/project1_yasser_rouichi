<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Address Confirmation</title>
</head>
<body>
    <div class="container">
        <form action="confirmation.php" method="post">
            <?php
                $address_count = isset($_POST['address_count']) ? (int)$_POST['address_count'] : 1;

                for ($i = 1; $i <= $address_count; $i++) {
                    echo "<h2>Adresse $i</h2>";
                    echo "<label for='street_$i'>Street:</label>";
                    echo "<input type='text' name='street_$i' id='street_$i' maxlength='50' required>";

                    echo "<label for='street_nb_$i'>Street Number:</label>";
                    echo "<input type='number' name='street_nb_$i' id='street_nb_$i' required>";

                    echo "<label for='type_$i'>Type:</label>";
                    echo "<select name='type_$i' id='type_$i' required>";
                    echo "<option value='livraison'>Livraison</option>";
                    echo "<option value='facturation'>Facturation</option>";
                    echo "<option value='autre'>Autre</option>";
                    echo "</select>";

                    echo "<label for='city_$i'>City:</label>";
                    echo "<select name='city_$i' id='city_$i' required>";
                    echo "<option value='Montreal'>Montreal</option>";
                    echo "<option value='Laval'>Laval</option>";
                    echo "<option value='Toronto'>Toronto</option>";
                    echo "<option value='Quebec'>Quebec</option>";
                    // Ajoutez d'autres villes au besoin
                    echo "</select>";

                    echo "<label for='zipcode_$i'>Zip Code:</label>";
                    echo "<input type='text' name='zipcode_$i' id='zipcode_$i' maxlength='6' required>";
                }
            ?>
            <button type="submit">Confirmer</button>
        </form>
    </div>
</body>
</html>
