<?php
session_start();
session_destroy();
header('Location: 0.php');
exit();