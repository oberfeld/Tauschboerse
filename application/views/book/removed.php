<?php

include APPPATH . 'views/templates/header.php';

$this->load->helper('url');

echo '
<h2> Buch gelöscht </h2>	

		
<p> Das Buch <b> ' . $book->title . ' </b> von <b> ' . $book->author . ' </b> wurde erfolgreich gelöscht.	</p>	
			
			
<p> ' . anchor('', 'Startseite') . ' </p> 
' ;


include APPPATH . 'views/templates/header.php';