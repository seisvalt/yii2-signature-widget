<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>


Yii2 Signature
==============
Draw and save signatures in Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist seisvalt/yii2-signature "dev-master"
```

or add

```
"seisvalt/yii2-signature": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= seisvalt\widgets\SignatureWidget::widget([
    'clear' => true, 
    'url' => 'urlpost.com', 'save_server' => true
]) ?>
```

Options available

url string  
width string  
height string  
save_server boolean
clear boolean
description boolean  
token string
