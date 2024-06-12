<h1 class='text-center'>Admin Page</h1>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Delete User</th>
                </tr>
                <?php foreach($users as $val): ?>
                    <tr>
                        <td><?php echo $val['id']; ?></td>
                        <td><?php echo $val['login']; ?></td>
                        <td><?php echo $val['email']; ?></td>
                        <td>
                            <form method="post" action="/admin/delete"> 
                                <input type="hidden" name="user_id" value="<?php echo $val['id']; ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


