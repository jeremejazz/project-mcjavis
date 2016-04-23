/**
 * Created by Raineir on 4/23/2016.
 */

$(document).ready(function () {
    $('.myTable').DataTable();
});


function order_list(id) {

    $('#table-' + id).toggle();
}

