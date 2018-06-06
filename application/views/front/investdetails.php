<section id="borowerb">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">You Invest in</h3>
		<div class="row">
        <div class="profile">
            <h3><?php echo $this->session->userdata['user_name']; ?></h3>
            <?php 
			/*$userId=$this->session->userdata['userId'];
			$model=$this->load->model('user_model');
			
			$data = $this->user_model->getUserAccountById($userId);
*/			$sel_amount= $data_acc->borrow_amount;
			$divide_hund=$sel_amount/100;
			$divide_three=$sel_amount/3;
			$ten_percent=$divide_hund*10;
			$seven_percent=$divide_hund*7;
			$len_amount="75";
			$to_be_paid=$ten_percent+$divide_three+$len_amount;
			?>
            </div>
            <div class="middleline">
            </div>
			<div class="col-md-12 col-lg-12 col-sm-12 profileimgname text-center">
					
                <div class="profileimage">
				<img id="fileupload" class="profile_image" name="filetoupload" src="<?php echo site_url('uploads/profile/'.$users->profile);?>" title="Click to Upload Your Profile Photo">
                </div>
                <div class="profit">
                	<span><button type="Submit" class="btn-investd">Potential Profit: $<?php echo $ten_percent;?></button></span>
                </div>
                <div class="inter">
                	<div class="blueround"><h3>$<?php echo $len_amount;?><br>Lendexsys amount</h3></div>
                </div>
                <div class="">
                	<div class="greenround"><h1>30 Days to<br>$<?php echo round($to_be_paid);?> Payment</h1></div>
                </div>
			</div>
			
		</div>
		<div class="row text-center">
		
				<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 graytext">
					<h2>You can pay via Credit Card or Bank Transfer etc</h2>
				</div>
                <div class="col-sm-12 col-md-12 text-center emptyspaces">
				<form action="http://lendexsys.com/index.php/landing" method="post">
        <noscript>You must <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> in your web browser in order to pay via Stripe.</noscript>

        <input 
            type="submit" 
            value="Pay Now"
            data-key="pk_test_gXKVG37wSMudhJloOFh1k7jO"
            data-amount="<?php echo round($to_be_paid)*100;?>"
            data-currency="USD"
            data-name="Lendexsys"
            data-description="Funding amount for borrower"
            class="btn-submitnew"
        />

        <script src="https://checkout.stripe.com/v2/checkout.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>
        $(document).ready(function() {
            $(':submit').on('click', function(event) {
                event.preventDefault();
                var $button = $(this),
                    $form = $button.parents('form');
                var opts = $.extend({}, $button.data(), {
                    token: function(result) {
                        $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                    }
                });
                StripeCheckout.open(opts);
            });
        });
        </script>
</form>
</div>
		</div>
	
		
		<div class="borowerbottom">
			<h2 class=" text-center">Powered & Protected By the Block Chain</h2>
			<div class="row imgsectionborobotom">
					<div class="col-md-12 col-lg-3 col-sm-12"></div>
					<div class="col-md-12 col-lg-3 col-sm-12 Stellar-Logo text-center">
						<img src="<?php echo site_url('assets/images/Stellar-Logo.png');?>">
					</div>
					<div class="col-md-12 col-lg-3 col-sm-12 text-center">
						<img src="<?php echo site_url('assets/images/lendexsys_Landing-Page-Borrow-2-slice_11.png');?>">
					</div>
					<div class="col-md-12 col-lg-3 col-sm-12"></div>
			</div>
			<h4 class=" text-center textpara">****COPYRIGHT ©2018, Lendexsys LLC, ALL RIGHTS RESERVED****</h4>			<p class="textpara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		</div>
		</div>
		
	</div>
</section>