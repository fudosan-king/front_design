$(function() {
  // setTimeout(function() { $("footer").fadeOut(1500); }, 3000);

  $( ".btn_notice" ).click(function() {
    $( "#box_notice" ).toggle( "fast", function() {});
  });

  $( ".btn_edit" ).click(function() {
    $( "#box_notice" ).toggle( "fast", function() {});
  });

  $( ".btn_chat" ).click(function() {
    $( "#box_chat" ).toggle( "fast", function() {});
  });

  $( "#box_notice .btn_close" ).click(function() {
    $( "#box_notice" ).toggle( "fast", function() {});
  });
  $( "#box_chat .btn_close" ).click(function() {
    $( "#box_chat" ).toggle( "fast", function() {});
  });

  $( ".btn_emotion" ).click(function() {
    $( ".w_box_emotion" ).toggle( "fast", function() {});
  });

  $(".btn_bell").click(function () {
    $("#box_chat").toggle("fast", function () { });
  });

})

jQuery(document).ready(function ($) {
  //open popup
  $('.cd-popup-trigger').on('click', function (event) {
    event.preventDefault();
    $('.cd-popup').addClass('is-visible');
  });

  //close popup
  $('.cd-popup').on('click', function (event) {
    if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function (event) {
    if (event.which == '27') {
      $('.cd-popup').removeClass('is-visible');
    }
  });
});




var dragSrcEl = null;

function handleDragStart(e) {
  // Target (this) element is the source node.
  dragSrcEl = this;

  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.outerHTML);

  this.classList.add('dragElem');
}
function handleDragOver(e) {
  if (e.preventDefault) {
    e.preventDefault(); // Necessary. Allows us to drop.
  }
  this.classList.add('over');

  e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

  return false;
}

function handleDragEnter(e) {
  // this / e.target is the current hover target.
}

function handleDragLeave(e) {
  this.classList.remove('over');  // this / e.target is previous target element.
}

function handleDrop(e) {
  // this/e.target is current target element.

  if (e.stopPropagation) {
    e.stopPropagation(); // Stops some browsers from redirecting.
  }

  // Don't do anything if dropping the same column we're dragging.
  if (dragSrcEl != this) {
    // Set the source column's HTML to the HTML of the column we dropped on.
    //alert(this.outerHTML);
    //dragSrcEl.innerHTML = this.innerHTML;
    //this.innerHTML = e.dataTransfer.getData('text/html');
    this.parentNode.removeChild(dragSrcEl);
    var dropHTML = e.dataTransfer.getData('text/html');
    this.insertAdjacentHTML('beforebegin', dropHTML);
    var dropElem = this.previousSibling;
    addDnDHandlers(dropElem);

  }
  this.classList.remove('over');
  return false;
}

function handleDragEnd(e) {
  // this/e.target is the source node.
  this.classList.remove('over');

  /*[].forEach.call(cols, function (col) {
    col.classList.remove('over');
  });*/
}

function addDnDHandlers(elem) {
  elem.addEventListener('dragstart', handleDragStart, false);
  elem.addEventListener('dragenter', handleDragEnter, false)
  elem.addEventListener('dragover', handleDragOver, false);
  elem.addEventListener('dragleave', handleDragLeave, false);
  elem.addEventListener('drop', handleDrop, false);
  elem.addEventListener('dragend', handleDragEnd, false);

}

var cols = document.querySelectorAll('.memo-corp__content .memo-corp__section');
[].forEach.call(cols, addDnDHandlers);

