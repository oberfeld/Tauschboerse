<?php $this->load->helper('url');?>

<table border="1" width="100%">
  <!--  <colgroup>
    <col width="1*">
    <col width="3*">
    <col width="3*">
  </colgroup>-->
  <tr>
    <th>Id</th>
    <th>Autor</th>
    <th>Titel</th>
    <th>Details</th>
    <th>Bearbeiten</th>
    <th>Löschen</th>
  </tr>

<?php foreach ($book as $book_item):?>
  <tr>
	<td><?php echo $book_item['id']?></td>
	<td><?php echo $book_item['author']?></td>
	<td><?php echo $book_item['title']?></td>
	<td>ToDo: Link</td>
	<td>ToDo: Link</td>
	<td>ToDo: Link</td>
  </tr>	
<?php endforeach ?>

</table>

<p><?php echo anchor('', 'Startseite'); ?></p>