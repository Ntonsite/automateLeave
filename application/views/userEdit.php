<?php $this->load->view('includes/lock'); ?>
<div class="container">
    <h5>User Edit</h5>
    <br>
        <form method="post" action="<?php echo site_url('admin/update')?>/<?php if (!empty($row)) {
            echo $row->user_id;
        } ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="name" value="<?php if (!empty($row)) {
                    echo $row->user_name;
                } ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
               <select name="role" class="form-control">
                    <?php if (!empty($role)) {
                        foreach($role as $roles){?>
                        <option value="<?php echo $roles->id; ?>"><?php echo $roles->name; ?></option>
                        <?php }
                    } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="">
                    <option value="1">Activate</option>
                    <option value="0">Deactivate</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
             <a href="<?php echo site_url('admin')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form> 
    </div>
    <?php $this->load->view('includes/footer'); ?>
  </body>
</html>
