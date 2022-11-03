<?php

require_once 'config.php';

class core
{
    protected $timestamp;

    public function FileTypeVerification($file){
        $filetype_list = array();
        $type = explode(",", FILELIST);
        foreach ($type as $filetype) {
            array_push($filetype_list, $filetype);
        }
        $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        if(in_array($ext, $filetype_list)){
          return true;
        }else{
          return false;
        }
    }

    public function FileSizeVerification($file){
        if(size_verification == true){
            if($file["size"] < max_size && $file["size"] > min_size){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }      
    }


    public function FileNameConvertor($file){
        $TransformFileName = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIKLMNOPQRSTUVWXYZ123456789'), 0, 15);
        $filename = $TransformFileName.'-'.basename($_FILES["fileToUpload"]["name"]);
        return $filename;        
    }

    public function UploadFile($file, $target){
        $newtarget = file_destination.'/'.$target;
        if(move_uploaded_file($file["tmp_name"], $newtarget)){
            return true;
        }else{
            return false;
        }
    }
}
