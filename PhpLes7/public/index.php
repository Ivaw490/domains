<?php
include __DIR__. "/../config/main.php";
include ENGINE_DIR . "authentication.php";
authentication("menu");
include TMP_DIR . "menu.php";
