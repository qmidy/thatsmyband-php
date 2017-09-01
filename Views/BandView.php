<!DOCTYPE html>
<html>
	<head>
		<!-- My JS -->
		<script type="text/javascript" src="../Js/fb.js"> </script>
		<script type="text/javascript" src="../Js/user.js"> </script>

		<!-- Bootstrap -->
		<script type="text/javascript" src="../Bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>

		<!-- Vue.js -->
		<script src="https://unpkg.com/vue"></script>
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
		<band-grid>

		</band-grid>
	</body>
</html>