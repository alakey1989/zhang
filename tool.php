<?php
/*常用函数工具
*/

//遍历某文件夹下所有文件夹及文件 directory_separator
function foreachs($dirname){
	$array = array();
	$basename = basename($dirname);
	$dir = opendir($dirname);
	while (($file = readdir($dir)) !== false) {
		if($file != '.' && $file != '..'){
			if(is_dir($dirname.DIRECTORY_SEPARATOR.$file)){
				$array[$basename][] = foreachs($dirname.DIRECTORY_SEPARATOR.$file);
			}else{
				$array[$basename][] = $file;
			}
		}
	}
	closedir($dir);
	return $array;
}


?>