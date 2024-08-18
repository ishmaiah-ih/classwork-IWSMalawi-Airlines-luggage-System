<?php
include('includes/header.php');
?>
<div class="row">
    <div class="col col-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Update User
                    <a href="users.php" class="btn btn-danger float-end">
                        Back
                    </a>
                </h4>
                <div class="card-body">
                    <?php alertMessage() ?>
                    <form action="config/auth.php" method="POST">
                        <?php
                        $paramResult = checkParamId('id');
                        if (!is_numeric($paramResult)) {
                            echo '<h6>' . $paramResult .  '</h6>';
                            return false;
                        }
                        $user =  getById('users', checkParamId('id'));
                        if ($user['status'] = 200) {
                        ?>
                            <div class="row">
                                <input type="hidden" name="userid" value="<?= $user['data']['id'] ?>">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="<?= $user['data']['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="<?= $user['data']['email'] ?>">
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone No.</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?= $user['data']['phone'] ?>">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" value="<?= $user['data']['name'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Select Role</label>
                                            <select name="role" class="form-select" id="role">
                                                <option value="">Select Role</option>
                                                <option value="admin" <?= $user['data']['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                                <option value="user" <?= $user['data']['role'] == 'user' ? 'selected' : '' ?>>User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="text-danger">
                                    <div class="col-md-12 text-end ">
                                        <button type="submit" name="edit-user" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                            echo '<h6>' . $user['message'] . '</h6>';
                        }
                        ?>

                </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>


<?php

include('includes/footer.php');
