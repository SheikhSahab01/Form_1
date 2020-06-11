
<?php
// varible 
$name = $_request['name']
$name1 = $_request['name1']
$addressline1 = $_request['address-line1']
$addressline2 = $_request['address-line2']
$city = $_request['city']
$state = $_request['state']
$order = $_request['order']

// check

if (empty($name)||empty($name1)||empty($addressline1)||empty($city)||empty($state)||empty($order))
{

	echo "Plese fill all the fields";
} 




else {
	
	mail("asifsheikhsheikh786@gmail", " your_New_Order",$order, "form: $name <$addressline1> <$city> <$state>");

	echo "<script type=text/javascript> 
			alert('your order recieved successfully');
			window.history.log(-1);

	</script>";
}




?>