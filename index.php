<html style="border: 1px solid black;">
	<head>
		<title>Hello OOP</title>
	</head>
	<body style="border: 1px solid black;">
		<?php
			include("ArrayList.php");
			$myList = new ArrayList(10);
			$myList->add(5);
			$myList->add(3);
			$myList->add(1);
			$myList->add(2);
			$myList->add(3);
			$myList->add(4);
			
			$myList->show();
			
			print "<br>";
			
			$myList->show();
			$number = 5;
			
			print "<br>";
			
			if($myList->find($number) == true){
				print "number " . $number . " is in the list.";
			} else {
				print "number " . $number . " is not in the list.";
			}
		?>
	</body>
</html>