<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Lendexsys, Lending-Exchange-System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<div style=" background-color:#666;">

  <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #fff;font-family: sans-serif;text-align: center;" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;" src="http://lendexsys.com/assets/images/lendexsysLogoBig.png" alt=""></div>

<p style="Margin-top: 0;color: #fff; text-align:center;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hey Lendexsys Team,</p>

<p style="Margin-top: 0;color: #fff; text-align:center; font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px"> <?php echo $name;?> has sent his details. Please see the customer details below </p>

<?php
if ($type == 'borrow') {
	?>
<table cellpadding="4" style="padding: 10px 200px; width: 100%; color: #fff; text-align: center;">
<tr>
<th>Full Name</th>
<th>Email Address</th>
<th>Phone Number</th>  
<th>What would you need to Borrow?</th>
<th>What would you use the money for?</th>
</tr>
<tr>
<td><?php echo $name;?></td>
<td><?php echo $email;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $range;?></td>
<td><?php echo $radios;?></td>

</tr>
</table>


<?php

}
else{
?>
<table cellpadding="4" style="padding: 10px 200px; width: 100%; color: #fff; text-align: center;">
<tr>
<th>Full Name</th>
<th>Email Address</th>
<th>Phone Number</th>  
<th>Amount You think you'd start lending?</th>
</tr>
<tr>
<td><?php echo $name;?></td>
<td><?php echo $email;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $lender;?></td>
</tr>
</table>
<?php
}
?>


</div>

</body>

</html>