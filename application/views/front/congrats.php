<section id="borowerb">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">Congratulation! You are Funded</h3>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-12 text-center profileimgname">
				<img id="fileupload" class="profile_image" name="filetoupload" src="<?php echo site_url('uploads/profile/'.$users->profile);?>" title="Click to Upload Your Profile Photo">
				<h3><?php echo $this->session->userdata['user_name']; ?></h3>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
		</div>
		
			<div class="col-md-12 col-lg-12 col-sm-12 text-center congratsnew">
				<h5 class="text-center">Your money will arrive in</h5>
                <h3 class="text-center">1 Business Day</h3> 
				<h5 class="text-center">To Your Account ending in : xxxxxxx-<?php echo substr($user_account->checkingNo,-4);?></h5>
			</div>
            
            <div class="col-sm-12 col-md-12 text-center emptyspaces">
				<span><a href="<?php echo site_url('userfront/user_profile');?>"  class="btn-submitnew">Continue to your Account</a></span>
			</div>
			
		
		
		<div class="borowerbottom">
			<h2 class=" text-center">Powered & Protected By the Block Chain</h2>
			<div class="row imgsectionborobotom">
					<div class="col-md-12 col-lg-3 col-sm-12 text-center"></div>
					<div class="col-md-12 col-lg-3 col-sm-12 text-center Stellar-Logo">
						<img src="<?php echo site_url('assets/images/Stellar-Logo.png');?>">
					</div>
					<div class="col-md-12 col-lg-3 col-sm-12 text-center">
						<img src="<?php echo site_url('assets/images/lendexsys_Landing-Page-Borrow-2-slice_11.png');?>">
					</div>
					<div class="col-md-12 col-lg-3 col-sm-12 text-center"></div>
			</div>
			<h4 class=" text-center textpara">****COPYRIGHT ©2018, Lendexsys LLC, ALL RIGHTS RESERVED****</h4>			<p class="textpara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		</div>
		</div>
		
		</div>
	</div>
</section>