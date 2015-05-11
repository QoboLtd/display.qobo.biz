<?php
// Composer
require_once 'vendor/autoload.php';

// Load .env variables
try {
	Dotenv::load(__DIR__);
	Dotenv::required(['IMG_PREFIX_LOCAL', 'IMG_PREFIX_URL', 'IMG_PREFIX_PATH']);
}
catch (\Exception $e) {
	echo "Failed to load environment configuration.";
	die();
}

$img = '';
if (!empty($_GET['display'])) {
	if (getenv('IMG_PREFIX_LOCAL')) {
		$img = realpath(getenv('IMG_PREFIX_PATH') . $_GET['display']);
		if ($img) {
			// Remove full filesystem path
			$img = str_replace(getcwd(), '', $img);
		}
	}
	else {
		$img = getenv('IMG_PREFIX_PATH') . $_GET['display'];
	}

	if ($img) {
		// Prefix URL
		$img = getenv('IMG_PREFIX_URL') . $img;
	}
}
?>
<!doctype html5>
<html>
	<head>
		<title>Qobo Large Image Display</title>
		<meta name="robots" content="noindex">
		<style>
			* { margin: 0px; padding: 0px; border: 0px; }
			body { text-align: center; }
			img { width: 100%; }
		</style>
	</link>
	<body>
		<?php if ($img) : ?>
			<img src="<?php echo $img; ?>">
		<?php else : ?>
			<b>Nothing to display.</b>
			Why don't you look at <a href="?display=beer.jpg">this</a> for now? :)
		<?php endif; ?>
	</body>
</html>
