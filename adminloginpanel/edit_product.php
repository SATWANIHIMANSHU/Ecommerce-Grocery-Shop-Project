<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('dbconnect.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $old_price = $_POST['old_price'];

    // Optional: Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageName = time() . '_' . $_FILES['image']['name'];
        $imagePath = 'uploads/' . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

        $sql = "UPDATE products_main SET name=?, price=?, old_price=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $price, $old_price, $imagePath, $id);
    } else {
        $sql = "UPDATE products_main SET name=?, price=?, old_price=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $price, $old_price, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Product updated successfully!');</script>";
        echo "<script>window.location.href = 'showdata.php';</script>";
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>
