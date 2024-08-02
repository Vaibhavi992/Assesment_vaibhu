<?php
include_once('header.php');
?>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Fruit Stock</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php if (isset($fruits) && !empty($fruits)) : ?>
                            <table class="table table-striped table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Fruit Name</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($fruits as $fruit) : ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($fruit['fruitname']); ?></td>
                                            <td><?php echo htmlspecialchars($fruit['qty']); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else : ?>
                            <p class="text-center">No fruit stock available.</p>
                        <?php endif; ?>
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
