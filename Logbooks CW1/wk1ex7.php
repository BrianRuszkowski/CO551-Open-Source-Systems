<html>
	<body>
		<?php
			$hourlyrate	= 5.75;
			$hoursperweek = 40;
			$gross = $hourlyrate * $hoursperweek;
			$tax = $gross * 22 / 100;
			$net = $gross - $tax;
			echo $net;
		?>
	</body>
</html>