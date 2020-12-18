jQuery(function($) {
    $(".back-top").hide();
    $(".back-top a").css({ 'position': 'relative' });

    // fade in #back-top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-top').fadeIn();
        } else {
            $('.back-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('.back-top a').click(function() {
        $('body,html').animate({
            scrollTop: $('#top').innerHeight()
        }, 400);
        return false;
    });

    //---------------------------------------------------

    $(function() {
        $('#accordion').on('shown.bs.collapse', function(e) {
            var offset = $('.panel.panel-default > .panel-collapse.in').offset();
            if (offset) {
                $('html,body').animate({
                    scrollTop: $('.panel-title a').offset().top - 20
                }, 500);
            }
        });
    });


    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
    }).on('hidden.bs.collapse', function() {
        $(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
    });

    //---------------------------------------------------

    //---------------------------------------------------
    // to change text when click accordion
    $('.accordion_search h4 a').click(function() {
        var $this = $(this);
        $this.toggleClass('.accordion_search h4 a');
        if ($this.hasClass('.accordion_search h4 a')) {
            $this.text('詳しい条件を折りたたむ');
            $(this).addClass('i_arrow_top');
            $(this).removeClass('i_arrow_bottom');
        } else {
            $this.text('詳しく条件を設定する');
            $(this).addClass('i_arrow_bottom');
            $(this).removeClass('i_arrow_top');
        }
    });

    $('.accordion_search_result_detail .panel-title a ').click(function() {
        var $this = $(this);
        $this.toggleClass('.accordion_search_result_detail .panel-title a');
        if ($this.hasClass('.accordion_search_result_detail .panel-title a')) {
            $this.text('詳細を折りたたむ');
            $(this).addClass('i_arrow_top');
            $(this).removeClass('i_arrow_bottom');
        } else {
            $this.text('もっと詳しく');
            $(this).addClass('i_arrow_bottom');
            $(this).removeClass('i_arrow_top');
        }
    });

    //---------------------------------------------------

    // show hide between search location and search route
    $('#sectionKanto .btn_location').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .accordion_search').hide('slow/400/fast', function() {});
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
        $('.area_Kanto2, .area_Kanto2_xs, #sectionKanto .box_option, .searchBy_status_area_kanto2').hide();
    });
    $('#sectionKanto .btn_route').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .accordion_search').show('slow/400/fast', function() {});
        $('.area_Kanto2, #sectionKanto .box_option').hide('slow/400/fast', function() {});
    });


    $('#sectionChubu .btn_location').click(function(event) {
        event.preventDefault();
        $('#sectionChubu .accordion_search, #sectionChubu .box_option').hide('slow/400/fast', function() {});
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').show('slow/400/fast', function() {});
    });
    $('#sectionChubu .btn_route').click(function(event) {
        event.preventDefault();
        $('#sectionChubu .accordion_search').show('slow/400/fast', function() {});
        $('#sectionChubu .box_option').hide('slow/400/fast', function() {});
    });

    $('#sectionKansai .btn_location').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .accordion_search, #sectionKansai .box_option').hide('slow/400/fast', function() {});
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
    });
    $('#sectionKansai .btn_route').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option').hide('slow/400/fast', function() {});
        $('#sectionKansai .accordion_search').show('slow/400/fast', function() {});
    });

    $('#sectionKyushu .btn_location').click(function(event) {
        event.preventDefault();
        $('#sectionKyushu .accordion_search, #sectionKyushu .box_option').hide('slow/400/fast', function() {});
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').show('slow/400/fast', function() {});
    });
    $('#sectionKyushu .btn_route').click(function(event) {
        event.preventDefault();
        $('#sectionKyushu .accordion_search').show('slow/400/fast', function() {});
        $('#sectionKyushu .box_option').hide('slow/400/fast', function() {});
    });

    //status radio button
    $('ul.list_option li .checkbox label input').click(function() {
        if($(this).is(":checked")) {
            $(this).parent().parent().parent().addClass("bg_active");
        } else {
            $(this).parent().parent().parent().removeClass("bg_active");
        }

    });

    $('ul.list_inquiry li .checkbox label input').click(function() {
        if($(this).is(":checked")) {
            $(this).parent().parent().parent().addClass("bg_active");
        } else {
            $(this).parent().parent().parent().removeClass("bg_active");
        }

    });

    //show hide div with checkbox status
    $('#185822_4716pi_185822_4716_21688').change(function(){
        if(this.checked)
            $('.reservation').fadeIn('slow');
        else
            $('.reservation').fadeOut('slow');
    });

    if($("#185822_4716pi_185822_4716_21688").is(':checked')) {
        $(".reservation").show();  // checked
        $(this).parent().parent().parent().parent().addClass('bg_active');
    }
    else {
        $(".reservation").hide();  // unchecked
    }


    $('ul.list_button li .radio label').click(function() {
        $('ul.list_button li .radio label').removeClass('bg_active');
        $(this).addClass('bg_active');
    });

    $('ul.list_button_age li .radio label').click(function() {
        $('ul.list_button_age li .radio label').removeClass('bg_active');
        $(this).addClass('bg_active');
    });

    $('ul.list_button2 li .radio label').click(function() {
        $('ul.list_button2 li .radio label').removeClass('bg_active');
        $(this).addClass('bg_active');
    });

    $('ul.list_button_building li .radio label').click(function() {
        $('ul.list_button_building li .radio label').removeClass('bg_active');
        $(this).addClass('bg_active');
    });

    //list_button_other status
    $('ul.list_button_other li .checkbox label input').click(function() {
        if($(this).is(":checked")) {
            $(this).parent().addClass("bg_active");
        } else {
            $(this).parent().removeClass("bg_active");
        }

    });

    //---------------------------------------------------
    // Box area, accordion area for all tab

    $('.back_kanto').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs, .searchBy_status_area_kanto2').hide('slow/400/fast', function() {});
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
    });


    $('.btn_back_step1').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .box_cityList').hide('slow/400/fast', function() {});
        $('.area_Kanto2, .area_Kanto2_xs').show('slow/400/fast', function() {});
    });


    $('.show_listCity').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_kanto_xs, .area_Kanto').hide('slow/400/fast', function() {});
        $('.box_cityList2').show('slow/400/fast', function() {});
    });

    //kanto general
    $('.btn_accordion_kanto_general').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .searchBy_status_kanto, .box_accordion_TokyoWard').hide('slow/400/fast', function() {});
        $('.box_accordion_kanto_general').show('slow/400/fast', function() {});
    });
    $('.btn_back_general').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_kanto_xs, .searchBy_status').show('slow/400/fast', function() {});
        $('area_Kanto2, .box_option_kanto_general').hide('slow/400/fast', function() {});
    });

    //saitama
    $('.show_listCity_saitama').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .searchBy_status_kanto').hide('slow/400/fast', function() {});
        $('.box_option_saitama').show('slow/400/fast', function() {});
    });
    $('.btn_back_saitama').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
        $('.area_Kanto2, .box_option_saitama').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_saitama').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .box_option, #sectionKanto .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_accordion_saitama').show('slow/400/fast', function() {});
    });

    //chiba
    $('.show_listCity_chiba').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .searchBy_status_kanto').hide('slow/400/fast', function() {});
        $('.box_option_chiba').show('slow/400/fast', function() {});
    });
    $('.btn_back_chiba').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
        $('area_Kanto2, #sectionKanto .box_option_chiba, #sectionKanto .box_accordion_kanto2_general').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_chiba').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .box_option, #sectionKanto .box_accordion_kanto2_general, #sectionKanto .box_accordion, .searchBy_status').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_accordion_chiba').show('slow/400/fast', function() {});
    });

    //kanagawa
    $('.show_listCity_kanagawa').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .searchBy_status_kanto').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_option_kanagawa').show('slow/400/fast', function() {});
    });
    $('.btn_back_kanagawa').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
        $('.area_Kanto2, .box_option_kanagawa').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_kanagawa').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .box_option, #sectionKanto .box_accordion_kanto2_general, #sectionKanto .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_accordion_kanagawa').show('slow/400/fast', function() {});
    });

    //tokyo
    $('.show_listCity_tokyo').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs, .searchBy_status_area_kanto2').show('slow/400/fast', function() {});
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').hide('slow/400/fast', function() {});
    });
    $('.btn_show_listCityDepartment').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs, .searchBy_status, .searchBy_status_area_kanto2').hide('slow/400/fast', function() {});
        $('.box_option_tokyo').show('slow/400/fast', function() {});
    });

    //tokyo ward
    // $('.show_listCity_kanto2').click(function(event) {
    //     event.preventDefault();
    //     $('.area_Kanto, .area_Kanto2, .area_Kanto2_xs, .area_kanto_xs, .searchBy_status, .searchBy_status_area_kanto2').hide('slow/400/fast', function() {});
    //     $('.box_option_listCity_kanto2').show('slow/400/fast', function() {});
    // });
    // $('.btn_back_listCity_kanto2').click(function(event) {
    //     event.preventDefault();
    //     $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
    //     $('.area_Kanto2, .box_option_listCity_kanto2').hide('slow/400/fast', function() {});
    // });

    $('.btn_back_tokyo').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
        $('area_Kanto2, .box_option_tokyo').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_tokyo').click(function(event) {
        event.preventDefault();
        $('.box_accordion_tokyo').show('slow/400/fast', function() {});
        $('.box_accordion_TokyoWard').hide('slow/400/fast', function() {});
    });

    $('.btn_accordion_kanto2_general').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .box_option, .searchBy_status_area_kanto2, #sectionKanto .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_accordion_tokyo_Department_23wards').show('slow/400/fast', function() {});
    });

    //tokyoDepartment
    $('.show_listCity_tokyoDepartment').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .area_Kanto2_xs, .searchBy_status_area_kanto2').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_option_tokyoDepartment').show('slow/400/fast', function() {});
    });
    $('.btn_back_tokyoDepartment').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_kanto_xs, .searchBy_status_kanto').show('slow/400/fast', function() {});
        $('.area_Kanto, #sectionKanto .box_option_tokyoDepartment').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_tokyoDepartment').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .box_option, #sectionKanto .box_accordion_kanto2_general, #sectionKanto .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_accordion_tokyo_Department_23wards').show('slow/400/fast', function() {});
    });

    //tokyoDepartment
    $('.show_listCity_tokyo23wards').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .area_Kanto2_xs, .searchBy_status_area_kanto2').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_option_tokyo23wards').show('slow/400/fast', function() {});
    });
    $('.btn_back_tokyo23wards').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs, .searchBy_status_area_kanto2').show('slow/400/fast', function() {});
        $('.area_Kanto, #sectionKanto .box_option_tokyo23wards').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_tokyo23wards').click(function(event) {
        event.preventDefault();
        $('#sectionKanto .box_option, #sectionKanto .box_accordion_kanto2_general, #sectionKanto .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKanto .box_accordion_tokyo_Department_23wards').show('slow/400/fast', function() {});
    });

    //outsideNagoya
    $('.show_listCity_outsideNagoya').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').hide('slow/400/fast', function() {});
        $('.box_option_outsideNagoya').show('slow/400/fast', function() {});
    });
    $('.btn_back_outsideNagoya').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').show('slow/400/fast', function() {});
        $('.box_option_outsideNagoya').hide('slow/400/fast', function() {});
    });

    //Nagoya city
    $('.show_listCity_nagoyacity').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').hide('slow/400/fast', function() {});
        $('#sectionChubu .box_option_nagoyacity').show('slow/400/fast', function() {});
    });
    $('.btn_back_nagoyacity_general').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').show('slow/400/fast', function() {});
        $('#sectionChubu .box_option_nagoyacity_general').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_nagoyacity_general').click(function(event) {
        event.preventDefault();
        $('#sectionChubu .box_option, #sectionChubu .box_accordion, .area_Chubu, .area_chubu_xs, .searchBy_status_chubu').hide('slow/400/fast', function() {});
        $('#sectionChubu .box_accordion_nagoyacity_general').show('slow/400/fast', function() {});
    });

    $('.btn_back_nagoyacity').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').show('slow/400/fast', function() {});
        $('#sectionChubu .box_option_nagoyacity').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_nagoyacity').click(function(event) {
        event.preventDefault();
        $('#sectionChubu .box_option, #sectionChubu .box_accordion, .area_Chubu, .area_chubu_xs, .searchBy_status_chubu').hide('slow/400/fast', function() {});
        $('#sectionChubu .box_accordion_nagoyacity_general').show('slow/400/fast', function() {});
    });

    //outside Nagoya
    $('.show_listCity_outsideNagoya').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').hide('slow/400/fast', function() {});
        $('#sectionChubu .box_option_outsideNagoya').show('slow/400/fast', function() {});
    });
    $('.btn_back_outsideNagoya').click(function(event) {
        event.preventDefault();
        $('.area_Chubu, .area_chubu_xs, .searchBy_status_chubu').show('slow/400/fast', function() {});
        $('#sectionChubu .box_option_outsideNagoya').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_outsideNagoya').click(function(event) {
        event.preventDefault();
        $('#sectionChubu .box_option, #sectionChubu .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionChubu .box_accordion_nagoyacity_general').show('slow/400/fast', function() {});
    });

    //kobe
    $('.btn_accordion_general_kansai').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_general_kansai').show('slow/400/fast', function() {});
    });

    $('.show_listCity_kobe').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_kobe').show('slow/400/fast', function() {});
    });
    $('.btn_back_kobe').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_kobe').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_kobe').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_kobehanshin').show('slow/400/fast', function() {});
    });

    //hanshin
    $('.show_listCity_hanshin').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_hanshin').show('slow/400/fast', function() {});
    });
    $('.btn_back_hanshin').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_hanshin').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_hanshin').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_kobehanshin').show('slow/400/fast', function() {});
    });

    //osaka
    $('.show_listCity_osaka').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_osaka').show('slow/400/fast', function() {});
    });
    $('.btn_back_osaka').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_osaka').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_osaka').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_5area').show('slow/400/fast', function() {});
    });

    //5 areas
    $('.show_listCity_5area').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_5area').show('slow/400/fast', function() {});
    });
    $('.btn_back_5area').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_5area').hide('slow/400/fast', function() {});
    });

    //hokusetsu
    $('.show_listCity_hokusetsu').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_hokusetsu').show('slow/400/fast', function() {});
    });
    $('.btn_back_hokusetsu').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_hokusetsu').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_hokusetsu').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_5area').show('slow/400/fast', function() {});
    });

    //keihan
    $('.show_listCity_keihan').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_keihan').show('slow/400/fast', function() {});
    });
    $('.btn_back_keihan').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_keihan').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_keihan').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_5area').show('slow/400/fast', function() {});
    });

    //kawachi
    $('.show_listCity_kawachi').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_kawachi').show('slow/400/fast', function() {});
    });
    $('.btn_back_kawachi').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_kawachi').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_kawachi').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_5area').show('slow/400/fast', function() {});
    });

    //sakai
    $('.show_listCity_sakai').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_option_sakai').show('slow/400/fast', function() {});
    });
    $('.btn_back_sakai').click(function(event) {
        event.preventDefault();
        $('.area_Kansai, .area_kansai_xs, .searchBy_status_kansai').show('slow/400/fast', function() {});
        $('#sectionKansai .box_option_sakai').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_sakai').click(function(event) {
        event.preventDefault();
        $('#sectionKansai .box_option, #sectionKansai .box_accordion').hide('slow/400/fast', function() {});
        $('#sectionKansai .box_accordion_5area').show('slow/400/fast', function() {});
    });

    //Outside fukuoka
    $('.show_listCity_outsidefukuoka').click(function(event) {
        event.preventDefault();
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_option_outsidefukuoka').show('slow/400/fast', function() {});
    });
    $('.btn_back_outsidefukuoka').click(function(event) {
        event.preventDefault();
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').show('slow/400/fast', function() {});
        $('#sectionKyushu .box_option_outsidefukuoka').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_outsidefukuoka').click(function(event) {
        event.preventDefault();
        $('#sectionKyushu .box_option').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_accordion_fukuoka_general').show('slow/400/fast', function() {});
    });

    //fukuoka general
    $('.show_listCity_fukuoka_general').click(function(event) {
        event.preventDefault();
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_option_fukuoka_general').show('slow/400/fast', function() {});
    });
    $('.btn_back_fukuoka_general').click(function(event) {
        event.preventDefault();
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').show('slow/400/fast', function() {});
        $('#sectionKyushu .box_option_fukuoka_general').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_fukuoka_general').click(function(event) {
        event.preventDefault();
        $('#sectionKyushu .box_option').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_accordion_fukuoka_general').show('slow/400/fast', function() {});
    });

    $('.btn_accordion_kyushu_general').click(function(event) {
        event.preventDefault();
        $('#sectionKyushu .box_option, .area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_accordion_fukuoka_general').show('slow/400/fast', function() {});
    });

     $('.show_listCity_fukuokacity').click(function(event) {
        event.preventDefault();
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_option_fukuokacity').show('slow/400/fast', function() {});
    });
    $('.btn_back_fukuokacity').click(function(event) {
        event.preventDefault();
        $('.area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').show('slow/400/fast', function() {});
        $('#sectionKyushu .box_option_fukuokacity').hide('slow/400/fast', function() {});
    });
    $('.btn_accordion_fukuokacity').click(function(event) {
        event.preventDefault();
        $('#sectionKyushu .box_option, .area_Kyushu, .area_kyushu_xs, .searchBy_status_kyushu').hide('slow/400/fast', function() {});
        $('#sectionKyushu .box_accordion_fukuoka_general').show('slow/400/fast', function() {});
    });


    //datetimepicker
    $.datetimepicker.setLocale('ja');
    $('#datetimepicker').datetimepicker({value:'2016/12/08 00:00',step:10});


    // gallery picture
    $('.owl_search_result_detail').owlCarousel({
        loop: true,
        margin: 5,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1

            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('.owl_galley_big').owlCarousel({
        items: 1,
        loop: false,
        center: true,
        margin: 10,
        callbacks: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash',
        nav: false,
        dots: false,
    });

    // scroll to top
    $('.btn_pageTop').click(function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 400);
    });

    //matchHeight for each columm
    $('.box').matchHeight();

});

//---------------------------------------------------

// show hide when scroll to element
$(document).scroll(function() {
    var y = $(document).scrollTop();
    var body = $('body').height();
    var height_window = $(window).height();
    var height_bottom_searchCondition=250;//$('.bottom_searchCondition').height();
    // var h_services = $('#bottom_searchCondition').height() + $('#services').height();

    if (y<=(body-height_window-height_bottom_searchCondition)) {
        setTimeout(function() {
            $('.bottom_searchCondition').removeClass('no_fixed');
        }, 200);

    } else {
        setTimeout(function() {
            $('.bottom_searchCondition').addClass('no_fixed');
        }, 200);

    }
});

//---------------------------------------------------
// Gallery with thumnail owlCarousel
$(document).ready(function() {
    var $sync1 = $("#sync1"),
        $sync2 = $("#sync2"),
        flag = false;

    $sync1
        .owlCarousel({
            items: 1,
            margin: 10,
            nav: false,
            dots: false
        })
        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $sync2.trigger('to.owl.carousel', [e.item.index, true]);
                flag = false;
            }
        });

    $sync2
        .owlCarousel({
            margin: 20,
            items: 3,
            nav: true,
            dots: false,
            navRewind: false
        })

        .on('click', '.owl-item', function() {
            $sync1.trigger('to.owl.carousel', [$(this).index(), true]);
        })

        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $sync1.trigger('to.owl.carousel', [e.item.index, true]);
                flag = false;
            }


        });
});

$(document).ready(function() {
    var $sync3 = $("#sync3"),
        $sync4 = $("#sync4"),
        flag = false;

    $sync3
        .owlCarousel({
            items: 1,
            margin: 10,
            nav: false,
            dots: false
        })
        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $sync4.trigger('to.owl.carousel', [e.item.index, true]);
                flag = false;
            }
        });

    $sync4
        .owlCarousel({
            margin: 20,
            items: 3,
            nav: true,
            dots: false,
            navRewind: false
        })

        .on('click', '.owl-item', function() {
            $sync3.trigger('to.owl.carousel', [$(this).index(), true]);
        })

        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $sync3.trigger('to.owl.carousel', [e.item.index, true]);
                flag = false;
            }


        });
});


