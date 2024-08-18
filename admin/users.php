<?php
include('includes/header.php');
?>
<div class="row">
    <div class="col col-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    user Lists
                    <a href="add-user.php" class="btn btn-primary float-end">
                        Add Users
                    </a>


                </h4>
                <?php alertMessage() ?>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $users =  getAll('users');
                        if (mysqli_num_rows($users) > 0) {

                            foreach ($users as $user){
                        ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['phone'] ?></td>
                                <td><?= $user['role'] ?></td>
                                
                                <td>
                                    <a href="edit-user.php?id=<?= $user['id'] ?>" class="btn btn-success  me-2"><i class="fas fa-edit"></i>
                                    </a>
                                    <a href="config/auth.php?id=<?= $user['id'] ?>" class="btn btn-danger  mx-2"
                                    onclick="return confirm('Are you sure you want to delete?')";
                                    ><i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php
                        }

                    } else {
                        ?>
                            <tr class="text-center">
                                <td colspan="6">
                                    No data found
                                </td>
                            </tr>
                        <?php
                    }

                        ?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>


<?php

include('includes/footer.php');
