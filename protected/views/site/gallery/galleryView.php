<div class="container">
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
        <a href="#">Gallery Harxa</a>
      </li>
      <li>
        <span class="splitter">/</span>
        <a href="#">Detail Gallery</a>
      </li>
    </ul>
  </div>
</div>
</div>
<div class="row">
    <div class="span12">
    <h2>Gallery</h2>
        <ul class="row-fluid clearfix rr grid-display">
        
            <?php 
            //for($i=1; $i<=9; $i++){
            foreach($models as $model):
            ?>
                <li class="span4 alpha33 desat">
                <a data-gal="prettyPhoto[prettyPhoto]" href="<?php echo yii::app()->baseUrl.'/images/gallery/'.$model->file_name ?>" class="lightbox-image">
                    <img src="<?php echo yii::app()->baseUrl.'/images/gallery/'.$model->file_name ?>" class="desat-ie" alt=""/>
                  </a>
                  <div class="judulalbum">Beef Spices Blend</div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>