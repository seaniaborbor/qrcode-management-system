<form action="<?=base_url('dashboard/add_institution')?>" method="post" enctype='multipart/form-data'>
    <label for="institutionName" class="mt-2">Instution's Name</label>
    <input type="text" class="form-control" name="institutionName" id="institutionName" required >
    <?php if(isset($validation) && $validation->hasError('institutionName')) : ?>
        <div class="text-danger"><?=$validation->getError('institutionName')?></div>
    <?php endif; ?>

    <label for="phone" class="mt-2">Phone</label>
    <input type="tel" class="form-control" name="phone" id="phone" required>
    <?php if(isset($validation) && $validation->hasError('phone')) : ?>
        <div class="text-danger"><?=$validation->getError('phone')?></div>
    <?php endif; ?>

    <label for="email" class="mt-2">Email</label>
    <input type="email" class="form-control" name="email" id="email" required>
    <?php if(isset($validation) && $validation->hasError('email')) : ?>
        <div class="text-danger"><?=$validation->getError('email')?></div>
    <?php endif; ?>


    <label for="address" class="mt-2">Address</label>
    <input type="text" class="form-control" name="address" id="address" required>
    <?php if(isset($validation) && $validation->hasError('address')) : ?>
        <div class="text-danger"><?=$validation->getError('address')?></div>
    <?php endif; ?>


    <label for="logo_path" class="mt-2">Logo/Stamp</label>
    <input type="file" class="form-control"  name="logo_path" id="logo_path" required>
    <?php if(isset($validation) && $validation->hasError('logo_path')) : ?>
        <div class="text-danger"><?=$validation->getError('logo_path')?></div>
    <?php endif; ?>

    <label for="about" class="mt-2">About the Institution </label>
    <textarea name="about" class="form-control" id="" cols="30" rows="5" required></textarea>
    <?php if(isset($validation) && $validation->hasError('about')) : ?>
        <div class="text-danger"><?=$validation->getError('about')?></div>
    <?php endif; ?>
    

    <button class="btn text-white mt-3 bg-purple rounded-0">Save Profile</button>
</form>