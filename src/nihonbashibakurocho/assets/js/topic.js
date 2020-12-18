jQuery(function($) {
    $.ajax({
        url: "https://www.prostyle-residence.com/nihonbashibakurocho/wordpress/topic/",
        data: {},
        type: "get",
        success: function(data) {
            $total = data.length;
            $text = '';
            for (i=0; i < $total; i++) {
            $topic = '.topic';
            $text = $text + '<li>';
            if (data[i]['href']) {
                $text = $text + '<a href="' + data[i]['href'] + '" target="_blank">';
            }

            $text = $text + data[i]['title'];

            if (data[i]['href']) {
                $text = $text + '</a>';
            }
            $text = $text + '</li>';
            }
            $($topic).replaceWith($text);
        },
        error: function() {
            console.log("Get value error");
        }
    });
});
