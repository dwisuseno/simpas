<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content">
    <!-- <div class="login-box"> -->
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="login-logo">
          <a href=""><b><?= Html::encode($this->title) ?></b> SIMPAS</a>
        </div><!-- /.login-logo -->
        
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>
          <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'layout' => 'horizontal',
              'fieldConfig' => [
                  'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div> ",
                  
              ],
          ]); ?>
            <div class="form-group has-feedback">
              <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control', 'type' => 'text']) ?>
              
            </div>
            <div class="form-group has-feedback">
              <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'type' => 'password']) ?>
              
            </div>
            <div class="row">
                  <div class="col-xs-8">
                    <div class="checkbox icheck">
                      <label>
                        <?= $form->field($model, 'rememberMe')->checkbox([
                              'template' => "<div>{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                          ]) ?>
                      </label>
                    </div>
                  </div><!-- /.col -->
                  <div class="col-xs-4">
                      <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                  </div><!-- /.col -->
                  <?php ActiveForm::end(); ?>
            </div>
        </div><!-- /.login-box-body -->
      </div>
      <div class="col-md-4">
      </div>
    </div>
      
    <!-- </div> --><!-- /.login-box -->
</section>