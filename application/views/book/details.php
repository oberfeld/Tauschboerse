<?php
include APPPATH . 'views/templates/header.php';

$this->load->helper('url');

$book_item = $book->result();

echo '
<table class="table table-striped table-hover table-bordered">
	<tr>
		<td>Autor</td>
		<td>' . $book_item->author . '</td>
	  </tr>
</table>';

include APPPATH . 'views/templates/footer.php';