<script>
    $( document ).ready(function() {
        
        $('#profiles').hide();
        
    });
    $("#newsletter-popup").submit(function(stay){
        stay.preventDefault();
        //var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
        $('.loading-imagers').show();
        var formdata = $(this).serialize();
        $.ajax({
            async: false,
            type: 'POST',
            url: "{{url('/')}}/news-letters",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (results) {
                
                $('#newsletter-span').html('Successful!');
                
                $("#profiles").show("slow",function(){
                    // Animation complete.
                });
                $(".loading-imagers").hide("slow",function(){
                    // Animation complete.
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
              result = false;
            }
        });
    });
</script>

<script>
	$("form").each(function() {
		$(this).find(':input[type="submit"]').prop('disabled', true);
	});
	function correctCaptcha() {
		$("form").each(function() {
			$(this).find(':input[type="submit"]').prop('disabled', false);
		});
	}
</script>