<section id="borowerbg">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">Let Get You Some Money</h3>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-12 text-center profileimgname">
				
				<img id="fileupload" class="profile_image" name="filetoupload" src="<?php echo site_url('uploads/profile/'.$users->profile);?>" title="Click to Upload Your Profile Photo">
				<h3><?php echo $this->session->userdata['user_name']; ?></h3>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
		</div>
        <form role="form" method="post" action="<?php echo base_url('userfront/updateProfile'); ?>" enctype="multipart/form-data">
        
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 text-center dollericon">
				<img src="<?php echo site_url('assets/images/Currency.png');?>">
				<h2>Enter your bank details below</h2>
			</div>
			<div class="col-md-12 col-lg-12 col-sm-12 text-center rating empty-space">
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata['userId']; ?>" />
				<h3 class="text-center">Routing: <input type="password" name="routing" value="" placeholder="******" /></h3>
				<h3 class="text-center">Checking: <input type="password" name="checking" value="" placeholder="******" /></h3>
			</div>
			<div class="col-sm-12 col-md-12 text-center empty-space" >
				<span class="btn btn-default btn-file">
					
					<i class="fa fa-arrow-up" style="color: #169bd5; margin-right: 5px;"></i>Upload Most Recent Paystub<input type="file" name="image" size="20">
				</span>
			</div>
			<div class="col-sm-12 col-md-12 text-center emptyspaces">
				<span><button type="Submit" class="btn-submitnew">Submit</button></span>
			</div>
			
		</div>

		</form>
	
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
</section>
<script type="text/javascript">
    $(document).ready(function(){
    $("#fileupload").on("click",function(){
       $("#my_file").click();
    });    
});
</script>