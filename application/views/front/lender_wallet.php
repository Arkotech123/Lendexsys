<section id="borowerbg">
	<div class="container borowerformbg">
		<div class="container insidewhite">
			<h3 class="text-center headingcongrats">Choose Borrower from the list below</h3>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-12 text-center profileimgname">
				
				<img id="fileupload" class="profile_image" name="filetoupload" src="<?php echo site_url('uploads/profile/'.$users->profile);?>" title="Click to Upload Your Profile Photo">
				<h3><?php echo $this->session->userdata['user_name']; ?></h3>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12"></div>
		</div>
        <div class="borrowers">
        <table border="0" class="table">
        <tr>
        	<th style="color: #169bd5;">Borrower Name</th>
            <th style="color: #169bd5;">Loan Amount</th>
             <th></th>
        </tr>
        <?php foreach ($usertype as $ut){
			$userId=$ut->userId;
			$model=$this->load->model('user_model');
			$data = $this->user_model->getUserAccountById($userId);
			$data1 = $this->user_model->getUserFundInfo($userId);
			$user_Id=$ut->userId;
			$userIds=$this->session->userdata['userId'];
			$sel_amount= $data->borrow_amount;
			$divide_hund=$sel_amount/100;
			$divide_three=$sel_amount/3;
			$ten_percent=$divide_hund*10;
			$seven_percent=$divide_hund*7;
			$len_amount="75";
			$to_be_paid=$ten_percent+$divide_three+$len_amount;
			?>
            <form method="post" action="<?php echo site_url('investdetails/investinfo/'.$user_Id);?>">
            <input type="hidden" name="invester_id" value="<?php echo $userIds;?>" />
            <input type="hidden" name="borrower_id" value="<?php echo $user_Id;?>" />
            <input type="hidden" name="fund_date" value="<?php echo date('Y-m-d');?>" />
            <input type="hidden" name="amount_first" value="<?php echo $to_be_paid;?>" />
           	<input type="hidden" name="amount_second" value="" />
            <input type="hidden" name="amount_third" value="" />
            <?php if(!$data1){?>
        <tr>
        	<td><?php echo $ut->name;?></td>
            <td><?php echo $data->borrow_amount;?></td>
             <td><input type="submit" name="submit" class="btn-primary btn" value="Invest?" /></td>
        </tr>
        </form>
        <?php } }?>
        </table>
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

</style>