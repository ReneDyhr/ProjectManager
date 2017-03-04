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


    public static function FahrenheitToCelsius($fahrenheit){
        $celsius = ($fahrenheit - 32) / 1.8;
        return $celsius;
    }

    public static function CelsiusToFahrenheit($celsius){
        $fahrenheit = ($celsius * 9/5) + 32;
        return $fahrenheit;
    }

    public static function secondsBetweenDates($date1, $date2){

        $date1  = strtotime($date1);
        $date2 = strtotime($date2);
        return $date2 - $date1;
    }

    public static function secondsToTime($seconds) {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");
        $days = $dtF->diff($dtT)->format('%a');
        $hours = $dtF->diff($dtT)->format('%h');
        $minutes = $dtF->diff($dtT)->format('%i');
        $time = "";
        if($days!=0){
            if($days==1){
                $time .= $days." day";
            }else{
                $time .= $days." days";
            }
            if($hours!=0){
                $time .= ", ";
            }
        }
        if($hours!=0){
            $time .= $hours." hours";
            if($minutes!=0){
                $time .= ", ";
            }
        }
        if($minutes!=0){
            $time .= $minutes." minutes";
        }

        return $time;
    }


    public static function pagination($targetpage, $page, $limit, $data){
        $add = "";
        $actual_link = "";
        $total_pages = count($data);
        $stages = 1;
        if ($page) {
            $start = ($page - 1) * $limit;
        } else {
            $start = 0;
        }
        // Initial page num setup
        if ($page == 0) {
            $page = 1;
        }
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($total_pages / $limit);
        $LastPagem1 = $lastpage - 1;
        echo "<ul class='pagination'>";
        $paginate = '';
        // Previous
        if ($page > 1) {
            echo "<li><a href='".$targetpage."1" . $add . "'><<</a></li>";
            echo "<li><a href='".$targetpage."".$prev."" . $add . "'><</a></li>";
        } else {
            echo "<li class='disabled'><a href='".$actual_link."'><<</a></li>";
            echo "<li class='disabled'><a href='".$actual_link."'><</a></li>";
        }
        // Pages
        if ($lastpage < 7 + ($stages * 2)) {    // Not enough pages to breaking it up
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $page) {
                    echo "<li class='active'><a href='".$actual_link."'>$counter</a></li>";
                } else {
                    echo "<li><a href='".$targetpage."".$counter."" . $add . "'>$counter</a></li>";
                }
            }
        } elseif ($lastpage > 5 + ($stages * 2)) {    // Enough pages to hide a few?
            // Beginning only hide later pages
            if ($page < 1 + ($stages * 2)) {
                for ($counter = 1; $counter < 4 + ($stages * 2); $counter++) {
                    if ($counter == $page) {
                        echo "<li class='active'><a href='".$actual_link."'>$counter</a></li>";
                    } else {
                        echo "<li><a href='".$targetpage."".$counter."" . $add . "'>$counter</a></li>";
                    }
                }
            }
            // Middle hide some front and some back
            elseif ($lastpage - ($stages * 2) > $page && $page > ($stages * 2)) {
                for ($counter = $page - $stages; $counter <= $page + ($stages * 2)+1; $counter++) {
                    if ($counter == $page) {
                        echo "<li class='active'><a href='".$actual_link."'>$counter</a></li>";
                    } else {
                        echo "<li><a href='".$targetpage."".$counter."" . $add . "'>$counter</a></li>";
                    }
                }
            }
            // End only hide early pages
            else {
                for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page) {
                        echo "<li class='active'><a href='".$actual_link."'>$counter</a></li>";
                    } else {
                        echo "<li><a href='".$targetpage."".$counter."" . $add . "'>$counter</a></li>";
                    }
                }
            }
        }
        // Next
        if ($page < $counter - 1) {
            echo "<li><a href='".$targetpage."".$next."" . $add . "'>></a></li>";
            echo "<li><a href='".$targetpage."".$lastpage."" . $add . "'>>></a></li>";
        } else {
            echo "<li class='disabled'><a href='".$actual_link."'>></a></li>";
            echo "<li class='disabled'><a href='".$actual_link."'>>></a></li>";
        }
        echo "</ul>";
    }

}
