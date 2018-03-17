$(function () {
    axios({
        url:'assets/scripts/get-files.php',
        method:'post'
    }).then(function (response){
        var file_names = response.data;
        var searchArray = [];
        var tbody = "";
        file_names.forEach(function (trow,key) {
            var videoName = trow.name;
            videoName = videoName.substr(0,videoName.lastIndexOf('.'));
            tbody = tbody + "<tr><td>"+(++key)+"</td><td id='"+(key)+"'>"+videoName+"</td><td><button type=\"button\" class=\"btn btn-info\" onclick='callTheatre("+key+")'>Watch</button></td></tr>"
            searchArray[key-1] = videoName;
        });
        $('tbody').append(tbody);

        $("#video").autocomplete({
            source: searchArray
        });

    });
});

function callTheatre(id) {
    var videoName = $("#"+id).html();
    $(
        '<form action="theatre" method="post">' +
            '<input type="hidden" name="videoName" value="'+videoName+'">'+
        '</form>'
    ).appendTo('body').submit();
}