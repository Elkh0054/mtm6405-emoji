<?php
    // Emoji Smileys
    // 128512 - 128567
    // 129296 - 129327
    $emojis = [];
    for ($i = 128512; $i <= 128567; $i++) {
      array_push($emojis, $i);
    }
    $emojis = [];
    for ($i = 129296; $i <= 129327; $i++) {
      array_push($emojis, $i);
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emoji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="row my-3">
      <div class="col">
        <h1 class="display-4 text-center">Emoji</h1>
      </div>
    </div>
    <div class="row">

<?php foreach ($emojis as $number) : ?>

      <div class="col-2 mb-3">
        <div class="card">
          <div class="card-body text-center">
            <p class="display-4 d-flex justify-content-center align-items-center mb-0">&#<?php echo $number;?>;</p>
            <code><?php echo $number;?></code>
          </div>
        </div>
      </div>

<?php endforeach; ?>

    </div>
  </div>
  
</body>
</html>