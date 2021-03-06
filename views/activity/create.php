<?php
/**
 * @var $model \app\models\Activity
 */
?>
<h1>Cобытие:</h1>
<h4><?=$name;?></h4>
<div class="row">
    <div class="col-md-8">
        <?php $form = \yii\bootstrap\ActiveForm::begin();?>
            <?=$form->field($model,'title');?>
            <?=$form->field($model,'description')->textarea(['data-des'=>22]);?>
            <?=$form->field($model,'author');?>
            <?=$form->field($model,'date')->input('date');?>
            <?=$form->field($model,'period');?>
            <?=$form->field($model,'isBlocked')->checkbox()?>
            <?=$form->field($model,'isRepeat')->checkbox()?>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>