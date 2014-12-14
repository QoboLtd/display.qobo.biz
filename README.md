Qobo Long Image Display
=======================

This is a quick way to display long images, like infographics or design concepts for
scrolling sites.

Install
-------

```
git clone git@github.com:QoboLtd/display.qobo.biz.git
composer instal
./vendor/bin/phake dotenv:create
```

The index.php script points to the images, using the IMG_PREFIX in your .env file.
Upload your images to Amazon S3, for example, and change the IMG_PREFIX to point to
the folder (full Amazon S3 URL minus the file name).  Now you can display the image
like so:

http://yourserver/?display=file.jpg

