<div id="admin-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <a href="dashboard.php" class="logo-img">
                    <img src="../images/<?php echo $result[0]['site_logo']; ?>" alt=""/>
                </a>
                <a href="dashboard.php" class="logo"></a>
            </div>
            <div class="col-md-offset-8 col-md-2">
                <div class="dropdown">
                    <a href="" class="dropdown-toggle logout" data-toggle="dropdown">
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="change_password.php">Change Password</a></li>
                        <li><a href="php_files/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>