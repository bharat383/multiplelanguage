# multiplelanguage
Multiple lanaguage without database. Very Light and short code to add multiple language support to the PHP web application.


Project : Multiple Language Script without Database
Developed By : Bharat Parmar
Version : 1.0
====================

File Structure :
==================
1) index.php  : Example Script file to display Language String with Default and other languages
2) addphrase.php : Add/Edit all languages string to language file.
3) language.txt : Text file which includes all language strings
4) MultiLanguage.class.php : Class file which includes all the method to Read and Write Language file and Displaying the Language String as per the requirement.

Requirements : 
==================
1) PHP Version : 5.0 and above
2) language.txt file read & write permission.


Script Details :
==================

1) $_SESSION['language'] : This session will store the default language for the user. By Default English. If you want to change the default language, You can change it from the MultiLanguage.class.php file's contrust() method.

2)  LanguageString() :
Parameter : 
1 => Language String which you want to display. It must be in English Language Only.
2 => Language name in which you want to display the string like english/spanish/french. This parameter is optional. By Default it will display the default language string. 

Use : 
For Default Language :
<?php $Main->LanguageString("Hello");?> => Hello
<?php $Main->LanguageString("Bye");?> => Bye

For Other Language : 
<?php $Main->LanguageString("Hello","spanish");?>
<?php $Main->LanguageString("Hello","french");?>

<?php $Main->LanguageString("Bye","spanish");?>
<?php $Main->LanguageString("Bye","french");?>

Please check the index.php file for the same. Example script for the same.


3) WriteLanguageFile() : 
If you want to update the language string or add new string, you can add/edit from the addphrase.php file. After submitting the form, all the string will be added with the above method. It will re-write the language.txt file. Please note that the language.txt file must have the 0755 permission to read and write. 
