<!DOCTYPE html>
<html lang="no">

<head>
	<meta charset="utf-8">
    <title>aID.no</title>
    <?php include("inc/head.php"); ?>
</head>
<body>

	<?php include("inc/header.php"); ?>

	<?php include("inc/aid-header.php"); ?>

	<div class="content">

		<div class="group">
			
			<div class="hd">

				<h2 class="text-m">Endre detaljer om meg</h2>

			</div>

			<div class="bd">

				<form>
					
					<div class="input-wrapper">
						<label class="fullwidth input-label" for="birth">Fødselsdato</label>
						<input class="fullwidth input-field" name="birth" type="text">
					</div>

					<div class="input-wrapper">
						<label class="fullwidth input-label" for="mobile">Mobilnummer</label>
						<input class="fullwidth input-field" name="mobile" type="tel">
					</div>

					<div class="input-wrapper">
						<label class="fullwidth input-label" for="email">E-post</label>
						<input class="fullwidth input-field" name="email" type="text">
					</div>

					<div class="input-wrapper">
						<label class="fullwidth input-label" for="password">Nytt passord</label>
						<input class="fullwidth input-field" name="password" type="password">
					</div>

					<div class="input-wrapper">
						<label class="fullwidth input-label" for="password">Gjenta passord</label>
						<input class="fullwidth input-field" name="password" type="password">
					</div>
					
					<div class="fullwidth">

						<button class="btn" type="submit">Lagre endringer</button>

						<a href="profile.php">Avbryt</a>

					</div>

				</form>

			</div>

		</div>

	</div>

</body>
</html>