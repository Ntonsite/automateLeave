<div class="container">
    <table id="maintable" class="table table-striped table-hover table-responsive-md">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">Balance</th>
            <th scope="col">ABT Code</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach($result as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>

                    <td><?php echo $row->name; ?></td>
                    <td><?php if (!empty($row->balance)) {
                            echo $row->balance;
                        }else{ echo '0';} ?></td>
                    <td><?php echo $row->abt_code; ?></td>

                </tr>
            <?php }
        } ?>
        </tbody>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
        <tr>
            <th>#</th>

            <th>Fullname</th>

            <th>Balance</th>
            <th>ABT Code</th>
        </tr>
        </tfoot>
    </table>
</div>

