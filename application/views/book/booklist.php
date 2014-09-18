<?php 
include APPPATH . 'views/templates/header.php';

$this->load->helper('url');

echo '

<table class="table table-condensed table-striped table-hover">	
  <tr>
	<th class="hidden">Id</th>	
    <th>Autor</th>
    <th>Titel</th>
    <th>Details</th>
    <th>Bearbeiten</th>
    <th>Löschen</th>
  </tr>';


foreach ($book->result() as $book_item) {
	echo'
  <tr>
	<td class="hidden">' . $book_item->id . '</td>		
	<td>' . $book_item->author . '</td>
	<td>' . $book_item->title . '</td>
	<td>' . anchor('book/details/' . $book_item->id, 'Details'). '</td>
	<td>' . anchor('book/edit/' . $book_item->id, 'Bearbeiten'). '</td>
	<td>' . anchor('book/remove/' . $book_item->id, 'Löschen'). '</td>
  </tr>';
}


echo 
'</table>

<p>' . anchor('', 'Startseite') . '</p>';

include APPPATH . 'views/templates/footer.php';