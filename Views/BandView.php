<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap -->
		<script type="text/javascript" src="../Bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>

		<!-- Vue.js -->
		<script src="https://unpkg.com/vue"></script>

		<!-- My JS -->
		<script type="text/javascript" src="../Js/fb.js"> </script>
		<script type="text/javascript" src="../Js/user.js"> </script>
		
		<title></title>
	</head>
	<body>
		<!-- Test dialogue Vue -->
		<div id="app">
		  {{ message }}
		</div>

		<script type="text/javascript">
			var app = new Vue({
			  el: '#app',
			  data: {
			    message: "Hello World !"
			  }
			})
		</script>

		<!-- Grille groupe https://vuejs.org/v2/examples/grid-component.html -->
			<div id="demo">
			  <demo-grid
			    :data="gridData"
			    :columns="gridColumns"
			    :filter-key="searchQuery">
			  </demo-grid>
			</div>

		<script type="text/javascript" src="../Js/BandView/bandview.js"></script>
	</body>
</html>