    <!-- Form contact -->
<div class="header_title">
  <h1 class="container head_title">Lender Form</h1>
</div>
<div class="container auth ">

    

    <div id="big-form" class="well auth-box">
<?php
  
 
  echo form_open('email/sent');
?>
      <form>

        <fieldset>



          <!-- Name input-->

          <div class="form-group">

            <label class=" control-label" for="textinput">Full Name</label>  


            <div class="lender_name">
              <input type="hidden"  value="lender" name="type">
              <input id="textinput" name="name" placeholder="Your Name" class="form-control input-md" type="text" required>   

            </div>

          </div>



          <!-- Email input-->

          <div class="form-group">

            <label class=" control-label" for="textinput">Email Address</label>  

            <div class="lender_email">

              <input id="textinput"   name="email" placeholder="Your Email" class="form-control input-md" type="text" required>

            </div>

          </div>


           <!-- Phone input-->

          <div class="form-group">

            <label class=" control-label" for="textinput">Phone Number</label>  

            <div class="lender_phone">

              <input id="textinput" name="phone" placeholder="Your Phone" class="form-control input-md" type="text">  

            </div>

          </div>
           <div class="form-group rang_slider">

            <label class=" control-label" for="textinput">Amount You think you'd start lending?</label>  

            <input type="range" value="6500" step="2" min="250" max="1000" name="lender">

<div class="range">
  <small class="min pull-left">$250</small>
  <small class="max pull-right">$1,000+</small>
</div>

          </div>



         <!-- Multiple Radios -->
<hr style="margin: 40px;">
          <div class="form-group">

           

            <div class="">

              <div class="radio">

                <label for="radios-6">

                  <input name="amount" id="radios-6" value="6"  type="radio" required>

                  I Agree to the <a href="#">Terms & Conditions</a>

                </label>

              </div>


            </div>

          </div>



          <!-- Button (Double) -->

          <div class="form-group">

            <div class="">

              <button id="button1id" name="button1id"  class="btn btn-success">SUBMIT</button>

            </div>

          </div>

        </fieldset>

      </form>

    </div>

    <div class="clearfix"></div>

  </div>

<!-- Form contact -->