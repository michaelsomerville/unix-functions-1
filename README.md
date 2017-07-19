// converts UNIX seconds into relative format

function relativeDate($date) {
	$secondsago = time() - $date;
	if ($secondsago <= 59) {$timestamp = "less than a minute ago";}
	else if ($secondsago <= 119) {$timestamp = floor(($secondsago / 60)) . " minute ago (" . strftime('%R', $date) . ")";}
	else if ($secondsago <= 3599) {$timestamp = round(($secondsago / 60)) . " minutes ago (" . strftime('%R', $date) . ")";}
	else if ($secondsago <= 7199) {$timestamp = round(($secondsago / 3600),1) . " hours ago (" . strftime('%a %R', $date) . ")";}
	else if ($secondsago <= 86400) {$timestamp = round(($secondsago / 3600)) . " hours ago (" . strftime('%a %R', $date) . ")";}
	else if ($secondsago <= 345600) {$timestamp = round(($secondsago / 86400)) . " days ago (" . strftime('%a %R', $date) . ")";}
	else { $timestamp = strftime('%d %m %Y %R', $date); }

	return $timestamp;
}
