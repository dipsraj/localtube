$(function () {
    axios({
        url:'assets/scripts/get-files.php',
        method:'post'
    }).then(function (response){
        var file_names = response.data;
        var tbody = "";
        file_names.forEach(function (trow,key) {
            tbody = tbody + "<tr><td>"+(++key)+"</td><td id='"+(key)+"'>"+trow.name+"</td><td><button type=\"button\" class=\"btn btn-info\" onclick='callTheatre("+key+")'>Watch</button></td></tr>"
        });
        $('tbody').append(tbody);
    });
});

function callTheatre(id) {
    var videoName = $("#"+id).html();
    videoName = videoName.substr(0,videoName.lastIndexOf('.'));
    $(
        '<form action="theatre" method="post">' +
            '<input type="hidden" name="videoName" value="'+videoName+'">'+
        '</form>'
    ).appendTo('body').submit();
}