         <!-- Top Sale food-->
         <?php
            
            shuffle($product_shuffle);

            // request method post 
            if($_SERVER['REQUEST_METHOD'] == "POST"){ // When we click on the button Add to cart then ...
                if (isset($_POST['top_sale_submit'])){
            // call method addToCart
                    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
                }
             }
         ?>
        
        
         <section id="top-sale">
                <div class="container py-5">
                    <h4 class="font-rubik font-size-20">Top Sale</h4>
                    <hr>
                    <!-- owl carousel -->
                        <div class="owl-carousel owl-theme">
                            <?php
                                foreach ($product_shuffle as $item) {?>                           
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="<?php printf('%s?item _id=%s','product.php', $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ??  "./assets/products/product1.jpg";?>" alt="product1" class="img-fluid" style="min-height: 400px; max-height: 400px;"></a>
                                    <div class="text-center">
                                        <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>                                       
                                        <div class="price py-2">
                                            <span>$<?php echo $item['item_price'] ?? '0'; ?></span>
                                        </div>
                                        <form method="POST">
                                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php  } ?>
                        </div>
                    <!-- !owl carousel -->
                </div>
            </section>
         <!-- Top Sale food-->