<?php
include __DIR__ . "/Models/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotels</title>
</head>

<body>
    <main>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $hotel) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $hotel['name'] . "</th>";
                    echo "<td>" . $hotel['description'] . "</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                    echo "<td>" . $hotel['vote'] . "</td>";
                    echo "<td>" . $hotel['distance_to_center'] . " km</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>