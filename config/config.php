<?php

/*

* ==============================================================================================================
* 
* 
* The minimum requirements to get phpList working are in this file. 
* If you are interested in tweaking more options, check out the config_extended.php file
* or visit http://resources.phplist.com/system/config
* 
* ** NOTE: To use options from config_extended.php, you need to copy them to this file **
* 
==============================================================================================================

*/

$database_host ='localhost';

# what is the name of the database we are using
$database_name = "*********";

# what user has access to this database
$database_user = "********";


# and what is the password to login to control the database
$database_password = '*********';

# if you have an SMTP server, set it here. Otherwise it will use the normal php mail() function
## if your SMTP server is called "smtp.mydomain.com" you enter this below like this:
##

$pageroot = '/newsletter';
$adminpages = '/newsletter/admin';

define("PLUGIN_ROOTDIR","plugins");
define("FCKIMAGES_DIR","/newsletter/uploadimages"); 
define('UPLOADIMAGES_DIR',"/newsletter/uploadimages");
define('UPLOADIMAGES_DIR',"/content");


# if test is true (not 0) it will not actually send ANY messages, but display what it would have sent
# this is here, to make sure you edited the config file and mails are not sent "accidentally"
# on unmanaged systems

#MODO producao
define('TEST', 0);

#Modificar tem no class.phpmailer.php
define("PHPMAILER", 1); 
define("PHPMAILERHOST",'mail.*******.org.br');
$phpmailer_smtpuser = '********';
$phpmailer_smtppassword = '********';
$phpmailer_smtpport = '465';
$phpmailer_smtpsecure = 'ssl'; 


#Essa configuração permite que o phpList seja regulado para enviar 450 e-mails por hora, exatamente #como os nossos Termos #de Serviço sugerem. Os 50 e-mails por domínio restantes ficarão disponíveis #para a operação normal de seu sistema de e-#mail.
define('MAILQUEUE_THROTTLE',8);
#define ("MANUALLY_PROCESS_QUEUE",1);
#define("MAILQUEUE_BATCH_SIZE",1000);
#define("MAILQUEUE_BATCH_PERIOD",3000);


# use Register to "register" to PHPlist.com. Once you set TEST to 0, the system will then
# request the "Powered By" image from www.phplist.com, instead of locally. This will give me
# a little bit of an indication of how much it is used, which will encourage me to continue
# developing PHPlist. If you do not like this, set Register to 0.
#define ("REGISTER",0);

# CREDITS
# We request you retain some form of credits on the public elements of
# PHPlist. These are the subscribe pages and the emails.
# This not only gives respect to the large amount of time given freely
# by the developers but also helps build interest, traffic and use of
# PHPlist, which is beneficial to future developments.
# By default the webpages and the HTML emails will include an image and
# the text emails will include a powered by line

# If you want to remove the image from the HTML emails, set this constant
# to be 1, the HTML emails will then only add a line of text as signature
#define("EMAILTEXTCREDITS",1);

# if you want to also remove the image from your public webpages
# set the next one to 1, and the pages will only include a line of text
#define("PAGETEXTCREDITS",1);

/*

==============================================================================================================
* 
* Settings for handling bounces
* 
* This section is OPTIONAL, and not necessary to send out mailings, but it is highly recommended to correctly 
* set up bounce processing. Without processing of bounces your system will end up sending large amounts of
* unnecessary messages, which overloads your own server, the receiving servers and internet traffic as a whole
* 
==============================================================================================================

*/

# Message envelope.
#
# This is the address that most bounces will be delivered to
# Your should make this an address that no PERSON reads
# but a mailbox that phpList can empty every so often, to process the bounces

define("PHPMAILERHOST",'mail.*******.org.br'
	);$phpmailer_smtpuser = '*************';$phpmailer_smtppassword = '**********';$phpmailer_smtpport = '465';

# $message_envelope = 'listbounces@yourdomain';

# Handling bounces. Check README.bounces for more info
# This can be 'pop' or 'mbox'
$bounce_protocol = 'pop';

# set this to 0, if you set up a cron to download bounces regularly by using the
# commandline option. If this is 0, users cannot run the page from the web
# frontend. Read README.commandline to find out how to set it up on the
# commandline
define('MANUALLY_PROCESS_BOUNCES', 1);

# when the protocol is pop, specify these three
$bounce_mailbox_host = 'localhost';
$bounce_mailbox_user = 'popuser';
$bounce_mailbox_password = 'password';

# the "port" is the remote port of the connection to retrieve the emails
# the default should be fine but if it doesn't work, you can try the second
# one. To do that, add a # before the first line and take off the one before the
# second line
$bounce_mailbox_port = '110/pop3/notls';
#$bounce_mailbox_port = "110/pop3";

# it's getting more common to have secure connections, in which case you probably want to use
#$bounce_mailbox_port = "995/pop3/ssl/novalidate-cert";

# when the protocol is mbox specify this one
# it needs to be a local file in mbox format, accessible to your webserver user
$bounce_mailbox = '/var/mail/listbounces';

# set this to 0 if you want to keep your messages in the mailbox. this is potentially
# a problem, because bounces will be counted multiple times, so only do this if you are
# testing things.
$bounce_mailbox_purge = 1;

# set this to 0 if you want to keep unprocessed messages in the mailbox. Unprocessed
# messages are messages that could not be matched with a user in the system
# messages are still downloaded into phpList, so it is safe to delete them from
# the mailbox and view them in phpList
$bounce_mailbox_purge_unprocessed = 1;

# how many bounces in a row need to have occurred for a user to be marked unconfirmed
$bounce_unsubscribe_threshold = 5;

# choose the encryption method for password
# check the extended config for more info
# in most cases, it is fine to leave this as it is
define('ENCRYPTION_ALGO', 'sha256');