<!-- this is view render or show all qrcodes under a label -->

<?=$this->extend('dashboard/partials/layout')?>

<?=$this->section('components')?>
    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-9">
                <div class="card rounded-0 shadow-lg">
                    <div class="card-header d-flex justify-content-between">
                        <h4><?=$group_label['label']?> qrcodes - <i>(<?=count($idcard_qr_code_data)?> total)</i></h4> 
                        <a href="<?=base_url('dashboard')?>" class="btn rounded-0 text-white btn-secondary">Dashboard</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-striped">
                                <thead class="mb-2 text-white">
                                    <th>QrCode</th>
                                    <th>Created At</th>
                                    <th>Use Status</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <?php if(isset($idcard_qr_code_data)) : ?>
                                        <?php foreach($idcard_qr_code_data as $code ): ?>
                                            <tr>
                                                <td>
                                                    <img src="" id="<?=$code['unqId']?>" height="100" width="100" alt="">
                                                    <script>
                                                        document.getElementById("<?=$code['unqId']?>").src = "https://api.qrserver.com/v1/create-qr-code?size=250x250&data=<?=$code['unqId']?>"
                                                    </script>
                                                </td>
                                                <td><?=substr($code['createdAt'],0,10)?></td>
                                                    <td>
                                                        <?php 
                                                            if($code['isverify'] == 1){
                                                                ?>
                                                                    <div class="dropdown w-100">
                                                                    <button class=" w-100  btn border border-secondary btn-light shadow-lg" data-bs-toggle="dropdown">
                                                                         Card Details
                                                                    </button>
                                                                    <ul class="dropdown-menu px-2" >
                                                                        <img src="<?=base_url('uploads/'.$code['file_path'])?>" class="img-fluid">
                                                                        <table class="table table-sm table-striped">
                                                                        <tr>
                                                                            <td class="text-secondary">Name:</td>
                                                                            <td><?=$code['nameOnCard']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-secondary">ID Number:</td>
                                                                            <td><?=$code['idNum']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-secondary">Position:</td>
                                                                            <td><?=$code['pos']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-secondary">Issued:</td>
                                                                            <td><?=$code['issuedDate']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-secondary">Expire:</td>
                                                                            <td><?=$code['expireDate']?></td>
                                                                        </tr>
                                                                        </table>
                                                                    </ul>
                                                                </div>
                                                                <?php 
                                                            }else{
                                                                ?>
                                                                <a href="<?=base_url('vfid/'.$code['unqId'])?>" class='w-100 btn border border-secondary btn-light shadow-lg'>Add ID Info</a>
                                                                <?php 
                                                            }
                                                        ?>
                                                    </td>
                                                <td><a href="<?=base_url('delete_single/'.$code['unqId'].'/'.'idCard')?>"><button class="w-100 btn border border-secondary btn-outline-danger shadow-lg">
                                                    <i class="fa fa-trash"></i> Delete</button></a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-md-3">
                <div class="card shadow-lg  rounded-0">
                    <div class="card-header bg-danger text-white text-center">
                        <h3>Warning!</h3>
                    </div>
                    <div class="card-body  border bg-white text-center">
                        <h6 class="text-danger">Delete all qr codes of id cards under the label <?=$group_label['label']?>. <br>
                        This action is illrevertable when done</h6>
                        <td><a href="<?=base_url('delete_group/'.$group_label['groupId'].'/'.'idCard')?>"><button class="w-100 p-2 btn btn-danger">Yes Delete All</button></a></td>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?=$this->endSection()?>