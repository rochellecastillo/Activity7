<div class="row justify-content-center">
            <div class="col-md-4 pb-5 mt-2" id="login-form">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img class="rounded-circle" src="images/logo.jpg" alt="Logo" id="logo">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" class="form-control text-center" name="email" value="<?php if(isset($email)){echo $email;}?>">
                        <div class="text-warning"><small>
                            <?php
                                if(isset($emailErr)){
                                    echo $emailErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="pw" class="text-white">Password</label>
                        <input type="password" class="form-control text-center" name="pw" value="<?php if(isset($pw)){echo $pw;}?>">
                        <div class="text-warning"><small>
                            <?php
                                if(isset($passwordErr)){
                                    echo $passwordErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn btn-primary" name="btnlogin">Login</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-white text-end">
                        No account Yet? <a href="signup.php">Sign Up</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-white text-end">
                        <a href="#">I forgot my password</a>
                    </div>
                </div>
            </div>  
        </div>