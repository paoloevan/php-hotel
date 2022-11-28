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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    <h5>Nome</h5>
                </th>
                <th scope="col">
                    <h5>Descrizione</h5>
                </th>
                <th scope="col">
                    <h5>Parcheggio</h5>
                </th>
                <th scope="col">
                    <h5>Voto</h5>
                </th>
                <th scope="col">
                    <h5>Distanza dal centro</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <th scope="row"><?php echo $hotel['name']; ?></th>
                    <td><?php echo $hotel['description']; ?></td>
                    <td>
                        <?php if ($hotel['parking']) { ?>
                            Disponibile
                        <?php } else { ?>
                            Non disponibile
                        <?php } ?>
                    </td>
                    <td>
                        <?php echo $hotel['vote']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center'] ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>

</html>