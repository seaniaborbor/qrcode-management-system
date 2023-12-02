<?=$this->extend('dashboard/partials/layout')?>

<?=$this->section('components')?>
    <?php 
        include("partials/summary.php");
    ?>

    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">

                    <ul class="nav nav-tabs" id="tableTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#institutions" role="tab" aria-controls="home" aria-selected="true">Institutions </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#idcard_qrcodes" role="tab" aria-controls="idcard_qrcodes" aria-selected="false">Id Cards QrCodes</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reportcarTab" data-bs-toggle="tab" href="#report_card_qrcode" role="tab" aria-controls="report_card_qrcode" aria-selected="false">Report Card QrCodes</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tableTabContent">

                            <div class="tab-pane fade show active" id="institutions" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card m-3  border-0  m-2">
                                    <div class="alert   card-header"><h5>Institutions </h5></div>
                                    <div class="card-body">
                                        <?php include('partials/institutions_table.php')?>
                                    </div> 
                                </div>
                            </div>

                            <div class="tab-pane fade" id="idcard_qrcodes" role="tabpanel" aria-labelledby="profile-tab">
                                   <div class="card   border-0 m-2">
                                    <div class="card-body ">
                                        <div class="alert   card-header"><h5>Id Cards QrCodes</h5></div>
                                        <?php include('partials/idcard_qrcode_group_label.php')?>
                                    </div>
                                   </div>
                            </div>

                            <div class="tab-pane fade pt-2" id="report_card_qrcode" role="tabpanel" aria-labelledby="report_card_qrcode-tab">
                                   <div class="card   border-0 m-2">
                                    <div class="card-body  ">
                                        <div class="   card-header"><h5>Report Cards QrCodes</h5></div>
                                        <?php include('partials/report_card_qrcode_group_label.php')?>
                                        
                                    </div>
                                   </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card img-thumbnail">
                    <div class="card-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Generate Qr Code </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add Institution</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <?php include('partials/generate_qr_code_form.php')?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <?php include('partials/add_institution_form.php')?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?=$this->endSection()?>