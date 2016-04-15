<div id="calendar" class="right">
		<?php
			$date = (!isset($_GET['month']) && !isset($_GET['year'])) ? time() : strtotime($_GET['month'] . '/1/' . $_GET['year']);
			
			$day = date('d', $date) ;
			$month = date('m', $date) ;
			$year = date('Y', $date) ;
			
			$first_day = mktime(0,0,0,$month, 1, $year) ;
			$title = date('F', $first_day) ;
			$day_of_week = date('D', $first_day) ;
			
			switch($day_of_week){
				case "Sun": $blank = 0; break;
				case "Mon": $blank = 1; break;
				case "Tue": $blank = 2; break;
				case "Wed": $blank = 3; break;
				case "Thu": $blank = 4; break;
				case "Fri": $blank = 5; break;
				case "Sat": $blank = 6; break;
			}
			
			$days_in_month = cal_days_in_month(0, $month, $year) ;
		?>
		
		 <div id="php-calendar" class="right">
		 <table>
		 <!--<tr><th colspan='7'><? echo $title. " ".$year; ?></th></tr>-->
		 <?php echo "<tr><th colspan=7><a href=\\"?month=". ($month - 1) . "&year=$year\\"><<</a> $title $year <a href=\\"?month=" . ($month + 1) . "&year=$year\\">>></a></th></tr>"; ?>
		 <tr><td width=42>S</td><td width=42>M</td><td width=42>T</td><td width=42>W</td><td width=42>T</td><td width=42>F</td><td width=42>S</td></tr>
			
		<?
		 $day_count = 1;
		
		 echo "<tr>";
		
		 while ( $blank > 0 )
		 {
			 echo "<td></td>";
			 $blank = $blank-1;
			 $day_count++;
		 }
		
		 $day_num = 1;
		
		 while ( $day_num <= $days_in_month )
		 {
			 echo "<td> <a href='general-courses/?day=$day_num $title $year'>$day_num</a></td>";
			 $day_num++;
			 $day_count++;
		
			 if ($day_count > 7)
			 {
			 echo "</tr><tr>";
			 $day_count = 1;
			 }
		 }
		
		 while ( $day_count >1 && $day_count <=7 )
		 {
		 echo "<td> </td>";
		 $day_count++;
		 }
		 ?>

		</table>		
		</div> 
</div>
