<?php
if (mysqli_num_rows($all_products) == 0) {
    ?>
    <tr class="table-row">
        <td class="tbl-col-1">No products available</td>
        <td class="tbl-col-1">No products available</td>
        <td class="tbl-col-1">No products available</td>
        <td class="tbl-col-1">No products available</td>
    </tr>
    <?php
        if(isset($_POST['edit'])) {
            echo $_POST['hidden'];
        }
    ?>
    <?php
} else {
    while ($row = mysqli_fetch_assoc($all_products)) {
        ?>
        <tr class="table-row">
            <td class="tbl-col-1">
                <?php echo $row["pro_name"]; ?>
            </td>
            <td>₱
                <?php echo $row["pro_price"]; ?>
            </td>
            <td style="width: 150px;">
                <?php echo $row["availability"]; ?>
            </td>
            <td class="tbl-col-4"><button class="edit edit-product" name="edit" onclick="openModal()" data-product-id="<?php echo $row["pro_id"]; ?>">Edit</button><button class="delete delete-product" data-product-id="<?php echo $row["pro_id"]; ?>">Delete</button></td>
        </tr>
        <?php
    }
}
?>
