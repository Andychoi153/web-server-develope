<?php
system('python2 /plot.py');
?>
<html>
<head>
<title>show image plot</title>
</head>
<body>
<center><br>
<img src='http://10.0.0.156/show.png'>
<form name='form' method="get" action="http://10.0.0.156/cgi-bin/erase.php">
<p>
<input type="submit" value="mustclick!!">
</p>
</body>
</html>
