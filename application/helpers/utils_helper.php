<?php

function hasIncluded($var) {
    if ($var === "Y") {
        ?>
            <span class="text-success">Included &#10004;</span>
        <?php
    } else {
        ?>
            <span class="text-danger">Not &#10006;</span>
        <?php
    }
}

function formatBytes($bytes) {
    if($bytes >= 1000) {
        return ($bytes*0.001).' GB'; 
    }
    else {
        return $bytes.' MB';
    }
}

function rupiah($angka) {
    return "Rp" . number_format($angka,0,',','.');
}
