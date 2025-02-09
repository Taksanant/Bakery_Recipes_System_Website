<?php
include "DatabaseConnect.php";

if (isset($_POST['input'])) {
    $input = trim(htmlspecialchars($_POST['input'])); // Sanitize input

    $query = "SELECT * FROM bakeryrecipe WHERE BakeryName LIKE '%{$input}%'";
    $query2 = "SELECT * FROM ingrediants WHERE IngreName LIKE '%{$input}%'";

    echo "Search Result : ";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    $name_arr = array();
    ?>
    <table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th>Image</th>
            <th>Bakery name</th>
            <th>Description</th>
            <th>Post By</th>
        </tr>
    </thead>
    <tbody>


        <?php
$status = true;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $bakeryId = $row['BakeryId'];
            $img = $row['BakeryPicPath'];
            $title = $row['BakeryName'];
            $postby = $row['UserId'];
            $Description = $row['Description'];

            $name_arr = [$bakeryId];
            ?><tr>
            <td>
                <a href="./Recipe_post.php?id=<?php echo $bakeryId?>">
                    <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" width="200" height="200">
                </a>
            </td>
            <td>
                <a href="./Recipe_post.php?id=<?php echo $bakeryId?>">
                    <?php echo $title; ?>
                </a>
            </td>
            <td><?php echo $Description; ?></td>
            <td><?php echo $postby; ?></td>
        </tr>
<?php
}
    } else {
        $status = false;

    }?>
        <?php if (mysqli_num_rows($result2) > 0 || $status) {

        while (($row = mysqli_fetch_assoc($result2))) {
            $IngreName = $row['IngreName'];
            $query3 = "SELECT * FROM haveingredients,bakeryrecipe,ingrediants WHERE bakeryrecipe.BakeryId = haveingredients.BakeryId AND ingrediants.IngreId = haveingredients.IngreId AND IngreName = '$IngreName'";
            $result3 = mysqli_query($conn, $query3);

            while (($row = mysqli_fetch_assoc($result3))) {
                $bakeryId = $row['BakeryId'];
                $img = $row['BakeryPicPath'];
                $title = $row['BakeryName'];
                $postby = $row['UserId'];
                $Description = $row['Description'];

                if (!in_array($bakeryId, $name_arr)) {
                    $name_arr = [$bakeryId];
                    ?>


                    <tr>
                    <td>
                        <a href="./Recipe_post.php?id=<?php echo $bakeryId?>">
                            <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" width="200" height="200">
                        </a>
                    </td>
                    <td>
                        <a href="./Recipe_post.php?id=<?php echo $bakeryId?>">
                            <?php echo $title; ?>
                        </a>
                    </td>
                    <td><?php echo $Description; ?></td>
                    <td><?php echo $postby; ?></td>
                </tr>
                <?php
}

            }

        }
    } else {
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }

    ?>

    </tbody>
</table>
<?php }?>