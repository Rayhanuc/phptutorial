<?php


echo 'two digit y = '. date('y');
echo "<br/>";
echo 'four digit Y = '. date('Y');
echo "<br/>";
echo 'day of the month d = '. date('d');
echo "<br/>";
echo 'day of in textual D = '. date('D');
echo "<br/>";
echo 'day of the month j = '. date('j');
echo "<br/>";
echo 'day of the month l = '. date('l');
echo "<br/>";
echo "year-month-day Y-M-d = ". date('Y-M-d');
echo "<br/>";
echo "year-month-day Y-F-j = ". date('Y-F-j');
echo "<br/>";
echo "month-day-year F-j-Y = ". date('F-j-Y g:h:s');
echo "<br/>";
echo date('l',mktime(0,0,0,10,02,1983));

?>