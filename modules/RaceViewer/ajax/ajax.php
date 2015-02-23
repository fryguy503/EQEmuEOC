<?php
/**
 * User: Akkadius
 * Date: 2/22/2015
 * Time: 9:37 PM
 */

    /* Ajax Race Model Search */
    if (isset($_GET['do_race_search'])) {
        require_once('includes/constants.php');
        if ($_GET['do_race_search'] != "") {
            foreach ($Master_Race_Data as $i => $val) {
                if (preg_match('/' . $_GET['do_race_search'] . '/i', $races[$i]) || preg_match('/' . $_GET['do_race_search'] . '/i', $i)) {
                    if (file_exists("cust_assets/races/Race (" . $i . ").png")) {
                        echo '  <span class="image-wrap">
                                        <img class="lazy" src="' . 'cust_assets/races/' . 'Race (' . $i . ').png"' . ' id="' . $i . '">
                                        <span class="image_label badge badge-danger">' . $races[$i] . ' (' . $i  . ')</span>
                                    </span>
                            ';
                    }
                }
            }
        }
        else {
            $do_regular_search = 1;
        }
    }

?>