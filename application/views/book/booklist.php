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


/*	
/**
 * Use with book_model->get_book()
 *   
foreach ($book as $book_item) {
	echo'
  <tr>
  	<td class="hidden">' . $book_item['id'] . '</td>
	<td>' . $book_item['author'] . '</td>
	<td>' . $book_item['title'] . '</td>
	<td>ToDo: Link</td>
	<td>ToDo: Link</td>
	<td>ToDo: Link</td>
  </tr>';
	}
*/	

/**
 * Use with book_model->get_book_2()
 */
foreach ($book->result() as $book_item) {
	echo'
  <tr>
	<td class="hidden">' . $book_item->id . '</td>		
	<td>' . $book_item->author . '</td>
	<td>' . $book_item->title . '</td>
	<td>' . anchor('book/details/' . $book_item->id, 'Details'). '</td>
	<td>ToDo: Link B</td>
	<td>ToDo: Link L</td>
  </tr>';
}


echo 
'</table>

<p>' . anchor('', 'Startseite') . '</p>';

include APPPATH . 'views/templates/footer.php';