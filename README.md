# Yii2 Date/Time Picker Widget
Date/Time Picker widget for Yii2 framework
Based on [Eonasdan's Bootstrap 3 Date/Time Picker](https://github.com/Eonasdan/bootstrap-datetimepicker)
![DateTimePicker](http://i.imgur.com/nfnvh5g.png)

Demo
----
Since this is a part of [yii2-starter-kit](https://github.com/trntv/yii2-starter-kit) it's demo can be found in starter
kit demo [here](http://backend.yii2-starter-kit.terentev.net/article/create).

```
Login: webmaster
Password: webmaster
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require trntv/yii2-datetime-widget
```

or add

```
"trntv/yii2-datetime-widget": "*"
```

to the require section of your `composer.json` file.


## Usage

Once the extension is installed, simply use it in your code by  :

```php
<?php echo $form->field($model, 'attribute')->widget(
        'trntv\yii\datetime\DateTimeWidget',
        [ ... options ... ]
    ); 
?>
```

## Options
``phpDatetimeFormat`` - PHP ICU datetime format (Default: ``dd.MM.yyyy, HH:mm``)

``momentDatetimeFormat`` - Moment JS datetime format (Default: ``DD.MM.YYYY, HH:mm``)

``showAddon`` - show or hide input-addon (Default: ``true``)

``addonContent`` - addon content

``phpMomentMapping`` - formats map (Default: ``true``)

``containerOptions`` - widget container options

``clientOptions`` - [full list of available options](http://eonasdan.github.io/bootstrap-datetimepicker/Options/)

## Examples
ActiveField input widget:
```php
<?php echo $form->field($model, 'datetime')->widget(
    'trntv\yii\datetime\DateTimeWidget',
    [
        'phpDatetimeFormat' => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
        'clientOptions' => [
            'minDate' => new \yii\web\JsExpression('new Date("2015-01-01")'),
            'sideBySide' => true,
            'widgetPositioning' => [
               'horizontal' => 'auto'
               'vertical' => 'auto'
            ]
    ]
]); ?>
```
Standalone widget for date only:
```php
<?php echo trntv\yii\datetime\DateTimeWidget::widget([
    'phpDatetimeFormat' => 'yyyy-MM-dd',
]) ; ?>
```
