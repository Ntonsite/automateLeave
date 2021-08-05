<?php $this->load->view('includes/lock'); ?>
<div class="container">
    <br>
    <!-- Alert for the successful upload of the leaves allocation -->
    <?php $upload = $this->session->flashdata('upload'); ?>

    <?php  if($upload){
        ?>
        <div class="alert alert-success alert-dismissible fade show">
            <?php echo $upload;?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }?>


<!--    Alert for reverting the allocated leave balances -->
    <?php $revert = $this->session->flashdata('revert'); ?>

    <?php  if($revert){
        ?>
        <div class="alert alert-success alert-dismissible fade show">
            <?php echo $revert;?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }?>
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#user">
                <i class="fas fa-plus"></i> Add User</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#file">
                <i class="fas fa-plus"></i> Allocate Balances</button>

            <br>
            <br>
            <a onClick="javascript: return confirm('Are you sure, you want to Revert all data?');" type="button" href="<?php echo site_url('admin/revert');?>" class="btn btn-outline-primary">Revert</a>
        </div>
    </div>

    <br><br>

    <!-- Modal -->
    <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('admin/create')?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input required="" type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Add username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Role</label>
                            <select name="role" class="form-control">
                                <?php if (!empty($role)) {
                                    foreach($role as $roles){?>
                                        <option value="<?php echo $roles->id; ?>"><?php echo $roles->name; ?></option>
                                    <?php }
                                } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                        <a href="<?php echo site_url('admin')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">File Upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('admin/upload');?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">Upload</label>
                            <input required="" class="form-control" type="file" name="file" id="file" required accept=".xls, .xlsx" />
                        </div>

                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                        <a href="<?php echo site_url('admin')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table id="maintable" class="table table-striped table-hover table-responsive-md">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach($result as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->user_id; ?></th>
                    <td><?php echo $row->user_name; ?></td>
                    <th scope="row"><?php if($row->role==1){echo "Admin";}else{echo "Member";} ?></th>
                    <th scope="row"><?php if($row->is_active==1){echo "Active";}else{echo "Not Active";} ?></th>
                    <td><a class="btn btn-sm btn-warning" href="<?php echo site_url('admin/edit');?>/<?php echo $row->user_id;?>">Edit</a>
                        <a onClick="javascript: return confirm('Please confirm deletion');" class="btn btn-sm btn-danger" href="<?php echo site_url('Admin/delete');?>/<?php echo $row->user_id;?>">Delete</a></td>
                </tr>
            <?php }
        } ?>
        </tbody>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
        </tfoot>
    </table>
</div>

</body>
</html>
