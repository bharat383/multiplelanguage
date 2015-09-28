<?php
@session_start();
@include("MultiLanguage.class.php");
$Main = new MultiLanguage();
?>
<html>
<meta charset="UTF-8">
<title>Example Script</title>
<body>
	<b>Change Language : </b> 
		<a href="?language=english">English</a> &nbsp;&nbsp;&nbsp;
		<a href="?language=spanish">Spanish</a> &nbsp;&nbsp;&nbsp;
		<a href="?language=french">French</a> &nbsp;&nbsp;&nbsp;
		<hr>
	<table border="1" width="50%">
		<caption>Default Language Demo</caption>
		<tr>
			<th><?php echo ucfirst($_SESSION['language']);?></th>
		</tr>
		<tr>
			<td><?php $Main->LanguageString("Hello");?></td>
		</tr>
		<tr>
			<td><?php $Main->LanguageString("Bye");?></td>
		</tr>
		<tr>
			<td><?php $Main->LanguageString("Thank You");?></td>
		</tr>
	</table>
	<table border="1" width="50%">
		<caption>Different Languages Demo</caption>
		<tr>
			<th>English</th>
			<th>Spanish</th>
			<th>French</th>
		</tr>
		<tr>
			<td><?php $Main->LanguageString("Hello","english");?></td>
			<td><?php $Main->LanguageString("Hello","spanish");?></td>
			<td><?php $Main->LanguageString("Hello","french");?></td>
		</tr>
		<tr>
			<td><?php $Main->LanguageString("Bye","english");?></td>
			<td><?php $Main->LanguageString("Bye","spanish");?></td>
			<td><?php $Main->LanguageString("Bye","french");?></td>
		</tr>
		<tr>
			<td><?php $Main->LanguageString("Thank You","english");?></td>
			<td><?php $Main->LanguageString("Thank You","spanish");?></td>
			<td><?php $Main->LanguageString("Thank You","french");?></td>
		</tr>
	</table>
</body>
</html>

