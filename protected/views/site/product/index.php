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
        <a href="#">Product Harxa</a>
      </li>
    </ul>
  </div>
</div>
</div>
      <div role="main" class="container products grid">        
        <div class="row">
        
          <div class="span12">
            <h2>Products</h2>
            
            <div class="featured clearfix hidden-phone">
              <span class="corner-badge hot-right ir">Hot</span>
              <figure>
                <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/ph/ph-featured-1.png" alt=""/>
              </figure>
              <div class="content">
                <a href="#"><h1 class="featured-title">New trend for men 2012</h1></a>
                <p>
                  Sed eu lorem sit amet tellus hendrerit dignissim ac id nibh. In hac habitasse platea dictumst
                </p>
              </div>
            </div>
            
            <div class="products-view-nav row">
              <div class="span3">
                <ul class="views rr">
                  <li class="current"><a href="#" id="gridproduct" class="grid ir">Grid view</a></li>
                  <li><a href="#" class="list ir" id="listproduct">List view</a></li>
                </ul>
              </div>
            </div>
            
            <ul id="productgrid" class="row-fluid clearfix rr grid-display" >
            <?php foreach($models as $model): ?> 
          <li class="span3 alpha33">
            <div class="prod-wrapper">
              <span class="badge corner-badge hot ir hidden">Hot</span>
              <a href="<?php echo $this->createUrl('productDetail',array('id'=>$model->id)); ?>">
                
                <img src="<?php echo yii::app()->baseUrl.'/images/products/'.$model->mainCover->file_name ?>" class="desat-ie" alt=""/>
              </a>
            <span class="status stylestatus">
                <table class="simple-table">
                    <tr>
                        <td colspan="3" style="color: #ed1c24 !important;">PRODUCT STATUS</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                    <?php foreach($model->productLists as $detail): ?>
                    <tr>
                        <td><?php echo $detail->size ?></td>
                        <td>Not Available</td>
                        <td>1 Buking</td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </span>
              <span class="info gradient">
                <span class="title"><?php echo $model->name ?></span>
                <span class="add-to-view clearfix">
                  <span class="icon ir">Cart</span>
                  <a href="<?php echo $this->createUrl('productDetail',array('id'=>$model->id)); ?>" class="text">View Detail</a>
                </span>
                    <div class="grid-display">
                        <span class="badge price-badge">
                        <span class="value">
                        <span>Rp.</span>
                          <span><?php echo Formatter::format_rupiah(''.$model->price.''); ?></span>
                        </span>
                      </span>
                  </div>
              </span>
            </div>
          </li>
          <?php endforeach; ?>
          </ul>
            <ul id="productlist" class="row clearfix rr list-display product" style="display: none;">
            <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'/site/product/productListView',   // refers to the partial view named '_post'
                    'sortableAttributes'=>array(
                        'name',
                    ),
                    //'cssFile'=>Yii::app()->baseUrl.'/asset/css.css',
                    //'pagerCssClass'=>'pagination',
                ));
                //echo $this->renderPartial('/site/product/productlist',array('models'=>$models));
                //include "content/productlist.php";
            ?>
            </ul>
            <div class="products-view-nav row bottom">
            
              <div class="span3">
                <ul class="views rr">
                  <li class="current"><a href="#" class="grid ir" id="gridproduct">Grid view</a></li>
                  <li><a href="#" class="list ir" id="listproduct">List view</a></li>
                </ul>
              </div>
           
            </div>
            
          </div>
          
        </div>
      </div>
      