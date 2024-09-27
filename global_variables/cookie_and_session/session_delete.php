<?php
//directly delete nhi hote
session_start();
session_unset();
session_destroy();

echo "session is destroy .";


?>