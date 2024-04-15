<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4,
            'img' => 'img/foto-1-.jpeg'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
            'img' => 'img/foto-2-.jpeg'

        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
            'img' => 'img/foto-3-.jpeg'

        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
            'img' => 'img/foto-4-.jpeg'

        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
            'img' => 'img/foto-5-.jpeg'

        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-hotel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center mb-5 mt-4 text-danger"> Gli Hotel più popolari</h1>

<div class="container">
  <div class="row">

    <?php foreach ($hotels as $hotel): ?>
      <div class="col-md-4">
        <div class="card mb-4">
          
        <img src="<?php echo $hotel['img']; ?>" class="card-img-top" alt="<?php echo $hotel['name']; ?>">        
          <div class="card-body">
            <h5 class="card-title"><?php echo $hotel['name']; ?></h5>
            <p class="card-text"><?php echo $hotel['description']; ?></p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Parking: <?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></li>
              <li class="list-group-item">Vote: <?php echo $hotel['vote']; ?></li>
              <li class="list-group-item">Distance to center: <?php echo $hotel['distance_to_center']; ?> km</li>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

</body>
</html>

<style>

    .card-img-top {
      height: 240px; 
      object-fit: cover; 
    }
  </style>