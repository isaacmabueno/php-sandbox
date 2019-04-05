<?php require('partials/header.php'); ?>

<?php foreach($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>
<!-- referencing a super global -->
    <h1>Submit Your Name</h1>

    <form action="/names" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require('partials/footer.php')?>
