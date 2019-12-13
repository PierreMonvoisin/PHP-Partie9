<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Exercice 4</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body class='container-fluid bg-secondary'>
  <div class='row mt-5'>
    <div class='jumbotron shadow-lg py-5 mx-auto text-center'>
      <h2 class="mb-4">- Link -</h2>
      <div class="card">
        <h5 class="card-header">\ Date /</h5>
        <div class="card-body">
          <?php $dateNow = date_create(); ?>
          <p>Date actuelle = <?= date_timestamp_get($dateNow) ?></p>
          <?php $dateOld = date_create("2016-08-12 15:00:00"); ?>
          <p>Date du mardi 2 août 2016 à 15h00 = <?= date_timestamp_get($dateOld) ?></p>
        </div>
      </div>
      <p class='text-right mt-2 font-weight-bold'>Un message de la direction</p>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>
