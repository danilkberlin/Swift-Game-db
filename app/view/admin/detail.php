<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <table class="table table-dark table-striped text-center">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Login</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Pronouns</th>
                    <th>Register date</th>
                </tr>
                <?php foreach($users as $val): ?>
                    <tr>
                        <td><?php echo $val['id']; ?></td>
                        <td><?php echo $val['user_name'];?></td>
                        <td><?php echo $val['login']; ?></td>
                        <td><?php echo password_hash($val['password'], PASSWORD_DEFAULT); ?></td>
                        <td><?php echo $val['email']; ?></td>
                        <td><?php echo $val['pronouns'];?></td>
                        <td><?php echo $val['regist_date']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
