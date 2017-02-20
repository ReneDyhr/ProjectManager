<?php
class Pagination{

    private static $_instance = null;

    public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new Pagination();
        }
        return self::$_instance;
    }

    public function make($targetpage, $page, $pagination, $limit, $data){
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
