<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = t('account/password', 'title');
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="user-request-password-reset">
	<h1><?= Html::encode($this->title) ?></h1>

	<p><?= t('account/password', 'request_text') ?></p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(); ?>

				<?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>

				<div class="form-group">
					<?= Html::submitButton(t('action', 'next'), ['class' => 'btn btn-primary']) ?>
				</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
