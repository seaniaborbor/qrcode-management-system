<?=$this->extend('dashboard/partials/layout')?>

<?=$this->section('components')?>
<div class="row justify-content-center">

   
    <div class="col-md-4">
        <div class="card shadow-lg rounded-0">

        <!-- 
        
        Array ( [id] => 1 [email] => justthejob@gmail.com 
        [passwd] => $2y$10$oaYt6E9rFOUOF0CR.Ob06e7Ovp/HceVzl7PryvMRC.SFQVmn6XaFW 
        [accountType] => 1 [createdAt] => 0000-00-00 00:00:00 ) 
       
        -->

            <h4 class="m-3">Profile Details</h4>
            <div class="alert alert-warning m-3">
                <p class="lead">Basicaly, your profile detail is your email and user account type - shown in the form below. You change change your password by using the same form. </p>
            </div>

            <div class="card-body">
                <form action="<?=base_url('dashboard/update_password')?>" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="email" class="form-label">User Email</label>
                        <input type="text" class="form-control" disabled id="bidTitle" placeholder="" value="<?=$user['email']?>" >
                        
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Account Type </label>
                        <input value="<?php if($user['accountType'] == 1){ echo 'Admin User';}else{echo 'Ordinary User'; }?>" type="text" class="form-control" disabled id="bidTitle"  >
                    </div>

                    <div class="col-12 mt-3 ">
                        <label for="passwd" class="form-label">Password</label>
                        <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Enter your old password" value="abcdefgh" >
                        <?php if(isset($validation) && $validation->hasError('passwd')) : ?>
                        <div class="text-danger"><?=$validation->getError('passwd')?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-12 mt-3 ">
                        <label for="nPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="nPassword" id="nPassword" placeholder="Enter new password" value="" >
                        <?php if(isset($validation) && $validation->hasError('password')) : ?>
                        <div class="text-danger"><?=$validation->getError('file')?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 mt-3 ">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input
                         oninput="confirm_pass('nPassword', 'cpassword', 'updatePassMsg', 'updateAccBtn')"
                         type="password" class="form-control"  id="cpassword" placeholder="Confirm new password" value="" >
                        <?php if(isset($validation) && $validation->hasError('file')) : ?>
                        <div class="text-danger"><?=$validation->getError('file')?></div>
                        <?php endif; ?>
                        <div class="updatePassMsg"></div>
                    </div>

                    <div class="col-12 mt-3">
                        <button id="updateAccBtn" class="btn  btn-primary rounded-0">Update Your</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-heady">
                <h4 class="m-3">Existing Users Account</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Existing User</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add New User</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active fade p-3 show " id="home" role="tabpanel" aria-labelledby="home-tab">
                       <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr class="lead text-uppercase">
                                        <td>Email</td>
                                        <td>Account Type</td>
                                        <td>Lasted Update</td>
                                        <td>Delete</td>
                                    </tr>
                                    <?php foreach($users as $auser) : ?>
                                    <tr>
                                        <td><?=$auser['email']?></td>
                                        <td>
                                            <?php
                                                if($auser['accountType'] == 1){
                                                    echo "Administrative";
                                                }else{
                                                    echo "Ordinary User";
                                                }
                                            ?>
                                        </td>
                                        <td><?=$auser['createdAt']?></td>
                                        <?php 
                                            if(session()->get('accountType') == 1){
                                                ?>
                                                    <td><a href="<?=base_url('dashboard/delete_user/'.$auser['id'])?>" class="btn btn-sm btn-danger">Delete</a></td>
                                                <?php 
                                            }
                                        ?>
                                    </tr>
                                <?php endforeach ?>
                                </table>
                                
                            </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card m-3">
                            <div class="card-body">
                                <div class="alert alert-info">
                                    <h5>Create a new user</h5>
                                    <p class="lead">Add user will be able to log in this website add and perform task like you depending on the account.</p>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                    <?php if(session()->get('accountType') == 1){
                                        ?> 
                                        <form class="row" method="post" action="<?=base_url('dashboard/create_user')?>">
                                            <div class="col-12 mb-3">
                                                <label for="accEmail">Email</label>
                                                <input type="email" name="accEmail" class="form-control">
                                                <?php if(isset($validation) && $validation->hasError('accEmail')) :?>
                                                   <div class="text-danger"> <?=$validation->getError('accEmail')?></div>
                                                <?php endif ?>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="accType" >Account Type  </label>
                                                <select name="accType" class="form-control" id="">
                                                    <option value="">Choose</option>
                                                    <option value="0">Ordinery User</option>
                                                    <option value="1">Admin User</option>
                                                </select>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="accPassword">Account Password</label>
                                                <input type="password" id="accPassword" name="accPassword" class="form-control">
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="accPasswordConfirm">Comfirm Password</label>
                                                <input id="accPasswordConfirm" oninput="confirm_pass('accPassword', 'accPasswordConfirm', 'createAccMsg', 'createAccBtn')" type="password" name="accPasswordConfirm" class="form-control">
                                            </div>
                                            <div id="createAccMsg"></div>

                                            <button  id="createAccBtn" class="btn active">Create An Account</button>
                                        </form>
                                        <?php 
                                    } else{
                                        echo "<div class='alert-danger alert'><h1 class='text-danger'?>You Don't have administrative previllage to create an account</4></div>";
                                    }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // return the document object  
    function _(x){
        return document.getElementById(x);
    }

    // show error, success, or submit button fuctionality 
    function confirm_pass(input1, input2, msgElm, btnId){
        let password1 = _(input1).value;
        let password2 = _(input2).value;

        if(password1 !='' && password2.length == password1.length && password1 === password2){
            _(btnId).style.display = 'block';
            _(msgElm).innerHTML = "<span class='text-success'>Password Matched</span>";
        }

        if(password1 !='' && password2.length > 0 && password1 !== password2){
            _(btnId).style.display = 'none';
            _(msgElm).innerHTML = "<span class='text-danger'>Password Not Matched</span>";
        }
    }

    // hide the submit buttons 
    function hide(){
        _("updateAccBtn").style.display = 'none'; // hide the update account button 
        _("createAccBtn").style.display = 'none';//hide the create account button 
    }

   hide();
</script>
<?=$this->endSection()?>