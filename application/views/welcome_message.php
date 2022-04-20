<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://unpkg.com/@yaireo/tagify"></script>
	<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
	<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
	<title>Hello, world!</title>
</head>

<body>

	<div class="container m-5">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<form action="<?= base_url(); ?>index.php/welcome/save" method="post">

							<div class="mb-3">
								<label for="tags" class="form-label">Tag</label>
								<input name="tags[]" placeholder="Tag" class="tags">
							</div>
							<div class="mb-3">
								<label for="name" class="form-label">Nama</label>
								<input name="name[]" class="form-control" placeholder="Nama" id="name" aria-describedby="button-addon2">

							</div>


							<div id="nextkolom" name="nextkolom"></div>
							<input type="text" id="jumlahkolom" class="d-none" value="1"></input>

							<div class="mb-3">
								<button type="button" class="btn btn-info tambah-form">Tambah Form</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		addTag();
		$(document).ready(function() {
			var i = 2;
			$(".tambah-form").on('click', function() {
				row = '<div class="rec-element">' +
					'<hr class="bg-danger border-2 border-top border-danger">' +
					'<div class="mb-3">' +
					'<label for="tags" class="form-label">Tag</label>' +
					'<input name="tags[]" placeholder="Tag" class="tags' + i + '">' +
					'</div>' +
					'<div class="mb-3">' +
					'<label for="name" class="form-label">Nama</label>' +
					'<div class="input-group">' +
					'<input name="name[]" class="form-control" placeholder="Nama" id="name" aria-describedby="button-addon2">' +
					'<button class="btn btn-danger del-element" type="button" id="button-addon2">Hapus</button>' +
					'</div>' +
					'</div>' +
					'</div>';
				$(row).insertBefore("#nextkolom");
				$('#jumlahkolom').val(i + 1);
				addTagCustom(i);
				i++;


			});

			$(document).on('click', '.del-element', function(e) {
				e.preventDefault()
				i--;
				$(this).parents('.rec-element').remove();
				$('#jumlahkolom').val(i - 1);
			});




		});



		function addTag() {
			var input = document.querySelector('.tags');
			var tagify = new Tagify(input);
		}

		function addTagCustom(i) {
			var input = document.querySelector('.tags' + i);
			var tagify = new Tagify(input);
		}
	</script>
</body>

</html>