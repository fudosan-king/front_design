initDragAndDrop();

function initDragAndDrop() {
    // Collect all draggable elements and drop zones
    const draggables = document.querySelectorAll(".draggable");
    const dropZones = document.querySelectorAll(".drop-zone");
    initDraggables(draggables);
    initDropZones(dropZones);
}

function initDraggables(draggables) {
    for (const draggable of draggables) {
        initDraggable(draggable);
    }
}

function initDropZones(dropZones) {
    for (const dropZone of dropZones) {
        initDropZone(dropZone);
    }
}

/**
 * Set all event listeners for draggable element
 */
function initDraggable(draggable) {
    draggable.addEventListener("dragstart", dragStartHandler);
    draggable.addEventListener("drag", dragHandler);
    draggable.addEventListener("dragend", dragEndHandler);

    // set draggable elements to draggable
    draggable.setAttribute("draggable", "true");
}

/**
 * Set all event listeners for drop zone
 */
function initDropZone(dropZone) {
    dropZone.addEventListener("dragenter", dropZoneEnterHandler);
    dropZone.addEventListener("dragover", dropZoneOverHandler);
    dropZone.addEventListener("dragleave", dropZoneLeaveHandler);
    dropZone.addEventListener("drop", dropZoneDropHandler);
}

/**
 * Start of drag operation, highlight drop zones and mark dragged element
 */
function dragStartHandler(e) {
    setDropZonesHighlight();
    this.classList.add('dragged', 'drag-feedback');
    e.dataTransfer.setData("type/dragged-box", 'dragged');
    e.dataTransfer.setData("text/plain", this.textContent.trim());
    deferredOriginChanges(this, 'drag-feedback');
}

/**
 * While dragging is active we can do something
 */
function dragHandler() {
    // do something... if you want
}

/**
 * Very last step of the drag operation, remove all added highlights and others
 */
function dragEndHandler() {
    setDropZonesHighlight(false);
    this.classList.remove('dragged');
}

/**
 * When entering a drop zone check if it should be allowed to
 * drop an element here and highlight the zone if needed
 */
function dropZoneEnterHandler(e) {
    if (e.dataTransfer.types.includes('type/dragged-box')) {
        this.classList.add("over-zone");
        e.preventDefault();
    }
}

/**
 * When moving inside a drop zone we can check if it should be
 * still allowed to drop an element here
 */
function dropZoneOverHandler(e) {
    if (e.dataTransfer.types.includes('type/dragged-box')) {
        e.preventDefault();
    }
}

/**
 * When we leave a drop zone we check if we should remove the highlight
 */
function dropZoneLeaveHandler(e) {
    if (e.dataTransfer.types.includes('type/dragged-box') &&
        e.relatedTarget !== null &&
        e.currentTarget !== e.relatedTarget.closest('.drop-zone')) {
        this.classList.remove("over-zone");
    }
}

/**
 * On successful drop event, move the element
 */
function dropZoneDropHandler(e) {
    e.preventDefault();

    const draggedElement = document.querySelector('.dragged');
    const dropZone = e.currentTarget;

    // Tính toán vị trí thả
    const mouseY = e.clientY;
    const dropZoneRect = dropZone.getBoundingClientRect();

    // Duyệt qua các phần tử con để tìm vị trí thả
    const children = Array.from(dropZone.children);
    let inserted = false;

    for (const child of children) {
        const childRect = child.getBoundingClientRect();
        const childCenterY = childRect.top + childRect.height / 2;

        if (mouseY < childCenterY) {
            dropZone.insertBefore(draggedElement, child);
            inserted = true;
            break;
        }
    }

    if (!inserted) {
        dropZone.appendChild(draggedElement);
    }

    // Loại bỏ lớp 'dragged' sau khi thả
    draggedElement.classList.remove('dragged');
}

/**
 * Highlight all drop zones or remove highlight
 */
function setDropZonesHighlight(highlight = true) {
    const dropZones = document.querySelectorAll(".drop-zone");
    for (const dropZone of dropZones) {
        if (highlight) {
            dropZone.classList.add("active-zone");
        } else {
            dropZone.classList.remove("active-zone");
            dropZone.classList.remove("over-zone");
        }
    }
}

/**
 * After the drag feedback image has been generated we can remove the class we added
 * for the image generation and/or change the originally dragged element
 */
function deferredOriginChanges(origin, dragFeedbackClassName) {
    setTimeout(() => {
        origin.classList.remove(dragFeedbackClassName);
    });
}
