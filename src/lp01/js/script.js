/* Author: Khanh Nguyen PPL */
/* Description: Process estimation and contact form */
/* Published: 2020 */

$(function() {

    $('#btnAddNode').click(function(event) {
        /* Act on the event */

        var identity = $('.drag-wrapper').length + 1;

        $('.imageCanvas').append('<div id="item-drag-'+identity+'" class="drag-wrapper"><i class="fas fa-tag new"></i></div>');
        $( "#item-drag-" + identity ).draggable({
            containment: ".imageCanvas", 
            scroll: false
        });

        $( "#item-drag-" + identity ).on('mouseenter', function(event) {
            event.preventDefault();
            /* Act on the event */
            $(this).find('.svg-inline--fa.fa-tag').removeClass('new');
        });
    });

    /* MODULE: PICTURE TAGS */
    $.ajax({
        type: "GET",  
        url: "data/data-tags.json",
        dataType: "json",       
        success: function(data)  
        {
            $.each(data, function(index, node) {
                var html = '<div class="carousel-cell">';
                html += '<img src="' + node.background + '" alt="" class="img-fluid">';

                html += generatePicTagCarousel(node._id, node.tags);

                html += '<div>';
                $('.carousel.main').append(html);
            });

            $('.carousel.main').flickity({ "freeScroll": false, "wrapAround": true, "pageDots": false });

            $('.carousel.main .i_tag').click(function(event) {
                /* Act on the event */
                var identityNode = getIdentityNodePicTag($(this).data('id'), $(this).data('tag_id'), data);
                $('.box_gallery_detail_wrapper').html(generateGalleryTagDetails(identityNode.gallery))
                $('.carousel.detail').flickity({ "freeScroll": true, "contain": true, "pageDots": false, "prevNextButtons": true, "cellAlign": "left" });
            });
            
        },
        error: function(error)
        {
            console.log(error);
        }
    });

    function getIdentityNodePicTag(id, tag_id, data){
        var result = null;
        $.each(data, function(index, node) {
            if (id == node._id){
                $.each(node.tags, function(index, tag) {
                    if (tag_id == tag._tagID){
                        result = tag;
                    }
                });
            }
        });
        return result;
    }

    function generatePicTagCarousel(_parentID, tags){
        var htmlTag = '';
        $.each(tags, function(index, tag) {
            var ID = _parentID + '_' + tag._tagID;
            htmlTag += '<i id="' + ID + '" data-id="' + _parentID + '" data-tag_id="' + tag._tagID + '"  class="i_tag" style="top: ' + tag.top + ';left: ' + tag.left + ';"></i>';
        });

        return htmlTag;
    }

    function generateGalleryTagDetails(gallery){
        
        var htmlGallery = '<div class="box_gallery_detail_content">\
    <div class="carousel detail">';
        $.each(gallery, function(index, img) {
            htmlGallery += '<div class="carousel-cell">\
                <div class="box_gallery_detail_img">\
                    <img src="' + img.image + '" alt="" class="img-fluid ' + img.class + '">\
                </div>\
                <h4>' + img.content + '</h4>\
            </div>';
        });

        htmlGallery += '</div></div>';

        return htmlGallery;
    }

    /* MODULE: ESTIMATION BEGIN */

    var DATA_MAP;
    var RULES;

    var LABEL_JP = {
        'oak': 'オーク',
        'birch': '樺桜',
        'walnut': 'ウォルナット',
        'cheek': 'チーク',
        'amgis': 'アムギス',
    }

    $.ajax({
        type: "GET",  
        url: "data/data.csv",
        dataType: "text",       
        success: function(response)  
        {
            DATA_MAP = $.csv.toObjects(response);
            // console.log(DATA_MAP[0]);
            // $.each(DATA_MAP, function(index, row) {
            //     console.log(row.room_area);
            // });
            generateSelectRoomArea(DATA_MAP);
            generateRadioMaterial(DATA_MAP);
        }   
    });

    $.ajax({
        type: "GET",  
        url: "data/rules.csv",
        dataType: "text",       
        success: function(response)  
        {
            RULES = $.csv.toObjects(response)[0];
            // console.log(RULES);
        }   
    });

    // const rawRoomPrice = new AutoNumeric('#iRoomPrice', {decimalPlaces:'0', minimumValue:0});
    const rawMonthlyLoan = new AutoNumeric('#iMonthlyLoan', {decimalPlaces:'0', minimumValue:0});
    const rawTotalPrice = new AutoNumeric('#iTotalPrice', {decimalPlaces:'0', minimumValue:0});

    /* Functions */
    function generateSelectRoomArea(DataRow){
        var count = 0;
        $.each(DataRow, function(index, row) {
            var selected = count == 0 ? 'selected' : '';
            var strValue = row.room_area + '';
            var html = '<option value="' + row.room_area + '" '+selected+'>' + strValue + '</option>';
            $('#iRoomArea').append(html);
            count++;
        });
    }

    function generateRadioMaterial(DataRow){
        var FirstRow = DataRow[0];
        var count = 0;
        $.each(FirstRow, function(label, data) {
            if (label == 'room_area')
                return;
            else{
                var checked = count == 0 ? 'checked' : '';
                var active = count == 0 ? 'active' : '';
                // var strCapitalizeLable = label.substr(0,1).toUpperCase()+label.substr(1);
                var jpLabel = LABEL_JP[label]
                var html = '<li class="' + active + '"> \
                                <div class="radio"> \
                                    <label for="iMaterial-'+ label +'"> \
                                        <span class="box_material_wood"> \
                                            <img src="data/img/'+ label +'.jpg" alt="" class="img-fluid"> \
                                        </span> \
                                        <p>' + jpLabel + '</p> \
                                    </label> \
                                    <input type="radio" id="iMaterial-'+ label +'" name="nMaterial" value="'+ label +'" ' + checked + '> \
                                </div> \
                            </li>';
                $('#iMaterial-wrapper').append(html);

                $('#iMaterial-' + label).change(function() {
                    $('#iMaterial-wrapper').find('li[class="active"]').removeClass('active');
                    $(this).closest('li').addClass('active');
                });

                count++;
            }
        });


    }

    function checkValidate(){
        var isValidate = true;
        var roomAreaValue = $('#iRoomArea').val();
        var roomPriceValue = $('#iRoomPrice').val();

        if(typeof($('#iRoomArea')) === 'undefined' || !roomAreaValue){
            isValidate = false;
            $('#iRoomArea').addClass('validate-error');
        }else{
            $('#iRoomArea').removeClass('validate-error');
        }

        if(typeof($('#iRoomPrice')) === 'undefined' || !roomPriceValue){
            isValidate = false;
            $('#iRoomPrice').addClass('validate-error');

        }else{
            $('#iRoomPrice').removeClass('validate-error');
        }

        if(!isValidate){
            rawTotalPrice.set('');
            rawMonthlyLoan.set('');
        }

        

        // console.log(roomAreaValue);
        // console.log(roomPriceValue);
        // console.log(isValidate);

        return isValidate;
    } 

    function getRoomAreaDATA(RoomAreaValue){
        var result;
        $.each(DATA_MAP, function(index, row) {
            if(row.room_area == RoomAreaValue)
                result = row;
        });
        return result;
    }

    /* Action & Event */
    $('#iEstimate').click(function(event) {
        event.preventDefault();
        /* Act on the event */
        if(!checkValidate())
            return false;

        var roomAreaValue = $('#iRoomArea').val();
        var roomPriceValue = parseFloat($('#iRoomPrice').val())*10000;
        var materialValue = $('input[name="nMaterial"]:checked').val();

        var dataIdentity = getRoomAreaDATA(roomAreaValue);
        var renovationPriceValue = parseFloat(dataIdentity[materialValue]);

        var totalPriceValue = roomPriceValue + renovationPriceValue;

        var formulaRateValue = Math.pow((1 + parseFloat(RULES.interest_rate)), RULES.repayment_period) / (Math.pow((1 + parseFloat(RULES.interest_rate)), RULES.repayment_period) - 1);
        var monthlyLoanValue = totalPriceValue * parseFloat(RULES.interest_rate) * formulaRateValue;

        rawTotalPrice.set(totalPriceValue/10000);
        rawMonthlyLoan.set(monthlyLoanValue);
        // $('#iTotalPrice').val(totalPriceValue/10000)
        // $('#iMonthlyLoan').val(monthlyLoanValue)

        // console.log(formulaRateValue);
    });

    /* CONTACT PART */

    var SHOWROOM_LIST= [
        '表参道本店', '東京日本橋', '吉祥寺', '埼玉大宮', '横浜西口', 
        '名古屋伏見', '京都四条', '大阪梅田', '神戸元町', '福岡天神'
    ]

    $.each(SHOWROOM_LIST, function(index, el) {
        $('#ishow_room').append('<option value="' + el + '">' + el + '</option>');
    });

    for(var i = 10; i<=19; i++){
        var strTime = i + ':00';
        $('#ivisit_hour').append('<option value="' + strTime + '">' + strTime + '</option>');
    }

    $('#ivisit_date').datepicker({
        format: 'yyyy/mm/dd',
        language: 'ja',
        autoclose: true,
        // defaultDate: moment('2020/02/22'),
        // setDate: availableDate,
        todayHighlight: true,
        // startDate: '+31d',
        beforeShowDay: function(date) {
            var toDay = (new Date());
            toDay.setDate(toDay.getDate() - 1);
            if (date.getTime() < toDay.getTime()) {
                return false;
            }

            if (date.getDay() == 2 || date.getDay() == 3) {
                return false;
            }
        },
    });

    $('.visit_date_wrapper .svg-inline--fa').click(function(event) {
        /* Act on the event */
        $('#ivisit_date').focus();
    });

    var ERROR_NO_INPUT = '値を入力してください';
    var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
    var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

    function invalidCheck() {

        var isValid = true;
        var invalidBackgroundColor = 'rgba(255, 0, 0, 0.02)';
        var validFlagColor = '#F8B102';

        var invalidBoxShadow = '0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)';
        var invalidBorderColor = '#ff0000';

        // EMPTY CHECK

        var elemsChk = [
            $('input[name="last_name"]'),
            $('input[name="first_name"]'),

            $('input[name="category_contact[]"]'),

            $('input[name="phone_number"]'),

            $('input[name="email"]'),

            $('input[name="secret_info"]'),


        ];

        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'checkbox': {
                        if (!$(this).is(':checked')) {
                            elem.css({
                                'box-shadow': invalidBoxShadow,
                                'border-color': invalidBorderColor,
                            });
                            $(this).closest('.checkbox_wrapper').find('label').css('color', '#ff0000');
                            isValid = false;
                        } else {
                            elem.css({
                                'box-shadow': 'initial',
                                'border-color': 'initial',
                            });
                            $(this).closest('.checkbox_wrapper').find('label').css('color', 'initial');
                        }
                    }break;
                    case 'text': {
                        if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {
                            elem.css({
                                'box-shadow': invalidBoxShadow,
                                'border-color': invalidBorderColor,
                                'background-color': invalidBackgroundColor,
                            });
                            $('.require-flag.' + elem.attr('name')).css('background-color', '#ff0000');
                            isValid = false;
                        }else{
                            elem.css({
                                'box-shadow': 'initial',
                                'border-color': 'initial',
                                'background-color': 'initial',
                            });
                            $('.require-flag.' + elem.attr('name')).css('background-color', '#a40000');
                        }
                    }break;
                }
            }

        });

        // EMAIL CHECK
        var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        if (!emailPattern.test($('input[name="email"]').val())) {
            $('input[name="email"]').css({
                'box-shadow': invalidBoxShadow,
                'border-color': invalidBorderColor,
            });

            isValid = false;

            $('.require-flag.email').css('background-color', '#ff0000');

        } else {
            $('input[name="email"]').css({
                'box-shadow': 'initial',
                'border-color': 'initial',
            });
            $('.require-flag.email').css('background-color', '#a40000');
        }

        return isValid;
    }

    // BUTTON SET CONFIRM ACTION
    $('#ibtnConfirm').click(function(event) {
        event.preventDefault();

        if (invalidCheck()) {

            $('.data-input').fadeOut();
            $('.data-confirm').fadeIn();

            var html_category_contact = '';
            $.each($('input[name="category_contact[]"]:checked'), function(index, el) {
                html_category_contact += $(el).val() + '<br>';
            });
            $('.cfrm_category_contact').html(html_category_contact);

            var cfrm_name = $('input[name="first_name"]').val() + $('input[name="last_name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_phonenumber = $('input[name="phone_number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_location = $('select[name="show_room"]').val() + ' ' + $('input[name="visit_date"]').val() + ' ' + $('select[name="visit_hour"]').val();
            $('.cfrm_location').html(cfrm_location);

            var cfrm_comments = $('textarea[name="free_detail_contact"]').val();
            $('.cfrm_comments').html(cfrm_comments);


        } else {
            // $('html').animate({
            //     scrollTop: $('.frm_consult_shoroom').offset().top
            // }, 1000, function() {});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function() {
        $('.data-input').fadeIn(function() {
            $('html').scrollTop($('.frm_consult_shoroom').offset().top);
        });
        $('.data-confirm').fadeOut();
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function() {
        if (invalidCheck()) {
            $('.frm_consult_shoroom').submit();
        } else {
            $('#goBack').click();
        }
    });

    // var collectInputText = $('input[type="text"]');
    // $.each(collectInputText, function(i, e){
    //     var cfrmPrefix = '#cfrm_' + $(e).attr('name');
    //     $(e).val('TEST ' + cfrmPrefix);
    // });
    // var collectTextArea = $('textarea');
    // $.each(collectTextArea, function(i, e){
    //     var cfrmPrefix = '#cfrm_' + $(e).attr('name');
    //     $(e).val('TEST ' + cfrmPrefix);
    // });
    // $('input[name="email"]').val('khanh@propolife.co.jp');
    
    // $('#ishow_room').val('東京日本橋');
    // $('#ivisit_hour').val('10:00');

    // var date = new Date();
    // var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    // $('#ivisit_date').datepicker('setDate', today);
});