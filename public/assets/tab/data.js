$(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 2, "desc" ]],
        "info": true,
        "ordering": true,
        "paging": true,
//"jQueryUI": true,
        "autoWidth": false
    } );

} );