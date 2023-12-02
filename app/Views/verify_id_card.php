
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>docProtect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/css/main.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <style>
    #info-text{
      font-family: 'Press Start 2P';
    }
    *{
      font-family:Tahoma;
    }
    section{
      padding: 60px 0;
    }
    .card, td, .bg-primary{
      
      background:#1b1b32 !important;
      color: #fff !important;
    }
    .card{
      border-radius: 16px !important;
    }
    input, select, .btn-primary{
      background:  #0a0a23!important;
      color: #fff !important;      
    }
    input, select{
      border: 2px solid #3b3b4f !important;
    }
    .btn-primary{
      border: 2px solid #fff !important;
    }
    body{
      background: #3b3b4f !important;
    }
    label{
      color: #fff !important;
    }
    .nav-link{
      color: #fff !important;
    }
  </style>
</head>
<body >

  <!-- navbar -->
 <!-- navbar -->
 <nav class="navbar navbar-expand-md bg-primary pt-5 pb-5 ">
    <div class="container-xxl">
      <!-- navbar brand / title -->
      <a class="navbar-brand" href="<?=base_url()?>#intro">
        <span class="text-secondary text-warning fw-bold">
        <i class="bi bi-qr-code-scan"></i>
          docProtect
        </span>
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white text-white" href="<?=base_url()?>#topics">About </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link text-white" href="<?=base_url()?>#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?=base_url()?>#reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?=base_url()?>#contact">Get in Touch</a>
          </li>
          
          <li class="nav-item ms-2 d-none d-md-inline">
            <?php if(session()->get('accountType')) {
              ?>
              <a href="<?=base_url('dashboard')?>" class="btn btn-primary">Dashboard</a>
              <?php 
            }else{
              ?>
              <a class="btn btn-warning" href="<?=base_url('/login')?>">Login</a>
              <?php 
            } ?>

          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <section>
    <div class="row m-2 pb-5 mb-5">
    <div class="col-md-4 offset-md-4 " >
        <div class="card shadow-lg  border-sm">
            <div class="card-body">
              <?php 
              include('partials/'.$file_to_show); 
              ?>
            </div>
        </div>

        <?php if(isset($card_info)) : ?>
          <div class="card mt-4">
              <div class="card-body">
                <h3 class="text-light">About <?=$card_info['institutionName']?></h3>
                <div class="row">
                  <div class="col-md-4 p-3">
                    <img src="<?=base_url('uploads/'.$card_info['logo_path'])?>" alt="" class="img-fluid rounded ">
                  </div>
                  <div class="col-md-8">
                    <?=$card_info['about']?>
                <div class="mb-3"></div>
                <h4 class="text-white">Our Contact Info</h4>
                <small class="text-light"> Address: <?=$card_info['address']?><br>
                Phone: <?=$card_info['phone']?><br>
                Email: <?=$card_info['email']?></small>
                  </div>
                </div>
                
              </div>
            </div>
        <?php endif; ?>
    </div>
</div>
  </section>

 



  <section class="bg-primary mt-5 text-white" style="margin-bottom: 0px !important">
    <div class="container">
      <div class="text-center">
        <h2>Stay in The Loop</h2>
        <p class="lead text-warning">Get the latest updates as they happen...</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-muted my-4">You wanna get on my news letter list? Don't miss out! Enter Your Email now and you smash the submit button and you won't be left out for my 
          weekly news letters about my latest software and tec guide!</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
            Register for Updates
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- modal itself -->
  <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Get the Latest Updates</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>You wanna get on my news letter list? Don't miss out! Enter Your Email now and you smash the submit button and you won't be left out for my 
          weekly news letters about my latest software and tec guide!</p>
          <label for="modal-email" class="form-label">Your email address:</label>
          <input type="text" class="form-control" id="modal-email" placeholder="e.g. mario@example.com">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- side panel / offcanvas -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebar-label">How To Purchase The Software</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>To get the full script this software, message reach me @ +231 7755 777 36 or hit me up</p>
      <div class="row">
        <div class="col-md-3">
          <a href="https://web.facebook.com/tarnue.borbor"><i class="bi bi-facebook display-5 fw-bold"></i></a>
        </div>
        <div class="col-md-3">
          <a href="https://www.linkedin.com/in/tarnue-p-borbor-912506147/"><i class="bi bi-linkedin display-5 text-info fw-bold"></i></a>
        </div>
        <div class="col-md-3">
          <a href="https://github.com/seaniaborbor"><i class="bi bi-github display-5 text-dark fw-bold"></i></a>
        </div>
        <div class="col-md-3">
          <a href="https://www.youtube.com/channel/UCCZEapOGEUoKLkPO9Vu9zUw"><i class="bi bi-youtube display-5 text-danger fw-bold"></i></a>
        </div>
      </div>
    </div>
  </div>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t => {
      new bootstrap.Tooltip(t)
    })
  </script>
</body>
</html>

