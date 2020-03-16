        <footer class="page-footer blue darken-1">
          <div class="footer-copyright">
            <div class="container">
            	<center>
            		© NHLStendenTwitter
            	</center>
            </div>
          </div>
        </footer>
  </body>
</html>
<script type="text/javascript">
	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
	}
	$("#fileToUpload").change(function() {
	    readURL(this);
	});

    $('#message').val('New Text');
    M.textareaAutoResize($('#message'));
</script>
