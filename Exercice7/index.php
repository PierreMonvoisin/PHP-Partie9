<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Exercice 7</title>
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
          <?php
          $date = date_create();
          date_add($date, date_interval_create_from_date_string('20 days'));
          ?>
          <p>Date du jour + 20 jours : <?= date_format($date, 'd/m/Y'); ?></p>
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
