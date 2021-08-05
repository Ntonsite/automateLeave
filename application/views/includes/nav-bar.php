<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('leave');?>">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('leave/all_balance');?>">Balance allocated</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('leave/av_balance');?>">Available Balance</a>
            </li>
        </ul>
        <form class="navbar-nav my-2 my-lg-0">
            <a href="<?php echo site_url('auth/logout');?>" onclick="Javascript:return confirm('Are you sure you want to logout?');" class="btn btn-info">Logout</a>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-outline-info" href="<?php echo site_url('leave/annual');?>">Annual Leave</a>
        </div>

        <div class="col-md-3">
            <a class="btn btn-outline-warning" href="<?php echo site_url('leave/sick');?>">Sick Leave</a>
        </div>

        <div class="col-md-3">
            <a class="btn btn-outline-danger" href="<?php echo site_url('leave/compassionate');?>">Compassionate Leave</a>
        </div>

        <div class="col-md-3">
            <a class="btn btn-outline-info" href="<?php echo site_url('leave/maternity');?>">Maternity Leave</a>
        </div>

    </div>
</div>




