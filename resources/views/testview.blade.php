@extends("layout/master")

	@section("body")
		<div class="container">
			<div class="row">
				<h1 class="text-primary">Hello Here We Are test view that access by test controller </h1>

				<?php print_r($name);?> <br>
				<?php print_r($marks);?>
			</div>
		</div>
	@endsection
