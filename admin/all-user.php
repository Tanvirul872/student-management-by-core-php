<table class="table" id="example">
    <thead>
    <tr>
        <th> Name </th>
        <th> Email </th>
        <th> Username </th>
        <th> Photo </th>

    </tr>
    </thead>
    <tbody>

    <?php
    $db_sinfo = mysqli_query($link,"SELECT * FROM `users`");
    while($row = mysqli_fetch_assoc($db_sinfo)){ ?>

        <tr>

            <td> <?php echo ucwords($row['name']); ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['username']; ?> </td>
            <td> <img width="50px" height="50px" src="student_images/<?php echo $row['photo']; ?>"> </td>
        </tr>

    <?php } ?>

    </tbody>
</table>