<?php

$msg = "Hello world!\nMy first email through php mail function";


$msg = wordwrap($msg, 70);


$rv = mail("rcbatfb@gmail.com", "PHP mail() check", $msg);
if ($rv) {
    echo ("mail sent");
} else {
    echo ("mail not sent");
}
