<h3 class=" mb-3">Program Qrcode To hold Report Card Information For Verification </h3>
<?php if(isset($validation)) : ?>
    <div class="alert alert-danger">
        <?=$validation->listErrors()?>
    </div>
<?php endif; ?>
<form action="<?=base_url('vfcd/'.$unqId)?>" class="p-2" method="post" enctype="multipart/form-data">
    <input type="hidden" name="data_id" value="<?=$unqId?>">
    <div class="col-12 mb-2">
        <label for="name">Enter name On Card</label>
        <input type="text" name="nameOnCard" class="form-control form-control-lg">
    </div>

    <div class="col-12 mb-2">
        <label for="name">Current Class</label>
        <select name="class" id="" class="form-control form-control-lg ">
            <option value="">Choose</option>
            <option value="Nursery">Nursery</option>
            <option value="ABC">ABC</option>
            <option value="K-I">K-I</option>
            <option value="K-II">K-II</option>
            <option value="Grade One ">Grade One </option>
            <option value="Grade Two">Grade Two</option>
            <option value="Grade Three">Grade Three</option>
            <option value="Grade Four">Grade Four</option>
            <option value="Grade Five">Grade Five</option>
            <option value="Grade Six">Grade Six</option>
            <option value="Grade Six">Grade Six</option>
            <option value="Grade Seven">Grade Seven</option>
            <option value="Grade Eight">Grade Eight</option>
            <option value="Grade Nine">Grade Nine</option>
            <option value="Grade Ten">Grade Ten</option>
            <option value="Grade Eleven">Grade Eleven</option>
            <option value="Grade Twelve">Grade Twelve</option>
        </select>
    </div>

    <div class="col-12 mb-2">
        <label for="promoted_stmt">Promotion Statement</label>
         <select name="promoted_stmt" id="" class="form-control form-control-lg ">
            <option value="">Choose</option>
            <option value="Promoted To Next Class">Promoted To Next Class</option>
            <option value="Double Promoted">Double Promoted</option>
            <option value="Repeat Current Class">Repeat Current Class</option>
            <option value="Demoted">Demoted</option>
            <option value="Never to return (NTR)">Never to return (NTR)</option>
        </select>
    </div>

    <div class="col-12 mb-2">
        <label for="conduct">Conduct</label>
         <select name="conduct" id="" class="form-control form-control-lg ">
            <option value="">Choose</option>
            <option value="Good">Good</option>
            <option value="Poor">Poor</option>
        </select>
    </div>

    <div class="col-12 mb-2">
        <label for="name">Clossing Date</label>
        <input type="date" name="issuedDate" class="form-control form-control-lg">
    </div>

    <button class="btn mt-3 btn-lg rounded-5 btn-warning">Save Report Card Information</button>

</form>