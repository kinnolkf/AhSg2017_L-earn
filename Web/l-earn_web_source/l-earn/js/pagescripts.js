
$( "#menu_toggle" ).click(function() {
  if($( "#smalllogo" ).hasClass( "hide" ))
  {
	  $( "#smalllogo" ).removeClass( "hide" );
	  $( "#biglogo" ).addClass( "hide" );
  }
  else
  {
	  $( "#biglogo" ).removeClass( "hide" );
	  $( "#smalllogo" ).addClass( "hide" );
  }
});

function TriggerAlert(alertCount)
{
	//
	$('#alertCountField').html(alertCount);
	var $div2blink = $("#alertPanel");
	var backgroundInterval = setInterval(function(){
		$div2blink.toggleClass("alertbackground");
	},800);
}

//
$( "#alertPanel" ).click(function() {
	var alertCount = $('#alertCountField').html();
	if(alertCount > 0)
	{
		window.location.href = "notification.php";
	}
});