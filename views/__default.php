<!doctype html>
<html>
<head>
<base href="<?php echo htmlspecialchars($this->getBaseUrl()) ?>" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div id="menu">
    <ul>
      <?php foreach($this->menu as $url => $name): ?>
        <li><a href="<?php echo htmlspecialchars($url) ?>"><?php echo htmlspecialchars($name) ?></a></li>
      <?php endforeach ?>
</div>
<div id="container">
  <div id="header">minimvc</div>
  <div id="content"><?php echo $this->__content__ ?></div>
  <div id="footer">
      provided by <a href="http://geromey.com">Gerome Romey</a>
  </div>
</div>
</body>
</html>