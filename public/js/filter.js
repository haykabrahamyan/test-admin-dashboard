$(document).ready(function() {

    $('#example').DataTable( {
        "deferRender":true,
        "serverSide": true,
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "email" },
            { "data": "age" },
            { "data": "created_at" },
        ],
        ajax: function(data, callback, settings) {
            let name = data.columns[data.order[0]['column']].data;
            let order = data.order[0]['dir'];

            $.get('/search', {
                limit: data.length,
                offset: data.start,
                search: data.search.value,
                name: name,
                order: order,
            }, function(res) {
                callback({
                    recordsTotal: res.recordsTotal,
                    recordsFiltered: res.recordsFiltered,
                    data: res.data
                });
            });
        },
    });
} );