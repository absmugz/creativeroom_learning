
<div id="content">
    <div class="container-fluid">
        <div class="lock-container">
            <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                <img src="images/people/110/guy-5.jpg" class="img-circle width-80">
                <div class="panel-body">
                    <?php echo $message;?>
                    <?php echo form_open("user/login"); ?>
                    <div class="form-group">
                        <div class="form-control-material">
                            <input class="form-control" id="username" type="text" name="identity" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-control-material">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Enter Password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login<i class="fa fa-fw fa-unlock-alt"></i></button>

                    <?php echo form_close(); ?>
                    <a href="#" class="forgot-password">Forgot password?</a>
                    <a href="register" class="link-text-color">Create account</a>
                </div>
            </div>
        </div>
    </div>
</div>
