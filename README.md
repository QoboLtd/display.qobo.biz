Qobo Large Image Display
========================

This is a quick way to display large images, like infographics or design concepts for
websites.

Install
-------

```
git clone git@github.com:QoboLtd/display.qobo.biz.git
composer install
./vendor/bin/phake dotenv:create
```

The index.php script points to the images, using the IMG_PREFIX_URL and IMG_PREFIX_PATH
in your .env file.  Upload your images to Amazon S3, for example, and change the 
variables to point to the folder (full Amazon S3 URL minus the file name).  Now you can 
display the image like so:

http://yourserver/?display=file.jpg

