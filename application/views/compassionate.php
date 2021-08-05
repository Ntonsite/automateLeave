<div class="container">
    <table id="maintable" class="table table-striped table-hover table-responsive-md">
        <thead class="thead-dark">
        <tr>
            <th>.No</th>
            <th>Staff Name</th>

            <th>LeaveType</th>

            <th>Days inclusive</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach($result as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->leaveType; ?></td>
                    <td><?php echo $row->days_total; ?></td>
                    <td><?php echo $row->status; ?></td>
                    <td><a class="btn btn-outline-primary" href="<?php echo site_url('leave/history');?>/<?php echo $row->abt_code;?>">View History</a></td>
                </tr>
            <?php }
        } ?>
        </tbody>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
        <tr>
            <th>#</th>
            <th>Staff Name</th>

            <th>LeaveType</th>

            <th>Days inclusive</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </tfoot>

    </table>
</div>
