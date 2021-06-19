<?php
include "layout/header.php";
?>

<h3>Existing Users : </h3>
<div class="row my-3">
    <div>
    <table class="table table-striped table-light">
        <thead class="thead-light">
        <tr>
            <th scope="col">User's ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Adress</th>
            <th scope="col">Email</th>
            <th scope="col">Date of birth</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user) : ?>
            <tr>
            <td><a href="singleuser.php?id=<?php echo $user->getId(); ?>"><?php echo $user->getID(); ?></a></td>
            <td><a href="singleuser.php?id=<?php echo $user->getId(); ?>"><?php echo $user->getFirstname(); ?></a></td>
            <td><a href="singleuser.php?id=<?php echo $user->getId(); ?>"><?php echo $user->getLastname(); ?></a></td>
            <td><?php echo $user->getAdress()  . ", " . $user->getPostcode() . " " . $user->getCity() ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td><?php echo $user->getBirth_date(); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<?php 
include "layout/footer.php"; 
?>