<?php require('partials/head.php')?>

<?php foreach ($users as $user) : ?>

    <li><?= $user->name; ?></li>

<?php endforeach; ?>


<h1>Submit form</h1>

<form action="/names" method="POST">

    <input type="text" name="name">
    <button type="submit">submit</button>


</form>




<?php require('partials/footer.php'); ?>
