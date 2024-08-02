<?php
include_once('header.php');
?>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add Fruit Stock</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="index.php?action=add">
                            <div class="mb-3">
                                <label for="fruitname" class="form-label">Fruit Name</label>
                                <input type="text" class="form-control" id="fruiname" name="fruitname" required>
                            </div>
                            <div class="mb-3">
                                <label for="qty" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="qty" name="qty" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" value="Add Fruit">Add Fruit</button>
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
