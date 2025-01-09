<div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
    <section class="p-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Available Products for Sale</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php
                include 'src/include/db_connect.php';

                // Check database connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                // Check if products are available
                if (mysqli_num_rows($result) > 0) {
                    while ($product = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col">
                            <div class="card h-100">
                                <img src="images/products/' . $product['image'] . '" class="card-img-top" alt="' . $product['name'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $product['name'] . '</h5>
                                    <p class="card-text">' . $product['description'] . '</p>
                                    <p class="card-text"><strong>$' . number_format($product['price'], 2) . '</strong></p>
                                    <a href="#" class="btn btn-success">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                } else {
                    echo "<p>No products available.</p>";
                }

                mysqli_close($conn);
                ?>

            </div>
        </div>
    </section>
</div>
