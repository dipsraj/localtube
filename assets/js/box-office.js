$(function () {
    axios({
        url:'assets/scripts/get-files.php',
        method:'post'
    }).then(function (response){
        var file_names = response.data;
        if(file_names.length > 0){
            $("#no-video-card").remove();
            $("#table-container").removeClass('is-hidden');
            var searchArray = [];
            var tbody = "";
            file_names.forEach(function (trow,key) {
                var fullVideoName = trow.name;
                tbody = tbody + "<tr><td id='"+(++key)+"'>"+fullVideoName+"</td><td><button type=\"button\" class=\"btn btn-info\" onclick='callTheatre("+key+")'>Watch</button></td></tr>";
                searchArray[key-1] = fullVideoName;
            });
            $('tbody').append(tbody);

            $("#video").autocomplete({
                source: searchArray
            });
        }else {
            $("#main-container").append("<div class=\"card\" id=\"no-video-card\"><div class=\"card-body\"><h5>There are no videos.<br/>Please add videos in the \"videos\" directory to continue...</h5></div></div>")
        }
    });
});

function callTheatre(id) {
    var fullVideoName = $("#"+id).html();
    $(
        '<form action="theatre" method="post">' +
            '<input type="hidden" name="fullVideoName" value="'+fullVideoName+'">'+
        '</form>'
    ).appendTo('body').submit();
}