    <!-- Form contact -->
<div class="header_title">
  <h1 class="container head_title">Borrower Form</h1>
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

            <div class="borrow_name">
              <input type="hidden"  value="borrow" name="type">

              <input id="textinput" name="name" placeholder="Your Name" class="form-control input-md" type="text" required>  

            </div>

          </div>



          <!-- Email input-->

          <div class="form-group">

            <label class=" control-label" for="textinput">Email Address</label>  

            <div class="lender_email">

              <input id="textinput" 	name="email" placeholder="Your Email" class="form-control input-md" type="text" required>

            </div>

          </div>


           <!-- Phone input-->

          <div class="form-group">

            <label class=" control-label" for="textinput">Phone Number</label>  

            <div class="lender_phone">

              <input id="textinput" name="phone" placeholder="Your Phone" class="form-control input-md" type="text" required>  

            </div>

          </div>
           <div class="form-group rang_slider">

            <label class=" control-label" for="textinput">What would you need to Borrow?</label>  

            <input type="range" value="6500" name="range" step="25" min="1000" max="5000" required>

<div class="range">
  <small class="min pull-left">$1,000</small>
  <small class="max pull-right">$5,000+</small>
</div>

          </div>



         <!-- Multiple Radios -->

          <div class="form-group">

            <label class=" control-label" for="radios">What would you use the money for?</label>

            <div class="">

              <div class="radio">

                <label for="radios-0">

                  <input name="radios" id="radios-0" value="Credit Card Consolidation" checked="checked" type="radio">

                  Credit Card Consolidation

                </label>

              </div>

              <div class="radio">

                <label for="radios-1">

                  <input name="radios" id="radios-1" value="Student Loan" type="radio">

                  Student Loan

                </label>

              </div>

              <div class="radio">

                <label for="radios-2">

                  <input name="radios" id="radios-2" value="Payday Loan" type="radio" >

                  Payday Loan

                </label>

              </div>
              <div class="radio">

                <label for="radios-3">

                  <input name="radios" id="radios-3" value="Personal Expenses" type="radio">

                  Personal Expenses

                </label>

              </div>


            </div>

          </div>
          <!-- Terms & Conditions -->
          <hr style="margin: 40px;">
<div class="form-group">

           

            <div class="">

              <div class="radio">

                <label for="radios-7">

                  <input name="terms" id="radios-7" value="8" type="radio" required>

                  I Agree to the <a href="<?php echo base_url();?>index.php/terms">Terms & Conditions</a>

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