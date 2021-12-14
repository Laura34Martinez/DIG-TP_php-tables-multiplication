<?php

function createTable($increment) { 

$i = 0;
echo '<table class="table d-flex justify-content-center text-center">';
while ($i < $increment+1) {
	$j = 0;
	echo '<tr>';
	while ($j < $increment+1) {
		if ($j === 0 && $i === 0) {
			echo '<td></td>';
		} elseif ($i === 0) {
			echo '<td class="color-td">' . $j . '</td>';
		} elseif ($j === 0) {
			echo '<td class="color-td">' . $i . '</td>';
		} else {
			echo '<td' . ($i == $j ? ' class="color-x">' : '>') . $j * $i . '</td>';
		}
		$j ++;
	 }
	echo '</tr>';
	 $i ++;
}	
echo '</table>';

}