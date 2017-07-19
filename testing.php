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




timestamp -3600 means:

In your local time zone: Wednesday 31st December 1969 06:00:00 PM
UTC: Wednesday 31st December 1969 11:00:00 PM
» customize time zone and format
We have some code-examples for you:

PHP	date('d.m.Y H:i:s', -3600);
MySQL	select from_unixtime(-3600);
Java	new SimpleDateFormat("MM/dd/yyyy HH:mm:ss").format(new Date(-3600 * 1000L))
C++	time_t epch = -3600;
printf("%i -> %s", epch, asctime(gmtime(&epch))); (time.h)
C#	String.Format("{0:d/M/yyyy HH:mm:ss}", new System.DateTime(1970, 1, 1, 0, 0, 0, 0)
.AddSeconds(1293840000));
JavaScript	new Date(-3600*1000).toString()
