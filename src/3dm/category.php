<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>
            <div class="row" id="body-row">
                <?php require('sidebar.php'); ?>


                <div class="col main_content">
                    <div class="main_header">
                        <h2 class="title"><img src="images/common/svg/i_category.svg" alt="" class="img-fluid" width="25"><span>カテゴリー</span></h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-itemlist-tab" data-toggle="tab" href="#nav-itemlist" role="tab" aria-controls="nav-itemlist" aria-selected="true">カテゴリ一覧</a>
                                <a class="nav-link" id="nav-newaddition-tab" data-toggle="tab" href="#nav-newaddition" role="tab" aria-controls="nav-newaddition" aria-selected="false">新規追加</a>
                                <div class="box_display ml-auto">
                                    <p class="mb-0"><b>27</b>アイテム中　<b>1</b> 〜 <b>15</b>を表示</p>
                                    <a class="btn btn_left" href="#"></a>
                                    <a class="btn btn_right" href="#"></a>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="main_body">

                        <div class="box_content p-0 mt-0">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-itemlist" role="tabpanel" aria-labelledby="nav-itemlist-tab">
                                    <div class="box_searchsort bg_lighblue">
                                        <div class="row">
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <form class="frm_search" action="">
                                                    <div class="form-group mr-3">
                                                        <div class="relative">
                                                            <input type="text" class="form-control" placeholder="アイテム名を検索">
                                                            <button type="submit" class="btn btngo"></button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">アイテム名</option>
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">カテゴリ名</option>
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-4 text-center text-lg-right align-self-center">
                                                <a href="#" class="btn btn_sort mr-0"><img src="images/common/svg/i_sort.svg" alt="" class="img-fluid mr-2" width="25"> 並べ替え</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="table_list" class="table table_list table_listitem table-hover">
                                            <thead>
                                                <th>選択</th>
                                                <th>アイテム名 <small>▼</small></th>
                                                <th>アイコン</th>
                                                <th>アイテム説明</th>
                                                <th>小カテゴリー</th>
                                                <th>中カテゴリー</th>
                                                <th>大カテゴリー</th>
                                                <th>数</th>
                                                <th width="8%"></th>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>会社のキッチン</p>
                                                </td>
                                                <td>
                                                    <p>和キッチン<br>
                                                    洋キッチン<br>
                                                    ロシアキッチン</p>
                                                </td>
                                                <td>
                                                    <p>なし</p>
                                                </td>
                                                <td><p>なし</p></td>
                                                <td>
                                                    <p>45</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            
                                            
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-newaddition" role="tabpanel" aria-labelledby="nav-newaddition-tab">
                                    <form action="" class="frm_newaddition">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">アイテム名 <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">情報 <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <textarea class="form-control" name="" cols="30" rows="6"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">ステータス</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <select name="" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">アイテムリスト <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row">
                                                        <div class="col-3 col-lg-3">
                                                            <p class="mb-0 items">アイテムA<br>
                                                            アイテムB<br>
                                                            アイテムC</p>
                                                        </div>
                                                        <div class="col-3 col-lg-9">
                                                            <a href="#" class="btn btn_choose">選択</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    
                                                </div>
                                                <div class="col-12 col-lg-9 text-center">
                                                    <a href="#" class="btn btn_keep">保存</a>
                                                    <a href="#" class="btn btn_cancel">キャンセル</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    
                </div>

            </div>

            <div class="modal fade" id="modalsort" tabindex="-1" aria-labelledby="modalsortLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalsortLabel">並べ替え</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"><img src="images/common/svg/i_close.svg" alt="" class="img-fluid" width="30"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-right">
                                <a href="#"><img src="images/common/svg/i_up.svg" alt="" class="img-fluid mr-2" width="26"></a>
                                <a href="#"><img src="images/common/svg/i_top.svg" alt="" class="img-fluid mr-2" width="26"></a>
                                <a href="#"><img src="images/common/svg/i_bottom.svg" alt="" class="img-fluid mr-2" width="26"></a>
                                <a href="#"><img src="images/common/svg/i_down2.svg" alt="" class="img-fluid" width="26"></a>
                            </p>

                            <div class="accordion js-accordion">

                                <div class="accordion__item js-accordion-item">
                                    <div class="accordion-header js-accordion-header">ルーム</div> 
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion js-accordion">
                                            <div class="accordion__item js-accordion-item">
                                               <div class="accordion-header js-accordion-header">洋キッチン</div> 
                                               <div class="accordion-body js-accordion-body">
                                                    <div class="accordion-body__contents">
                                                        <p>フランスキッチン<br>
                                                        イタリアンキッチン<br>
                                                        デンマークキッチン<br>
                                                        スパンキッチン</p>
                                                    </div><!-- end of sub accordion item body contents -->
                                               </div><!-- end of sub accordion item body -->
                                            </div><!-- end of sub accordion item -->
                                            <div class="accordion__item js-accordion-item">
                                               <div class="accordion-header js-accordion-header">和キッチン</div> 
                                                <div class="accordion-body js-accordion-body">
                                                    <div class="accordion-body__contents">
                                                        <p>フランスキッチン<br>
                                                        イタリアンキッチン<br>
                                                        デンマークキッチン<br>
                                                        スパンキッチン</p>
                                                    </div><!-- end of sub accordion item body contents -->
                                                </div><!-- end of sub accordion item body -->
                                            </div><!-- end of sub accordion item -->
                                        </div><!-- end of sub accordion -->
                                    </div><!-- end of accordion body -->
                                </div><!-- end of accordion item -->
                            

                                <div class="accordion__item js-accordion-item active">
                                    <div class="accordion-header js-accordion-header">キッチン</div> 
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion js-accordion">
                                            <div class="accordion__item js-accordion-item">
                                               <div class="accordion-header js-accordion-header">Sub Panel 1</div> 
                                               <div class="accordion-body js-accordion-body">
                                                 <div class="accordion-body__contents">
                                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
                                                 </div><!-- end of sub accordion item body contents -->
                                               </div><!-- end of sub accordion item body -->
                                            </div><!-- end of sub accordion item -->
                                            <div class="accordion__item js-accordion-item">
                                               <div class="accordion-header js-accordion-header">Sub Panel 2</div> 
                                               <div class="accordion-body js-accordion-body">
                                                 <div class="accordion-body__contents">
                                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
                                                 </div><!-- end of sub accordion item body contents -->
                                               </div><!-- end of sub accordion item body -->
                                            </div><!-- end of sub accordion item -->
                                        </div><!-- end of sub accordion -->
                                    </div><!-- end of accordion body -->
                                </div><!-- end of accordion item -->

                            </div><!-- end of accordion -->

                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn_keep">保存</a>
                            <a href="#" class="btn btn_cancel" data-dismiss="modal">キャンセル</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include('js-footer.php') ?>
        <script>
            $('#modalsort').modal('show');

            var accordion = (function(){
  
              var $accordion = $('.js-accordion');
              var $accordion_header = $accordion.find('.js-accordion-header');
              var $accordion_item = $('.js-accordion-item');
             
              // default settings 
              var settings = {
                // animation speed
                speed: 400,
                
                // close all other accordion items if true
                oneOpen: false
              };
                
              return {
                // pass configurable object literal
                init: function($settings) {
                  $accordion_header.on('click', function() {
                    accordion.toggle($(this));
                    
                    setTimeout(() => {
                      $('body, html').animate({
                        scrollTop: $(this).offset().top
                       }, 500)
                    }, 400)
                  });
                  
                  $.extend(settings, $settings); 
                  
                  // ensure only one accordion is active if oneOpen is true
                  if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                    $('.js-accordion-item.active:not(:first)').removeClass('active');
                  }
                  
                  // reveal the active accordion bodies
                  $('.js-accordion-item.active').find('> .js-accordion-body').show();
                },
                toggle: function($this) {
                        
                  if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                    $this.closest('.js-accordion')
                           .find('> .js-accordion-item') 
                           .removeClass('active')
                           .find('.js-accordion-body')
                           .slideUp()
                  }
                  
                  // show/hide the clicked accordion item
                  $this.closest('.js-accordion-item').toggleClass('active');
                  $this.next().stop().slideToggle(settings.speed);
                }
              }
            })();

            $(document).ready(function(){
              accordion.init({ speed: 300, oneOpen: true });
            });

        </script>

    </body>
</html>