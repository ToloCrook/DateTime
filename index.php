<?php
$presentTime = new DateTime;
$destinationTime = new DateTime;
$destinationTime->setDate(2026, 03, 23)->setTime(4, 32);
$dateDiff = $presentTime->diff($destinationTime);


echo $presentTime->format('M j Y a g:m')
. '<br>';
echo $destinationTime->format('M j Y a g:m')
. '<br>';
echo 'Time difference :' . "<br>";
echo $dateDiff->format('%y years, %m months, %d days, %h hours and %i minutes');

?>