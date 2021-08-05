<?php //$this->load->view('includes/lock'); ?>
<div class="container">
    <table id="maintable" class="table table-striped table-hover table-responsive-md">
        <thead class="thead-dark">
        <tr>
            <th>Staff Name</th>
            <th>LeaveType</th>
            <th>StartDate</th>
            <th>EndDate</th>
            <th>Days inclusive</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach($result as $row) {?>
                <tr>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->leaveType; ?></td>
                    <td><?php echo $row->startDate; ?></td>
                    <td><?php echo $row->endDate; ?></td>
                    <td><?php echo $row->days_total; ?></td>
                    <td><?php echo $row->status; ?></td>
                </tr>
            <?php }
        } ?>
        </tbody>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
            <tr>
                <th>Staff Name</th>
                <th>LeaveType</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>Days inclusive</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
</div>
