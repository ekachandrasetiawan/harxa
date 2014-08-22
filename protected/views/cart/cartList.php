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
        <a href="#">Shopping Cart</a>
      </li>
    </ul>
  </div>
</div>
</div>      
      <div role="main" class="container cart">
        <h2>YOUR SHOPPING CART</h2>
        <!-- <table> -->
          
          <!-- <tr class="headers">
            <th class="alpha50 dark">
              Article
            </th>
            <th class="alpha16">
              Quantity
            </th>
            <th class="alpha16 dark">
              Unit price
            </th>
            <th class="alpha16">
              Price
            </th>
            <th class="alpha16 dark">
              Action
            </th>
          </tr> -->

          <?php
          $this->widget('zii.widgets.CListView',array(
            'id'=>'listProduct',
            'dataProvider'=>$cartDetailProvider,
            'itemView'=>'_cartDetail',
            'itemsTagName'=>'tr',
            'template'=>'
              <table>
                <tr class="headers">
                  <th class="alpha50 dark">
                    Article
                  </th>
                  <th class="alpha16">
                    Quantity
                  </th>
                  <th class="alpha16 dark">
                    Unit price
                  </th>
                  <th class="alpha16">
                    Price
                  </th>
                  <th class="alpha16 dark">
                    Action
                  </th>
                </tr>
                {items}

                <tr>
                  <td colspan="3" class="left">
                    Total products (tax incl.):
                  </td>
                  <td colspan="2" class="price rigth">
                     <span class="currency">Rp.</span><span class="value">'.Formatter::format_rupiah($cart->subTotal).'</span>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="left">
                    Shipping:
                  </td>
                  <td colspan="2" class="price rigth">
                     <span class="currency">Rp.</span><span class="value">0</span>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="left coklat whitefont">
                    Total:
                  </td>
                  <td colspan="2" class="price rigth">
                     <span class="currency">Rp.</span><span class="value">3.010.000</span>
                  </td>
                </tr>
              </table>
              {pager}
            ',
          ));
          ?>
        <!-- </table> -->
          <div class="row-fluid checkout">
          <div class="span12">
             <a href="#" class=" btn" style="float: left;"><span class="gradient">Back Up</span></a>
            <a href="<?php echo Yii::app()->createUrl('cart/checkOut'); ?>" class=" btn" style="float: right;"><span class="gradient">Checkout</span></a>
          </div>
        </div>
        
      </div>    