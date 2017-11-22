		<footer class=" ">
			<div class="row">
				<div class="col-lg-12col-md-12 col-sm-12 ">
					<em class="fa fa-copyright" aria-hidden="true"></em> 2017 Sistema de Información Interna | Instituto Queretano de las Mujeres
				</div>
			</div>
		</footer>
	</div>	<!--/.main-->
	<script src="<?= base_url()?>recursos/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url()?>recursos/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>recursos/js/chart.min.js"></script>
	<script src="<?= base_url()?>recursos/js/chart-data.js"></script>
	<script src="<?= base_url()?>recursos/js/easypiechart.js"></script>
	<script src="<?= base_url()?>recursos/js/easypiechart-data.js"></script>
	<script src="<?= base_url()?>recursos/js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url()?>recursos/js/custom.js"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
		};
	</script>
</body>
</html>