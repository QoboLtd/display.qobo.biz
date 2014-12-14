<?php
// Composer
require_once 'vendor/autoload.php';

// Load .env variables
try {
	Dotenv::load(__DIR__);
	Dotenv::required('IMG_PREFIX');
}
catch (\Exception $e) {
	echo "Failed to load environment configuration.";
	die();
}

$img = '';
if (!empty($_GET['display'])) {
	$img = getenv('IMG_PREFIX') . basename($_GET['display']);
}
?>
<!doctype html5>
<html>
	<head>
		<title>Qobo Long Image Display</title>
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
