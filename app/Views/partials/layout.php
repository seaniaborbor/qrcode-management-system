



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>JustTheJob</title>


    

    <!-- Bootstrap core CSS -->
<link href="<?=base_url('assets/dist/css/bootstrap.min.css')?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .text-gray-dark{
        text-decoration:none;
        color:#212529 !important;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/dist/css/offcanvas.css')?>" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url('assets/brand/logo.png')?>" style="width:100px" alt="logo"></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url()?>">Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('bids')?>">Bids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('about')?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php 

if(session()->has('isLoggedIn')){
  ?>
  <a href="<?=base_url('dashboard')?>" class="btn bg-primary text-white" type="submit">Dashboard</a>
  <?php 
}else{
  ?>
  <a href="<?=base_url('login')?>" class="btn bg-danger text-white" type="submit">Log In</a>
  <?php 
}
?>
        
      </form>
    </div>
  </div>
</nav>

<div class="container nav-scroller mt-3 bg-transparent ">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    
    <a class="nav-link active text-primary" aria-current="page" href="<?=base_url()?>"><span class="text-danger"><i class="bi bi-geo-alt"></i> Locations With Jobs:</span> <span class="bg-danger badge p-1 "></span></a>
  </nav>
</div>

<main class="container"> 
      <?=$this->renderSection('main')?>
</main>

    <script src="<?=base_url('assets/dist/js/bootstrap.bundle.min.js')?>"></script>


    <?php if (isset($validation) || session()->getFlashdata('error')) : ?>
    <!-- Button to Open the Modal -->
      <!-- The Modal -->
        <div class="modal fade" id="error">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-danger"><i class="bi bi-exclamation-diamond"></i></h2>
                    <h3 class="text-danger">
                      <?php if(session()->getFlashData('error')){
                        echo session()->getFlashData('error');
                      }else{
                        echo "You've Got Some Error.<br> Fix them and proceed";
                      }
                      ?>
                    </h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
        <script>
            const error = new bootstrap.Modal(document.getElementById('error'));
            error.show();
        </script>

<?php endif; ?>
<?php 
include("message_form.php");
?>

      <script src="<?=base_url('assets/dist/js/offcanvas.js')?>"></script>
  </body>
</html>
