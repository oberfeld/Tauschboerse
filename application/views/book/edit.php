<?php 
include APPPATH . 'views/templates/header.php';

$this->load->helper('url');?>

<h2>Buch in Datenbank eintragen</h2>

<?php echo validation_errors();?>

<?php echo ' 
	<form class="form-horizontal" role="form" action="' . site_url('book/edit_save') . '" method="post">	
	<input type="hidden" name="book_id" value="' . $book->id . '">	
	<div class="form-group">
		<label for="author" class="col-sm-2 control-label">Autor</label>
		<div class="col-sm-10">
			' . form_input(array('id' => 'author', 'name' => 'author', 'value' => $book->author, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-sm-2 control-label">Titel</label>
		<div class="col-sm-10">
			' . form_input(array('id' => 'title', 'name' => 'title', 'value' => $book->title, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
		<label for="publisher" class="col-sm-2 control-label">Verlag</label>
		<div class="col-sm-10">
			' . form_input(array('id' => 'publisher', 'name' => 'publisher', 'value' => $book->publisher, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
		<label for="YearOfPublication" class="col-sm-2 control-label">Erscheinungsjahr</label>
		<div class="col-sm-10">
			' . form_input(array('id' => 'YearOfPublication', 'name' => 'YearOfPublication', 'value' => $book->YearOfPublication, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
		<label for="edition" class="col-sm-2 control-label">Auflage</label>
		<div class="col-sm-10">
			' . form_input(array('id' => 'edition', 'name' => 'edition', 'value' => $book->edition, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
		<label for="isbn" class="col-sm-2 control-label">ISBN</label>
		<div class="col-sm-10">
			' . form_input(array('id' => 'isbn', 'name' => 'isbn', 'value' => $book->isbn, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
		<label for="comment" class="col-sm-2 control-label">Kommentar</label>
		<div class="col-sm-10">
			' . form_textarea(array('id' => 'comment', 'name' => 'comment', 'value' => $book->comment, 'class' => 'form-control')) . '
		</div>
	</div>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default" name="submit">Speichern</button>
    	</div>
  	</div>
	
	<p> ' . anchor('', 'Startseite'); ?></p>
	
</form>

<?php include APPPATH . 'views/templates/footer.php';?>