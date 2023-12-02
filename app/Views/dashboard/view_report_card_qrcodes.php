<!-- this is view render or show all qrcodes under a label -->

<?=$this->extend('dashboard/partials/layout')?>

<?=$this->section('components')?>
    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-9">
                <div class="card rounded-0 shadow-lg ">
                    <div class="card-header d-flex justify-content-between">
                        <h4><?=$group_label['label']?> qrcodes - <i>(<?=count($reportcard_qr_code_data)?> Total)</i> </h4>
                        <a href="<?=base_url('dashboard')?>" class="btn bg-purple text-white rounded-0">Dashboard</a> 
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped" id="exampleTable">
                                <thead class="pb-2 text-white">
                                    <th>QrCode</th>
                                    <th>Created At </th>
                                    <th>Use Status</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <?php if(isset($reportcard_qr_code_data)) : ?>
                                        <?php foreach($reportcard_qr_code_data as $code ): ?>
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
                                                            if($code['isverify'] == 1)
                                                                {
                                                                   ?>
                                                                   <div class="dropdown">
                                                                        <button class=" btn border border-secondary btn-light shadow-lg" data-bs-toggle="dropdown">
                                                                            View Details
                                                                        </button>
                                                                        <ul class="dropdown-menu px-2" >
                                                                            <table class="table table-sm table-striped">
                                                                            <tr>
                                                                                <td class="text-secondary">Name:</td>
                                                                                <td><?=$code['nameOnCard']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-secondary">Class:</td>
                                                                                <td><?=$code['class']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-secondary">Statement:</td>
                                                                                <td><?=$code['promoted_stmt']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-secondary">Conduct:</td>
                                                                                <td><?=$code['conduct']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-secondary">Issued On:</td>
                                                                                <td><?=$code['issuedDate']?></td>
                                                                            </tr>
                                                                            </table>
                                                                        </ul>
                                                                    </div>
                                                                   <?php 
                                                                }else
                                                                {
                                                                    ?>
                                                                        <a class="btn btn-secondary" href="<?=base_url('vfcd/'.$code['unqId'])?>">Add Detail</a>
                                                                    <?php 
                                                                }
                                                        ?>
                                                    </td>
                                                <td><a href="<?=base_url('delete_single/'.$code['unqId'].'/'.'reportCard')?>"><button class="w-100 btn  btn-outline-danger shadow-lg">Delete</button></a></td>
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
                    <div class="card-header text-center bg-danger">
                    <h3 class="text-uppercase text-white">Warning</h3>
                    </div>
                    <div class="card-body bg-white text-center">
                        <h6 class="text-danger">Delete All QrCodes belonging to <?=$group_label['label']?>
                        <br> This action is illrevertable </h6>
                        <td><a href="<?=base_url('delete_group/'.$group_label['groupId'].'/'.'reportCard')?>"><button class="w-100 mt-4 p-2 btn btn-danger">Yes Delete All</button></a></td>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?=$this->endSection()?>