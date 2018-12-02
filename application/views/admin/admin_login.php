<div class="container-fluid" id="body">
<div class="container login">
            <h2 class="text-center">DEVSEC</h2>

                <form action="<?php echo base_url();?>admin/login" method="post">
                   <span style="color:red; font-weight:bold;"><?php if(isset($login_error)) echo $login_error;?></span>
                   <div class="form-group">
                         <label for="username">Email*</label>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span> <input type="email" class='form-control' name="username" id="username" placeholder="example@google.com" required>
                         </div>

                  </div>
                         <div class="form-group">
                         <label for="username">Password:*</label>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-lock"></i></span><input type="password" class='form-control' name="password" id="password" placeholder="password" required>
                         </div>

                  </div>
                         <div class="form-group">
                      <input type="submit" class='btn btn-default' name="login" id="login-btn" value="Login">
                  </div>
                    <p id="form-data" class="text-center"></p>
                     <a href="register.php">Forgot Password?</a>
                     <br>
                     <p>Don't have account <a href="#">Sign Up</a> </p>
                </form>
                </div>
            </div>
    </body>
</html>
