<div class="container" style="margin-top: 150px;">
	
	<span>
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-12 col-lg-12 text-center"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
 
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
                  <div class="row margin-top form_error">
                    <div class="col-md-4 col-lg-4 col-sm-12"></div>
                    <div class="col-md-4 col-lg-4 col-sm-12">

                      <form role="form" id="registerform" method="post" action="<?php echo base_url('userfront/register_user'); ?>" enctype="multipart/form-data">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Full Name" required="Please Type your Name" for="fullname" name="name" type="text" autofocus>
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" required="Please Type Your valid Email" id="email" name="email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" required="Password" name="password" id="password" type="password" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm Password" required="Password" name="cpassword" id="cpassword" type="password" value="">
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Address" required="Please type Your Address" id="address" name="address" type="text" value="">
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Occupation" name="occupation" id="occupation" type="text" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Social xxx-xxxxx-xxx" name="social_security" id="social_security" type="Password" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" required="Please upload Your Photo" name="image" id="file" type="file" autofocus>
                              </div>
 
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" id="register" name="register" >
 
                          </fieldset>
                      </form>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12"></div>
                  </div>
                      
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('signin'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
 
     
 
 
 
</span>
</div>

