<?php

$autor = addslashes( $_POST["autor"]); // ' or 1=1 ... '; DROP TABLE 

$sql = "SELECT * FROM posts WHERE autor = '$autor' ";