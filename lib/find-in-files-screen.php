<?php
include("headers.php");
include("settings.php");
$t = $text['find-in-files'];
?><!DOCTYPE html>

<html>
<head>
<title>ICEcoder <?php echo $ICEcoder["versionNo"];?> find in files</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" type="text/css" href="find-in-files-screen.css?microtime=<?php echo microtime(true);?>">

<style type="text/css">
</style>

<link rel="stylesheet" href="editor.css?microtime=<?php echo microtime(true);?>">
</head>

<body class="find-in-files">

<div class="infoPane">
	<h1 style="margin: 10px 0"><?php echo $text['index']['Find in Files'];?></h1>
</div>

<form name="settings" action="find-in-files.php" method="POST">
    <input type="hidden" name="csrf" value="<?php echo $_SESSION["csrf"]; ?>">
    <label><?php echo $t['Enter path to search in']; ?></label>
    <input type="text" name="path" value="<?php echo isset($_GET['path'])?$_GET['path']:''?>"/>
    <br/>
    <label><?php echo $t['Enter semicolon-separated masks of files to look at (e.g. *.php;*.html;*.js)']; ?></label>
    <input type="text" name="filetypes" value=""/>
    <br/>
    <label><?php echo $t['Type of text']; ?></label>
    <select name="typeoftext"><option value="0"><?php echo $t['Fixed text']; ?></option><option value="1"><?php echo $t['Regular expression']; ?></option></select>
    <br/>
    <label><?php echo $t['Case sensitive']; ?></label>
    <select name="casesensitive"><option value="0"><?php echo $t['No']; ?></option><option value="1"><?php echo $t['Yes']; ?></option></select>
    <br/>
    <input type="submit" name="search" value="<?php echo $t['Search']; ?>"/>
</form>

</body>

</html>
