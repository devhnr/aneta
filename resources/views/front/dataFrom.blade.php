<html>
<head>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;

		//document.forms['customerData'].submit();
	};


</script>
</head>
<body>
	<form method="post" name="customerData" action="{{ route('hdfcrequestHandler') }}">

		@csrf
		<table width="40%" height="100" border='1' align="center"><caption><font size="4" color="blue"><b>Integration Kit</b></font></caption></table>
			<table width="40%" height="100" border='1' align="center">
				<tr>
					<td>Parameter Name:</td><td>Parameter Value:</td>
				</tr>
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td><input type="text" name="tid" id="tid" readonly /></td>
				</tr>
				<tr>
					<td>Merchant Id	:</td><td><input type="text" name="merchant_id" value="<?php echo $merchant_id;?>"/></td>
				</tr>
				<tr>
					<td>Order Id	:</td><td><input type="text" name="order_id" value="<?php echo $order_id;?>"/></td>
				</tr>
				<tr>
					<td>Amount	:</td><td><input type="text" name="amount" value="<?php echo $amount;?>"/></td>
				</tr>
				<tr>
					<td>Currency	:</td><td><input type="text" name="currency" value="<?php echo $currency;?>"/></td>
				</tr>
				<tr>
					<td>Redirect URL	:</td><td><input type="text" name="redirect_url" value="<?php echo $redirect_url;?>"/></td>
				</tr>
			 	<tr>
			 		<td>Cancel URL	:</td><td><input type="text" name="cancel_url" value="<?php echo $cancel_url;?>"/></td>
			 	</tr>
			 	<tr>
					<td>Language	:</td><td><input type="text" name="language" value="<?php echo $language;?>"/></td>
				</tr>
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" name="billing_name" value="<?php echo $billing_name;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address" value="<?php echo $billing_address;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city" value="<?php echo $billing_city;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state" value="<?php echo $billing_state;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip" value="<?php echo $billing_zip;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Country	:</td><td><input type="text" name="billing_country" value="<?php echo $billing_country;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Tel	:</td><td><input type="text" name="billing_tel" value="<?php echo $billing_tel;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" name="billing_email" value="<?php echo $billing_email;?>"/></td>
		        </tr>
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="<?php echo $delivery_name;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="<?php echo $delivery_address;?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="text" name="delivery_city" value="<?php echo $delivery_city;?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="text" name="delivery_state" value="<?php echo $delivery_state;?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="<?php echo $delivery_zip;?>"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="text" name="delivery_country" value="<?php echo $delivery_country;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="<?php echo $delivery_tel;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="<?php echo $merchant_param1;?>"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="<?php echo $merchant_param2;?>"/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="<?php echo $merchant_param3;?>"/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="<?php echo $merchant_param4;?>"/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="<?php echo $merchant_param5;?>"/></td>
				</tr>
				<tr>
					<td>Promo Code	:</td><td><input type="text" name="promo_code" value=""/></td>
				</tr>
				<tr>
					<td>Vault Info.	:</td><td><input type="text" name="customer_identifier" value=""/></td>
				</tr>
		        <tr>
		        	<td></td><td><INPUT TYPE="submit" value="CheckOut"></td>
		        </tr>
	      	</table>
	      </form>
	</body>
</html>



