    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h1 class="text-display-1">Create account</h1>
                    <div class="panel-body">
                          
                        <!-- Signup -->
                       
                             
                                   <?php 
                                   $attributes = array('role' => 'form');
echo form_open('register', $attributes); 
                                   ?>
                            
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input name="first_name" id="firstName" type="text" class="form-control" placeholder="First Name">
                                    <label for="firstName">First name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input name="last_name" id="lastName" type="text" class="form-control" placeholder="Last Name">
                                    <label for="lastName">Last name</label>
                                </div>
                            </div>
                        <div class="form-group">
                                <div class="form-control-material">
                                    <input name="username" id="username" type="text" class="form-control" placeholder="Username">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input name="confirm_password" id="passwordConfirmation" type="password" class="form-control" placeholder="Password Confirmation">
                                    <label for="passwordConfirmation">Re-type password</label>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="checkbox">
                                    <input type="checkbox" id="agree" />
                                    <label for="agree">* I Agree with <a href="#">Terms &amp; Conditions!</a></label>
                                </div>
                            </div>
                            <div class="text-center">
                               
                                <button type="submit" class="btn btn-primary">Create an Account</button>

                    <?php echo form_close(); ?>
                            </div>
                     
                        <!-- //Signup -->
                    </div>
                </div>
            </div>
        </div>
    </div>