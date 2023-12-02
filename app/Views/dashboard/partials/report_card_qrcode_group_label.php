
<table id="example3" class="mt-2 table-hover table table-striped ">
                <thead class="">
                    <tr class="bg-dark">
                        <th class="bg-dark">Qr Code Labels Name</th>
                        <th class="bg-dark">Institution</th>
                        <th class="bg-dark">Total Qr Codes</th>
                        <th class="bg-dark">More</th>
                    </tr>
                </thead>
                <tbody class="pb-3">
                    <?php if(isset($reportcard_qr_code_db)) : ?>
                      <?php foreach($reportcard_qr_code_db as $acode_1) :?>
                        <?php if(session()->get('loginEmail') == $acode_1->createdBy || session()->get('accountType') == 1) :?>
                        <tr class="pt-3">
                            <td><?=$acode_1->label?></td>
                            <td><?=$acode_1->institutionName?></td>
                            <td><?=$acode_1->total?></td>
                            <td>
                            <a href="<?=base_url('vr/'.$acode_1->groupId)?>"><button class="w-100 rounded-pill btn btn btn-outline-secondary shadow-sm ">View Qrcodes</button></a>
                              
                            </td>
                        </tr>
                        <?php endif ?>                    
                      <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
                </table>
          