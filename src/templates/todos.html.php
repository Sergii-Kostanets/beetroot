<h1 class="text-center">ToDo List</h1>
<br>

<button type="button" name="deleteAll" class="btn btn-danger delete-all"><a href="/tasks?delete=all">Delete all
        tasks</a></button>

<form action="/todos" method="POST">
    <input type="text" name="name" placeholder="Enter ToDo text" />
    <input type="hidden" name="active" value="0" />
    <input type="checkbox" name="active" value="1" />
    <input type="submit" value="Add ToDo" />
</form>

<?php foreach ($variables['items'] as $item) : ?>
<p><?php print $item->getName(); ?>. <?php if ($item->isActive()) : ?> + <?php endif; ?>

    <?php $item->getId(); ?>
    <?php $item->getName(); ?>
    <a href="/tasks?id=<?php $item->getId(); ?>">
        Delete
    </a>
    |
    <a href="#">
        Edit
    </a>

</p>
<?php endforeach; ?>

<?php if (isset($variables['new_todo'])) : ?>
<p>New item added with id: <?php print $variables['new_todo']->getId(); ?></p>
<?php endif; ?>