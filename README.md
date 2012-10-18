Users Online PHP Mod
======================

This script is to be used to display the number of currently playing players for your bukkit minecraft server.

Requirements
======================

Webserver (Apache, lighttpd, nginx-fpm)
PHP 5.3+
Vitals bukkit plugin: http://goo.gl/Id0Dm

Once the Vitals plugin is installed and running, you need to enable the "Users Online Flatfile" module.

/vtoggle onlineplayersflatfile
/vreload

The last thing you have to do is to soft link the usersonline.txt in your minecraft directory to a permissable
directory.

Example:

My Minecraft Root Folder: /root/mc/plugins/Vitals/onlineplayers.txt

For security my user account does not have permission to the /root folder so I made a softlink

sudo ln -s /www/uonline.txt /root/mc/plugins/Vitals/onlineplayers.txt

Assuming you have the Minecraft permissions, and you've setup $file within the php script you should be all set.

Setup
======================

Most of the work is done for you by the Vitals mod, we just have to take the information and use it. The PHP
file includes two functions (only one is of any consiquence at the moment) numberOnline().

You can use the script as-is, or include it (http://goo.gl/1T6lz) into your homepage or forums. Stylized JSON
userlist coming soon!

~Xanza
