<?php

error_reporting( ~E_DEPRECATED & ~E_NOTICE );
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'eve');
$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysql_select_db(DBNAME); 
if ( !$conn ) {
  die("Connection failed : " . mysql_error());
}

if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
}
if(isset($_POST['act']) && !empty($_POST['act'])) {
  $act = $_POST['act'];
  $query= "SELECT * FROM data WHERE MATCH (command,speech) AGAINST ('$act') LIMIT 0,1;";
  $sel=mysql_query($query);
  $arr=mysql_fetch_array($sel);
  $r = $arr['act'];
  $s = $arr['speech'];
  $n = $arr['imgno'];
  $r =(string)$r;
  $s =(string)$s;
  $n =(string)$n;
//functions
include("mid.php");

    switch($r) {
		case 'search' : $search = 'searchok';break;
        case 'notepad' : notepad();break;
        case 'firefox' : firefox();break;
		case 'chrome' : chrome();break;
		case 'baja' : baja();break;
		case 'code blocks' : codeblocks();break;
		case 'npp' : notepadplus();break;
		case 'song' : music();break;
		case 'videomusic' : videomusic();break;
		case 'noappl' : noappl();break;
		case 'diskc' : diskc();break;
		case 'diskf' : diskf();break;
		case 'diskd' : diskd();break;
		case 'diske' : diske();break;
		case 'documents' : documents();break;
		case 'downloads' : downloads();break;
		case 'shutdown' : shutdown();break;
		case 'restart' : restart();break;
		case 'sleep' : sleep1();break;
		case 'lock' : lock();break;
		case 'local' : localhost();break;
		case 'abort' : abort();break;
		case 'stopplayer' : stopplayer();break;
		case 'volumeup' : volumeup();break;
		case 'volumedown' : volumedown();break;
		//default : noappl();
        // ...etc...
    }
	$search = (String)$search;
	//$data=array("sp"=>"$s", "searchok"=>"$search"); // This is your data array/result
	$data = $s.'%'.$search.'%'.$n;
echo $data;


}

/*sql commands
CREATE TABLE data(
id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
command TEXT,
act VARCHAR(200),
speech TEXT,
FULLTEXT (command,speech)
);

SELECT * FROM data
WHERE MATCH (command,speech) AGAINST ('open depend') LIMIT 0,1;*/

?>

