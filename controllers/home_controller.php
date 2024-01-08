<?php

echo '<h3>- Home Controller -</h3>';

if (isset($_POST['login'])) {
    echo 'Is login';
}

if (isset($_POST['logout'])) {
    echo 'Is logout';
}
