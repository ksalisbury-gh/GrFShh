<?php
if ($_GET['isFlash'])
{
    readfile ($_GET['isFlash']);
}
else
{
	readfile ("true");
}
?>