<?php
$cmd="ssh -i/var/www/.ssh/id_rsa root@192.168.6.90 sudo /home/detik/smb.sh  username password";
shell_exec($cmd);
