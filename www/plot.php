<?php
// 4.1.0 이전의 PHP에서는, $_FILES 대신에 $HTTP_POST_FILES를
// 사용해야 합니다.

$uploaddir = '/up/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Positive\n";
} else {
    print "negative\n";
}


$filename = explode(".txt", basename($_FILES['userfile']['name']));

$goodjob = 'mkdir /up/' . $filename[0];

print $goodjob;

system($goodjob);

echo 'problem:';
print_r($_FILES);

print "</pre>";



?>
<html>
<head>
</head>
<body>
<form name='form' method="get" action="http://10.0.0.156/cgi-bin/plot.php">
<p>
<input type="submit" value="Click">
</p>
</form>
</body>
</html>
