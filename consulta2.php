<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:fisi2022.database.windows.net,1433; Database = Grupo8", "grupo8", "Group8fisi2022");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
	



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sistemas Distribuidos</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Grupo 8</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Consultas</div>
                        <a class="nav-link" href="consulta1.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 1
                        </a>
                        <a class="nav-link" href="consulta2.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 2
                        </a>
                        <a class="nav-link" href="consulta3.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 3
                        </a>
                        <a class="nav-link" href="consulta4.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 4
                        </a>
                        <a class="nav-link" href="consulta5.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 5
                        </a>
                        <a class="nav-link" href="consulta6.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 6
                        </a>
                        <a class="nav-link" href="consulta7.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Consulta 7
                        </a>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
				<div class="card mb-4">
                	<div class="card-header">
                    	<i class="fas fa-table me-1"></i>
                        resultados
                    </div>
					<div class="card-body">
                    	<table id="datatablesSimple">
							<thead>
								<tr>
									<th>Series Name</th>
									<th>Series Code</th>
									<th>Country Name</th>
									<th>Country Code</th>
									<th>Anio 2010</th>
									<th>Anio 2011</th>
									<th>Anio 2012</th>
									<th>Anio 2013</th>
									<th>Anio 2014</th>
									<th>Anio 2015</th>
									<th>Anio 2016</th>
									<th>Anio 2017</th>
									<th>Anio 2018</th>
									<th>Anio 2019</th>
									<th>Anio 2020</th>
								</tr>
							</thead>
							
							<tbody>
								<?php
									//Captar la consulta
									$stmt = $conn->query("Select * From Data where SERIES_NAME like '%Age at first marriage%' and SERIES_NAME like '% male %' ");
									$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
									foreach($stmt as $fila){
								?>
										<tr>
											<td><?php echo $fila['SERIES_NAME'] ?></td>
											<td><?php echo $fila['SERIES_CODE'] ?></td>
											<td><?php echo $fila['COUNTRY_NAME'] ?></td>
											<td><?php echo $fila['COUNTRY_CODE'] ?></td>
											<td><?php echo $fila['ANIO2010'] ?></td>
											<td><?php echo $fila['ANIO2011'] ?></td>
											<td><?php echo $fila['ANIO2012'] ?></td>
											<td><?php echo $fila['ANIO2013'] ?></td>
											<td><?php echo $fila['ANIO2014'] ?></td>
											<td><?php echo $fila['ANIO2015'] ?></td>
											<td><?php echo $fila['ANIO2016'] ?></td>
											<td><?php echo $fila['ANIO2017'] ?></td>
											<td><?php echo $fila['ANIO2018'] ?></td>
											<td><?php echo $fila['ANIO2019'] ?></td>
											<td><?php echo $fila['ANIO2020'] ?></td>
										</tr>
								<?php
									}
								
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Series Name</th>
									<th>Series Code</th>
									<th>Country Name</th>
									<th>Country Code</th>
									<th>Anio 2010</th>
									<th>Anio 2011</th>
									<th>Anio 2012</th>
									<th>Anio 2013</th>
									<th>Anio 2014</th>
									<th>Anio 2015</th>
									<th>Anio 2016</th>
									<th>Anio 2017</th>
									<th>Anio 2018</th>
									<th>Anio 2019</th>
									<th>Anio 2020</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>	
	
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
