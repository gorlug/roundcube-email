<?php

$config = array();

// Generals
$config['db_dsnw'] = 'sqlite:////data/roundcube.db';
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';
$config['identities_level'] = 3;
$config['reply_all_mode'] = 1;

// List of active plugins (in plugins/ directory)
$config['plugins'] = array(
    'archive',
    'zipdownload',
    'managesieve',
    'markasjunk'
);

// Mail servers
$config['default_host'] = 'tls://imap';
$config['default_port'] = 143;
$config['smtp_server'] = 'tls://smtp';
$config['smtp_port'] = 587;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

// We access the IMAP and SMTP servers locally with internal names, SSL
// will obviously fail but this sounds better than allowing insecure login
// from the outter world
$ssl_no_check = array(
 'ssl' => array(
     'verify_peer' => false,
     'verify_peer_name' => false,
  ),
);
$config['imap_conn_options'] = $ssl_no_check;
$config['smtp_conn_options'] = $ssl_no_check;

// skin name: folder from skins/
$config['skin'] = 'larry';
