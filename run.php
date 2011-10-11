<?php

$last = '';
$where = escapeshellarg($argv[1]);
$script = escapeshellarg(escapeshellarg(
"tell the application \"iTunes\" to get (the name of current track) & \" ----- \" & (the artist of current track) & \" ----- \" & (the album of current track) as string"
));

while (true) {

	$song = trim(`ssh $where osascript -e $script`);
	if ($song != $last) {
		echo strftime('[%H:%M:%S] ') . $song . "\n";
		$data = explode(' ----- ', $song);
		system('notify-send ' . escapeshellarg($data[0]) . ' ' . escapeshellarg("\n" . $data[1] . "\n\n" . $data[2]));
		$last = $song;
	}

	sleep(10);

}

