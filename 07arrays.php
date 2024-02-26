<?php
// Array Topic
// $arr = array('Moomal', 25, 'Female');
// $arr2 = [1, 2, 4, 6, 3, 8];
// $length = sizeof($arr);

// for ($i = 0; $i < $length; $i++) {
//     echo "<br>Array value is " . $arr[$i] . " at index " . $i . "<br>";
// }
// print_r($arr);

// // Associative array
// $arrAss = array(
//     "name" => "Moomal Nadeem",
//     "age" => 24,
//     "CGPA" => 3.55,
//     "gender" => "Female",
// );
// echo "<br>Associative Array <br>";
// foreach ($arrAss as $key => $value) {
//     echo "<br>$key : $value\n<br>";
// }

// $arrAss = [
//     "name" => "Moomal Nadeem",
//     "age" => 24,
//     "CGPA" => 3.55,
//     "gender" => "Female",
// ];
// echo "<br>Associative Array Second Way <br>";
// foreach ($arrAss as $key => $value) {
//     echo "<br>$key : $value\n<br>";
// }

// // Multi-dimensional array & nested array
// $emp = [
//     [1, "Moomal Nadeem", 25],
//     [2, "Nimra Nadeem", 22],
//     [3, "Esha Nadeem", 20],
//     [4, "Muskan Nadeem", 15],
// ];
// echo "<br>Multi-dimensional Array <br>";
// for ($row = 0; $row < 4; $row++) {
//     for ($col = 0; $col < 3; $col++) {
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }

// // Multi-dimensional associative array + student records in tabular form
// $student = [
//     ["Moomal Nadeem" => ["Computer" => 80, "Physics" => 55]],
//     ["Nimra Nadeem" => ["Computer" => 80, "Physics" => 59]],
//     ["Esha Nadeem" => ["Computer" => 40, "Physics" => 59]],
//     ["Muskan Nadeem" => ["Computer" => 40, "Physics" => 75]],
// ];

// echo "<br><table border='1'>";
// echo "<tr><th>Name</th><th>Computer</th><th>Physics</th></tr>";

// foreach ($student as $value) {
//     foreach ($value as $name => $subjects) {
//         echo "<tr>
//                 <td>$name</td>
//                 <td>{$subjects['Computer']}</td>
//                 <td>{$subjects['Physics']}</td>
//               </tr>";
//     }
// }

// echo "</table>";

// // Using list() in array
// echo "<br>Using list() in array <br>";
// $emplist = [
//     [1, "Moomal Nadeem", 25],
//     [2, "Nimra Nadeem", 22],
//     [3, "Esha Nadeem", 20],
//     [4, "Muskan Nadeem", 15],
// ];
// echo "<table border=2>";
// echo "<tr><th>id</th><th>Name</th><th>Age</th></tr>";
// foreach ($emplist as list($id, $name, $age)) {
//     echo "<tr>
//             <td> $id  </td>
//             <td> $name </td>
//             <td>$age </td>
//           </tr>";
// }
// echo "</table>";

// $student2 = [
//     ['name' => "Moomal", "Computer" => 80, "Physics" => 55],
//     ['name' => "Nimra ", "Computer" => 80, "Physics" => 59],
//     ['name' => "Esha ", "Computer" => 40, "Physics" => 59],
//     ['name' => "Muskan", "Computer" => 40, "Physics" => 75],
// ];
// echo "<br>Associative array using list() in array <br>";
// echo "<table border=2>";
// echo "<tr><th>Name</th><th>Computer</th><th>Physics</th></tr>";
// foreach ($student2 as list('name' => $name, 'Computer' => $Computer, 'Physics' => $Physics)) {
//     echo "<tr>
//             <td> $name  </td>
//             <td> $Computer </td>
//             <td>$Physics </td>
//           </tr>";
// }
// echo "</table>";

// $arrCount = [1, 2, 4, 6, 3, 8];
// print_r(array_count_values($arrCount));  // return array

// echo "<br>Count() Function </br>";
// echo count($arrCount);
// echo "<br>Sizeof() Function </br>";
// echo sizeof($arrCount);

// $studentCount = [
//     ["MoomalNadeem" => ["Computer" => 80, "Physics" => 55]],
//     ["Nimra Nadeem" => ["Computer" => 80, "Physics" => 59]],
//     ["Esha Nadeem" => ["Computer" => 40, "Physics" => 59]],
//     ["Muskan Nadeem" => ["Computer" => 40, "Physics" => 75]],
// ];

// echo "<br>Count() Function </br>";
// echo count($studentCount[0]['MoomalNadeem']);
// echo "<br>Sizeof() Function </br>";
// echo sizeof($studentCount[0], 1);

// echo "<br>Search in array in_array => return boolean value 0 or 1 and array_search => return key or index</br>";
// $arrSearch = array('Moomal', 25, 'Female');
// echo "<br>in_array => return boolean value 0 or 1</br>";
// echo in_array('Female', $arrSearch);

// echo "<br>array_search => return key or index</br>";
// echo array_search('Female', $arrSearch);

// echo "<br>Array_replace and Array_replace_recursive ";


// $arrReplace = array('Moomal', 25, 'Female');
// $arr2Replace = ['Abida', 2];
// echo "<br>Array_replace_recursive <br>";
// $result = array_replace($arrReplace, $arr2Replace);
// echo "<pre>";
// print_r($result);
// echo "</pre>";
// echo "<br>Array_replace_recursive  <br>";
// $arrReplace1 = array('name' => array('moomal', 'nadeem'), 'age' => array(22));
// $arrReplace2 = array('name' => array('abida'), 'age' => array(22));
// $arrReplace3 = array_replace_recursive($arrReplace1, $arrReplace2);

// echo "<pre>";
// print_r($arrReplace3);
// echo "</pre>";
echo "<br>push() and pop() ";
$arrPushPop = array('Moomal', 25, 'Female');
echo "<br>orignal ";
print_r($arrPushPop);
array_push($arrPushPop, "Ok Bye");
echo "<br>push() ";
print_r($arrPushPop);
array_pop($arrPushPop);
echo "<br>pop() ";
print_r($arrPushPop);

?>

