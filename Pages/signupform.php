<div class="row justify-content-center">
            <div class="col-md-4 mt-2" id="login-form">
                <div class="row">
                    <div class="col-md-2">
                        <img class="rounded-circle" src="images/logo.jpg" alt="Logo" id="logo">
                    </div>
                    <div class="col-md-8 text-white"><h1>Signup</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="fn" class="text-white">Firstname</label>
                        <input type="text" class="form-control" name="fn" value="<?php if(isset($fn)){echo $fn;}?>" required>
                         <div class="text-warning"><small>
                            <?php
                                if(isset($fnErr)){
                                    echo $fnErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="ln" class="text-white">Lastname</label>
                        <input type="text" class="form-control" name="ln" value="<?php if(isset($ln)){echo $ln;}?>" required>
                         <div class="text-warning"><small>
                            <?php
                                if(isset($lnErr)){
                                    echo $lnErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="un" class="text-white">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php if(isset($email)){echo $email;}?>" required>
                        <div class="text-warning"><small>
                            <?php
                                if(isset($emailErr)){
                                    echo $emailErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="pw" class="text-white">Password</label>
                        <input type="password" class="form-control" name="pw" value="<?php if(isset($pw)){echo $pw;}?>" required>
                        <div class="text-warning"><small>
                            <?php
                                if(isset($passwordErr)){
                                    echo $passwordErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="bdate" class="text-white">Birthdate</label>
                        <input type="date" class="form-control" name="bdate" value="<?php if(isset($bdate)){echo $bdate;}?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="contact" class="text-white">Phone Number</label>
                        <input type="tel" class="form-control" name="contact" placeholder="Enter 11 digit Number..." value="<?php if(isset($contact)){echo $contact;}?>" required>
                        <div class="text-warning"><small>
                            <?php
                                if(isset($contactErr)){
                                    echo $contactErr;
                                }
                            ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="terms" name="terms" required>
                            <label for="terms" class="text-info">I read and agree with the terms of agreement</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn btn-primary">Sign up</button>
                    </div>
                </div>
                <div>
                    <div class="col-md-12 text-white text-end">
                        Already have an account? <a href="index.php">Sign In</a>
                    </div>
                </div>
            </div>  
        </div>