<section id="borowerbg">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">Your Investment detail</h3>
		
        <div class="investers col-md-12">
         	<h4>Your Current Investments</h4>
            
            <div class="col-md-2 offer" style="font-weight:bold;">Borrower Name</div>
            <div class="col-md-2 offer" style="font-weight:bold;">Total Amount</div>
            <div class="col-md-2 offer" style="font-weight:bold;">1st Month Amount</div>
            <div class="col-md-2 offer" style="font-weight:bold;">2nd Month Amount</div>
            <div class="col-md-2 offer" style="font-weight:bold;">3rd Month Amount</div>
            <div class="col-md-2 offer" style="font-weight:bold;">Investment start</div>
            <hr />
            <?php 
			$userId=$funding->borrower_id;
			$data = $this->user_model->getUserAccountById($userId);
			$data1 = $this->user_model->getUserInfoById($userId);
			
			?>
            <div class="col-md-2 offer"><?php echo $data1->name;?></div>
            <div class="col-md-2 offer">$<?php echo $data->borrow_amount;?></div>
            <div class="col-md-2 offer">$<?php echo round( $funding->first_month);?></div>
            <div class="col-md-2 offer">Not funded yet</div>
            <div class="col-md-2 offer">Not funded yet</div>
            <div class="col-md-2 offer"><?php echo $funding->dateFunded;?></div>
        </div>
        
        <div class="otherinfo">
        <div class="col-md-6 column">
        <h4>Next payment Due:</h4>
        </div>
        <?php $dates=$funding->dateFunded;?>
        <div class="col-md-6 column">
        <h4>$<?php echo round($funding->first_month);?> ON <?php   $expire = strtotime(date("Y-m-d", strtotime($dates)) . " +30 days"); echo date('d').','; echo 'July, 2018';?></h4>
        </div>
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
.offer{
	float:left;
	    color: #169bd5;
    font-size: 12px;
    font-weight: normal;
}
hr{
	margin-top: 35px;
	max-width:100%;
	
}
.otherinfo{
	    margin-top: 40px;
    float: left;
    width: 100%;
    border: 1px solid #ccc;
}
.otherinfo .column{
	width:50%;
	float:left;
	    padding: 10px 30px;
}
</style>