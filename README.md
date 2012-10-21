_Users Online PHP Mod for Minecraft_
======================

This script is to be used to display the number of currently playing players for your __bukkit minecraft server.__ [Working Demo](http://wonderproject.net/count.php) _(preview of master and v2)._

_Requirements_
======================

    Webserver (Apache, lighttpd, nginx-fpm)
    PHP 5.3+
    Minecraft 1.2.5+ running Bukkit
    Vitals Bukkit plugin: http://goo.gl/Id0Dm

Once the Vitals plugin is installed and running, you need to enable the "Users Online Flatfile" module.


    /vtoggle onlineplayersflatfile

followed by

    /vreload

The last thing you have to do is to soft link the __usersonline.txt__ in your minecraft directory to a _ permissible_ directory.

__Example__


My Minecraft Root Folder:  /root/mc/plugins/Vitals/onlineplayers.txt

For security reasons my user account does not have permission to the /root folder so I made a softlink

    sudo ln -s /www/uonline.txt /root/mc/plugins/Vitals/onlineplayers.txt

Assuming you have the Minecraft permissions, and you've setup $file within the php script you should be all set.

_Setup_
======================

Most of the work is done for you by the Vitals mod, we just have to take the information and use it. The PHP file includes two functions (only one is of any consiquence at the moment) numberOnline(). You can use the script as-is, or include it (http://goo.gl/1T6lz) into your homepage or forums. __Stylized JSON user list coming soon!__

~Xanza
