<h1>Admin Page</h1>

<table class="table table-striped">
    <tr>
        <th>Login</th>
        <th>Email</th>
    </tr>
    <?php foreach($users as $val): ?>
        <tr>
            <td><?php echo $val['login']; ?></td>
            <td><?php echo $val['email']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

