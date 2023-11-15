
<?php require("views/partials/heading.php"); ?>

<br>
<h1>Home Page Main Page</h1>
<h1>To do Tasks</h1>
<?php foreach($tasks as $task): ?>
        <?= $task->description."," ?>

    <?php endforeach; ?>
<h1>User Names</h1>
<ol>
<?php foreach($users as $user): ?>
    <li><?= $user->name;  ?></li>
    <?php endforeach; ?>
</ol>
<form action="/names" method="post">
    <input type="text" name="inputname" placeholder="Enter name:">
    <button type="submit">Add Name</button>
</form>



<?php require("views/partials/footer.php"); ?>
