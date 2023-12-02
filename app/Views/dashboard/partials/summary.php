<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <div class="card shadow-sm " >
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-center">
                        <i class="bi text-primary display-4 bi-qr-code-scan"></i>
                        </div>
                        <div class="col-md-8">
                            <h2 class="text-white"><?=count($idcard_qr_code)?></h2>
                            <h5 class="text-primary">Total QrCode for Id Cards</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-center">
                        <i class="bi display-4 text-success bi-qr-code"></i>
                        </div>
                        <div class="col-md-8">
                            <h2><?=count($reportcard_qr_code_db)?></h2>
                            <h5 class="text-success">QrCode for Report Card</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-center">
                        <i class="bi display-4 text-info bi-bank2"></i>
                        </div>
                        <div class="col-md-8">
                            <h2 class="text-white"><?=count($institution_data)?></h2>
                            <h5 class="text-info">Total Distinct Institutions </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-center">
                        <i class="bi display-4 text-warning bi-people-fill"></i>
                        </div>
                        <div class="col-md-8">                            
                            <h5 class="text-warning">Manage User(s) Account(s) </h5>
                            <a class="btn w-100 btn-warning" href="<?=base_url('dashboard/profile')?>">Click Me!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>