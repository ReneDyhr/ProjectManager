<?php
class Basics {

    public static function shortStringByWords($string, $wordsreturned){
        $retval = $string;
        $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
        $string = str_replace("\n", " ", $string);
        $array = explode(" ", $string);
        if (count($array)<=$wordsreturned){
            $retval = $string;
        }else{
            array_splice($array, $wordsreturned);
            $retval = implode(" ", $array)."...";
        }
        return $retval;
    }

    public static function slugify($string){
        $string = preg_replace('~[^\pL\d]+~u', '-', $string);
        $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
        $string = preg_replace('~[^-\w]+~', '', $string);
        $string = trim($string, '-');
        $string = preg_replace('~-+~', '-', $string);
        $string = strtolower($string);
        if (empty($string)) {
            return 'n-a';
        }
        return $string;
    }


    public static function validateInt($int){
        if(filter_var($int, FILTER_VALIDATE_INT)){
            return true;
        }else{
            return false;
        }
    }

    public static function validateFloat($float){
        $regex = '/^\s*[+\-]?(?:\d+(?:\.\d*)?|\.\d+)\s*$/';
        return preg_match($regex, $float);
    }


    public static function validateEmail($string){
        if(filter_var($string, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }


    public static function hashPassword($string){
        $string = password_hash($string, PASSWORD_DEFAULT);
        return $string;
    }

    public static function verifyPassword($string, $hash){
        return password_verify($string, $hash);
    }

}
