<table id="example" class="mt-2 bg-transparent border-dark table-hover table-borderless table">
    <thead class="border-0 bg-transparent">
        <tr class="bg-dark border-dark">
            <th class="bg-dark">Institution's Name</th>
            <th class="bg-dark">Phone</th>
            <th class="bg-dark">Address</th>
            <th class="bg-dark">Inst. Profile</th>
        </tr>
    </thead>
    <tbody class=" border-dark bg-transparent" style="margin-top: -5px">
        <?php if(isset($institution_data)) : ?>
            <?php foreach($institution_data as $institution) :?>
            <?php if(session()->get('loginEmail') == $institution['createdBy'] || session()->get('accountType') == 1) :?>
            <tr class="bg-dark">
                <td><?=$institution['institutionName']?></td>
                <td><?=$institution['phone']?></td>
                <td><?=$institution['address']?></td>
                <td>
                    <!-- dropdown btn -->
                    <div class="btn-group w-100">
                    <button type="button" class="w-100 btn btn btn-outline-secondary shadow-sm rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                    More Info
                    </button>
                    <ul class="dropdown-menu text-info">
                        <li><a class="dropdown-item " style="color:black !important" href="<?=base_url('dashboard/edit_institution/'.$institution['id'])?>"><i class="bi bi-eye-fill"></i> View</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item btn " style="color:red !important" href="#"><i class="bi text-danger bi-trash"></i> Delete</a></li>
                    </ul>
                    </div>
                </td>
            </tr>
            <?php endif ?>                    
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
          