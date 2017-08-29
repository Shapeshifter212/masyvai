<?php

$auto1 = ["Modelis" => "Hyundai", "Markė" => "Getz", "Pag_metai" => "2003", "Spalva" => "Raudona" ];
$auto2 = ["Modelis" => "Mazda", "Markė" => "Rx8", "Pag_metai" => "2001", "Spalva" => "Sidabrinė" ];
$auto3 = ["Modelis" => "Audi", "Markė" => "A3", "Pag_metai" => "2012", "Spalva" => "Raudona" ];

$ph1 = ["Modelis" => "Nokia", "Markė" => "5110", "Pag_metai" => "1995", "Spalva" => "Juoda" ];
$ph2 = ["Modelis" => "Samsung", "Markė" => "S2", "Pag_metai" => "2001", "Spalva" => "Sidabrinė" ];
$ph3 = ["Modelis" => "Sony", "Markė" => "Z1C", "Pag_metai" => "2012", "Spalva" => "Balta" ];

$autos = [$auto1, $auto2, $auto3];

$phones = [$ph1, $ph2, $ph3];

?>

<table width="100%">
	<tr>
		<td>Modelis</td>
		<td>Markė</td>
		<td>Pagaminimo metai</td>
		<td>Spalva</td>
	</tr>
<?php

foreach ($autos as $car) {
echo "<tr><td>" . $car['Modelis'] . "</td><td>" . $car['Markė'] . "</td><td>" . $car['Pag_metai'] . "</td><td>" . $car['Spalva'] . "</td></tr>";
 } 
?>

</table>

</br>

<table width="100%">
	<tr>
		<td>Modelis</td>
		<td>Markė</td>
		<td>Pagaminimo metai</td>
		<td>Spalva</td>
	</tr>
<?php

foreach ($phones as $tel) {
echo "<tr><td>" . $tel['Modelis'] . "</td><td>" . $tel['Markė'] . "</td><td>" . $tel['Pag_metai'] . "</td><td>" . $tel['Spalva'] . "</td></tr>";
 }  

?>	
</table>

