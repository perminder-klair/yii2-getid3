getID3() for Yii2
=================
getID3() Extention for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist perminder-klair/yii2-getid3 "*"
```

or add

```
"perminder-klair/yii2-getid3": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
$getID3 = new Yii2GetID3();
$getID3->getData('./path/file.mp3');```