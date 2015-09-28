<?php
@session_start();
class MultiLanguage
{
	public function __construct()
	{
		//SET DEFAULT LANUGAGE
		if(!isset($_SESSION['language']) || $_SESSION['language']=="")
		{
			$_SESSION['language']="english";
		}
		$language_array = array("english","spanish","french");
		if(isset($_GET['language']) && $_GET['language']!="" && in_array($_GET['language'], $language_array))
		{
			$_SESSION['language']=$_GET['language'];	
		}

		//ADD NEW PHRASES TO LANGUAGE FILE
		if(isset($_POST['update_language']))
		{
			$this->WriteLanguageFile();			
		}
		$this->ReadLanguageFile();
		
	}

	private function WriteLanguageFile()
	{
		$file = 'language.txt';
		
		$current="";
		for ($i=0; $i <count($_POST['english']) ; $i++) { 
			if($_POST['english'][$i]!="" && $_POST['spanish'][$i]!="" && $_POST['french'][$i]!="") {
				$current.=$_POST['english'][$i]."#@#".$_POST['spanish'][$i]."#@#".$_POST['french'][$i]."\n";
			}
		}
		file_put_contents($file, $current);
	}

	private function ReadLanguageFile()
	{
		$this->language_array = array();
		$file = 'language.txt';
		$filecontent = file_get_contents($file);

		$array = explode("\n",$filecontent);

		foreach($array as $key=>$value)
		{
			$string_array = explode("#@#",$value);
			$this->language_array[$string_array[0]] = $string_array;
		}
	}	

	public function LanguageString($string,$language="")
	{
		if($language=="") {$language=$_SESSION['language'];}
		
		if($language=="english")
		{
			echo $this->language_array[$string][0];	
		}
		else if($language=="spanish")
		{
			echo $this->language_array[$string][1];	
		}
		else if($language=="french")
		{
			echo $this->language_array[$string][2];	
		}
	}
}

?>