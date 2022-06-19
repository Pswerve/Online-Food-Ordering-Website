<?php
include ("header.php");
if($website_close==1){
	redirect(FRONT_SITE_PATH.'main_menu');
}
?>

<div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your Cart</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form method="post">
							<?php
							$cartArr=getUserFullCart();
							if(count($cartArr)>0){
							?>
                            <div class="table-content table-responsive">

                                <table>
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>Dish</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										foreach($cartArr as $key=>$list){
										?>
											<tr>
												<td class="product-thumbnail">
													<a href="#"><img src="<?php echo SITE_DISH_IMAGE.$list['image']?>" alt="" width="75px"></a>
												</td>
												<td class="product-name"><a href="#"><?php echo $list['dish']?> </a></td>
												<td class="product-price-cart"><span class="amount"><?php echo $list['price']?> Rs</span></td>
												<td class="product-quantity">
													<div class="cart-plus-minus">
														<input class="cart-plus-minus-box" type="text" name="qty[<?php echo $key?>][]" value="<?php echo $list['qty']?>">
													</div>
												</td>
												<td class="product-subtotal"><?php echo $list['qty']*$list['price']?> Rs</td>
												<td class="product-remove">
													<a href="javascript:void(0)" onclick="delete_cart('<?php echo $key?>','load')"><i class="fa fa-times"></i></a>
											   </td>
											</tr>
										<?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="<?php echo FRONT_SITE_PATH?>main_menu">Back to Menu</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button name="update_cart">Update Cart</button>
                                            <a href="<?php echo FRONT_SITE_PATH?>checkout">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php } else {
								echo "Your cart is empty!";
							}?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
include("footer.php");
?>
