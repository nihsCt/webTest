<?php
date_default_timezone_set("Asia/Taipei");

$date = '2017-02-14 13:21:12';
echo $date;
$a = "  ".date(strtotime($date));
echo $a;

$d = DateTime::createFromFormat('Y-m-d H:i:s', $date);
echo "   ".$d->getTimestamp();

echo " ".time()*1000;

?>

<script>
    alert((new Date()).getTime());
</script>
<title>Test Date</title>