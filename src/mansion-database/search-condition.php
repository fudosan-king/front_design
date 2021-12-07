<?php include ('header.php'); ?>

<div class="nav-black">
	<?php include ('navigation.php'); ?>
</div>
<div class="wrapper">
	<section>
		<div class="property-list_head">
			<div class="container">
				<h1>検索条件</h1>
				<p>東京の中古マンションを沿線・駅から探す</p>
			</div>
		</div>
	</section>
	
	<section class="section_search_conditions bg-white pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form action="" class="frm_search_conditions">
                        <h2 class="little_title">
                            エリアまたは沿線・駅から選択（複数選択可）
                            <button class="burger">
                                <span class="burger_line"></span>
                                <span class="burger_line"></span>
                                <span class="burger_line"></span>
                            </button>
                        </h2>
                        <div class="frm_search_conditions_content">
                        
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-area-tab" data-toggle="pill" href="#pills-area" role="tab" aria-controls="pills-area" aria-selected="true">エリアから探す</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-station-tab" data-toggle="pill" href="#pills-station" role="tab" aria-controls="pills-station" aria-selected="false">沿線・駅から探す</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade" id="pills-area" role="tabpanel" aria-labelledby="pills-area-tab">
                                    <div class="row">
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck01">
                                                <label class="custom-control-label" for="ck01">千代田区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck02" checked>
                                                <label class="custom-control-label" for="ck02">中央区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck03">
                                                <label class="custom-control-label" for="ck03">港区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck04">
                                                <label class="custom-control-label" for="ck04">新宿区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck05">
                                                <label class="custom-control-label" for="ck05">文京区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck06">
                                                <label class="custom-control-label" for="ck06">渋谷区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck07">
                                                <label class="custom-control-label" for="ck07">台東区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck08">
                                                <label class="custom-control-label" for="ck08">墨田区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck09">
                                                <label class="custom-control-label" for="ck09">江東区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck10">
                                                <label class="custom-control-label" for="ck10">荒川区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck11">
                                                <label class="custom-control-label" for="ck11">足立区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck12">
                                                <label class="custom-control-label" for="ck12">葛飾区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck13">
                                                <label class="custom-control-label" for="ck13">江戸川区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck14">
                                                <label class="custom-control-label" for="ck14">豊島区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck15">
                                                <label class="custom-control-label" for="ck15">北区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck16">
                                                <label class="custom-control-label" for="ck16">板橋区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck17">
                                                <label class="custom-control-label" for="ck17">中野区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck18">
                                                <label class="custom-control-label" for="ck18">杉並区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck19">
                                                <label class="custom-control-label" for="ck19">練馬区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck20">
                                                <label class="custom-control-label" for="ck20">品川区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck21">
                                                <label class="custom-control-label" for="ck21">目黒区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck22">
                                                <label class="custom-control-label" for="ck22">大田区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck23">
                                                <label class="custom-control-label" for="ck23">世田谷区</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck24">
                                                <label class="custom-control-label" for="ck24">八王子市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck25">
                                                <label class="custom-control-label" for="ck25">立川市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck26">
                                                <label class="custom-control-label" for="ck26">武蔵野市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck27">
                                                <label class="custom-control-label" for="ck27">三鷹市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck28">
                                                <label class="custom-control-label" for="ck28">青梅市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck29">
                                                <label class="custom-control-label" for="ck29">府中市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck30">
                                                <label class="custom-control-label" for="ck30">昭島市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck31">
                                                <label class="custom-control-label" for="ck31">調布市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck32">
                                                <label class="custom-control-label" for="ck32">町田市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck33">
                                                <label class="custom-control-label" for="ck33">小金井市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck34">
                                                <label class="custom-control-label" for="ck34">小平市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck35">
                                                <label class="custom-control-label" for="ck35">日野市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck36">
                                                <label class="custom-control-label" for="ck36">東村山市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck37">
                                                <label class="custom-control-label" for="ck37">国立市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck38">
                                                <label class="custom-control-label" for="ck38">福生市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck39">
                                                <label class="custom-control-label" for="ck39">狛江市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck40">
                                                <label class="custom-control-label" for="ck40">東大和市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck41">
                                                <label class="custom-control-label" for="ck41">清瀬市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck42">
                                                <label class="custom-control-label" for="ck42">東久留米市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck43">
                                                <label class="custom-control-label" for="ck43">東大和市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck44">
                                                <label class="custom-control-label" for="ck44">武蔵村山市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck45">
                                                <label class="custom-control-label" for="ck45">多摩市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck46">
                                                <label class="custom-control-label" for="ck46">稲城市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck47">
                                                <label class="custom-control-label" for="ck47">羽村市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck48">
                                                <label class="custom-control-label" for="ck48">あきる野市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck49">
                                                <label class="custom-control-label" for="ck49">西東京市</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck50">
                                                <label class="custom-control-label" for="ck50">西多摩郡</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck51">
                                                <label class="custom-control-label" for="ck51">大島支庁</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck52">
                                                <label class="custom-control-label" for="ck52">大島町</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck53">
                                                <label class="custom-control-label" for="ck53">利島村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck54">
                                                <label class="custom-control-label" for="ck54">新島村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck55">
                                                <label class="custom-control-label" for="ck55">神津島村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck56">
                                                <label class="custom-control-label" for="ck56">三宅支庁</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck57">
                                                <label class="custom-control-label" for="ck57">三宅島三宅村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck58">
                                                <label class="custom-control-label" for="ck58">御蔵島村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck59">
                                                <label class="custom-control-label" for="ck59">八丈支庁</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck60">
                                                <label class="custom-control-label" for="ck60">八丈島八丈町</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck61">
                                                <label class="custom-control-label" for="ck61">青ヶ島村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck62">
                                                <label class="custom-control-label" for="ck62">小笠原支庁</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck63">
                                                <label class="custom-control-label" for="ck63">小笠原村</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <p class="cases"><span>0</span>件</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="pills-station" role="tabpanel" aria-labelledby="pills-station-tab">

                                    <div class="accordion" id="accordionExample">
                                        <h2>JR 
                                            <a href="#box_jr" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="box_jr">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                  <h2 class="mb-0">
                                                    <div class="custom-control custom-checkbox ck_all">
                                                        <input type="checkbox" class="custom-control-input" id="ck_01">
                                                        <label class="custom-control-label" for="ck_01"><span>ＪＲ山手線</span></label>
                                                    </div>
                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    </button>
                                                  </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_01">
                                                                    <label class="custom-control-label" for="ck01_01">東京</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_02">
                                                                    <label class="custom-control-label" for="ck01_02">田町</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_03">
                                                                    <label class="custom-control-label" for="ck01_03">品川</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_04">
                                                                    <label class="custom-control-label" for="ck01_04">大崎</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_05">
                                                                    <label class="custom-control-label" for="ck01_05">五反田</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_06">
                                                                    <label class="custom-control-label" for="ck01_06">目黒</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>

                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_07">
                                                                    <label class="custom-control-label" for="ck01_07">恵比寿</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_08">
                                                                    <label class="custom-control-label" for="ck01_08">渋谷</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_01">
                                                                    <label class="custom-control-label" for="ck01_01">東京</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_09">
                                                                    <label class="custom-control-label" for="ck01_09">原宿</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_10">
                                                                    <label class="custom-control-label" for="ck01_10">代々木</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_11">
                                                                    <label class="custom-control-label" for="ck01_11">新宿</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_12">
                                                                    <label class="custom-control-label" for="ck01_12">新大久保</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_13">
                                                                    <label class="custom-control-label" for="ck01_13">高田馬場</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_14">
                                                                    <label class="custom-control-label" for="ck01_14">目白</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_11">
                                                                    <label class="custom-control-label" for="ck01_11">池袋</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_12">
                                                                    <label class="custom-control-label" for="ck01_12">新宿</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_13">
                                                                    <label class="custom-control-label" for="ck01_13">大塚</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_14">
                                                                    <label class="custom-control-label" for="ck01_14">巣鴨</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_15">
                                                                    <label class="custom-control-label" for="ck01_15">駒込</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>

                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_16">
                                                                    <label class="custom-control-label" for="ck01_16">田端</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_17">
                                                                    <label class="custom-control-label" for="ck01_17">西日暮里</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>

                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_18">
                                                                    <label class="custom-control-label" for="ck01_18">日暮里</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_19">
                                                                    <label class="custom-control-label" for="ck01_19">鶯谷</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_20">
                                                                    <label class="custom-control-label" for="ck01_20">上野</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_21">
                                                                    <label class="custom-control-label" for="ck01_21">御徒町</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_22">
                                                                    <label class="custom-control-label" for="ck01_22">秋葉原</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="ck01_23">
                                                                    <label class="custom-control-label" for="ck01_23">神田</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <p class="cases"><span>0</span>件</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_02">
                                                            <label class="custom-control-label" for="ck_02"><span>ＪＲ京浜東北線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_03">
                                                            <label class="custom-control-label" for="ck_03"><span>ＪＲ東海道本線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_04">
                                                                <label class="custom-control-label" for="ck_04"><span>ＪＲ常磐線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_05">
                                                            <label class="custom-control-label" for="ck_05"><span>ＪＲ南武線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_06">
                                                            <label class="custom-control-label" for="ck_06"><span>ＪＲ横浜線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_07">
                                                            <label class="custom-control-label" for="ck_07"><span>ＪＲ横須賀線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingEight">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_08">
                                                            <label class="custom-control-label" for="ck_08"><span>ＪＲ中央線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingNight">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_09">
                                                            <label class="custom-control-label" for="ck_09"><span>ＪＲ青梅線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNight" aria-expanded="false" aria-controls="collapseNight">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseNight" class="collapse" aria-labelledby="headingNight" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_10">
                                                            <label class="custom-control-label" for="ck_10"><span>ＪＲ五日市線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingEleven">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_11">
                                                            <label class="custom-control-label" for="ck_11"><span>ＪＲ武蔵野線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwelve">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox mb-0 ck_all">
                                                            <input type="checkbox" class="custom-control-input" id="ck_12">
                                                            <label class="custom-control-label" for="ck_12"><span>ＪＲ八高線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThirteen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_13">
                                                            <label class="custom-control-label" for="ck_13"><span>ＪＲ埼京線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFourteen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox mb-0 ck_all">
                                                            <input type="checkbox" class="custom-control-input" id="ck_14">
                                                            <label class="custom-control-label" for="ck_14"><span>ＪＲ高崎線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFifteen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox mb-0 ck_all">
                                                            <input type="checkbox" class="custom-control-input" id="ck_15">
                                                            <label class="custom-control-label" for="ck_15"><span>ＪＲ宇都宮線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingSixteen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox mb-0 ck_all">
                                                            <input type="checkbox" class="custom-control-input" id="ck_16">
                                                            <label class="custom-control-label" for="ck_16"><span>ＪＲ総武線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingSeventeen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_17">
                                                            <label class="custom-control-label" for="ck_17"><span>ＪＲ総武線快速</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingEightteen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_18">
                                                            <label class="custom-control-label" for="ck_18"><span>ＪＲ京葉線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseEightteen" class="collapse" aria-labelledby="headingEightteen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingNightteen">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_19">
                                                            <label class="custom-control-label" for="ck_19"><span>湘南新宿ライン宇須</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNightteen" aria-expanded="false" aria-controls="collapseNightteen">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseNightteen" class="collapse" aria-labelledby="headingNightteen" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwenty">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_20">
                                                            <label class="custom-control-label" for="ck_20"><span>湘南新宿ライン高海</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentyone">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_21">
                                                            <label class="custom-control-label" for="ck_21"><span>東海道新幹線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyone" class="collapse" aria-labelledby="headingTwentyone" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentytwo">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_22">
                                                            <label class="custom-control-label" for="ck_22"><span>上越新幹線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentytwo" class="collapse" aria-labelledby="headingTwentytwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentytree">
                                                    <h2 class="mb-0">
                                                        <div class="custom-control custom-checkbox ck_all mb-0">
                                                            <input type="checkbox" class="custom-control-input" id="ck_23">
                                                            <label class="custom-control-label" for="ck_23"><span>東北新幹線</span></label>
                                                        </div>
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentytree" aria-expanded="false" aria-controls="collapseTwentytree">
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentytree" class="collapse" aria-labelledby="headingTwentytree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        demo
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2>東京メトロ
                                            <a href="#tokyo_metro" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="tokyo_metro">
                                            <div class="accordion" id="accordion_tokyometro">
                                                <div class="card">
                                                    <div class="card-header" id="headingGinza">
                                                        <h2 class="mb-0">
                                                            <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_ginza">
                                                                <label class="custom-control-label" for="ck_ginza"><span>東京メトロ銀座線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseGinza" aria-expanded="false" aria-controls="collapseGinza">
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseGinza" class="collapse" aria-labelledby="headingGinza" data-parent="#accordion_tokyometro">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h2>都営地下鉄
                                            <a href="#toeisubway" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="toeisubway">
                                            <div class="accordion" id="accordion_toeisubway">
                                                <div class="card">
                                                    <div class="card-header" id="headingtoeiasakusa">
                                                        <h2 class="mb-0">
                                                            <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_toeiasakusa">
                                                                <label class="custom-control-label" for="ck_toeiasakusa"><span>都営浅草線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsetoeiasakusa" aria-expanded="false" aria-controls="collapsetoeiasakusa">
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsetoeiasakusa" class="collapse" aria-labelledby="headingtoeiasakusa" data-parent="#accordion_toeisubway">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h2>東急電鉄
                                            <a href="#tokyucorporation" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="tokyucorporation">
                                            <div class="accordion" id="accordion_tokyucorporation">
                                                <div class="card">
                                                    <div class="card-header" id="headingTokyutoyoko">
                                                        <h2 class="mb-0">
                                                            <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_Tokyutoyoko">
                                                                <label class="custom-control-label" for="ck_Tokyutoyoko"><span>東急東横線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTokyutoyoko" aria-expanded="false" aria-controls="collapseTokyutoyoko">
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTokyutoyoko" class="collapse" aria-labelledby="headingTokyutoyoko" data-parent="#accordion_tokyucorporation">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <h2>西武鉄道
                                            <a href="#seiburailway" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="seiburailway">
                                            <div class="accordion" id="accordion_Seiburailway">
                                                <div class="card">
                                                    <div class="card-header" id="headingSeibuyurakucho">
                                                        <h2 class="mb-0">
                                                            <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_Seibuyurakucho">
                                                                <label class="custom-control-label" for="ck_Seibuyurakucho"><span>西武有楽町線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeibuyurakucho" aria-expanded="false" aria-controls="collapseSeibuyurakucho">
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseSeibuyurakucho" class="collapse" aria-labelledby="headingSeibuyurakucho" data-parent="#accordion_Seiburailway">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2>東武鉄道
                                            <a href="#TobuRailway" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="TobuRailway">
                                            <div class="accordion" id="accordion_Toburailway">
                                                <div class="card">
                                                    <div class="card-header" id="headingTobutojo">
                                                        <h2 class="mb-0">
                                                            <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_Tobutojo">
                                                                <label class="custom-control-label" for="ck_Tobutojo"><span>東武東上線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTobutojo" aria-expanded="false" aria-controls="collapseTobutojo">
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTobutojo" class="collapse" aria-labelledby="headingTobutojo" data-parent="#accordion_Toburailway">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2>京王電鉄
                                            <a href="#KeioElectricRailway" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="KeioElectricRailway">
                                            <div class="accordion" id="accordion_Keioelectric">
                                                <div class="card">
                                                    <div class="card-header" id="headingKeioinokashira">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKeioinokashira" aria-expanded="false" aria-controls="collapseKeioinokashira">
                                                                <div class="custom-control custom-checkbox mb-0">
                                                                    <input type="checkbox" class="custom-control-input" id="ck_Keioinokashira">
                                                                    <label class="custom-control-label" for="ck_Keioinokashira">京王井の頭線</label>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseKeioinokashira" class="collapse" aria-labelledby="headingKeioinokashira" data-parent="#accordion_Keioelectric">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2>京成電鉄
                                            <a href="#KeiseiElectricRailway" data-toggle="collapse">
                                                <div class="icon plus-to-minus"></div>
                                            </a>
                                        </h2>
                                        <div class="collapse multi-collapse" id="KeiseiElectricRailway">
                                            <div class="accordion" id="accordion_Keiseielectric">
                                                <div class="card">
                                                    <div class="card-header" id="headingKeiseioshiage">
                                                        <h2 class="mb-0">
                                                            <div class="custom-control custom-checkbox ck_all mb-0">
                                                                <input type="checkbox" class="custom-control-input" id="ck_Keiseioshiage">
                                                                <label class="custom-control-label" for="ck_Keiseioshiage"><span>京成押上線</span></label>
                                                            </div>
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKeiseioshiage" aria-expanded="false" aria-controls="collapseKeiseioshiage">
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseKeiseioshiage" class="collapse" aria-labelledby="headingKeiseioshiage" data-parent="#accordion_Keiseielectric">
                                                        <div class="card-body">
                                                            demo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                    </div>

                            </div>

                        </div>


                        <h2 class="little_title">価格（万円）</h2>
                        <div class="form-group box_form_group">
                            <select name="" class="custom-select">
                                <option value="">下限なし</option>
                                <option value="">0</option>
                                <option value="">1</option>
                            </select>
                            <p class="mb-0">⁓</p>
                            <select name="" class="custom-select">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">上限なし</option>
                            </select>
                        </div>
                        <h2 class="little_title">広さ（m<sup>2</sup>）</h2>
                        <div class="form-group box_form_group">
                            <select name="" class="custom-select">
                                <option value="">下限なし</option>
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                            <p class="mb-0">⁓</p>
                            <select name="" class="custom-select">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">上限なし</option>
                            </select>
                        </div>

                        <h2 class="little_title">こだわり</h2>
                        <ul class="list_commitment">
                            <li><a class="btn_commitment" href="#">カスタム可能</a></li>
                            <li><a class="btn_commitment" href="#">リノベ済</a></li>
                            <li><a class="btn_commitment" href="#">ペット飼育可</a></li>
                            <li><a class="btn_commitment" href="#">ウォークインクローゼット</a></li>
                            <li><a class="btn_commitment" href="#">シューズインクローゼット</a></li>
                            <li><a class="btn_commitment" href="#">角部屋</a></li>
                            <li><a class="btn_commitment" href="#">1DK/LDK</a></li>
                            <li><a class="btn_commitment" href="#">2DK/LDK</a></li>
                            <li><a class="btn_commitment" href="#">3DK/LDK</a></li>
                            <li><a class="btn_commitment" href="#">4DK/LDK以上</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</div>

<?php include ('footer.php'); ?>