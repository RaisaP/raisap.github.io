	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery_ui.css" type='text/css' />
	<link rel="stylesheet" href="css/style_ui.css" type='text/css' />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	
	<!--<script type="text/javascript" src="js/site.js"></script>-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	
	<script type="text/javascript" src="js/myscript.js"></script>
	<!--/script-->
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
	</script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script>
  $( function() {
    /*function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#result_form" );
      $( "#result_form" ).scrollTop( 0 );
    }*/
 
    $( "#country" ).autocomplete({
       source: [ "Россия", "Англия", "Греция", "Ангола", "Франция" ],
      minLength: 2,
      /*select: function( event, ui ) {
        log( "Selected: " + ui.item.value + " aka " + ui.item.id );
      }*/
    });
  } );
  </script>

<!---->
</head>
<body>
