<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>docProtect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/css/main.min.css" rel="stylesheet">
  <style>
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
<body>

  <!-- navbar -->
  <nav class="navbar bg-primary navbar-expand-md navbar-light pt-5 pb-4">
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
            <a class="nav-link" href="<?=base_url()?>#topics">About </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link" href="<?=base_url()?>#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#contact">Get in Touch</a>
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

  <!-- main image & intro text -->
  <section id="intro">
    <div class="container-lg">
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 text-white">Digitally Secure</div>
            <div class="display-5 text-white">Your Report & ID Cards</div>
          </h1>
          <p class="lead my-4 text-white">We're are the number 1 sellers of qrcodes that protect your Report & ID Cards from frudgery!</p>
          <a href="#pricing" class="btn btn-primary btn-lg">Order Now</a>
          <!-- open sidebar / offcanvas -->
          <a href="#sidebar" class="d-block text-warning mt-3" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
            By The This Softwar
          </a>
        </div>
        <div class="col-md-5 text-center d-none d-md-block">
          <!-- tooltip -->
          <span class="tt" data-bs-placement="bottom" title="">
            <img src="https://verify.citizencard.com/images/scan-qr.png" class="img-fluid w-100" alt="ebook">
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- pricing plans -->
  <section id="pricing" class=" mt-5">
    <div class="container-lg">
      <div class="text-center">
        <h2 class="text-white">Pricing Plans</h2>
        <p class="lead text-light">Choose a pricing plan to suit you.</p>
      </div>

      <div class="row my-5 g-0 align-items-center justify-content-center">
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0">
            <div class="card-body text-center py-4">
              <h4 class="card-title text-muted">Starter Edition</h4>
              <p class="lead card-subtitle text-muted">Less than 500 pcs</p>
              <p class="display-5 my-4 text-white fw-bold">$30.00</p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">
                Purchase less than 500 pieces of qr codes at 30.00 LRD per peace. We'll deliver it within 24hrs at any location in Montserrado</p>
              <a href="#" class="btn btn-outline-secondary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>

        <div class="col-9 col-lg-4">
          <div class="card border-secondary border-2">
            <div class="card-header text-center text-warning">Most Popular</div>
            <div class="card-body text-center py-5">
              <h4 class="card-title text-muted">Complete Edition</h4>
              <p class="lead card-subtitle text-muted">500 above but less than 1000 pcs</p>
              <p class="display-4 my-4 text-white fw-bold">$25.50</p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">
                If you're gonna need more than 500pcs of qrcodes, we'll give it at 25.00 LRD. And we'll also do the printing and deliver it. 
              </p>
              <a href="#" class="btn btn-outline-secondary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0">
            <div class="card-body text-center py-4">
              <h4 class="card-title text-muted">Ultimate Edition</h4>
              <p class="lead card-subtitle">1000+</p>
              <p class="display-5 my-4 text-white fw-bold">$20.00</p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">
                Purchase 100 or above at 20.00 LRD. We'll print and give you the soft copy as well. We'll also deliver it.
              </p>
              <a href="#" class="btn btn-outline-secondary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- end container -->
  </section>

  <!-- topics at a glance -->
  <section id="topics">
    <div class="container-md">
      <div class="text-center">
        <h2 class="text-light">How It Works</h2>
        <p class="lead text-white">Our qrcode let you <b>encrypt</b> informations such as name, id number, picture, score, promotion 
        statement that you put on a document online. When you scan the qrcode to verify the document, 
        it alerm if the information is altered or tempered with!</p>
      </div>
      <div class="row my-5 g-5 justify-content-around align-items-center">
        <div class="col-6 col-lg-4">
          <img src="https://posbytz.com/wp-content/uploads/2023/03/How-QR-Code-Table-Ordering-Enhances-The-Customer-Experience-01.png" class="img-fluid w-100" alt="ebook">
        </div>
        <div class="col-lg-6">
          
          <!-- accordion -->
          <div class="accordion bg-transparent" id="chapters">
            <div class="accordion-item bg-transparent">
              <h2 class="accordion-header" id="heading-1">
                <button class="accordion-button bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                  What are the category of documents you software secure? 
                </button>
              </h2>
              <div id="chapter-1" class="bg-transparent accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
                <div class="accordion-body text-white">
                  <p>Currently, our software is able to digitally secure Students' Report Card frudgery and as well as any institution Identification Card (ID Cards)</p>
                  <p>We'll constantly keep updating the software for other documents.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent">
              <h2 class="accordion-header bg-transparent" id="heading-2">
                <button class="accordion-button bg-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                  Why should we trust your software?
                </button>
              </h2>
              <div id="chapter-2" class="accordion-collapse collapse bg-transparent" aria-labelledby="heading-2" data-bs-parent="#chapters">
                <div class="accordion-body text-white">
                  <p>You can trust and rely on our software for multiples of reasons few of which are: 30+s National Institutions use our software, our security platform is running 24/7, our software allows users to validate your doc in any part of the world at any time</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent">
              <h2 class="accordion-header bg-transparent" id="heading-3">
                <button class="accordion-button bg-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                  If I don't want to use qrcode but links, can I use your service?
                </button>
              </h2>
              <div id="chapter-3" class="accordion-collapse bg-transparent collapse" aria-labelledby="heading-3" data-bs-parent="#chapters">
                <div class="accordion-body bg-transparent text-white">
                  <p>Yes, we can alternatinatively give you verification code. With this unique code, people, institutions or entities can validate if your documents</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent ">
              <h2 class="accordion-header" id="heading-4">
                <button class="accordion-button bg-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                 Can I use one qr code for multiple documents?
                </button>
              </h2>
              <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#chapters">
                <div class="accordion-body bg-transparent">
                  <p> Absolutely no. Each document carries one qrcode onl.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent ">
              <h2 class="accordion-header bg-transparent" id="heading-5">
                <button class="accordion-button bg-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                  Does the qr code gets expire?
                </button>
              </h2>
              <div id="chapter-5" class=" bg-transparent accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#chapters">
                <div class="accordion-body bg-transparent">
                  <p>No. In the case of an ID card, the qrcode code tells if an ID card is expired base on the expire dated given. </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- reviews list -->
  <section id="reviews" class="bg-altlight">
    <div class="container-lg">
      <div class="text-center">
        <h2 class="text-white"><i class="bi bi-stars text-warning"></i>Our Service Review</h2>
        <p class="lead text-light">What our customers say about our qrcode security service?</p>
      </div>

      <div class="row justify-content-center my-5 ">
        <div class="col-lg-8 bg-primary">
          <div class="list-group">
            <div class="list-group-item py-3 bg-primary">
              <div class="pb-2">
              <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
              </div>
              <h5 class="mb-1">A must-buy for every document issuing institution</h5>
              <p class="mb-1">Our institution documents were being counterfited serveral hundred times each years. Since we started using this service 
                the counterfeit rate has drop down to over 95%. What a amazing service!
              </p>
              <small>Review by AGM High School</small>
            </div>
            <div class="list-group-item py-3 bg-primary">
              <div class="pb-2">
              <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
              </div>
              <h5 class="mb-1">A must-buy for every document issuing institution</h5>
              <p class="mb-1">The only way we were able to prevent dismissed employee from using our prestegious institution ID Cards was bu signing up to this 
                qr code service. Thank million of times to the developer, this is awesome
              </p>
              <small>Review by M&E Construction Company</small>
            </div>
            <div class="list-group-item py-3 bg-primary">
              <div class="pb-2">
              <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3 bg-primary">
              <div class="pb-2">
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3 bg-primary">
              <div class="pb-2">
              <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
                <i class="bi bi-star-fill text-altdark text-warning"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact form -->
  <!-- form-control, form-label, form-select, input-group, input-group-text -->
  <section id="contact">
    <div class="container-lg">
      
      <div class="text-center">
        <h2 class="text-white">Get in Touch</h2>
        <p class="lead text-white">Questions to ask? Fill out the form to contact me directly...</p>
      </div>
      <div class="row justify-content-center my-5">
        <div class="col-lg-6">
          
          <form>
            <label for="email" class="form-label">Email address:</label>
            <div class="input-group mb-4">
              <span class="input-group-text ">
                <i class="bi bi-envelope-fill text-muted"></i>
              </span>
              <input type="text" id="email" class="form-control form-control-lg" placeholder="e.g. mario@example.com" />
              <!-- tooltip -->
              <span class="input-group-text">
                <span class="tt" data-bs-placement="bottom" title="Enter an email address we can reply to.">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
            </div>
            <label for="name" class="form-label">Name:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-person-fill text-secondary"></i>
              </span>
              <input type="text" id="name" class="form-control form-control-lg" placeholder="e.g. Mario" />
              <!-- tooltip -->
              <span class="input-group-text">
                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
            </div>
    
            <div class="mb-4 mt-5 form-floating">
              <textarea class="form-control bg-primary text-white" id="query" style="height: 140px" placeholder="query"></textarea>
              <label for="query">Your query...</label>
            </div>
            <div class="mb-4 text-center">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- get updates / modal trigger -->
  <section class="bg-primary text-white">
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