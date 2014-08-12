
<?php

    $this->pageTitle = 'Products';
    $this->pageSubTitle = 'Show All Products';
    $this->widget(
        'booster.widgets.TbExtendedGridView',
        array(
            'filter' => $model,
            'fixedHeader' => true,
            'type' => 'striped bordered',
            'headerOffset' => 40,
            // 40px is the height of the main navigation at bootstrap
            'dataProvider' => $model->search(),
            'template' => "{items}",
            'columns' => array(
                // 'id',
                array(
                    'header'=>'Main Cover',
                    'type'=>'image',
                    'value'=>function($data){
                        return Yii::app()->baseUrl.'/images/products/thumb/'.$data->mainCover->file_name;
                    }
                ),
                'name',
                'price',

                // 'qty',
                'tags',
                array(
                    'class'=>'booster.widgets.TbButtonColumn',
                    'template'=>'{view}&nbsp;&nbsp;&nbsp;{delete}'
                )
            ),
        )

    );

    $this->widget(
        'booster.widgets.TbButton',
        array(
            'label' => 'Add New',
            'context' => 'primary',
            'buttonType'=>'link',
            'url'=>$this->createUrl('product/create')
            )
        );
?>