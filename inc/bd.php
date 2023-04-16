<?php
error_reporting(0);
$link = mysqli_connect("localhost", "f256106q_m", "huy123456A", "f256106q_m")
    or die("Ошибка " . mysqli_error($link));
    mysqli_set_charset($link, "utf8");
?>