	<!-- Global Libs -->
		<!-- Add your global JS libs here -->
	<!-- Global Libs -->

	<!-- Global JS -->
		<script src="./assets/js/other/helpers.js"></script>
		<script src="./assets/js/other/handler.js"></script>
		<script src="./assets/js/components/topnav.js"></script>
	<!-- Global JS -->

	<!-- Individual Page JS -->
		<script src="./assets/js/pages/<?php echo $page; ?>/_<?php echo $page; ?>.js"></script>
	<!-- Individual Page JS -->
	
	<!-- Specific JS *** -->
		<?php if($page == "index") { ?>
			<!-- Add your specific JS libs here -->
		<?php } ?>
	<!-- Specific JS *** -->
	
</body>
