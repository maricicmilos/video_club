<?php
    require ('sys/init.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row" id="header">
        <div class="col-sm">
            <img src="images/logo.png" alt="Video Club Project">
            <span>Video Club Project</span>
        </div>
    </div>
    <div class="row" id="mainContent">
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
            </div>
        </div>
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
                                        <a class="dropdown-item" href="#">View Profile</a>
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
    <div class="row">
        <div class="col">
            <p>This is project created in practice purphuse only. Copyright &#169; <?= $date ?> Maricic Milos - PHP Web Developer - <a href="http://www.maricicmilos.com/">Visit Site</a></p>
        </div>
    </div>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
<script src="js/script.js"></script>


</body>
</html>