<?php $this->load->helper('url');?>

<html>
<head>
<title>Success!</title>
</head>
<body>

<h3>Buch erfolgreich in die Datenbank eingetragen</h3>

<p><?php echo anchor('book/create', 'Weitere Bücher eintragen'); ?></p>
<p><?php echo anchor('', 'Startseite'); ?></p>

</body>
</html>