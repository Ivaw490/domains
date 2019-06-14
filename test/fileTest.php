<?php
//echo file_get_contents("file1.txt");
file_put_contents("file1.txt", file_get_contents("file1.txt") . " Pupochek");

