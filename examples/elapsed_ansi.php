<?php
require_once 'Console/ProgressBar.php';

print "Showing elapsed time, and using ANSI codes:\n";
$bar = new Console_ProgressBar('- %fraction% [%bar%] %percent% Elapsed Time: %elapsed%', '=>', '-', 70, 345, array('ansi_terminal' => true, 'ansi_clear' => true));
echo '** ';
for ($i = 0; $i <= 345; $i++) {
    $bar->update($i);
    usleep(30000);
}
print "\n";
