// TODO: copy from fdk's source code
(function($, window) {
  'use strict';

  var PREF_MAP = [
    null,       '北海道',   '青森県',   '岩手県',   '宮城県',
    '秋田県',   '山形県',   '福島県',   '茨城県',   '栃木県',
    '群馬県',   '埼玉県',   '千葉県',   '東京都',   '神奈川県',
    '新潟県',   '富山県',   '石川県',   '福井県',   '山梨県',
    '長野県',   '岐阜県',   '静岡県',   '愛知県',   '三重県',
    '滋賀県',   '京都府',   '大阪府',   '兵庫県',   '奈良県',
    '和歌山県', '鳥取県',   '島根県',   '岡山県',   '広島県',
    '山口県',   '徳島県',   '香川県',   '愛媛県',   '高知県',
    '福岡県',   '佐賀県',   '長崎県',   '熊本県',   '大分県',
    '宮崎県',   '鹿児島県', '沖縄県'
  ];
  window.PREF_MAP = PREF_MAP;

  // 自分のURLを取得する
  var SCRIPT_HOST = '';
  var script_url = $('script[src*="/address2.js"]').attr('src');
  if(!script_url)
    script_url = $('script[src*="/address.js"]').attr('src');

  // 緊急避難
  if(location.host == 'www.propolife.co.jp')
    ;
  else {
    try {
      SCRIPT_HOST = script_url.match(/((https?:)?\/\/[^/]+)/)[0];
    } catch(e) {
      SCRIPT_HOST = 'https://fudosan-king.jp';
    }
  }

  function AddressSelector($fields) {
    this.$fields = $($fields);

    this.initialize_address_selector();

    this.$zip_upper = this.$fields.find('.zip-upper');
    this.$zip_lower = this.$fields.find('.zip-lower');
    this.initialize_zip_resolver();
  }
  AddressSelector.prototype = {
    initialize_address_selector: function() {
      var self = this;
      this.$selects = this.$fields.find('.pref, .city, .ooaza, .tyoume');

      this.$selects.slice(0, -1)
        .prop('disabled', true)
        .on('change', function() {
          self.on_change(this);
        });
      this.update_select_list(0, PREF_MAP);
    },

    initialize_zip_resolver: function() {
      var zipcode = this.$fields.find('input.zipcode').val();

      if(zipcode)
          zipcode = zipcode.split('-');

      if(zipcode && zipcode.length == 2) {
        this.$zip_upper.val(zipcode[0]);
        this.$zip_lower.val(zipcode[1]);
      }

      // 初期値
      var handler = $.proxy(this.resolve_zipcode, this);
      this.$zip_upper.on('keyup', handler);
      this.$zip_lower.on('keyup', handler);
    },

    update_select_list: function(index, choices) {
      var $target = this.$selects.eq(index);

      $target.find('option:not(:first)').remove();
      $target.prop('disabled', false);
      $(choices).each(function(idx, val) {
        if(val !== '' && !val)
          return;
        var text = val;
        if(!val)
          text = '(なし)';
        $('<option>').val(val).text(text).appendTo($target);
      });

      this.$selects.slice(index + 1).each(function() {
        $(this)
          .prop('disabled', true)
          .find('option:not(:first)').remove();
      });
    },

    on_change: function(changed) {
      var self = this;
      var index = this.$selects.index(changed);
      var locations = this.$selects.slice(0, index + 1).map(function() { return $(this).val(); }).get();

      if(!$(changed).val()) {
        // 最初のcellの場合はクリアして終わり
        self.update_select_list(index + 1, []);
        this.$selects.eq(index + 1).prop('disabled', true);
        return;
      }
      $.ajax(SCRIPT_HOST + '/api/area/' + $.map(locations, encodeURIComponent).join('/'), {
        cache: true,
        dataType: 'jsonp'
      })
        .done(function(data) {
          self.update_select_list(index + 1, data.areas);
          var $target = self.$selects.eq(index + 1);
          $target.trigger('updated');
          if(data.areas.length == 1)
            $target.val(data.areas[0]).trigger('change');
        })
        .fail(function() {
          // TODO
        });
    },

    resolve_zipcode: function() {
      var self = this;

      $.resolve_zipcode(this.$zip_upper.val() + this.$zip_lower.val(),
        function(pref, city, ooaza, zipcode) {
          self.set_address(pref, city, ooaza);
        }, function() {
          // TODO: エラー処理
        });
    },

    set_address: function(pref, city, ooaza, tyoume) {
      var self = this;

      if(!pref)
        return;
      self.$selects.eq(0).val(pref).trigger('change');

      if(!city)
        return;

      self.$selects.eq(1).one('updated', function() {
        $(this).val(city).trigger('change');
        if(!ooaza)
          return;
        self.$selects.eq(2).one('updated', function() {
          $(this).val(ooaza).trigger('change');

          if(tyoume === undefined)
            return;

          self.$selects.eq(3).one('updated', function() {
            $(this).val(tyoume).trigger('change');
          });
        });
      });
    }
  };

  $.fn.address_editor = function(initial) {
    var $this = $(this);
    var editor = new AddressSelector($this);
    $this.data('address_editor', editor);

    if(initial)
      editor.set_address(initial.pref, initial.city, initial.ooaza, initial.tyoume);
  };
})(jQuery, window);
