<?php 
include('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<link rel="icon" href="ikon.png" />
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->
		<link rel="stylesheet" href="gaya.css" type="text/css" media="screen" />

				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script type="text/javascript" src="redips-drag-min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<title>Javelin Board - by hamdan nurachi</title>
	</head>
	<body>
		<!-- tables inside this DIV could have drag-able content -->
		<i><h4 align="center">Javelin Experiment Board</i> <span class="badge badge-danger">Sumedang Smart Citizen</span></h4>

		<div id="redips-drag">
			<!-- left container -->
			
			<!-- right container -->
			
				<table id="table2">
					<colgroup>
						<col width="300"/>
						<col width="20"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
					</colgroup>
					<tbody>
						<!--
					<tr>
							<th colspan="7" class="redips-mark">Sumedang Smart Citizen</th>
							
					</tr>-->
						<tr class="rl">
							<td class="redips-mark">
								<a href="crud" class="badge badge-pill badge-light" target="_blank">+data</a> 
							Brainstorming</td>
							<td class="redips-mark ungu1">Experimen</td>
							<td class="redips-mark ungu">1</td>
							<td class="redips-mark ungu1">2</td>
							<td class="redips-mark ungu">3</td>
							<td class="redips-mark ungu">4</td>
							<td class="redips-mark ungu1">5</td>
						</tr>
					<tr>
						<td class="redips-single">

							<p>Who is your customer? Be as specific as possible. </p>
							<?php

							$sql = "SELECT * FROM customer";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange aa alert alert-secondary'>" . $row['isi'] . "</div>";


							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark aa">Customer</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

					</tr>

					<tr>
						<td class="redips-single">
							<p>What is the problem? Phrase it from your customers perspective.</p>
							<?php

							$sql = "SELECT * FROM problem";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange bb alert alert-primary'>" . $row['isi'] . "</div>";
							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark bb">Problem</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

					</tr>

					<tr>
						<td class="redips-single">
							<p>Define the solution only after you have validated a problem worth solving. </p>
							<?php

							$sql = "SELECT * FROM solution";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange cc alert alert-success'>" . $row['isi'] . "</div>";
							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark cc">Solution</td>
						<td class="redips-mark" style="background: grey"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

					</tr>

					<tr>
						<td class="redips-single">
							<p>List the assumptions that must hold true, for your hypothesis to be true.</p>
							<?php

							$sql = "SELECT * FROM risk";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange pink alert alert-danger'>" . $row['isi'] . "</div>";
							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark pink">Riskiest Assumption	</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="redips-single">
							<p></p>
							<?php

							$sql = "SELECT * FROM method";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange  alert alert-danger'><b>" . $row['isi'] . "</b></div>";
							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark pink">Method & Success Criterion</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="redips-single">
							<p></p>
							<?php

							$sql = "SELECT * FROM result";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange alert alert-dark'> <b>" . $row['isi'] . "</b></div>";
							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark yellow">Result & Decision</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="redips-single">
							<p></p>
							<?php

							$sql = "SELECT * FROM learning";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							    	echo "<div id='a' class='redips-drag redips-clone orange yellow alert alert-warning'>" . $row['isi'] . "</div>";
							    }
							} else {
							    echo "tidak ada data";
							}
							
							?>
						</td>
						<td class="redips-mark yellow">Learning</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>


					<tr>
						<td class="redips-trash">Trash</td>
					</tr>
</tbody>
				</table>
		</div>
	</body>
</html>