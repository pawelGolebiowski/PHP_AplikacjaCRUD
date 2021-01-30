<?php
require __DIR__ . '/users.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
        <tr>exit
            <th>Dane osobowe</th>
            <th>Nazwa użytkownika</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Strona internetowa</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>

                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a target="_blank" href="http://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>
                <td>
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">Widok</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Uaktualnij</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>
