 <!-- Form contact -->
<div class="header_title">
  <h1 class="container head_title">Borrower Sign Up Form</h1>
</div>
<div class="container auth ">

    

    <div id="big-form" class="well auth-box">

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
                    <div class="col-md-2 col-sm-1" ></div>
                    <div class="col-sm-10 col-sm-offset-6 col-md-8 col-md-offset-6">

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
                              <!-- <div class="form-group">
                                  <input class="form-control" required="Please upload Your Photo" name="image" id="file" type="file" autofocus>
                              </div> -->
                                <div class="form-group">                             
                                    <label class="uploadphoto">
                                       <i class="fa fa-arrow-up"></i> Upload Your Profile Picture&hellip; <input type="file" style="display: none;" class="form-control" required="Please upload Your Photo" name="image" id="file" type="file" autofocus>
                                    </label>                                
                              </div>
  <input type="hidden" value="1" id="lender" name="usertype" >
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" id="register" name="register" >
 
                          </fieldset>
                      </form>
                 </div>
                    <div class="col-md-2 col-sm-1" ></div>
                   
                  </div>
                      
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('signin'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
      

    </div>

    <div class="clearfix"></div>

  </div>
  <script type="text/javascript">
$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
  </script>

<!-- Form contact -->