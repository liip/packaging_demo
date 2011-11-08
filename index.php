<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title></title>
</head>
<body>
    <?php require_once 'config.php' ?>
    <h1>It works!</h1>
    <p><img src="/images/logo-liip.gif"/></p>
    <p>Hello, the current date is <?php echo date('Y/m/d') ?>.</p>
    <p>Your db config is:</p>
    <dl>
        <dt>Host</dt>
        <dd><?php echo $db_host ?></dd>
        <dt>Username</dt>
        <dd><?php echo $db_user ?></dd>
        <dt>Database name</dt>
        <dd><?php echo $db_name ?></dd>
    </dl>
</body>
</html>
