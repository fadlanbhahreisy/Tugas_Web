<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('public/node_modules/bootstrap-social/bootstrap-social.css') ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/assets/css/components.css') ?>">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?= base_url('public/assets/img/kplk.jpg') ?>" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">KPLK STORE</span></h4>
            <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>
            <?php
            $username = [
              'name' => 'username',
              'id' => 'username',
              'value' => null,
              'class' => 'form-control',
              'placeholder' => 'username'
            ];
            $password = [
              'name' => 'password',
              'id' => 'password',
              'class' => 'form-control',
              'placeholder' => 'Password'
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
            <?= form_open('Auth/login') ?>
            <div class="form-group">
              <?= form_label("Username", "username") ?>
              <?= form_input($username) ?>
            </div>
            <div class="form-group">
              <?= form_label("Password", "password") ?>
              <?= form_password($password) ?>
            </div>
            <div class="form-check text-right">
              <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary']) ?>
            </div>
            <?= form_close() ?>

            <div class="text-center mt-5 text-small">
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url('public/assets/img/unsplash/login-bg.jpg') ?>">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Welcome To</h1>
                <h5 class="font-weight-normal text-muted-transparent">KPLK Store</h5>
              </div>

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

  <!-- Template JS File -->
  <script src="<?= base_url('public/assets/js/scripts.js') ?>"></script>
  <script src="<?= base_url('public/assets/js/custom.js') ?>"></script>

  <!-- Page Specific JS File -->
</body>

</html>