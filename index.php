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
    <title>Php Hotel</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
</head>

<body>
    <form class="container my-5" action="index.php" method="GET">
        <div class="form-check form-check-inline">

            <label class="form-check-label" for="vote">Filtra per voto</label>
            <input class="form-control mb-3" type="number" id="vote" name="vote" placeholder="Inserisci voto da 1 a 5">

            <input class="form-check-input" type="checkbox" id="park" name="park" value="filter">
            <label class="form-check-label" for="park">Filtra per parcheggio disponibile</label>
        </div>
        <button class="btn btn-primary" type="submit">Filtra</button>

    </form>

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
            <?php foreach ($hotels as $hotel) {
                var_dump($hotel['vote']);
                var_dump(intval($_GET['vote']));
            ?>
                <?php if (($_GET['park'] === 'filter' && $hotel['parking'] && $hotel['vote'] >= intval($_GET['vote'])) || ($_GET['park'] === null && $hotel['vote'] >= intval($_GET['vote']))) { ?>
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

            <?php } ?>

        </tbody>
    </table>

</body>

</html>