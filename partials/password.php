<?php
session_start();

newPassword($data);
for ($i = 0; $i < count($_SESSION["password"]); $i++) {
    echo $_SESSION["password"][$i];
}
