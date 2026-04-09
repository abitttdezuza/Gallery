<?php
if(isset($_FILES['image'])) {
    $target = "uploads/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
}
?>
