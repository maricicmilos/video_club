<?php require '../init.php'; ?>
<?php require '../core/inc/grid/admin/metaHeaders.php'; ?>
<body>
<div class="container">
    <?php require '../core/inc/grid/admin/header.php'; ?>
    <div class="row" id="mainContent">
        <?php require '../core/inc/grid/admin/sidebar.php'; ?>
        <div class="col-10">
            <h2>Users</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">
                        <input type="checkbox" name="selectAll" id="selectAll" title="Select All">
                    </th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $users = User::getUsersAsObjects();
                foreach ($users as $user){
                    ?>
                    <tr class="userRow">
                        <th scope="row"><?= $user->getUserId(); ?></th>
                        <td><input type="checkbox" name="user" class="userCheckbox" id="<?=$user->getUserId(); ?>"></td>
                        <td><?= ucfirst($user->getFirstName()); ?></td>
                        <td><?= ucfirst($user->getLastName()); ?></td>
                        <td><?= $user->getEmail(); ?></td>
                        <td>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary toggleMenu" type="button">
                                    <span>Actions</span>
                                    <svg width="1em" height="0.7em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                    </svg>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="edit_user.php?id=<?= $user->getUserId(); ?>">Edit</a>
                                    <a class="dropdown-item" href="remove_user.php?id=<?= $user->getUserId(); ?>">Remove</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="profile.php?id=<?= $user->getUserId(); ?>">View Profile</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php require '../core/inc/grid/admin/footer.php'; ?>
</div>
<?php require '../core/inc/grid/admin/scripts.php'; ?>
<!-- Page Specific JavaScript -->
</body>
</html>