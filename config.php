<?php

$ip = "garcfm.hopto.org"; //IP Adrress or domain that points at the server. Note that this must be an external IP. localhost/127.0.0.1/etc won't work.
$port = "8087"; //Port that the web panel is running on. (default: 8087)
$enableSSL = false; //this should match the settting in your sinusbot config or some stuff might not load properly. (default: false)

$user = "webapiplayer"; //username to login to the web panel
$passwd = "chapichapo1322"; //corresponding password
$title = "Garc FM"; //title to display
$teamspeakJoinLink="https://bit.ly/joingarc"; //generate link in teamspeak by doing the following: Click tools on the menu bar, select invite buddy, select $
$instanceIDS = array("b07817ef-3f8c-4b64-91ef-888b95b47416");
$instanceNames = array("Accueil");
$defaultInstance = 0;


$useCachedThumbnail = true; //if a thumbnail cannot be found online based on the metadata, should it use the cached copy? Note that the resolution may vary.$$findThumbnailFromMetaData = true; //should a thumbnail image be extracted from metadata? Currently only works with youtube. (default: true)
$searchForThumbnail = false; //if no thumbnail can be found based on metadata, should youtube be searched? (CURRENTLY NOT IMPLEMENTED)
//Note: The above three methods are exceuted in that order; ie. assuming all are enabled, first the cached thumbnail will be used, if one doesn't exist the $$defaultThumbnail = "resources/unknownimg.png"; //default image of none of the above methods return one.
$enableReloadBtn = true; //Should a reload button appear on the player between the playtoggle and volume control?



#------Do NOT modify the following (without good reason):------#
$sinusbotURL = ($enableSSL ? "https://" : "http://") . $ip .":".$port;

?>
