<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="generator" content="Eregansu" />
		<link rel="stylesheet" type="text/css" href="<?php echo $templates_iri; ?>nexgenta/screen.css" media="screen" />
		<title><?php e($title); ?></title>
	</head>
	<body class="error">
		<div id="surround">
			<div class="section">
				<h2>Error: <?php e($title); ?></h2>
				<p><?php e($desc); ?></p>
				<p><pre><?php print_r($request); ?></pre></p>
			</div>
		</div>
	</body>
</html>

