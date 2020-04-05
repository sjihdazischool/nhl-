<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-begin">
        <strong>SjihdaziAPI</strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>json en xml api documentatie</h1>
      <p class="lead text-muted">Hieronder voorbeelden hoe deze api gebruikt moet worden.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container col-11">

      <div class="row text-center">
        <div class="col-md-12">
          <div class="card shadow-sm">
            <div class="card-body">
				<table class="table mb-5">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">method</th>
							<th scope="col">type</th>
							<th scope="col">route</th>
							<th scope="col">description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" class="align-middle">1</th>
							<td class="align-middle">GET</td>
							<td class="align-middle">JSON/XML</td>
							<td class="align-middle">
								<a href="http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/json">
									http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/bevolking_kerncijfers/api/json
								</a>
								<br>
								<a href="http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/xml">
									http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/bevolking_kerncijfers/api/xml
								</a>
							</td>
							<td class="align-middle">
								Een functie om data in xml of json op te halen.<br>
								Er kan ook nog een specifiek jaar weergegeven worden door de parameter ?year= mee te geven.
							</td>
						</tr>
						<tr>
							<th scope="row" class="align-middle">2</th>
							<td class="align-middle">POST</td>
							<td class="align-middle">JSON</td>
							<td class="align-middle">
								<a href="http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/create">
									http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/create
								</a>
							</td>
							<td class="align-middle">
								Een functie om records toe te voegen door middel van json.<br>
								Kijk voor de in te voegen data en datastructuur bij de get functie van de categorie.
							</td>
						</tr>
						<tr>
							<th scope="row" class="align-middle">3</th>
							<td class="align-middle">PUT</td>
							<td class="align-middle">JSON</td>
							<td class="align-middle">
								<a href="http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/update">
									http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/update
								</a>
							</td>
							<td class="align-middle">
								Een functie om een record bij te werken door middel van json.<br>
								Kijk voor de in te voegen data en datastructuur bij de get functie van de categorie.
							</td>
						</tr>
						<tr>
							<th scope="row" class="align-middle">4</th>
							<td class="align-middle">DELETE</td>
							<td class="align-middle">Parameter</td>
							<td class="align-middle">
								<a href="http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/delete">
									http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api/bevolking_kerncijfers/delete
								</a>
							</td>
							<td class="align-middle">
								Een functie om een record te verwijderen door middel van een parameter mee te geven.<br>
								Dit doe je door de ?delete=(het jaar waar je de data van wilt verwijderen) parameter mee te geven. 
							</td>
						</tr>
					</tbody>
				</table>
				<p>
					Er zijn drie categorie&#235;n aan data beschikbaar: <b>overheidsfinancien</b>, <b>bevolking_kerncijfers</b> en <b>bevolkingsontwikkeling</b>.
				</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="footer">
	<div class="footer-copyright text-center"> 2020 Copyright:
		<a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

</body>
</html>