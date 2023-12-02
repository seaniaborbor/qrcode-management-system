<?php 

function checkDateValidity($inputDate) {
    // Convert input date to a DateTime object
     // Convert input date to a DateTime object with the correct format 'yy-mm-dd'
    $inputDateTime = DateTime::createFromFormat('Y-m-d', $inputDate);

    // Get today's date
    $today = new DateTime();

    // Compare the input date with today's date
    if ($inputDateTime > $today) {
        echo "<span id='info-text' class='text-info text-uppercase'>Valid </span>";
    } else {
        echo "<span id='info-text' class='text-info text-danger'>Expired  </span> ";;
    }
}




?>


<div class="row align-items-center">
    <div class="col-md-4">
        <img src="<?=base_url('uploads/'.$card_info['file_path'])?>" alt="" class="img-fluid rounded shadow-sm w-100">
    </div>
    <div class="col-md-8">
        <h4 class="mt-3">Identification Card Details </h4>
        <table class="table table-sm table-striped">
            <tr>
                <td>Holder's name:</td>
                <td><?=$card_info['nameOnCard']?></td>
            </tr>
            <tr>
                <td>Position</td>
                <td><?=$card_info['pos']?></td>
            </tr>
            <tr>
                <td>ID Number</td>
                <td><?=$card_info['idNum']?></td>
            </tr>
            <tr>
                <td>Issue Date</td>
                <td><?=$card_info['issuedDate']?></td>
            </tr>
            <tr>
                <td>Expire Date</td>
                <td><?=$card_info['expireDate']?></td>
            </tr>
            <tr>
                <td>Valid Status: </td>
                <td><?php checkDateValidity($card_info['expireDate']);?></td>
            </tr>
        </table>
        <p class="text-warning">This Id card was issued by: <?=$card_info['institutionName']?> </p>
    </div>

</div>



