<?php
include_once('header.php')
?>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Fruit Store Management</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Fruit Stock</h5>
                        <p class="card-text">Add new fruits to the store's stock.</p>
                        <a href="index.php?action=add" class="btn btn-primary">Add Fruit</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Fruit Stock</h5>
                        <p class="card-text">View all fruits currently in stock.</p>
                        <a href="index.php?action=view" class="btn btn-success">View Stock</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Fruit Stock</h5>
                        <p class="card-text">Update the quantity of existing fruit stock.</p>
                        <a href="index.php?action=update" class="btn btn-warning">Update Stock</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once('footer.php')
    ?>
</body>
</html>
