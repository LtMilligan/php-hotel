<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $tableHeaders = [
        'Nome',
        'Descrizione',
        'Parcheggio',
        'Voto',
        'Distanza dal Centro (km)'
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>PHP-Hotel</title>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Elenco degli Hotel</h1>
    <table class="table table-striped">
        <thead class="bg-green">
            <tr>
            <?php foreach ($tableHeaders as $header) { ?>
                    <th><?php echo $header; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <td><?php echo $hotel['name']; ?></td>
                    <td><?php echo $hotel['description']; ?></td>
                    <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                    <td><?php for($i=0; $i < 5; $i++) {
                        if($i < $hotel['vote']) {
                            echo '<i class="bi bi-star-fill text-warning"></i>';
                        } else {
                            echo '<i class="bi bi-star text-warning"></i>';
                        }
                    } ?></td>
                    <td><?php echo $hotel['distance_to_center']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>