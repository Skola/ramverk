<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
<link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
<div id='wrap-header'>
<div id='header'>
<div id='login-menu'>
<?=login_menu()?>
</div>
<?=$header?>
</div>
</div>
<div id='wrap-main'>
<div id='main' role='main'>
<?=get_messages_from_session()?>
<?=@$main?>
<?=render_views() ?>
</div>
</div>
<div id='wrap-footer'>
<div id='footer'>
<?=$footer?>
<?=get_debug()?>
</div>
</div>
</body>
</html>
