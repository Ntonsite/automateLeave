<?php $this->load->view('includes/lock'); ?>
<div class="container">
    <table id="maintable" class="table table-striped table-hover table-responsive-md">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">Balance</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach($result as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>

                    <td><?php echo $row->name; ?></td>
                    <td><?php if (!empty($row->leave_balance)) {
                            echo $row->leave_balance;
                        }else{ echo '0';} ?></td>

                </tr>
            <?php }
        } ?>
        </tbody>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
        <tr>
            <th>#</th>

            <th>Fullname</th>

            <th>Balance</th>
        </tr>
        </tfoot>

    </table>
</div>

