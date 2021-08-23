function menu()
{

    this.html = {
        drawer_current_items:'.drawer-items:not(.drawer-detail)',
        drawer_item:'.drawer-item',
        drawer_txt:'.drawer-txt',
        drawer_btn:'.drawer-btn-action',
        drawer_btn_prev:'.drawer-btn_prev',
        drawer_parent: '.drawer-group',
        drawer_navbars_top:'.drawer-navbars_top',
        drawer_hidden:'drawer-hidden',
        drawer_detail:'.drawer-detail',
        show_detail:'show-detail',
        detail_showing:'detail-showing',
    }

    this.hamburger = function()
    {   
        const _this = this;
        const eleBody   = document.getElementsByTagName('body')[0];
        const hasOpened = eleBody.classList.contains('hambergur_opened');
        const eleDrawerMenu = document.getElementById('drawer_menu');
        //if opened
        if ( hasOpened ){
            //remove opening
            eleBody.classList.remove('hambergur_opening');  
            //add closing
            eleBody.classList.add('hambergur_closing');
            //remove opened
            setTimeout(function(){ 
                eleBody.classList.remove('hambergur_opened','hambergur_closing');
            },50);

        } else {
            //opening
            eleBody.classList.add('hambergur_opening');  
            //opened
            setTimeout(function(){ 
                eleBody.classList.add('hambergur_opened');    
            }, 15);
        }
    }

    this.ready = function()
    {
        const _this = this;
        _this.showDetail();
        _this.backFromDetailToItems();
        _this.drawerPos();
    }

    this.drawerPos = function()
    {
        const _this = this;
        const eleHeader = document.querySelector('header');
        const eleDrawerPos = document.querySelector('.drawer-pos');
        const eleTool = document.querySelector('.board-tool');

        let height = eleHeader.offsetHeight;
        eleDrawerPos.style.top = height+'px';
        eleTool.style.top = (height+20)+'px';
        window.addEventListener('resize', ()=>{
            height = eleHeader.offsetHeight;
            eleDrawerPos.style.top = height+'px';
            eleTool.style.top = (height+20)+'px';
        });   
    }



    this.backFromDetailToItems = function()
    {
        const _this = this;
        const { drawer_hidden,
                drawer_btn_prev,
                drawer_parent,
                show_detail,
                drawer_navbars_top,
                drawer_detail,
                drawer_current_items,
                detail_showing, } = _this.html;
        const btnBacks = document.querySelectorAll(drawer_btn_prev);
        btnBacks.forEach(btnBack =>{
            btnBack.addEventListener('click',e =>{
                const {currentTarget} = e;
                const currentParent = currentTarget.closest(drawer_navbars_top);
                const parentList = currentParent.nextElementSibling;
                //Showing
                parentList.classList.add(detail_showing);
                parentList.classList.remove(show_detail);
                currentParent.classList.add(drawer_hidden);
                parentList.querySelector(drawer_current_items).classList.remove(drawer_hidden);
                setTimeout(()=>{
                    parentList.classList.remove(detail_showing);
                    if( parentList.querySelector(drawer_detail) ){
                        parentList.querySelector(drawer_detail).remove();
                    }
                },40); 
            });
        });
    }


    this.showDetail = function()
    {
        const _this = this;
        const data_id = 'data-id';
        const { drawer_item,
            drawer_txt,
            drawer_btn,
            drawer_parent,
            drawer_detail,
            show_detail,
            drawer_hidden,
            drawer_current_items,
            detail_showing,} = _this.html;
        const eleDetail = document.querySelectorAll(`${drawer_item},${drawer_txt},${drawer_btn}`);

        eleDetail.forEach(ele =>{

            ele.addEventListener('click',e => {
                const {currentTarget,target} = e;
                
                if(target.tagName === 'I') return;

                const parent = currentTarget.closest(drawer_parent);
                const data = currentTarget.getAttribute(data_id);

                //Showing
                parent.classList.add(detail_showing);
                setTimeout(()=>{
                    parent.classList.remove(detail_showing);
                    parent.querySelector(drawer_current_items).classList.add(drawer_hidden);
                    parent.classList.add(show_detail);
                },40);
                parent.previousElementSibling.classList.remove(drawer_hidden);
                if( parent.querySelector(drawer_detail) ){
                    parent.querySelector(drawer_detail).remove();
                }
                let html = '';
                html += `
                    <ul class="drawer-items drawer-detail drawer-collapse">
                        <li>
                            <div data-id="69" class="drawer-item">
                                <i onclick="sideMenu.wishList(event)" class="top i-heart-circle-light"></i>
                                <img src="./images/menu-side/1.svg" alt="image" title="image">
                            </div>
                            <div data-id="69" class="drawer-txt">
                                <p>SEMPRE</p>
                                <p>ベッド（BE-02）シングル</p>
                                <p>W1110 / D2260 / H650</p>
                                <p>151,200 円</p>
                                <i class="zoom i-search-orange"></i>
                            </div>
                        </li>
                        <li>
                            <button type="button"
                                class="btn btn-turquoise">
                                削除
                            </button>
                            <button type="button"
                                class="btn btn-turquoise">
                                複製
                            </button>
                            <button type="button"
                                class="btn btn-turquoise">
                                高さ調整
                            </button>
                        </li>
                        <li>
                            <p>種類名</p>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                        </li>
                        <li>
                            <p>種類名</p>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                            <div class="drawer-item"></div>
                        </li>
                        <li class="text-center">
                            <a class="btn btn-yellow">商品サイトへ</a> 
                        </li>
                    </ul>
                `; 
                parent.insertAdjacentHTML('afterbegin',html);

            });

        });
    }


    this.colMode = function(e)
    {
        const {currentTarget} = e;
        const parentControl = currentTarget.closest('.control-view');
        const parentList = parentControl.nextElementSibling;
        const drawer_items = parentList.querySelectorAll('.drawer-item');
        drawer_items.forEach(drawer_item => {
            drawer_item.querySelector('i').remove();
        });
        currentTarget.previousElementSibling.classList.remove('current');
        currentTarget.classList.add('current');
        parentControl.nextElementSibling.classList.remove('mode-list');
    }

    this.listMode = function(e)
    {
        const {currentTarget} = e;
        const parentControl = currentTarget.closest('.control-view');
        const parentList = parentControl.nextElementSibling;
        const drawer_items = parentList.querySelectorAll('.drawer-item');
        drawer_items.forEach(drawer_item => {
            const html = `<i onclick="sideMenu.wishList(event)" class="top i-heart-circle-light"></i>`;
            drawer_item.innerHTML = html;
        });

        currentTarget.nextElementSibling.classList.remove('current');
        currentTarget.classList.add('current');
        parentControl.nextElementSibling.classList.add('mode-list')
    }

    this.wishList = function(e)
    {
        const {currentTarget} = e;
        const _this = this;
        const classAdd = 'saved';

        if ( currentTarget.classList.contains(classAdd) ){
            currentTarget.classList.remove(classAdd);
        } else {
            currentTarget.classList.add(classAdd);
        }
    }
}

function helper()
{
    
    this.func = {
        modal:new bootstrap.Modal(
            document.getElementById("infoModal")
        ),
    }

    this.closeModal = function(e)
    {   
        const _this = this;
        const {modal} = _this.func;
        modal.hide();
    }

}

const action = new helper();
const sideMenu = new menu();
window.addEventListener('DOMContentLoaded', (event) => {
    sideMenu.ready();
});





















