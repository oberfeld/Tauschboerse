<?php $this->load->helper('url');?>

<h2>Buch in Datenbank eintragen</h2>

<?php echo validation_errors();?>

<?php echo form_open('book/create')?>

	<label for="author">Autor</label>
	<input type="input" name="author" /><br />

	<label for="title">Titel</label>
	<input type="input" name="title" /><br />
	
	<label for="publisher">Verlag</label>
	<input type="input" name="publisher" /><br />
	
	<label for="YearOfPublication">Erscheinungsjahr</label>
	<input type="input" name="YearOfPublication" /><br />
	
	<label for="edition">Auflage Nr.</label>
	<input type="input" name="edition" /><br />
		
	<label for="isbn">ISBN-Nr</label>
	<input type="input" name="isbn" /><br />
	
	<label for="comment">Kommentar</label>
	<textarea name="comment"></textarea><br />
	
	<input type="submit" name="submit" value="Buch eintragen" />
	
	<p><?php echo anchor('', 'Startseite'); ?></p>
	
</form>