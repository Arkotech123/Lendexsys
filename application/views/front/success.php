<section id="borowerbg">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">Lets Fund Your Loan</h3>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-12 text-center profileimgname">
				
				<img id="fileupload" class="profile_image" name="filetoupload" src="<?php echo site_url('uploads/profile/'.$users->profile);?>" title="Click to Upload Your Profile Photo">
				<h3><?php echo $this->session->userdata['user_name']; ?></h3>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
		</div>
        <form role="form" id="ibanForm" method="post" action="<?php echo base_url('userfront/updateProfile'); ?>" enctype="multipart/form-data">
        
		<div class="row">
        <?php echo $usertype=$this->session->userdata['usertype'];?>
			<div class="col-md-12 col-lg-12 col-sm-12 text-center dollericon">
				<img src="<?php echo site_url('assets/images/Currency.png');?>">
				<h2>Enter your bank details below</h2>
			</div>
            <div class="col-md-3 col-lg-3 col-sm-12 text-center rating empty-space"></div>
			<div class="col-md-6 col-lg-6 col-sm-12 text-center rating empty-space">
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata['userId']; ?>" />
				<div class="form-group">
               <label class="circle"> <i class="fa fa-question-circle"></i> How to validate?
               
               </label>
               <span class="tooltiptext">
               <ul>
               <li>Restricts input to only numbers</li>
               <li>Limits to 9 numbers</li>
               <li>US routing number only</li>
               <li>Validates first two digits</li>
               <li>Validates check (last) digit</li>
               </ul>
               </span>
                <input type="text" size="25" class="js-routing-transit-number form-control" pattern="\d*" x-autocompletetype="routing-transit-number" placeholder="Routing number..." name="routing" style="    padding: 5px;
    border-radius: 6px;" required>
                 <input type="button" name="button" value="Validate" class="btn-submitnew validating" />
                 <small id="emailHelp" class="form-text validation"></small>
               </div>
               
              
				<div class="form-group"><input type="text" name="checking" value="" placeholder="Checking No..." id="checking" class="form-control" /></div>
			</div>
            <div class="col-md-3 col-lg-3 col-sm-12 text-center rating empty-space"></div>
			<div class="col-sm-12 col-md-12 text-center empty-space" >
				<span class="btn btn-default btn-file">
					
					<i class="fa fa-arrow-up" style="color: #169bd5; margin-right: 5px;"></i>Upload Most Recent Paystub<input type="file" name="image" size="20">
				</span>
			</div>
			<div class="col-sm-12 col-md-12 text-center emptyspaces">
				<span><button type="Submit" class="btn-submitnew1" id="disabled" >Submit</button></span>
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
<script type="text/javascript" src="<?php echo site_url('assets/bank/lib/jquery.bank.js');?>"></script>
<script>
jQuery(function($){
$('.js-routing-transit-number').bank('RoutingTransitNumber', 'US');

$('.validating').click(function(e){
e.preventDefault();
$('input').removeClass('invalid');
$('.validation').removeClass('passed failed');

$('.js-routing-transit-number').toggleClass('invalid', !$.bank.validate('RoutingTransitNumber', 'US', $('.js-routing-transit-number').val()));

if ( $('input.invalid').length ) {
$('.validation').addClass('failed');
$('.validation').text('Routing number is In-Valid!');
$('#disabled').addClass('disabled');
$('#disabled').attr("disabled", "disabled");
} else {
$('.validation').addClass('passed');
$('.validation').text('Routing number is VALID!');
$('#disabled').removeClass('disabled');
$('#disabled').removeAttr("disabled", "disabled");
}
});
});
</script>
<script type="text/javascript">




    $(document).ready(function(){
    $("#fileupload").on("click",function(){
       $("#my_file").click();
    });    
});
</script>
<style type="text/css">
.validating{
	font-size: 12px;
    padding: 10px;
}
.passed{
	font-size: 12px;
    padding: 10px;
    color: green;
    text-align: left;
    margin-top: -18px;
    float: left;
}
.failed{
	font-size: 12px;
    padding: 10px;
    color: red;
    text-align: left;
    margin-top: -18px;
    float: left;
}
.js-routing-transit-number{
	    padding: 5px;
    border-radius: 6px;
    width: 85%;
    float: left;
    margin: 0px 4px 10px 0px;
}
.disabled{
	background:#ccc!important;
}
.btn-submitnew1 {
    background: #169bd5;
    border: none;
    color: #fff;
    border-radius: 3px;
    padding: 10px 30px;
}
.circle{
	 float: left;
    width: 100%;
    text-align: left;
	    font-size: 12px;
    font-weight: normal;
    color: dodgerblue;
}

.circle {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltiptext {
    visibility: hidden;
    width: 220px;
    background-color: black;
    color: #fff;
    text-align: left;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
	 font-size: 12px;
}

.circle:hover+.tooltiptext {
    visibility: visible;
}

</style>