<?php
@session_start();
@include("MultiLanguage.class.php");
$Main = new MultiLanguage();
?>
<html>
<meta charset="UTF-8">
<title>Example Script : Add New Language Phrases</title>
<body>
		<form method="post">
			<table width="70%" >
				<tr>
					<th>English</th>
					<th>Spanish</th>
					<th>French</th>
				</tr>
					<?php 
						foreach ($Main->language_array as $key => $value) { 
							if($key=="") continue;
							?>
								<tr>
									<td><input type="text" name="english[]" value="<?php echo $value[0];?>" placeholder="English Text Here" size="50"></td>
									<td><input type="text" name="spanish[]" value="<?php echo $value[1];?>" placeholder="Spanish Text Here" size="50"></td>
									<td><input type="text" name="french[]" value="<?php echo $value[2];?>" placeholder="French Text Here" size="50"></td>
								</tr>
							<?php
						}	

					?>
				<tr>
					<th colspan="3" align="center">
						Add New Phrases : 
					</th>
				</tr>
				<tr>
					<td><input type="text" name="english[]" value="" placeholder="English Text Here" size="50"></td>
					<td><input type="text" name="spanish[]" value="" placeholder="Spanish Text Here" size="50"></td>
					<td><input type="text" name="french[]" value="" placeholder="French Text Here" size="50"></td>
				</tr>
				<tr>
					<td><input type="text" name="english[]" value="" placeholder="English Text Here" size="50"></td>
					<td><input type="text" name="spanish[]" value="" placeholder="Spanish Text Here" size="50"></td>
					<td><input type="text" name="french[]" value="" placeholder="French Text Here" size="50"></td>
				</tr>
				<tr>
					<td><input type="text" name="english[]" value="" placeholder="English Text Here" size="50"></td>
					<td><input type="text" name="spanish[]" value="" placeholder="Spanish Text Here" size="50"></td>
					<td><input type="text" name="french[]" value="" placeholder="French Text Here" size="50"></td>
				</tr>
				<tr>
					<td><input type="text" name="english[]" value="" placeholder="English Text Here" size="50"></td>
					<td><input type="text" name="spanish[]" value="" placeholder="Spanish Text Here" size="50"></td>
					<td><input type="text" name="french[]" value="" placeholder="French Text Here" size="50"></td>
				</tr>
				<tr>
					<td><input type="text" name="english[]" value="" placeholder="English Text Here" size="50"></td>
					<td><input type="text" name="spanish[]" value="" placeholder="Spanish Text Here" size="50"></td>
					<td><input type="text" name="french[]" value="" placeholder="French Text Here" size="50"></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" name="update_language" value="Save">
					</td>
				</tr>
			</table>

		</form>
</body>
</html>

