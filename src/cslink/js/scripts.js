$(document).ready(function () {
    var $list = $('.standard_list_video_custom');
    var $items = $list.children('li');

    if ($items.length === 4) {
        $list.addClass('justify-start');
    }
});