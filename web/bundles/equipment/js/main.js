$(document).ready(function() {
    getDevices();
});

function getDevices()
{
   var deviceArray = new Array();
   $.ajax({
    type : 'GET',
    url  : '/equipment/all',
    dataType : 'json',
    success  : function ( data ) {

        $.each( data, function( i, itemData ) {
            //Get original DIV
            var html_item = $("#json_list_template");
            
            //Change values
            html_item.find( "h3" ).replaceWith( "<h3>"+itemData['name']+"</h3>" );
            html_item = html_item.html().replace("equipment/id", "equipment/"+itemData['id']);
            html_item = html_item.replace("equipment/id", "equipment/"+itemData['id']);
            html_item = html_item.replace("equipment/id", "equipment/"+itemData['id']);
            
            $("#json_list").append("<div class=\"thumbnail\" id=\"json_list_item\">"+html_item+"</div>");

        });
        
    },
    error    : function ( XMLHttpRequest, textStatus, errorThrown) {
        var err = "An error has occured: " + errorThrown;
        alert(err);
        }
    });

}