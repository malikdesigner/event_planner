<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/b64e9918fb.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Include Datatables plugin files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<style>
  .navbar-nav .nav-link:hover {
    color: #fff;
    background-color: #343a40;
  }

  .profile-image-pic {
    height: 100px;
    width: 100px;
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand" href="<?= $this->config->base_url('event/index') ?>">
      <div class="text-center text-light ml-4">
        <!-- <i class="fa-solid fa-image"></i> -->
        <!-- <h6 class='text-light'>Xpert Events</h6> -->
        <i class="fa-solid fa-home"></i>


      </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav mr-2">
        <li class="nav-item active">
          <a class="nav-link text-light" href=" <?= $this->config->base_url('home/index') ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php 
         if ($this->router->class !== "login" &&  !(isset($_SESSION['user_data']))) { ?>

          <li class="nav-item ">
            <a class="nav-link text-light" href=" <?= $this->config->base_url('login/index') ?>">Login </a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link text-light" href=" <?= $this->config->base_url('About/index') ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href=" <?= $this->config->base_url('event/index') ?>">Events List</a>
        </li>
        <?php if (isset($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') { ?>
          <li class="nav-item">
            <a class="nav-link text-light" href=" <?= $this->config->base_url('event/add_event') ?>">Add New Event</a>
          </li>
        <?php } ?>
        <?php if (isset($_SESSION['user_data']) && $this->router->class !== "login") { ?>

          <li class="nav-item">
            <a class="nav-link text-light" href=" <?= $this->config->base_url('login/sign_out') ?>">Sign Out</a>
          </li>
        <?php } ?>

      </ul>
    </div>
  </nav>