<?php
if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie username ada Isinya " .
        $_COOKIE['username'] . "</h1>";
} else {
    echo "<h1>Cookie username Tidak ada</h1>";
}
