<section id="borowerb">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">Choose Amount You would Like to Borrow</h3>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-12 text-center profileimgname">
				<img id="fileupload" class="profile_image" name="filetoupload" src="<?php echo site_url('uploads/profile/'.$users->profile);?>" title="Click to Upload Your Profile Photo">
				<h3><?php echo $this->session->userdata['user_name']; ?></h3>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 text-center dollericon">
				<img src="<?php echo site_url('assets/images/Currency.png');?>">
				<h2></h2>
			</div>
			 
		</div>
		<div class="row">
        <?php  $userId=$this->session->userdata['userId'];?>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>   
            <form role="form" method="post" action="<?php echo base_url('userfront/updateAmount/'.$userId); ?>" enctype="multipart/form-data">
			<div class="col-md-4 col-lg-4 col-sm-12">
            <div class="amounts">
                <input type="radio" name="amount" value="1500" />
                <label class="amountwithborder">$1,500</label>
            </div>
            <div class="amounts">
                <input type="radio" name="amount" value="3000" />
                <label class="amountwithborder">$3,000</label>
            </div>
            <div class="amounts">
                <input type="radio" name="amount" value="5000" />
                <label class="amountwithborder">$5,000</label>
            </div>
				<!--<h2 class="amountwithborder text-center" style="cursor: pointer;" onclick="submitValue(1500)">1,500</h2>
				<h2 class="amountwithborder text-center" style="cursor: pointer;" onclick="submitValue(3000)">3,000</h2>
				<h2 class="amountwithborder text-center" style="cursor: pointer;" onclick="submitValue(5000)">5,000</h2>-->
                <div class="row">
                	 <div class="col-sm-12 col-md-5"></div>
                <div class="col-sm-12 col-md-2 text-center emptyspaces">
				<span><button type="Submit" class="btn-submitnew">Continue</button></span>
			</div>
			<div class="col-sm-12 col-md-5"></div>

			</div>
                </div>
            </form>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
		</div>
		<div class="borowerbottom">
			<h2 class=" text-center">Powered & Protected By the Block Chain</h2>
			<div class="row imgsectionborobotom">
					<div class="col-md-12 col-lg-3 col-sm-12 col-xs-12 text-center"></div>
					<div class="col-md-12 col-lg-3 col-sm-12 col-xs-12 text-center Stellar-Logo">
						<img src="<?php echo site_url('assets/images/Stellar-Logo.png');?>">
					</div>
					<div class="col-md-12 col-lg-3 col-sm-12 col-xs-12 text-center">
						<img src="<?php echo site_url('assets/images/lendexsys_Landing-Page-Borrow-2-slice_11.png');?>">
					</div>
					<div class="col-md-12 col-lg-3 col-sm-12 col-xs-12 text-center"></div>
			</div>
			<h4 class=" text-center textpara">****COPYRIGHT ©2018, Lendexsys LLC, ALL RIGHTS RESERVED****</h4>			<p class="textpara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		</div>
		</div>
		
	</div>
</section>
<script type="text/javascript">
	
$(document).ready(function(){
  $('.amounts input').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

    label.remove();
    self.iCheck({
      checkboxClass: 'icheckbox_line-blue',
      radioClass: 'iradio_line-blue',
      insert: label_text
    });
  });
});
</script>
	
	
</script>