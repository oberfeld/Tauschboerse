<?php
include APPPATH . 'views/templates/header.php';

$this->load->helper('url');

if($book->YearOfPublication <= 0) 
{
	$book->YearOfPublication = null;
}


echo '

<h2>Buch Details</h2>

<table class="table table-striped table-hover table-bordered">
	<tr>
		<td>Autor</td>
		<td>' . $book->author . '</td>
	</tr>
	<tr>
		<td>Titel</td>
		<td>' . $book->title . '</td>
	</tr>
	<tr>
		<td>Verlag</td>
		<td>' . $book->publisher . '</td>
	</tr>
	<tr>
		<td>Erscheinungsjahr</td>
		<td>' . $book->YearOfPublication . '</td>
	</tr>
	<tr>
		<td>Auflage</td>
		<td>' . $book->edition . '</td>
	</tr>
	<tr>
		<td>ISBN Nummer</td>
		<td>' . $book->isbn . '</td>
	</tr>
</table>';

include APPPATH . 'views/templates/footer.php';