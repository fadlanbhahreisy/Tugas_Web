<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('public/node_modules/selectric/public/selectric.css') ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/assets/css/components.css') ?>">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url('public/assets/img/kplk.jpg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <?php
                $username = [
                  'name' => 'username',
                  'id' => 'username',
                  'value' => null,
                  'class' => 'form-control',
                  'placeholder' => 'Username'
                ];
                $password = [
                  'name' => 'password',
                  'id' => 'password',
                  'class' => 'form-control',
                  'placeholder' => 'Password'
                ];
                $repeatPassword = [
                  'name' => 'repeatPassword',
                  'id' => 'repeatPassword',
                  'class' => 'form-control',
                  'placeholder' => 'Repeat Password'
                ];
                $session = session();
                $errors = $session->getFlashdata('errors');
                ?>
                <?php if ($errors != null) : ?>
                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Terjadi Kesalahan</h4>
                    <hr>
                    <p class="mb-0">
                      <?php
                      foreach ($errors as $err) {
                        echo $err . '<br>';
                      }
                      ?>
                    </p>
                  </div>
                <?php endif ?>
                <?= form_open('Auth/register') ?>
                <div class="form-group">
                  <?= form_label("Username", "username") ?>
                  <?= form_input($username) ?>
                </div>
                <div class="form-group">
                  <?= form_label("Password", "password") ?>
                  <?= form_password($password) ?>
                </div>
                <div class="form-group">
                  <?= form_label("Repeat Password", "repeatPassword") ?>
                  <?= form_password($repeatPassword) ?>
                </div>
                <div class="form-check text-right">
                  <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
                </div>
                <?= form_close() ?>

              </div>

              <div class="simple-footer">
                Copyright &copy; KPLK 2020
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('public/assets/js/stisla.js') ?>"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url('public/node_modules/jquery-pwstrength/jquery.pwstrength.min.js') ?>"></script>
  <script src="<?= base_url('public/node_modules/selectric/public/jquery.selectric.min.js') ?>"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('public/assets/js/scripts.js') ?>"></script>
  <script src="<?= base_url('public/assets/js/custom.js') ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('public/assets/js/page/auth-register.js') ?>"></script>
</body>

</html>