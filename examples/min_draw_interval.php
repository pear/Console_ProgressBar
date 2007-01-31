<?php
require_once 'Console/ProgressBar.php';

print "Demonstrating speedup by using a minimum draw interval:\n";
print "Without minimum interval:\n";
$bar = new Console_ProgressBar('- %fraction% [%bar%] %percent% ', 
	'=>', '-', 76, 10000, 
	array('min_draw_interval' => 0));
for ($i = 0; $i <= 10000; $i++) {
	$bar->update($i);
}
print "\nWith minimum interval, same loop:\n";
$bar = new Console_ProgressBar('- %fraction% [%bar%] %percent% ', 
	'=>', '-', 76, 10000, 
	array('min_draw_interval' => 0.04));
for ($i = 0; $i <= 10000; $i++) {
	$bar->update($i);
}
print "\n";
