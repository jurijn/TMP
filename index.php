<?php

// index.php under construction 
// loada potrebne class-e, config, itd...
// routing -> loada controler in klice metodo v tem kontrolerju

$server_vars = $_SERVER[];

// echoes all server variables

echo "<br/>Server variables are: <br/>";

foreach($server_vars as $key=>$value){

	echo "<br/>key:$key	-> value:$value";

}

// potrebno implementirat dodatne class-e
// -> naredit preprost svoj MVC, ki ima 
// router, controler, view, loader ..ect

