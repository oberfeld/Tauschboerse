<?php 
include APPPATH . 'views/templates/header.php';
 
$this->load->helper('url');

echo '
<h2>Funktion auswählen</h2>
<p>'  . anchor('book/create','Bücher eintragen') . ' </p>
<p>'  . anchor('book/booklist','Alle Bücher anzeigen') . ' </p>
<p> ' . anchor('book/booklist','Alle Bücher anzeigen', 'class="btn btn-default" role="button"') . ' </p>

<p><b><em>ToDo:</em></b> Auswahl weiterer Funktionen</p>';

		
include APPPATH . 'views/templates/footer.php';?>