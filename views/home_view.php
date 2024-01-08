<table>
    <thead>
    <tr>
        <th>Email</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['users_email'] ?></td>
            <td><?= $user['users_username'] ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<form action="index.php?page=home" method="POST">
    <button type="submit" name="login">Login</button>
    <button type="submit" name="logout">Logout</button>
</form>
