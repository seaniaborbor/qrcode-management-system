<form action="<?=base_url('dashboard/create_qrcode')?>" method="post">
<div class="row no-guiter mt-2 mb-2">
    <div class="col-5 text-right">
        Label: 
    </div>
    <div class="col-7">
        <input type="text" name='label'  class="form-control">
        <?php if(isset($validation) && $validation->hasError('label')) : ?>
            <div class="text-danger"><?=$validation->getError('label')?></div>
        <?php endif; ?>
    </div>
</div>

<div class="row no-guiter">
    <div class="col-5 text-right">
        Qrcode Type: 
    </div>
    <div class="col-7">
        <select name="type" class="form-control" id="">
            <option value="">Choose</option>
            <option value="report_card">Report Cards</option>
            <option value="id_card">Id cards</option>
        </select>
        <?php if(isset($validation) && $validation->hasError('type')) : ?>
            <div class="text-danger"><?=$validation->getError('type')?></div>
        <?php endif; ?>
    </div>
</div>

<div class="row mt-2 no-guiter">
    <div class="col-5 text-right">
        Institution
    </div>
    <div class="col-7">
        <select name="institutionId" class="form-control" id="">
            <option value="">Choose</option>
            <?php if(isset($institution_data)) : ?>
                      <?php foreach($institution_data as $institution) :?>
                        <?php if(session()->get('loginEmail') == $institution['createdBy'] || session()->get('accountType') == 1) :?>
                        <option value="<?=$institution['id']?>"><?=$institution['institutionName']?></option>
                        <?php endif ?>                    
                      <?php endforeach; ?>
                    <?php endif; ?>
        </select>
        <?php if(isset($validation) && $validation->hasError('type')) : ?>
            <div class="text-danger"><?=$validation->getError('type')?></div>
        <?php endif; ?>
        </select>
        <?php if(isset($validation) && $validation->hasError('institutionId')) : ?>
            <div class="text-danger"><?=$validation->getError('institutionId')?></div>
        <?php endif; ?>
    </div>
</div>



<div class="row no-guiter mt-2">
    <div class="col-5 text-right">
        Quantity: 
    </div>
    <div class="col-7">
        <input type="number" name="quantity" min="1" class="form-control">
        <?php if(isset($validation) && $validation->hasError('quantity')) : ?>
            <div class="text-danger"><?=$validation->getError('quantity')?></div>
        <?php endif; ?>
    </div>
</div>

<div class="row no-guiter mt-2">
    <div class="col-5 text-right">
    </div>
    <div class="col-7">
    <button class="btn bg-purple text-white w-100">Generate QrCodes</button>
    </div>
</div>
</form>