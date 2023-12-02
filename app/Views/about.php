
<?=$this->extend('partials/layout')?>

<?php 

function timeAgo($timestamp) {
  $currentTimestamp = time();
  $timestamp = strtotime($timestamp);

  $timeDiff = $currentTimestamp - $timestamp;
  
  $hours = round($timeDiff / 3600);
  $days = round($timeDiff / 86400);
  $weeks = round($timeDiff / 604800);
  $months = round($timeDiff / 18748800);

  if ($months >= 1) {
      return $months . " months ago";
  } elseif ($weeks >= 1) {
      return $weeks . " weeks ago";
  } elseif ($days >= 1) {
      return $days . " days ago";
  } else {
      return $hours . " hours ago";
  }
}

?>


<?=$this->section('main')?>

<div class="row">
    
    <div class="col-md-8">
      <!-- main article with job listings -->
              
        <div class="d-flex align-items-center px-3 my-3 py-2 text-white bg-purple rounded shadow-sm">
          <h1 class=" my-0 mb-0  me-3"><i class="bi bi-briefcase-fill"></i></h1>
          <div class="lh-1">
            About Just The Job
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <img src="https://www.just-the-job.org.uk/wp-content/uploads/2022/12/JtJ-logo-jpeg-interchange-format-1.jpg" class="img-fluid" alt="">
            <h3 class="display-4 mt-4">Caption </h3>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
             dolor in reprehenderit in voluptate velit esse cillum dolore eu 
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
             dolor in reprehenderit in voluptate velit esse cillum dolore eu 
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <h3 class="display-4 mt-4"> Another Caption </h3>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
             dolor in reprehenderit in voluptate velit esse cillum dolore eu 
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
             dolor in reprehenderit in voluptate velit esse cillum dolore eu 
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
          
        </div>
      <!-- end of article-->
    <div class="col-md-4">
    <img src="https://i.pinimg.com/originals/db/0b/4e/db0b4e3ea7ecce19aadc95101bccff02.gif" alt="" class=" mt-3 shadow-lg img-fluid w-100">
    </div>

    
</div>

<?=$this->endSection()?>