<?php
include ("header.php");
if(!isset($_SESSION['FOOD_USER_ID'])){
	redirect(FRONT_SITE_PATH.'main_menu');
}

if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$getOrderById=getOrderById($id);
	if($getOrderById[0]['user_id']!=$_SESSION['FOOD_USER_ID']){
		redirect(FRONT_SITE_PATH.'main_menu');
	}
}else{
	redirect(FRONT_SITE_PATH.'main_menu');
}

$uid=$_SESSION['FOOD_USER_ID'];

?>

<div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Order Detail</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form method="post">
							<div class="table-content table-responsive">

                                <table style="border:1px solid #e9e8ef;">
												<tr>
													<th width="30%">Dish</th>
													<th width="20%">Attribute</th>
													<th width="15%">Price</th>
													<th width="5%">Qty</th>
													<th width="15%">Total</th>
													<th width="15%"></th>
												</tr>
												<?php
												$getOrderDetails=getOrderDetails($id);
												$pp=0;
												//prx($getOrderDetails);
												foreach($getOrderDetails as $list){
													$pp=$pp+($list['qty']*$list['price']);
													?>
														<tr>
															<td><?php echo $list['dish']?></td>
															<td><?php echo $list['attribute']?></td>
															<td><?php echo $list['price']?> Rs</td>
															<td><?php echo $list['qty']?></td>
															<td><?php echo $list['qty']*$list['price']?> Rs</td>
															<td id="rating<?php echo $list['dish_details_id']?>">
															<?php
															if($getOrderById[0]['order_status']==4){
															echo getRating($list['dish_details_id'],$id);
															}
															?>
															</td>
														</tr>
													<?php
												}
												?>
												<tr>
													<td colspan="3"></td>
													<td><strong>Total:</strong></td>
													<td><strong><?php echo $pp?> Rs</strong></td>
													<td></td>
												</tr>
												<?php

												if($getOrderById[0]['coupon_code']!=''){
													?>
													<tr>
														<td colspan="3"></td>
														<td><strong>Coupon Code:</strong></td>
														<td><strong><?php echo $getOrderById[0]['coupon_code']?></strong></td>
														<td></td>
													</tr>
													<tr>
														<td colspan="3"></td>
														<td><strong>Final Amount:</strong></td>
														<td><strong><?php echo $getOrderById[0]['final_price']?> Rs</strong></td>
														<td></td>
													</tr>
													<?php
												}
												?>
												</table>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
include("footer.php");
?>
