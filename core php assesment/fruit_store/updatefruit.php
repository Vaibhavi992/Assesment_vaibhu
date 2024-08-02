<?php
include_once('header.php');
?>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Update Fruit Stock</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="index.php?action=update">
                            <div class="mb-3">
                                <label for="fruitname" class="form-label">Select Fruit</label>
                                <select class="form-select" id="fruitname" name="fruitname" required>
                                    <option value="">-- Choose Fruit --</option>
                                    <?php if (isset($fruits) && !empty($fruits)) : ?>
                                    <?php foreach ($fruits as $fruit) : ?>
                                        <option value="<?php echo htmlspecialchars($fruit['fruitname']); ?>">
                                            <?php echo htmlspecialchars($fruit['fruitname']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <?php else : ?>
                                        <option value="">No fruits available</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="qty" class="form-label">New Quantity</label>
                                <input type="number" class="form-control" id="qty" name="qty" required>
                            </div>
                            <button type="submit" class="btn btn-warning w-100" value=">Update Stock">Update Stock</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Back to Menu</a>
        </div>
    </div>

    <?php
    include_once('footer.php');
    ?>
</body>
</html>
