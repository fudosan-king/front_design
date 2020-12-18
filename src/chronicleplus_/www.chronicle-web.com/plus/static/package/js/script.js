
$(window).on('load resize', function(){
    var wid = $(window).width();
    if( wid < 641 ){ // ウィンドウ幅が768px未満だったら
        $('img.imgChange').each(function(){
            // 画像名の「_pc」を「_sp」に置き換える
            $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
        });
    }
});

$(window).on('load resize', function(){
    var wid = $(window).width();
    if( wid > 641 ){ // ウィンドウ幅が768px未満だったら
        $('img.imgChange').each(function(){
            // 画像名の「_pc」を「_sp」に置き換える
            $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
        });
    }
});
