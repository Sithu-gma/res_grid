<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grid</title>
	<style>
		*{
			margin:0;
			padding: 0;
		}
		
		.wrap{
			display: grid;
			grid-template-columns: 200px 480px 200px ;
			grid-template-rows: 120px 400px;
			grid-gap: 10px;		
			text-align: center;
		}
		.box{
			background: red;

		}
			
		.a{
			grid-column: 1/4;
			line-height: 80px;

		}
		.subwrap{
			display: grid;
			grid-column: 1/4;
			grid-template-columns: 50% 50%;
			background: pink;
			height: 100px;
			
		}
		
		
		.b, .d, .f {
			background: blue;
		}
		.g{
			grid-column: 1/4;
			background: green;
			height: 60px;
		}

	</style>
</head>
<body>
	<div class="wrap">
		<div class="box a">Header</div>
		<div class="box b">B</div>
		<div class="box c">C</div>
		<div class="box d">D</div>
		<div class="subwrap">
			<div class="box e">E</div>
			<div class="box f">F</div>
		</div>
			<div class="box g">Footer</div>
	</div>
</body>
</html>