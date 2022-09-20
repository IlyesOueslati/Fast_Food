            <!-- product -->

            <?php
                $item_id=$_GET['item_id'] ?? 1;
                foreach($product->getData() as $item):  
                 if($item['item_id']==$item_id):                    
            ?>
            <section id="product" class="py-3">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $item['item_image'] ?? "./assets/products/product1.jpg" ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                                </div>
                                <div class="col">
                                <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                            <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                            <hr class="m-0">

                            <!-- product price -->
                            <table class="my-3"> 
                                <tr class="font-rale font-size-14">
                                    <td>Price:</td>
                                    <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span></td>
                                </tr>
                            </table>
                            <!-- product price -->

                            <hr>

                            <!-- order-details -->
                                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small> 
                                </div>
                            <!-- !order-details -->

                                <div class="row">
                                    <!-- size -->
                                <div class="size my-3">
                                    <h6 class="font-baloo">Size :</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">SMALL</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">MEDIUM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">LARGE</button>
                                        </div>
                                    </div>
                                </div>
                            <!-- !size -->
                                    
                                </div>
                                                                    
                                        <!-- product qty section -->
                                        <div class="qty d-flex">
                                            <h6 class="font-baloo">Qty</h6>
                                            <div class="px-4 d-flex font-rale">
                                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                        </div>
                                        <!-- !product qty section -->
                        </div>
                        
                        <div class="col-12">
                            <br>
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14">beef cutlet, breaded camembert, lettuce or rocket salad, bacon, mushrooms, cheese, cheddar, tomato, BBQ sauce and mayonnaise</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- !product -->
            <?php
                endif;
                endforeach;
            ?>