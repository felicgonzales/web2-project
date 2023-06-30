<?php
require_once "../lib/config.php";

session_destroy();
header("location: ../index.php");