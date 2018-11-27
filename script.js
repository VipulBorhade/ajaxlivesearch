function fill(Value) 
{
	$('#search').val(Value);
	$('#display').hide();
}
function fillxml(Value) 
{
	$('#searchxml').val(Value);
	$('#resultxml').hide();
}

//AJAX for SQL
$(document).ready(function() 
{
	$("#search").keyup(function() 
	{
		var name = $('#search').val();
		if (name == "") 
		{
			$("#display").html("");
		}
		else 
		{
			$.ajax
			({
				type: "POST",
				url: "update.php",
				data: {search: name},
				success: function(html)
				{
					$("#display").html(html).show();
				}
			});
		}
	});
});

//AJAX for JSON

$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#searchjson').keyup(function(){
  $('#result').html('');
  // $('#state').val('');
  var searchField = $('#searchjson').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('countries.json', function(data) {
   $.each(data, function(key, value){
    if (value.name.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class">'+value.name+'</li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#searchjson').val($.trim(click_text[0]));
  $("#result").html('');
 });
});


//AJAX for XML
$(document).ready(function() 
{
	$("#searchxml").keyup(function() 
	{
		var name1 = $('#searchxml').val();
		if (name1 == "") 
		{
			$("#resultxml").html("");
		}
		else 
		{
			debugger;
			$.ajax
			({
				type: "POST",
				url: "updatexml.php",
				data: {search: name1},
				success: function(html)
				{
					$("#resultxml").html(html).show();
				}
			});
		}
	});
});