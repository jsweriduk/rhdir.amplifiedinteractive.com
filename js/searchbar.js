  <script>

  // (a) put default input focus on the state field
 // $(document).ready(function(){
 //   $('#keywords').focus();
 // });


  // (b) jquery ajax autocomplete implementation
  $(document).ready(function() {
    // tell the autocomplete function to get its data from our php script
  /*  $('#keywords').autocomplete({
    source: "ajax/facSearch.php",
    minLength: 3
    });
  */

    $("#keywords").autocomplete({
    //    source: "ajax/facSearch.php",
        source: "ajax/facSearch.php",
        minLength: 3,
        select: function(event, ui) {
            //$("#fac_id").val(ui.item.id);
            $("#keywords").val(ui.item.facName);
        }
    });

  });

$(document).ready(function() {
    $('#keywords').keydown(function(e) {

    if (e.which === 13) {
        var str = $('#keywords').val();
        window.location = "facdetails.php?fac=" + str;
    
        return false;
    }
   });
});


  $(document).ready(function() {
    // tell the autocomplete function to get its data from our php script
    $('#state').autocomplete({
      source: "ajax/stateSearch.php"
    });
  });


$(document).ready(function() {
    $('#state').keydown(function(e) {

    if (e.which === 13) {
        var str = $('#state').val();
        window.location = "search.php?state=" + str;
    
        return false;
    }
   });
});

  $(document).ready(function() {
    // tell the autocomplete function to get its data from our php script
    $('#city').autocomplete({
      source: "ajax/citySearch.php"
    });
  });
/*
$(document).ready(function() {
    $('#city').on('click', function() {

        var str = $('#city').val();
        window.location = "facilities.php?city=" + str;
    
   });
});
*/
$(document).ready(function() {
    $('#city').keydown(function(e) {

    if (e.which === 13) {
        var str = $('#city').val();
        window.location = "facilities.php?city=" + str;
    
        return false;
    }
   });
});


  $(document).ready(function() {
    // tell the autocomplete function to get its data from our php script
    $('#zip').autocomplete({
      source: "ajax/zipSearch.php"
    });
  });

$(document).ready(function() {
    $('#zip').keydown(function(e) {

    if (e.which === 13) {
        var str = $('#zip').val();
        window.location = "facilities_zip.php?zip=" + str;
    
        return false;
    }
   });
});

</script>
