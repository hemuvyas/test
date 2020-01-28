<?php
$student = array();
$student['abc1'] = array(
	"id" => "abc1",
	"sname" => "Hemant",
	"class" => 12,
	"marks" => array(
		"hindi" => 80,
		"english" => 70,
		"math" => 90
	)

);
$student['abc2'] = array(
	"id" => "abc2",
	"sname" => "Yash",
	"class" => 12,
	"marks" => array(
		"hindi" => 87,
		"english" => 79,
		"math" => 97
	)
);
$student['abc3'] = array(
	"id" => "abc3",
	"sname" => "Zubin",
	"class" => 11,
	"marks" => array(
		"hindi" => 87,
		"english" => 79,
		"math" => 45
	)
);
$student['abc4'] = array(
	"id" => "abc4",
	"sname" => "Prateek",
	"class" => 11,
	"marks" => array(
		"hindi" => 78,
		"english" => 68,
		"math" => 95
	)
);
$student['abc5'] = array(
	"id" => "abc5",
	"sname" => "kunal",
	"class" => 10,
	"marks" => array(
		"hindi" => 80,
		"english" => 100,
		"math" => 40
	)
);
$student['abc6'] = array(
	"id" => "abc6",
	"sname" => "Ankit",
	"class" => 10,
	"marks" => array(
		"hindi" => 87,
		"english" => 62,
		"math" => 89
	)
);
$student['abc7'] = array(
	"id" => "abc7",
	"sname" => "Yogita",
	"class" => 9,
	"marks" => array(
		"hindi" => 80,
		"english" => 70,
		"math" => 90
	)
);
$student['abc8'] = array(
	"id" => "abc8",
	"sname" => "Archit",
	"class" => 9,
	"marks" => array(
		"hindi" => 89,
		"english" => 79,
		"math" => 99
	)
);
function my_sort($a,$b)
{
 if ($a['total']==$b['total']) return 0;
  return ($a['total'] > $b['total']) ? -1 : 1;
}

function class_sort($a,$b)
{
 if ($a['class']==$b['class']) return 0;
  return ($a['class'] > $b['class']) ? -1 : 1;
}

function myfunction($v1,$v2)
{
return $v1+$v2;
}
for ($x = 1; $x <= 8; $x++) {
	$id='abc'.$x;
    $total[$x] = (array_reduce($student[$id]['marks'],"myfunction"));
    $student[$id]['total'] = $total[$x];
    // array_push($student[$id], $total[$x]);
}

// print_r($total);
// echo "<br>";
// echo "dweafr";
// print_r($student);

echo "---------";

usort($student, "my_sort");
usort($student, "class_sort");

// foreach ($student as $value) {
// 	print_r($value['total']);
// 	usort($value['total'], "my_sort");
// }
echo "---------";





// $student_details = array(.......);
// $student_new = array();

// foreach ($student_details as $id => $value) {
// 	$student_new[$value['class'][$id]] = $value;
// }




?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<main>
	<div class=tbl>
		<table border="1">
			<tr>
				<th>Id</th><th>name</th><th>total marks</th><th>class</th>
			</tr>
			<?php
				foreach ($student as $key => $value) {
					// if ($value['class'] == 12) {

					// 	echo "<tr><td>".$key."</td><td>".$value['sname']."</td><td>".$value[0]."</td><td>".$value['class']."</td></tr>";
					// 	echo "<br>";
					// }
					// if ($value['class'] == 11) {
					// 	echo "<tr><td>".$key."</td><td>".$value['sname']."</td><td>".$value[0]."</td><td>".$value['class']."</td></tr>";
					// 	echo "<br>";
					// }
					// if ($value['class'] == 10) {
					// 	echo "<tr><td>".$key."</td><td>".$value['sname']."</td><td>".$value[0]."</td><td>".$value['class']."</td></tr>";
					// 	echo "<br>";
					// }
					// if ($value['class'] == 9) {
					// 	echo "<tr><td>".$key."</td><td>".$value['sname']."</td><td>".$value[0]."</td><td>".$value['class']."</td></tr>";
					// 	echo "<br>";
					// }
					echo "<tr><td>".$value['id']."</td><td>".$value['sname']."</td><td>".$value['total']."</td><td>".$value['class']."</td></tr>";
				}
			?>
		</table>
	</div>
</main>
</body>
</html>