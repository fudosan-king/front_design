var LIGHTBOX_DEFAULTS = {
	imageLoading:			'/images/lightbox/lightbox-ico-loading.gif',		// (string) Path and the name of the loading icon
	imageBtnPrev:			'/images/lightbox/lightbox-btn-prev.gif',			// (string) Path and the name of the prev button image
	imageBtnNext:			'/images/lightbox/lightbox-btn-next.gif',			// (string) Path and the name of the next button image
	imageBtnClose:		'/images/lightbox/lightbox-btn-close.gif',		// (string) Path and the name of the close btn
	imageBlank:				'/images/lightbox/lightbox-blank.gif' 			// (string) Path and the name of a blank image (one pixel)
};


/*
 * 画像の実際のサイズを取得する
 *
 * @param  string  image  img要素
 */
function getActualDimension(image) {
    var run, mem, w, h, key = "actual";
 
    // for Firefox, Safari, Google Chrome
    if ("naturalWidth" in image) {
        return {width: image.naturalWidth, height: image.naturalHeight};
    }
    if ("src" in image) { // HTMLImageElement
        if (image[key] && image[key].src === image.src) {return image[key];}
         
        if (document.uniqueID) { // for IE
          var r = image.runtimeStyle;
          var savedW = r.width;
          var savedH = r.height;
          
          r.width = r.height = 'auto';
          var result = {
            width: image.width,
            height: image.height
          };
          r.width = savedW;
          r.height = savedH;
          return result;
        } else { // for Opera and Other
            mem = {w: image.width, h: image.height}; // keep current style
            $(this).removeAttr("width").removeAttr("height").css({width:"",  height:""});    // Remove attributes in case img-element has set width  and height (for webkit browsers)
            w = image.width;
            h = image.height;
            image.width  = mem.w; // restore
            image.height = mem.h;
        }
        return image[key] = {width: w, height: h, src: image.src}; // bond
    }
     
    // HTMLCanvasElement
    return {width: image.width, height: image.height};
}


function initialize_image_list(imageContainer, listNode) {
  listNode = $(listNode);
  
  var maxWidth = +imageContainer.width();
  var maxHeight = +imageContainer.height();
  var ratio = maxWidth / maxHeight;
  var speed = 'normal';

  function _swap_image(oldImage, newImage) {
    var size = getActualDimension(newImage);
    
    var w = size.width, h = size.height;
    var r = w / h;
    
    if(w > maxWidth || h > maxHeight) {
      if(r > ratio) {
        w = maxWidth;
        h = maxWidth / r;
      } else {
        w = maxHeight * r;
        h = maxHeight;
      }
    }

    $('<img src="' + newImage.src + '" style="display: none;">')
      .appendTo(imageContainer)
      .css({
        width: w +'px',
        height: h + 'px',
        left: (maxWidth - w) / 2. + 'px'
      })
      .fadeIn(speed);
    
    if(oldImage) {
      oldImage.fadeOut(speed, function() {
        oldImage.remove();
      });
    }
  }
  
  listNode.find('li').on('click', function() {
    var me = $(this);
    listNode.find('.active').removeClass('active');
    me.addClass('active');
    
    var image = new Image();
    var src = me.find('img').attr('main-image');
    image.src = src;
  
    var size = getActualDimension(image);

    function _f() {
      var oldImage = imageContainer.find('img');
      _swap_image(oldImage, image);
    }

    if(size.width) {
      _f();
    } else {
      image.onload = function() {
        _f();
      }
    }
  });
  
  listNode.find('li.active').click();
}
