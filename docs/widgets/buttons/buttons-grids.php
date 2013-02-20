<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buttons in grids - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
	<style>
		.mygrid > div {
			text-align: center;
		}
	</style>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" class="jqm-header">
		<h1>Buttons in grids</h1>
		<a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
		<?php include( '../../search.php' ); ?>
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">

			<h2>Grid D</h2>

			<div data-demo-html="true">
				<div class="ui-grid-d">
					<div class="ui-block-a"><button data-icon="home" data-iconpos="notext">Button</button></div>
					<div class="ui-block-b"><button data-icon="arrow-l" data-iconpos="notext">Button</button></div>
					<div class="ui-block-c"><button data-icon="grid" data-iconpos="notext">Button</button></div>
					<div class="ui-block-d"><button data-icon="arrow-r" data-iconpos="notext">Button</button></div>
					<div class="ui-block-e"><button data-icon="gear" data-iconpos="notext">Button</button></div>
				</div>
			</div><!--/demo-html -->

			<h2>Grid C</h2>

			<h3>Inline, centered</h3>

			<div data-demo-html="true" data-demo-css="true">
				<div class="ui-grid-c mygrid">
					<div class="ui-block-a"><button data-icon="home" data-iconpos="notext" data-inline="true">Button</button></div>
					<div class="ui-block-b"><button data-icon="arrow-l" data-iconpos="notext" data-inline="true">Button</button></div>
					<div class="ui-block-d"><button data-icon="arrow-r" data-iconpos="notext" data-inline="true">Button</button></div>
					<div class="ui-block-e"><button data-icon="gear" data-iconpos="notext" data-inline="true">Button</button></div>
				</div>
			</div><!--/demo-html -->

			<h2>Grid B</h2>

			<h3>Mini sized</h3>

			<div data-demo-html="true">
				<div class="ui-grid-b">
					<div class="ui-block-a"><a href="#" data-role="button" data-mini="true">Anchor</a></div>
					<div class="ui-block-b"><button data-mini="true">Button</button></div>
					<div class="ui-block-c"><input type="button" data-mini="true" value="Input"></div>
				</div>
			</div><!--/demo-html -->

			<h2>Grid A</h2>

			<div data-demo-html="true">
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<label for="grid-select-1" class="ui-hidden-accessible">Grid select 1</label>
						<select id="grid-select-1" name="grid-select-1">
							<option>Select</option>
							<option value="1">The 1st Option</option>
							<option value="2">The 2nt Option</option>
							<option value="3">The 3rd Option</option>
							<option value="4">The 4th Option</option>
						</select>
					</div>
					<div class="ui-block-b"><a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right">Button</a></div>
				</div>
			</div><!--/demo-html -->

			<h3>Mini sized</h3>

			<div data-demo-html="true">
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<label for="grid-select-2" class="ui-hidden-accessible">Grid select 2</label>
						<select id="grid-select-2" name="grid-select-2" multiple="multiple" data-native-menu="false" data-mini="true">
							<option>Select mini</option>
							<option value="1">The 1st Option</option>
							<option value="2">The 2nt Option</option>
							<option value="3">The 3rd Option</option>
							<option value="4">The 4th Option</option>
						</select>
					</div>
					<div class="ui-block-b"><a href="#" data-role="button" data-mini="true" data-icon="arrow-r" data-iconpos="right">Button mini</a></div>
				</div>
			</div><!--/demo-html -->

			<h3>Without ui-block</h3>

			<div data-demo-html="true">
				<div class="ui-grid-a">
					<label for="grid-select-3" class="ui-hidden-accessible">Grid select 3</label>
					<select id="grid-select-3" name="grid-select-3" multiple="multiple" data-native-menu="false">
						<option>Select</option>
						<option value="1">The 1st Option</option>
						<option value="2">The 2nt Option</option>
						<option value="3">The 3rd Option</option>
						<option value="4">The 4th Option</option>
					</select>
				</div>
			</div><!--/demo-html -->

			<h2>Grid Solo</h2>

			<div data-demo-html="true">
				<div class="ui-grid-solo">
					<div class="ui-block-a">
						<a href="#" data-role="button">Button</a>
					</div>
					<div class="ui-block-a">
				   		<a href="#" data-role="button" data-mini="true">Button, mini sized</a>
					</div>
				</div>
			</div><!--/demo-html -->

			<h3>Without ui-block</h3>

			<div data-demo-html="true">
				<div class="ui-grid-solo">
					<a href="#" data-role="button">Button</a>
					<a href="#" data-role="button" data-mini="true">Button, mini sized</a>
				</div>
			</div><!--/demo-html -->

			<h2>Alignment</h2>

			<div data-demo-html="true">
				<div class="ui-grid-b">
					<div class="ui-block-a"><a href="#" data-role="button">Grid B</a></div>
					<div class="ui-block-b"><a href="#" data-role="button">Grid B</a></div>
					<div class="ui-block-c"><a href="#" data-role="button">Grid B</a></div>
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a"><a href="#" data-role="button">Grid A</a></div>
					<div class="ui-block-b"><a href="#" data-role="button">Grid A</a></div>
				</div>
				<div class="ui-grid-solo">
					<a href="#" data-role="button">Grid Solo</a>
				</div>
				<a href="#" data-role="button">Without grid</a>
			</div><!--/demo-html -->

	</div><!-- /content -->

	<div data-role="footer" class="jqm-footer">
		<p class="jqm-version"></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->

</div><!-- /page -->
</body>
</html>
