<?php
   namespace frontend\widgets;
   use yii\base\Widget;
   use yii\helpers\Html;

   class headerbottomWidget extends Widget
   {
      public $message;

      public function inir()
      {
        parent::init();
      }

      public function run()
      {
        return $this->render('headerbottomWidget');
      }
   }
?>
