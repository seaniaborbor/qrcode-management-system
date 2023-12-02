<?php 




function highlight($title, $link)
{
  if($title == $link)
  {
    echo "active";
  }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title></title>

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   

    

    <!-- Bootstrap core CSS -->
<link href="<?=base_url('assets/dist/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">


<style>
  
    *{
      font-family:Tahoma;
    }
    section{
      padding: 60px 0;
    }
    .card, td, tr .bg-primary{
      
      background:#1b1b32 !important;
      color: #fff !important;
    }
    .card{
      border-radius: 16px !important;
    }
    input, textarea, select, .btn-primary, .bg-dark{
      background:  #0a0a23!important;
      color: #fff !important;      
    }
    .bg-dark{
      border: none !important;
    }
    input, select{
      border: 2px solid #3b3b4f !important;
    }
    .btn-primary{
      border: 1px solid #0a0a23af !important;
      background:  #0a0a23!important;
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
    table {
      border: 1px solid #0a0a23!important;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
      background-color: #0a0a23; /* Change this to your desired background color */
      color: #fff; /* Change this to your desired text color */
      border: 2px solid #3b3b4f !important;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

  </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/dist/css/dashboard.css')?>" rel="stylesheet">
  </head>
  <body >

<div class="container">
    <main class="col-12">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="<?=base_url()?>" type="button" class="btn btn-sm btn-primary"><i class="bi bi-browser-chrome"></i>Website </a>
            <a href="<?=base_url('logout')?>" type="button" class="btn btn-sm btn-outline-warning"> <i class="bi bi-person-vcard-fill"> </i>Sign Out</a>
          </div>
        </div>
      </div>

        <!-- this where all the components of the dashboard will be displayed -->
        <?=$this->renderSection('components')?>
        
    </main>
  </div>
</div>







<script src="<?=base_url('assets/dist/js/bootstrap.bundle.min.js')?>"></script>


    <?php if (session()->getFlashdata('success')) : ?>
    <!-- Button to Open the Modal -->
      <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-success"><i class="bi bi-check2-circle"></i></h2>
                    <h3 class="text-success"><?= session()->getFlashdata('success') ?></h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        </script>

<?php endif; ?>

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
                      <?php 
                        if(session()->getFlashdata('error')){
                          echo session()->getFlashdata('error');
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





<!-- Add DataTables JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
      $('#example2').DataTable();
      $('#example3').DataTable();
      $('.dataTables_filter').addClass('mb-3');
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
</body>
</html>
