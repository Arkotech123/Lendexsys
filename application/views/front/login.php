    <!-- Form contact -->
<div class="header_title">
  <h1 class="container head_title">Borrower Login</h1>
</div>
<div class="container auth ">

    

    <div id="big-form" class="well auth-box">

       <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-12 col-lg-12 text-center"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Login</h3>
                  </div>
                  <div class="panel-body">
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
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

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
                    <div class="col-md-2 col-lg-2 col-sm-12" ></div>
                    
                  </div>
                      
                      <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('register'); ?>">Register here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
      

    </div>

    <div class="clearfix"></div>

  </div>
</div>
