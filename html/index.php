<?php
	include "../lang/lang.php";
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-hk">

<head>

	<!--META + CSS-->
	<?php include "../include/common/include_css.html" ?>

	<!--Individual-->
	<!--<link rel="stylesheet" href="../css/index.css" type="text/css" />-->
	
	<title>Site Title</title>
</head>

<body ontouchstart="">
	
	<div class="wrapper template">
		
		<div class="main">
			<?php include "include/header.php" ?>

			<div class="content">

				<div class="innerContent">
					
					<?php echo $i18n['sample'];?>
					
					<?php include "include/footer.php" ?>
					<?php include "include/popup.php" ?>
					
				</div>
				
			</div>

		</div>
		
	</div>
	
	<!--JS-->
	<?php include "../include/common/include_js.html" ?>
	
	<script type="text/javascript">
		$(document).ready(init_fn);

		function init_fn() {
			
			common_init();
			
		}
	</script>
</body>

</html>
