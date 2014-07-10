Simple Image Display
====================

Show all the images in specifics folders based on page name.

Install
=======

Download and place 'banner.php' inside:
```
/fuel/app/views/inc/
```

Usage
=====

Once installed, simply include the file:
```
<?= render('inc/banner') ?>
```

Then watch the magic work straight away!

This plugin is used to work out of the box with [zRS Slider!](https://github.com/WsCandy/zRSv2)

Example
=======

HTML:
```
<section class="banner">
	<?= render('inc/banner'); ?>
</section>
```

jQuery:
```
$('.banner').zRS();
```

Structure
=========

The plugin works out of the box by getting the files from:
```
/assets/img/transitions/ 'PAGE NAME' /
```

And display then as images inside a div called 'inner-slider'.