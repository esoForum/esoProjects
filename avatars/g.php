<?php
// This file is part of esoForum for Projects.
// All non-modified code is property of Simon and Toby Zerner.

// GIF avatar loader: displays an unresized gif avatar with secure headers.

if (!$memberId = (int)@$_GET["id"]) exit;
$filename = "$memberId.gif";
if (!file_exists($filename)) exit;
header("Content-Type: image/gif");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=\"$filename\""); // Filename.
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
header("Content-Length: " . filesize($filename));
set_time_limit(0);
ob_clean();
flush();
readfile($filename);
exit;

?>
