<?php
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo "GD library is enabled in PHP.";
} else {
    echo "GD library is not enabled in PHP.";
}
?>