<?php
$choice="hello";

switch($choice)
{
	case 12:
		echo "Int Case<br>";
		break;
	case false:
		echo "Bool Case <br>";
		break;
	case 23.4:
		echo "Float Case<br>";
		break;
	case "test":
		echo "string Case<br>";
		break;
	case 'hello':
		echo "String1 Case<br>";
		break;
	default:
		echo "Invalid  Choice<br>";
		break;

}


?>
