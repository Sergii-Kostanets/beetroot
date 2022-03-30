<h1>ToDo List</h1>

<?php foreach ($variables['items'] as $item) : ?>
<p><?php print $item->getName(); ?></p>
<?php endforeach ; ?>