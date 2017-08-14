<?php

 // print file_get_contents($_GET["site"]);
/*if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
}*/

function noappl(){
 //exec('"C:\xampp\htdocs\eve\scripts\notepad.bat" 2> log\errors.txt');
    $handle = popen ('start /B C:\xampp\htdocs\eve\scripts\notepad.bat >nul 2>&1', 'r');
}
function notepad(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\notepadopen.bat >nul 2>&1', 'r');
}
function firefox(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\firefox.bat >nul 2>&1', 'r');
}
function chrome(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\chrome.bat >nul 2>&1', 'r');
}
function baja(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\baja.bat >nul 2>&1', 'r');
	//$answer = shell_exec("C:\Program Files (x86)\Activision Value\Baja 1000\Baja.exe");
//echo $answer;
}

function codeblocks(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\codeblocks.bat >nul 2>&1', 'r');
}

function notepadplus(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\notepadplus.bat >nul 2>&1', 'r');
}
function music(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\song.bat >nul 2>&1', 'r');

}
function videomusic(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\video.bat >nul 2>&1', 'r');
}
function diskc(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\c.bat >nul 2>&1', 'r');

}
function diskd(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\d.bat >nul 2>&1', 'r');

}
function diske(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\e.bat >nul 2>&1', 'r');

}
function diskf(){
$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\f.bat >nul 2>&1', 'r');

}
function downloads(){
	//$explorer = $_ENV["SYSTEMROOT"] . '\\explorer.exe';
//$folder_to_open = "C:\ ";
$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\downloads.bat >nul 2>&1', 'r');

}
function documents(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\documents.bat >nul 2>&1', 'r');
}
function shutdown(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\shutdown.bat >nul 2>&1', 'r');
}
function restart(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\restart.bat >nul 2>&1', 'r');
}
function sleep1(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\sleep.bat >nul 2>&1', 'r');
}
function lock(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\lock.bat >nul 2>&1', 'r');
}
function stop(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\stop.bat >nul 2>&1', 'r');
}
function localhost(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\localhost.bat >nul 2>&1', 'r');
}
function  stopplayer(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\stopplayer.bat >nul 2>&1', 'r');
}
function  volumeup(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\volumeup.bat >nul 2>&1', 'r');
}
function  volumedown(){
	$handle = popen ('start /B C:\xampp\htdocs\eve\scripts\volumedown.bat >nul 2>&1', 'r');
}
?>

<?php 
//function execInBackground($cmd) { 
 //   if (substr(php_uname(), 0, 7) == "Windows"){ 
  //      pclose(popen("start /B ". $cmd, "r"));  
 //   } 
 //   else { 
 //       exec($cmd . " > /dev/null &");   
 //   } 
//} 
?>