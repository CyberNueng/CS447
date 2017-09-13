<?php

require 'PdoDB.php';

$pdodb		 =	new PdoDB();

$db = $pdodb->getDatabase();

$sql_cm_std = 'SELECT * FROM member WHERE id=1';

$eiei = $db->query($sql_cm_std);

?>

<div>
	<?php foreach ($eiei as $row) { ?>
	<img src="<?php echo $row['picture']; ?>" width="200" height="200" border="0" />
	<br>
	<br>
	<?php
	print $row['firstname']; 
	print ' '; 
	print $row['lastname'];
	print ' ';
	print '(';
	print $row['nickname'];
	print ')';
	?>
	<?php } ?>
</div>