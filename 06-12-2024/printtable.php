<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 
require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfunc.php';


 $EMP_ID = $_GET['EMP_ID'];

SearchBook($id,$connect);


?>


</body>
</html>