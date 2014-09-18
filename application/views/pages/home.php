<?php 
include APPPATH . 'views/templates/header.php';
 
$this->load->helper('url');?>

<h2>Funktion auswählen</h2>
<p> <?php echo anchor('book/create','Bücher eintragen')?> </p>
<p> <?php echo anchor('book/booklist','Alle Bücher anzeigen')?> </p>

<p><b><em>ToDo:</em></b> Auswahl weiterer Funktionen</p>

<?php include APPPATH . 'views/templates/footer.php';?>