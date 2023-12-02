<h3 class=" mb-3">Program Qrcode To hold ID-Card Information For Verification </h3>
<?php if(isset($validation)) : ?>
    <div class="alert alert-danger">
        <?=$validation->listErrors()?>
    </div>
<?php endif; ?>
<form action="<?=base_url('vfid/'.$unqId)?>" class="p-2" method="post" enctype="multipart/form-data">
    <input type="hidden" name="data_id" value="<?=$unqId?>">
    <div class="col-12 mb-2">
        <label for="name">Enter name On Card</label>
        <input type="text" name="nameOnCard" class="form-control form-control-lg">
    </div>

    <div class="col-12 mb-2">
        <label for="name">Holder's Position</label>
        <select name="pos" id="" class="form-control form-control-lg ">
            <option value="">Choose</option>
            <option value="Student">Student</option>
            <option value="Instructor">Instructor</option>
            <option value="Registrar">Registrar</option>
            <option value="Support Staff">Support Staff</option>
            <option value="Principal">Principal</option>
            <option value="Driver">Driver</option>
            <option value="CEO">CEO</option>
            <option value="Security Guard">Security Guard</option>
            <option value="Technician">Technician</option>
        </select>
    </div>

    <div class="col-12 mb-2">
        <label for="idNum">ID Number</label>
        <input type="number" name="idNum" class="form-control form-control-lg">
    </div>

    <div class="col-12 mb-2">
        <label for="issuedDate">Date Issued</label>
        <input type="date" name="issuedDate" class="form-control form-control-lg">
    </div>

    <div class="col-12 mb-2">
        <label for="name">Expire Date</label>
        <input type="date" name="expireDate" class="form-control form-control-lg">
    </div>

    <div class="col-12 mb-2">
        <label for="name">Holder's Picture</label>
        <input type="file" name="pic" class="form-control form-control-lg">
    </div>

    <button class="btn mt-3 btn-lg rounded-5 btn-warning">Save Id Card Information</button>

</form>