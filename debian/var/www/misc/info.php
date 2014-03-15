<?php
FB::setEnabled(TRUE);
ob_start();
FB::log('RUNNING PHP Info');
phpinfo();
FB::info('COMPLETED PHP Info');
