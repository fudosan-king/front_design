
$(window).on('load resize', function(){
    var wid = $(window).width();
    if( wid < 641 ){ // �E�B���h�E����768px������������
        $('img.imgChange').each(function(){
            // �摜���́u_pc�v���u_sp�v�ɒu��������
            $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
        });
    }
});

$(window).on('load resize', function(){
    var wid = $(window).width();
    if( wid > 641 ){ // �E�B���h�E����768px������������
        $('img.imgChange').each(function(){
            // �摜���́u_pc�v���u_sp�v�ɒu��������
            $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
        });
    }
});
