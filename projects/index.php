<html>
<head>
</head>
<body>
<h1>Projects</h1>
<ul>
<?php
$dir_open = opendir('.');
$bad_files = array(".", "..", "index.php", "demo");
while(false !== ($filename = readdir($dir_open))){
    if(!in_array($filename, $bad_files)) {
        echo "<li><a href='./$filename'>$filename</a></li>";
    }
}

closedir($dir_open);
?>
</ul>
</body>
</html>
