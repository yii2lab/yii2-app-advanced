<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = t('account/password', 'title');
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="user-reset-password">
	<h1><?= Html::encode($this->title) ?></h1>

	<p><?= t('account/password', 'enter_new_password') ?></p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(); ?>

				<?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>
			
			    <?= $form->field($model, 'new_password_repeat')->passwordInput() ?>

				<div class="form-group">
					<?= Html::submitButton(t('account/password', 'save_password_action'), ['class' => 'btn btn-primary']) ?>
				</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
