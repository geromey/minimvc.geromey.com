<!doctype html>
<html>
<head>
<base href="<?php echo htmlspecialchars($this->_baseUrl) ?>" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div id="container">
  <div id="header">minimvc</div>
  <div id="content"><?php echo $this->__content__ ?></div>
  <div id="footer">
      provided by <a href="http://geromey.com">Gerome Romey</a>
  </div>
</div>
</body>
</html>