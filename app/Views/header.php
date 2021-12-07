<?php
if (!isset($pageid)) {
	$pageid = 0;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php echo base_url('./Images/logo.png'); ?>" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

	<style type="text/css">
		body {
			background-image: url('<?php echo base_url('./Images/capaswl.png') ?>');
			background-size: cover;
		}

		.txt-nunito {
			font-family: 'Nunito', sans-serif;
		}

		.bg-blue {
			background-color: #145da0;
		}
		.bg-footer {
			background-color: #dee5ea;
		}

		.title {
			font-weight: bold;
			font-size: 26pt;
			text-transform: uppercase;

		}

		.slogan {
			text-transform: uppercase;
		}

		.txt-dec-underline-blue {
			text-decoration: underline;
			text-decoration-color: #2e8bc0;
		}
	</style>


	<title>
		<?php
		echo isset($title) ? $title : "JaGO - Ready you GO";
		?>
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark text-light bg-blue rounded">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php echo base_url('./') ?>">
						<img src="<?php echo base_url('./Images/logo.png'); ?>" alt="Home" height="30" class="d-inline-block align-text-top me-2">
						JaGO
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link <?php echo $pageid == 0 ? 'active' : '' ?>" aria-current="page" href="<?php echo base_url('./') ?>">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php echo $pageid == 1 ? 'active' : '' ?>" aria-current="page" href="<?php echo base_url('./Home/viaje') ?>">Viaje Conosco</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php echo $pageid == 2 ? 'active' : '' ?>" aria-current="page" href="<?php echo base_url('./Home/contato') ?>">Contato</a>
							</li>

						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class='container mt-4 bg-light p-3 rounded'>
			<?php if (isset($msg) && isset($cor)) : ?>
				<div class='alert <?php echo $cor ?>' role='alert'>
					<?php echo $icon .  $msg ?>
				</div>
			<?php endif; ?>