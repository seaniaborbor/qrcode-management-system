<!-- this is view render or show all qrcodes under a label -->

<?=$this->extend('dashboard/partials/layout')?>

<?=$this->section('components')?>
    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-7">
              <div class="card">
                  <div class="card-header d-flex justify-content-between "><h3><?=$institution_data['institutionName']?> Profile</h3> <a href="<?=base_url('dashboard')?>" class="btn text-white bg-purple">Dashboard</a></div>
                  <div class="card-body">
                      <table class="table">
                          <tr>
                              <td>Institution Name</td>
                              <td><?=$institution_data['institutionName']?></td>
                          </tr>
                          <tr>
                              <td>Institution Address</td>
                              <td><?=$institution_data['address']?></td>
                          </tr>
                          <tr>
                              <td>Institution Phone #</td>
                              <td><?=$institution_data['phone']?></td>
                          </tr>
                          <tr>
                              <td>Institution Email</td>
                              <td><?=$institution_data['email']?></td>
                          </tr>
                          <tr>
                              <td>Added By</td>
                              <td><?=$institution_data['createdBy']?></td>
                          </tr>
                          <tr>
                              <td>Date Added</td>
                              <td><?=$institution_data['institutionName']?></td>
                          </tr>

                      </table>
                     <div class="row">
                         <hr>
                         <div class="col-md-8 lead">
                             <h4>Institution's Profile Summary </h4>
                         <?=$institution_data['about']?>
                         <hr>
                         <p class="text-danger lead">Performing this action will affect all all qrcodes generated or create for this institution. You don't wanna do this unles you're willing to destroy all institution bearing this </p>
                         <a href="<?=base_url('delete_single/'.$institution_data['id'].'/institution')?>" class="btn btn-danger px-5">Delete Institution </a>
                         </div>
                         <div class="col-md-4">
                             <img src="<?=base_url('uploads/'.$institution_data['logo_path'])?>" class="img-fluid" alt="">
                         </div>
                     </div>
                  </div>
              </div>
            </div>

            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-header">
                    <h3 class="text-secondary">Edit Information </h3>
                <small class="text-danger mb-2">Editing this information reflects on all other qrcodes created in this institution's name</small>
                    </div>
                    <div class="card-body">
                    <form action="<?=base_url('dashboard/edit_institution/'.$institution_data['id'])?>" method="post" enctype='multipart/form-data'>
                    <label for="institutionName" class="mt-2">Instution's Name</label>
                    <input type="text" value="<?=$institution_data['institutionName']?>" class="form-control" name="institutionName" id="institutionName" required >
                    <?php if(isset($validation) && $validation->hasError('institutionName')) : ?>
                        <div class="text-danger"><?=$validation->getError('institutionName')?></div>
                    <?php endif; ?>

                    <label for="phone" class="mt-2">Phone</label>
                    <input type="tel" value="<?=$institution_data['phone']?>" class="form-control" name="phone" id="phone" required>
                    <?php if(isset($validation) && $validation->hasError('phone')) : ?>
                        <div class="text-danger"><?=$validation->getError('phone')?></div>
                    <?php endif; ?>

                    <label for="email" class="mt-2">Email</label>
                    <input type="email" value="<?=$institution_data['email']?>" class="form-control" name="email" id="email" required>
                    <?php if(isset($validation) && $validation->hasError('email')) : ?>
                        <div class="text-danger"><?=$validation->getError('email')?></div>
                    <?php endif; ?>


                    <label for="address" class="mt-2">Address</label>
                    <input value="<?=$institution_data['address']?>" type="text" class="form-control" name="address" id="address" required>
                    <?php if(isset($validation) && $validation->hasError('address')) : ?>
                        <div class="text-danger"><?=$validation->getError('address')?></div>
                    <?php endif; ?>


                    <label for="logo_path" class="mt-2">Logo/Stamp</label>
                    <input type="file" class="form-control"  name="logo_path" id="logo_path" >
                    <?php if(isset($validation) && $validation->hasError('logo_path')) : ?>
                        <div class="text-danger"><?=$validation->getError('logo_path')?></div>
                    <?php endif; ?>

                    <label for="about" class="mt-2">About the Institution </label>
                    <textarea name="about" class="form-control" id="" cols="30" rows="5" required><?=$institution_data['about']?></textarea>
                    <?php if(isset($validation) && $validation->hasError('about')) : ?>
                        <div class="text-danger"><?=$validation->getError('about')?></div>
                    <?php endif; ?>
                    

                    <button class="btn text-white mt-3 bg-purple rounded-0">Update Profile</button>
                </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?=$this->endSection()?>