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

$i = 1;
foreach ($book->result() as $book_item) {
	$i += 1;
	echo'
  <tr>
	<td class="hidden">' . $book_item->id . '</td>		
	<td>' . $book_item->author . '</td>
	<td>' . $book_item->title . '</td>
	<td>' . anchor('book/details/' . $book_item->id, 'Details'). '</td>
	<td>' . anchor('book/edit/' . $book_item->id, 'Bearbeiten'). '</td>
	<td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ConfirmRemove'.$i.'">
			Löschen
		</button>
		<div class="modal fade" id="ConfirmRemove'.$i.'" tabindex="-1" role="dialog" aria-labelledby="ConfirmRemoveLabel'.$i.'" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Abbrechen</span></button>
						<h4 class="modal-title">Bestätigung</h4>
					</div>
					<div class="modal-body">
						<p>Soll das Buch '.$book_item->title.' von '.$book_item->author.' wirklich gelöscht werden?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
						'.anchor('book/remove/' . $book_item->id,'Buch löschen', 'class="btn btn-primary" type="button"').'
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</td>
  </tr>';
}


echo 
'</table>

<p>' . anchor('', 'Startseite') . '</p>';




include APPPATH . 'views/templates/footer.php';