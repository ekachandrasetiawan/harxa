<tr>
  <td class="article clearfix">

    <figure>
    <img src="<?php echo yii::app()->baseUrl.'/images/products/thumb/'.$data->product->mainCover->file_name; ?>" alt=""/>
    </figure>

    <div class="info-wrapper">
      <h2><?php echo CHtml::encode($data->product->name); ?></h2>
      <div class="info">
        <p class="clearfix">
          <span>Size:</span>
          <span class="value">M</span>
        </p>
      </div>
    </div>

  </td>
  <td class="quantity dark">

    <div class="quant-input">
      <div class="arrows">
        <div class="arrow plus gradient"><span class="ir">Plus</span></div>
        <div class="arrow minus gradient"><span class="ir">Minus</span></div>
      </div>
      <input type="text" value="<?php echo $data->qty; ?>"/>
    </div>

  </td>
  <td>

    <span class="currency">Rp.</span><span class="value"><?php echo Formatter::format_rupiah($data->price); ?></span>

  </td>
  <td class="dark">

    <span class="currency">Rp.</span><span class="value"><?php echo $data->totalPriceLine; ?></span>

  </td>
  <td class="action">

    <a href="#" class="delete">Delete</a>

  </td>
</tr>