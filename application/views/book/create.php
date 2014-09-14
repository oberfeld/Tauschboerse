<?php $this->load->helper('url');?>

<h2>Buch in Datenbank eintragen</h2>

<?php echo validation_errors();?>

<?php echo form_open('book/create', array('class' => 'form-horizontal')); ?>

	<label for="author">Autor</label>
	<input type="text" name="author" /><br />

	<label for="title">Titel</label>
	<input type="text" name="title" /><br />
	
	<label for="publisher">Verlag</label>
	<input type="text" name="publisher" /><br />
	
	<label for="YearOfPublication">Erscheinungsjahr</label>
	<input type="text" name="YearOfPublication" /><br />
	
	<label for="edition">Auflage Nr.</label>
	<input type="text" name="edition" /><br />
		
	<label for="isbn">ISBN-Nr</label>
	<input type="text" name="isbn" /><br />
	
	<label for="comment">Kommentar</label>
	<textarea name="comment"></textarea><br />
	
	<input type="submit" name="submit" value="Buch eintragen" />
	
	<p><?php echo anchor('', 'Startseite'); ?></p>
	
</form>