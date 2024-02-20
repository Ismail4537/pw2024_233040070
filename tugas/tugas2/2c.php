<?php
for ($i = 10; $i >= 1; $i--) {
	for ($j = 1; $j <= $i; $j++) {
		echo "<div class='box' style='display: inline-block; width: 50px; height: 50px; border: 1px solid black; text-align: center; background-color: salmon; line-height: 50px;'>$j</div>";
	}
	echo "<br>";
}
