function menu()
{
    // Update popup menu 20-09-2021
    this.html = {
        drawer_item:'.drawer-item',
        drawer_txt:'.drawer-txt',
        drawer_btn:'.property-panel-current',
        drawer_btn_prev:'.close-detail',
        drawer_parent: '.drawer',
        drawer_detail:'.drawer-detail',
        show_detail:'show-detail',
        detail_showing:'detail-showing',
        detail_closing:'detail-closing',
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
        _this.drawerMenu();
        _this.footerToggle();
        _this.footerFloorActive();
    }

    // Update popup menu 20-09-2021
    this.footerFloorActive = function()
    {
        const toggles = document.querySelectorAll('.board-info .cs-pattern');
        toggles.forEach( ele =>{
            ele.addEventListener('click',e =>{
                const {currentTarget}  = e;
                toggles.forEach( elea =>{
                    elea.classList.remove('active');
                });
                currentTarget.classList.add('active');
            });
        });
       
    }

    // Update popup menu 20-09-2021
    this.footerToggle = function()
    {
        const toggle = document.querySelector('.board-info_extra .tab');
        const _this = this;
        //PC remove
        window.addEventListener('resize', ()=>{
            let width = window.outerWidth;
            if( width > 991 ){
                document.querySelector('.board-info_extra').removeAttribute('style');
            }
        });
        //Handle SP
        toggle.addEventListener('click',e =>{
            const {currentTarget}  = e;
            const parent = currentTarget.closest('.board-info_extra');
            const height = parent.offsetHeight;
            if( parent.getAttribute('style') ){
                parent.removeAttribute('style');
            } else{
                parent.style.transform = `translateY(${height-40}px)`;
            }
            //callback
            _this.drawerMenu();
        });
    }

    // Update popup menu 20-09-2021
    this.drawerMenu = function ()
    {
        const eleSideBars = ['.drawer-detail-modal','.drawer-pos'];
        eleSideBars.forEach((ele,i)=>{
            const eleFooterBoard = document.querySelector('.board-info');
            const eleHeader = document.querySelector('header');
            const eleDrawerMenu = document.querySelector(ele);
            let heightHeader = eleHeader.offsetHeight;
            let height = eleFooterBoard.offsetHeight;

            //check footer open
            const footerExtra = document.querySelector('.board-info_extra');
            let heightFooterChange = 0;
            if( footerExtra.getAttribute('style') ){  
                heightFooterChange = footerExtra.offsetHeight-50;
            } else{
                heightFooterChange = height+footerExtra.offsetHeight-10;
            }
            eleDrawerMenu.style.bottom = (heightFooterChange)+'px';
            
            window.addEventListener('resize', ()=>{
                height = eleFooterBoard.offsetHeight;
                if( footerExtra.getAttribute('style') ){  
                    heightFooterChange = footerExtra.offsetHeight-50;
                } else{
                    heightFooterChange = height+footerExtra.offsetHeight-10;
                }   
                eleDrawerMenu.style.bottom = (heightFooterChange)+'px';
            });
        });
    }
    
    // Update popup menu 20-09-2021
    this.drawerPos = function()
    {
        const _this = this;
        const eleHeader = document.querySelector('header');
        const eleDrawerPos = document.querySelector('.drawer-pos');
        const eleDrawerDetail = document.querySelector('.drawer-detail-modal');
        const eleTool = document.querySelector('.board-tool');
        let height = eleHeader.offsetHeight;
        eleDrawerPos.style.top = height+'px';
        eleTool.style.top = (height+20)+'px';
        eleDrawerDetail.style.top = height+'px';
        window.addEventListener('resize', ()=>{
            height = eleHeader.offsetHeight;
            eleDrawerPos.style.top = height+'px';
            eleDrawerDetail.style.top = height+'px';
            eleTool.style.top = (height+20)+'px';
        });   
    }

    // Update popup menu 20-09-2021
    this.backFromDetailToItems = function()
    {
        const _this = this;
        const { drawer_btn_prev,
                drawer_parent,
                show_detail,
                drawer_detail,
                detail_closing, } = _this.html;
        const btnBack = document.querySelector(drawer_btn_prev);
        btnBack.addEventListener('click',e =>{
            const {currentTarget} = e;
            const parent = currentTarget.closest(drawer_parent);
            //Closing
            parent.classList.add(detail_closing);
            setTimeout(()=>{
                parent.classList.remove(show_detail);
            },40); 
        });

    }

    // Update popup menu 20-09-2021
    this.showDetail = function()
    {
        const _this = this;
        const data_id = 'data-id';
        const { drawer_item,
            drawer_txt,
            drawer_btn,
            drawer_parent,
            show_detail,
            detail_showing,} = _this.html;
        const eleDetail = document.querySelectorAll(`${drawer_item},${drawer_txt},${drawer_btn}`);
        eleDetail.forEach(ele =>{
            ele.addEventListener('click',e => {
                const {currentTarget,target} = e;
                if(target.tagName === 'I') return;
                const parent = currentTarget.closest(drawer_parent);
                const data = currentTarget.getAttribute(data_id);
                //button global
                if( currentTarget.classList.contains('property-panel-current') ){

                    const detail_popup = document.querySelector(drawer_parent);
                    setTimeout(()=>{
                        detail_popup.classList.add(detail_showing);
                    },10);
                    setTimeout(()=>{
                        detail_popup.classList.add(show_detail);
                        detail_popup.classList.remove(detail_showing);
                    },40);
                } else {
                    parent.classList.remove(`${detail_showing},${show_detail}`);
                    //Showing
                    parent.classList.add(detail_showing);
                    setTimeout(()=>{
                        parent.classList.add(show_detail);
                        parent.classList.remove(detail_showing);
                        document.querySelector(drawer_btn).setAttribute('data-id',data);
                    },40);
                }
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


function handle_modal()
{
    this.ready = function()
    {
        const _this = this;
        _this.numIncrease();
        _this.numDecrease();
        _this.numChange();
        _this.choseItem();
    }

    this.choseItem = function()
    {
        const _this = this;
        const choseItems = document.querySelectorAll('#infoModal .hasChoice');
        choseItems.forEach(choseItem=>{
            choseItem.addEventListener('change',e=>{
                const {currentTarget} = e;
                _this.calculateResult();
            });
        });
    }

    this.numChange = function()
    {
        const _this = this;
        const change_inputs = document.querySelectorAll('.quantity-block input');

        change_inputs.forEach(change_input=>{
            change_input.addEventListener('change', e => {
                const {currentTarget} = e;
                const nextParent = currentTarget.closest('td').nextElementSibling;
                
                let value = parseInt(currentTarget.value);
                if( value <= 1 || isNaN(value) ) {
                    value = currentTarget.value = 1;
                }
                const options = {
                    input: currentTarget,
                    nextParent:nextParent,
                    value:value,
                }
                _this.calculatePrice(options);   
            });
        });
    }

    this.numIncrease = function()
    {
        const _this = this;
        const up_nums = document.querySelectorAll('.quantity-block .up-num');
        const up_inputs = document.querySelectorAll('.quantity-block input');
        up_nums.forEach(up_num=>{
            up_num.addEventListener('click',e=>{
                const {currentTarget} = e;
                const nextParent = currentTarget.closest('td').nextElementSibling;
                
                const input = currentTarget.closest('.quantity-block').querySelector('input');
                let value = parseInt(input.value);
                value = isNaN(value) ? 1 : value;
                value++;
                input.value = value;
                //handle calculate
                const options = {
                    input: input,
                    nextParent:nextParent,
                    value:value,
                }
                _this.calculatePrice(options);    
            });
        });


        up_inputs.forEach(up_input=>{
            up_input.addEventListener('keydown', e => {
                const {currentTarget} = e;
                const key = e.key;
                const nextParent = currentTarget.closest('td').nextElementSibling;
                
                let value = parseInt(currentTarget.value);
                if(key === 'ArrowUp'){
                    const options = {
                        input: currentTarget,
                        nextParent:nextParent,
                        value:value,
                    }
                    _this.calculatePrice(options);   
                }
            });
        });    
    }

    this.numDecrease = function()
    {
        const _this = this;
        const down_nums = document.querySelectorAll('.quantity-block .down-num');
        const down_inputs = document.querySelectorAll('.quantity-block input');
       
        down_nums.forEach(down_num=>{
            down_num.addEventListener('click',e=>{
                const {currentTarget} = e;
                const nextParent = currentTarget.closest('td').nextElementSibling;
                const input = currentTarget.closest('.quantity-block').querySelector('input');
                

                let value = parseInt(input.value);
                value = isNaN(value) ? 1 : value;
                if(value===1)return;
                value--;
                input.value = value;

                //handle calculate
                const options = {
                    input: input,
                    nextParent:nextParent,
                    value:value,
                }
                _this.calculatePrice(options);  

            }); 
        });

        down_inputs.forEach(down_input=>{
            down_input.addEventListener('keydown', e => {
                const {currentTarget} = e;
                const nextParent = currentTarget.closest('td').nextElementSibling;
                const key = e.key;
                let value = parseInt(currentTarget.value);
                if(key === 'ArrowDown'){
                    if(value <= 1 || isNaN(value) ) {
                        value = currentTarget.value = 1;
                    }
                    //handle calculate
                    const options = {

                        input: currentTarget,
                        nextParent:nextParent,
                        value:value,
                    }
                    _this.calculatePrice(options);  
                } 
            });
        });    
    }

    this.calculatePrice = function(options)
    {
        const _this = this;
        const {input,nextParent,value,hasChoice} = options;
        const price = input.getAttribute('data-price');
        //Each list
        let calcPrice = price*value;
        nextParent.querySelector('.total').setAttribute('data-total',calcPrice);
        calcPrice = new Intl.NumberFormat(
            'ja-JP', 
            { 
                style: 'currency', 
                currency: 'JPY' 
            }
        ).format(calcPrice);
        nextParent.querySelector('.total').innerHTML = calcPrice;

        //Total List
        _this.calculateResult();
    }

    this.calculateResult = function()
    {
        const totals = document.querySelectorAll('#infoModal .total');
        let beforeVat = 0;
        totals.forEach(total=>{
            const hasChoice = total.closest('tr').querySelector('.hasChoice');
            let price_total = parseInt(total.getAttribute('data-total'));
            if( !isNaN(price_total) && hasChoice.checked ){
                beforeVat += price_total;
            }
        });
        const vat = beforeVat*0.1;
        const afterVat = vat + beforeVat;
        const beforeVatCurrency = new Intl.NumberFormat(
            'ja-JP', 
            { 
                style: 'currency', 
                currency: 'JPY' 
            }
        ).format(beforeVat);
        const vatCurrency = new Intl.NumberFormat(
            'ja-JP', 
            { 
                style: 'currency', 
                currency: 'JPY' 
            }
        ).format(vat);
        const afterVatCurrency = new Intl.NumberFormat(
            'ja-JP', 
            { 
                style: 'currency', 
                currency: 'JPY' 
            }
        ).format(afterVat);
        document.querySelector('#infoModal .before-vat').innerHTML = beforeVatCurrency;
        document.querySelector('#infoModal .vat').innerHTML = vatCurrency; 
        document.querySelector('#infoModal .after-vat').innerHTML = afterVatCurrency;
        document.querySelector('.board-info .col-right .preview-total-price').innerHTML = afterVatCurrency;
    }
}



const run_handle_modal = new handle_modal();
const action = new helper();
const sideMenu = new menu();
window.addEventListener('DOMContentLoaded', (event) => {
    sideMenu.ready();
    run_handle_modal.ready();
});





















