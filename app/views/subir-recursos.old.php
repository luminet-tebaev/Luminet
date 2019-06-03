<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- <?php 
		$dir = "public/videos/";
		$a = scandir($dir);

		for($i = 0; $i < count($a); $i++)
		{
			if($a[$i] != '.' && $a[$i] != '..')
			{
				echo "File $i -> $a[$i]<br>";
				$b[$i] = $a[$i];
			}
		}
?> -->

<?php for($f = 2; $f < 2 + count($b); $f++) { $var = "public/videos/".$b[$f]; ?>

    <li> <a href="<?php echo $var; ?>"><?php echo $b[$f]; ?></a></li>

<?php } ?>
</body>
</html>