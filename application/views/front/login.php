<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 text-center margin-top">
            <div class="login-panel panel panel-success">
                <div class="panel-heading margin-top">
                    <h3 class="panel-title">Login</h3>
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
 
                <div class="panel-body">
                  <div class="row margin-top">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                       <form role="form" id="registerform" method="post" action="<?php echo base_url('Userfront/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
 
 
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
 
                        </fieldset>
                    </form>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
                    
                  </div>
                   
                <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('register'); ?>">Register here</a></center><!--for centered text-->
 
                </div>
            </div>
        </div>
    </div>
</div>