<!DOCTYPE html>
<html lang="en" data-framework="angular2">
	<head>
		<meta charset="utf-8">
		<title>Lista de Compras</title>
		<link rel="stylesheet" href="node_modules/todomvc-common/base.css">
		<link rel="stylesheet" href="node_modules/todomvc-app-css/index.css">
		<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script>
			var todoGlobal = JSON.parse(JSON.stringify(<?php echo file_get_contents('data.json'); ?>)  || '[]');
		</script>
		<script charset="utf-8" src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
		<script charset="utf-8" src="node_modules/systemjs/dist/system.src.js"></script>
		<script charset="utf-8" src="node_modules/rxjs/bundles/Rx.js"></script>
		<script charset="utf-8" src="node_modules/angular2/bundles/angular2.dev.js"></script>
	</head>
	<body>
		<todo-app></todo-app>
		<script>
			System.config({
				packages: {
					'app': {
						format: 'cjs',
						defaultExtension: 'js'
					}
				}
			});
			System.import('app/bootstrap');
		</script>
	</body>
</html>