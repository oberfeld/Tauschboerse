<h2>Buch in Datenbank eintragen</h2>

<?php echo validation_errors();?>

<?php echo form_open('book/create')?>

	<label for="author">Autor</label>
	<input type="input" name="author" /><br />

	<label for="title">Titel</label>
	<input type="input" name="title" /><br />
	
	<label for="isbn">ISBN-Nr</label>
	<input type="input" name="isbn" /><br />
	
	<label for="comment">Kommentar</label>
	<textarea name="comment"></textarea><br />
	
	<input type="submit" name="submit" value="Buch eintragen" />
	
</form>