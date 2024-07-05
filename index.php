<?php
include 'includes/db.php';
include 'includes/navbar.php';
include 'includes/header.php';
?>

<main>
    <div class="container">
        <h2>Featured Cars</h2>
        <div class="car-list">
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='car-item'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<p>Price: $" . $row['price'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No featured cars found.";
            }
            ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
