<?php 
include APPPATH . 'views/templates/header.php';

$this->load->helper('url');

echo '
<table border="1" width="100%">
  <!--  <colgroup>
    <col width="3*">
    <col width="3*">
  </colgroup>-->
  <tr>
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
	<td>' . $book_item->author . '</td>
	<td>' . $book_item->title . '</td>
	<td>ToDo: Link</td>
	<td>ToDo: Link</td>
	<td>ToDo: Link</td>
  </tr>';
}


echo 
'</table>

<p>' . anchor('', 'Startseite') . '</p>';

include APPPATH . 'views/templates/footer.php';