STYLE_DATA = {
  'basic': {
    'label': 'Basic Style',
    'default_pic': 'pic_style_a.png',
    'price_ladder': [
      141000, 128000, 128000, 111000, 111000, 102000, 102000, 99500, 99500, 99500, 99500, 91500,
    ]
  },
  'natural': {
    'label': 'Natural Style',
    'default_pic': 'pic_style_b.png',
    'price_ladder': [
      208000, 186000, 171000, 160000, 158000, 147000, 146000, 144000, 142000, 135000, 132000, 125000,
    ]
  },
  'italian': {
    'label': 'Italian Style',
    'default_pic': 'pic_style_c.png',
    'price_ladder': [
      207000, 185000, 169000, 155000, 153000, 142000, 138000, 135000, 133000, 126000, 124000, 118000,
    ],
  },
  'japanese': {
    'label': 'Japanese Style',
    'default_pic': 'pic_style_d.png',
    'price_ladder': [
      221000, 198000, 181000, 175000, 169000, 157000, 153000, 143000, 142000, 139000, 136000, 129000,
    ]
  },
  'vintage': {
    'label': 'Vintage Classic Style',
    'default_pic': 'pic_style_e.png',
    'price_ladder': [
      217000, 194000, 177000, 175000, 174000, 148000, 143000, 140000, 137000, 129000, 127000, 121000,
    ]
  },
}


update_prices = ($node, style) ->
  data = $($node).data('cpStyleData')
  style = style || data.default_style

  # リノベ価格の更新
  renovation_price = calc_renovation_price(data.floor_space, style)
  $('.renovation-price', $node).text(format_number(renovation_price.toFixed(1)))

  # 合計価格の更新
  total_price = data.price + renovation_price
  $('.total-price', $node).text(format_number(total_price.toFixed(1)))

  # ローンの更新
  $('.loan-price-per-month', $node).text(format_number(calc_loan_price_per_month(total_price).toFixed(0)))


calc_renovation_price = (floor_space, renovation_type) ->
  ladder = Math.max(8, Math.min(Math.floor(floor_space / 5), 19)) - 8
  STYLE_DATA[renovation_type].price_ladder[ladder] * floor_space / 10000.0


calc_loan_price_per_month = (price) ->
  r = 0.725 / 100 / 12;
  n = 35 * 12;
  loan = r * price * Math.pow((1 + r), n) / (Math.pow((1 + r), n) - 1) * 10000
  Math.floor(loan)


# 数字をカンマ区切りに変換
format_number = (num) ->
  parts = num.toString().split '.'
  parts[0] = parts[0].replace /\B(?=(\d{3})+(?!\d))/g, ','
  parts.join '.'


# form
setup_check_all_subs = ($check) ->
  $check = $($check)
  $container = $check.closest('div').find('ul')

  $check.on 'click', (e) ->
    to_checked = $(@).is(':checked')
    $container.find('input:checkbox').prop('checked', to_checked)

  $container.on 'change', 'input:checkbox', (e) ->
    to_checked = if $container.find('input:checkbox:not(:checked)').length then false else true
    $check.prop 'checked', to_checked

#### estate detail
initialize_estate_detail = ->
  $estate_detail = $('#estate-detail')
  data = $estate_detail.data('cpStyleData')

  activate_renovation_style = (new_style_name) ->
    $('#photo>div, #mp p.general_info').css('display', 'none')
    $("p.general_info##{new_style_name}, ##{new_style_name}").css('display', 'block');
    $('#style li').removeAttr('id')
    $("#style li.#{new_style_name}").attr('id','active_style')

    # update style name
    $('#style-display-name').text STYLE_DATA[new_style_name].label

    update_prices $estate_detail, new_style_name

  activate_renovation_style data.default_style


  $('#style li span').click ->
    style_name = $(@).closest('li').prop 'className'
    activate_renovation_style style_name

  `
  $('.thumb').each(function(){
    $(this).css({'width': Math.ceil(($(this).find('li').length*70)-2) +'px'});
  });
  $('.thumb li').click(function(){
    $('#'+$(this).find('span').attr('class')).find('.photos li').css({'display':'none'});
    $('#'+$(this).find('span').attr('class')).find('.photos li').eq($('#'+$(this).find('span').attr('class')+' .thumb li').index(this)).css({'display':'block'});
  });
  $('#slider li').click(function(){
    $('#madori ul li').css({'display':'none'});
    $('#madori ul li').eq($(this).find('span').attr('class').substr(5)).css({'display':'block'});
  });

  $('#slider').bxSlider({
    auto:true,
    speed:1000,
    minSlides: 5,
    maxSlides: 5,
    slideWidth: 68,
    slideMargin:2,
    pager: false,
    nextText:' ',
    prevText:' ',
    hideControlOnEnd:true,
    infiniteLoop: false,
    buildPager: function(slideIndex){
      switch(slideIndex){
        case slideIndex:return $('#photo li').eq(slideIndex).find('a').html();
      }
    }
  });

  $('.madori').colorbox({
    rel:'madori',
    transition:'none',
    width:'75%',
    height:'75%'
  });

  $('.basic_photo').colorbox({
    rel:'basic_photo',
    transition:'none',
    width:'75%',
    height:'75%'
  });

  $('.italian_photo').colorbox({
    rel:'italian_photo',
    transition:'none',
    width:'75%',
    height:'75%'
  });

  $('.japanese_photo').colorbox({
    rel:'japanese_photo',
    transition:'none',
    width:'75%',
    height:'75%'
  });

  $('.vintage_photo').colorbox({
    rel:'vintage_photo',
    transition:'none',
    width:'75%',
    height:'75%'
  });

  $('.natural_photo').colorbox({
    rel:'natural_photo',
    transition:'none',
    width:'75%',
    height:'75%'
  });`
  0


$ ->
  # install reform price calculator
  $('[data-cp-style-data]').each -> update_prices(@)

  # search form
  $('.check-all-subs').each -> setup_check_all_subs(@)

  if $('#estate-detail').length
    initialize_estate_detail()

$('#search_renovation_total_price, #search_floor_space').click ->
  searchby = $(@).attr('search-by');
  form = $(@).closest('form');
  min = form.find('[name="' + searchby + '_min"]').val();
  max = form.find('[name="' + searchby + '_max"]').val();
  dom_min = form.find('div');
  label ='';
  if (searchby == 'renovation_total_price')
    label = '価格';
  else
    label = '面積';
  dom_min.removeClass('has-error');
  dom_min.find('span.control-label').remove();
  if (isNaN(min))
    dom_min.append('<span class="control-label">' + label + ':数字を入力してください。</span>');
    dom_min.addClass("has-error");
  else if (isNaN(max))
    dom_min.append('<span class="control-label">' + label + ':数字を入力してください。</span>');
    dom_min.addClass("has-error");
  else if (min.length>0 && max.length>0 && parseFloat(min) > parseFloat(max))
    dom_min.append('<span class="control-label">最小値が最大値より大きくなっています。数値を入れ替えてください。</span>');
    dom_min.addClass("has-error");
  else if not min and not max
    dom_min.append('<span class="control-label">値が未入力です。</span>');
    dom_min.addClass("has-error");
  else
    form.submit();
