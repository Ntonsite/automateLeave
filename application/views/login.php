<div class="container">

    <div class="row">
        <div class="col-md-6 offset-3">
            <br><br>
            <div class="card">
                <div class="card-header">
                    <h3 style="text-align:center;" class="panel-title">Start Session</h3>
                </div>
                <?php
                $success_msg= $this->session->flashdata('success_msg');
                $error_msg= $this->session->flashdata('error_msg');

                if($success_msg){
                    ?>
                    <div class="alert alert-success">
                        <?php echo $success_msg; ?>
                    </div>
                    <?php
                }
                if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                        <?php echo $error_msg; ?>
                    </div>
                    <?php
                }
                ?>
                <!--Secure password input in a Text Field-->
                <style>
                    @font-face
                    {
                        font-family:'dotsfont';
                        src:url('dotsfont.eot');
                        src:url('dotsfont.eot?#iefix')  format('embedded-opentype'),
                        url('dotsfont.svg#font')    format('svg'),
                        url('dotsfont.woff')        format('woff'),
                        url('dotsfont.ttf')         format('truetype');
                        font-weight:normal;
                        font-style:normal;
                    }

                    input.myclass
                    {font-family:dotsfont;}
                </style>
                <div class="card-body">
                    <form autocomplete="off" role="form" method="post" action="<?php echo site_url('auth/login'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input  required="" class="form-control" placeholder="username" name="user_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input  style="text-security:disc; -webkit-text-security:disc;" required="" class="form-control myclass" autocomplete="off" placeholder="Password" name="user_password" type="password">
                            </div>
                            <input class="btn btn-block btn-info btn-block" type="submit" value="Login" name="login" > <br>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

