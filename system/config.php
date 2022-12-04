<?php
/** 
 * AnonUpload Configuration File
 * @author Léo Berteloot <leo.berteloot@gmail.com>
 * @copyright Copyright (c) 2021, Léo Berteloot
**/ 


define('app_name', 'AnonUpload'); // Application name
define('app_desc', 'Upload your files, anonymously and for free.'); // Application desc


define('FILELIST', "jpeg,jpg,gif,png,zip,xls,doc,mp3,mp4,mpeg,wav,avi,rar,7z,txt"); // List of supported file type, just add a coma and the file type name
define('size_verification', true); // True = Verification enable, False = Verification disable
define('max_size', '8000000000'); // Max file size in bytes (octets)
define('min_size', '0'); // Max file size in bytes (octets)
define('file_destination', 'files'); // The final directory of uploaded files without / at end
define('file_url_destination', 'https://leoberteloot.fr/anonupload'); // Enter here the start url of final link (in the same host). Without a slash at end !
