/* Ajax page loading script */

function loadPage(page,data){
    data = data || null;
    $.post(page,data,function(data){
        $("#content").html(data);
    })
}

/*function init(){
    //AJAX load some data
    //TODO: make it check the url for stuff we store.
    $.post( "contract-select.php", function( data ) {
        $( "#content" ).html( data );
    });
}*/