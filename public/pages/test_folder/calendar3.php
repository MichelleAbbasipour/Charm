<?php


$current_month = date("n");
$month = ($_GET['m']) ? $_GET['m'] : date("n");


$previous_month = ($month - 1);

$next_month = ($month + 1);

$year = ($_GET['y']) ? $_GET['y'] : date("Y");
$previous_year = $year;

if($month == 0)
{
  $month = 12;
  $year--;
}

if($month == 13)
{
  $month = 1;
  $year++;
}

if($previous_month == 0)
{
  $previous_month = 12;
  $previous_year--;
}

$startDate  = $year."-".$month."-01";
$endDate = $year."-".$month."-31";



$endDate = strtotime($endDate);
echo("<form name = 'formCalendar' id = 'formCalendar' action = 'calendar3.php?' method = 'get'>");
echo '<table border=1>';
echo '<tr>';
for($i = strtotime('Monday', strtotime($startDate)); $i <= $endDate; $i = strtotime('+1 week', $i))

    echo '<td>'.date('d-M-y', $i).'</td>';   

echo '</tr>';   
echo("        </select>");
echo("        <input type = 'button' name = 'prev' value = '<<' onclick = 'location=\"calendar3.php?m={$previous_month}&y={$previous_year}\"'/>");
echo("        <input type = 'button' name = 'next' value = '>>' onclick = 'location=\"calendar3.php?m=". ($month + 1)."&y={$year}\"'/>");
echo("  </table>");
echo("<form>");

?>


<?php
$current_month = date("n");

$month = (isset($_GET['m'])) ? $_GET['m'] : date("n");
$year = (isset($_GET['y'])) ? $_GET['y'] : date("Y");

$previous_month = ($month - 1);
$next_month = ($month + 1);

$previous_year = $year;
$next_year = $year;

if($previous_month==0)
{
    $previous_month = 12;
    $previous_year = $year-1;
}

if($next_month>12)
{
    $next_month = 1;
    $next_year = $year+1;
}

$startDate  = $year."-".$month."-01";
$endDate = $year."-".$month."-31";        

$endDate = strtotime($endDate);
echo("<form name = 'formCalendar' id = 'formCalendar' action = 'calender3.php?' method = 'get'>");
echo '<table border=1>';
echo '<tr>';
for($i = strtotime('Monday', strtotime($startDate)); $i <= $endDate; $i = strtotime('+1 week', $i))

    echo '<td>'.date('d-M-y', $i).'</td>';   

echo '</tr>';   
echo("        </select>");
echo("        <input type = 'button' name = 'prev' value = '<<' onclick = 'location=\"calender3.php?m={$previous_month}&y={$previous_year}\"'/>");
echo("        <input type = 'button' name = 'next' value = '>>' onclick = 'location=\"calender3.php?m={$next_month}&y={$next_year}\"'/>");
echo("  </table>");
echo("<form>");
?>