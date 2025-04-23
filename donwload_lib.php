<?php
    $url = $_POST['url'];
    $token = $_POST['token'];
    $file_name = $_POST['file_name'];
    //$dir_to_save = str_replace("\\","/",getenv("HOMEDRIVE").getenv("HOMEPATH")."\Downloads/");
    $dir_to_save = 'C:/AIMS_DOWNLOAD/';

    //echo $dir_to_save;
    if (!is_dir($dir_to_save)) {
        mkdir($dir_to_save);
    }
    $fp = fopen( $dir_to_save.$file_name, 'w');

    $ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);         //follow redirects

    curl_setopt($ch,CURLOPT_COOKIEJAR,'/tmp/cookies.txt');
    //curl_setopt($ch, CURLOPT_COOKIEFILE, '/tmp/cookies.txt');
	
	curl_setopt ($ch, CURLOPT_HTTPHEADER, array ( 'Authorization: Bearer '. $token) );
    curl_setopt ($ch, CURLOPT_FILE, $fp);
	$response = curl_exec($ch);
	curl_close($ch);
    fclose($fp);

    echo "File downloaded successfully. File is on donwload folder. " . $dir_to_save;


	// file_put_contents(
	//     "test_log.log",
	//     $response
	// );
    

    

    // if (file_put_contents($dir_to_save.$file_name, $response))
    // {
    //     echo "File downloaded successfully. File is on donwload folder. " . $dir_to_save;
    // }
    // else
    // {
    //     echo "File downloading failed.";
    // }

?>