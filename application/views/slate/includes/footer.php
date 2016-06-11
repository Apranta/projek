<footer id="footer">
		    <div class="container">
		      <div class="pull-left">
		      <strong><?php echo system_author; ?> &copy; <?php echo date('Y'); ?> - <?php echo system_title; ?>.</strong> All rights reserved.
		       
		      </div>
		      <div class="pull-right">
		        Version <?php echo system_version." | Elapsed time : ".$this->benchmark->elapsed_time()." seconds"; ?>
		      </div>
		    </div>
		  </footer>
		<script type="text/javascript">
			var docHeight = $(window).height();
			var footerHeight = $('#footer').height();
			var footerTop = $('#footer').position().top + footerHeight;

			if (footerTop < docHeight) {
				$('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
			}
			
			$("#topContainer").css("height", $(window).height());
			$(".contentContainer").css("min-height", $(window).height());

		</script>	
</body>
</html>