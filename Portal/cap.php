<html>
<body>
<?
 $log_file = "logs/log.txt"; //put here your access log list

     $time_user = date("F jS Y, h:iA");
     if ($REMOTE_ADDR == "") $remoteaddr_user = "Remote address Unknown";
     else $remoteaddr_user = $REMOTE_ADDR;
     if ($REMOTE_HOST == "") $remotehost_user = "Remote Host Unknown";
     else $remotehost_user = $REMOTE_HOST;
     if ($HTTP_USER_AGENT == "") $useragent = "User Agent Unknown";
     else $useragent = $HTTP_USER_AGENT;
     if ($HTTP_REFERER == "") $userreferer = "Direct access";
     else $userreferer = "<a href=\"$HTTP_REFERER\">Refered Link</a>";
     $fp = fopen("$log_file",  "a");
     fputs($fp, "<hr noshade color='#000000'><b>Time:</b> $time_user<br><b>Remote Address:</b> $remoteaddr_user<br><b>Remote Host:</b> $remotehost_user<br><b>Agent:</b> $useragent<br><b>Referer:</b> $userreferer\n");
     fclose($fp);
?>

</body>
</html>



