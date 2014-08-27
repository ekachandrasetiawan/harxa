    <div class="container breadcrumb-wrapper">
    	<div class="row">
    		<div class="span12 breadcrumb">
    			<ul class="rr">
    				<li>
    					<span class="splitter">/</span>
    					<a href="#">Home</a>
    				</li>
    				<li>
    					<span class="splitter">/</span>
    					<a href="#">My Account</a>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>
    <div role="main" class="container checkout">
    	<div class="row">

    		<div class="span3 progress">
    			<h3>Account</h3>
    			<ul class="rr">
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'login')); ?>">Login</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('site/page'); ?>">Register</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('usr/index'); ?>">My Account</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('usr/orderHistory'); ?>">Order History</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('site/page'); ?>">Newslatter</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('usr/shipping'); ?>">Shipping Address List</a>
    				</li>
    			</ul>
    		</div>


    		<div class="span9 checkout-list">
    			<h3>Shipping Address List</h3>
    			<form action="#" method="post" id="form-2">
    				<ol class="rr">

    					<!-- ----------- Your Personal Account ------------------- -->
    					<li class="current">
    						<table>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Address</th>
									<th>City</th>
									<th>State</th>
									<th>Country</th>
									<th>&nbsp;</th>
								</tr>
								<?php
								foreach($model as $data):
									?>
									<tr>
										<td>1</td>
										<td><?php echo CHtml::encode($data->title); ?></td>
										<td><?php echo CHtml::encode($data->address); ?></td>
										<td><?php echo CHtml::encode($data->city); ?></td>
										<td><?php echo CHtml::encode($data->state); ?></td>
										<td><?php echo CHtml::encode($data->country); ?></td>
										<td>
											<a href="<?php echo $this->createUrl('usr/updateShippingAddr',array('id'=>$data->id)); ?>">Edit</a>
											<a href="<?php echo $this->createUrl('usr/deleteShippingAddr',array('id'=>$data->id)); ?>">Delete</a>
											<a href="<?php echo $this->createUrl('usr/setAsPrimaryShippingAddr',array('id'=>$data->id)); ?>">Set As Primary</a>
										</td>
									</tr>
									<?php
								endforeach;
								?>
							</table>
    					</li>
    					<li><a href="<?php echo $this->createUrl('usr/createShipping'); ?>">Add New Shipment Address</a></li>

    					<!-- ---------------- Your Address---------------- -->
	              <!-- <li class="current">
	                <h6>Your Address</h6>
	                <div class="row">
	                  <div class="span9 content-wrapper clearfix">
	                    <div class="full-col">
	                       <ul class="rr">
	                          <li>
	                            <div class="span2"> Address:
	                            </div>
	                            <label>
	                              BEKASI TIMUR
	                            </label>
	                          </li>
	                          <li>
	                            <div class="span2">City:
	                            </div>
	                            <label>
	                              BEKASI
	                            </label>
	                          </li>
	                          <li>
	                            <div class="span2"> Post Code:
	                            </div>
	                            <label>
	                              17115
	                            </label>
	                          </li>
	                        </ul>
	                    
	                    </div>  
	                  </div>                      
	                </div>
	            </li> -->

	        </ol>
	    </form>
	</div>

	</div>
</div>