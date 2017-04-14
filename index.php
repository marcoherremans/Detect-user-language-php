<head>
<body>
<?php
$locale = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
if(is_array($locale) && count($locale) > 0) {
$BrowserLanguage = $locale[0];
$_SESSION['language'] = $BrowserLanguage;}
?>
</body>
</html>
