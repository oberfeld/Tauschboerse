<?php 
include APPPATH . 'views/templates/header.php';

$this->load->helper('url');?>

<h2>Buch in Datenbank eintragen</h2>

<?php echo validation_errors();?>

<?php echo form_open('book/create', array('class' => 'form-horizontal', 'rose' => 'form')); ?>
	
	<div class="form-group">
		<label for="author" class="col-sm-2 control-label">Autor</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="author" placeholder="Autor" name="author" />
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-sm-2 control-label">Titel</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="title" placeholder="Buchtitel" name="title" />
		</div>
	</div>
	<div class="form-group">
		<label for="publisher" class="col-sm-2 control-label">Verlag</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="publisher" placeholder="Verlag" name="publisher" />
		</div>
	</div>
	<div class="form-group">
		<label for="YearOfPublication" class="col-sm-2 control-label">Erscheinungsjahr</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="YearOfPublication" placeholder="Erscheinungsjahr" name="YearOfPublication" />
		</div>
	</div>
	<div class="form-group">
		<label for="edition" class="col-sm-2 control-label">Auflage</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="edition" placeholder="Nummer der Auflage" name="edition" />
		</div>
	</div>
	<div class="form-group">
		<label for="isbn" class="col-sm-2 control-label">ISBN</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="isbn" placeholder="ISBN-Nummer" name="isbn" />
		</div>
	</div>
	<div class="form-group">
		<label for="comment" class="col-sm-2 control-label">Kommentar</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="3" id="comment" placeholder="Kommentar" name="comment"></textarea>
		</div>
	</div>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default" name="submit">Buch eintragen</button>
    	</div>
  	</div>
	
	<p><?php echo anchor('', 'Startseite'); ?></p>
	
</form>

<?php include APPPATH . 'views/templates/footer.php';?>