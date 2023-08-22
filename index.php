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
        <title>PHP Hotel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        

    </head>
    <body class="bg-primary">

        <main>
            <div class="container text-center mt-5 d-flex flex-wrap align-items-center justify-content-center">
                <h1 class="text-white">PHP Hotel</h1>
                <table class="table table-bordered border-white table-striped table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr>
                                <td><?php echo $hotel["name"]; ?></td>
                                <td><?php echo $hotel["description"]; ?></td>
                                <td>
                                    <?php if ($hotel["parking"] == true) { ?>
                                        <p class="text-success">Disponibile</p>
                                    <?php } else { ?>
                                        <p class="text-danger">Non disponibile</p>
                                    <?php } ?>
                                </td>
                                <td class="text-warning"><?php echo $hotel["vote"]; ?> / 5 &#9733;</td>
                                <td><?php echo $hotel["distance_to_center"]; ?> km</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
        
    </body>
</html>