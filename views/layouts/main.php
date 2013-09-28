<?php
/**
 * @var CController $this
 * @var string $content
 */

Yii::app()->getClientScript()
	->addPackage('yii2-debug', array(
		'baseUrl' => CHtml::asset(Yii::getPathOfAlias('yii2-debug.assets')),
		'js' => array(
			YII_DEBUG ? 'js/bootstrap.js' : 'js/bootstrap.min.js',
            'js/filter.js',
		),
		'css' => array(
			YII_DEBUG ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
			'css/main.css',
		),
		'depends' => array('jquery'),
	))
	->registerPackage('yii2-debug');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= Yii::app()->language ?>" lang="<?= Yii::app()->language ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="<?= Yii::app()->language ?>" />
	<title><?= CHtml::encode($this->pageTitle) ?></title>
</head>
<body>
	<?= $content ?>
</body>
</html>
