/**
 * Private vars
 */

var $W = $(window),
    $D = $(document),

    // plugin default options
    defaults = {
        draggable: true,
        resizable: true,
        movable: true,
        keyboard: true,
        title: true,
        modalWidth: 320,
        modalHeight: 320,
        fixedContent: true,
        fixedModalSize: false,
        initMaximized: false,
        gapThreshold: 0.02,
        ratioThreshold: 0.1,
        minRatio: 0.1,
        maxRatio: 16,
        headToolbar: [
            'maximize',
            'close'
        ],
        footToolbar: [
            'zoomIn',
            'zoomOut',
            'prev',
            'fullscreen',
            'next',
            'actualSize',
            'rotateRight'
        ],
        icons: {
            maximize: 'fa fa-window-maximize',
            close: 'fa fa-close',
            zoomIn: 'fa fa-search-plus',
            zoomOut: 'fa fa-search-minus',
            prev: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right',
            fullscreen: 'fa fa-photo',
            actualSize: 'fa fa-arrows-alt',
            rotateLeft: 'fa fa-rotate-left',
            rotateRight: 'fa fa-rotate-right',
            loading: 'fa fa-spinner fa-pulse'
        },
        // lang: 'en',
        i18n: {
            maximize: 'maximize',
            close: 'close',
            zoomIn: 'zoom-in',
            zoomOut: 'zoom-out',
            prev: 'prev',
            next: 'next',
            fullscreen: 'fullscreen',
            actualSize: 'actual-size',
            rotateLeft: 'rotate-left',
            rotateRight: 'rotate-right'
        }
        // beforeOpen:$.noop,
        // afterOpen:$.noop,
        // beforeClose:$.noop,
        // afterClose:$.noop
    },

    // jquery element of calling plugin
    jqEl = null,

    // image moving flag
    isMoving = false,

    // modal resizing flag
    isResizing = false,

    // modal open flag
    isOpened = false,

    // modal maximize flag
    isMaximized = false,

    // image rotate 90*(2n+1) flag
    isRotated = false,

    // image rotate angle
    rotateAngle = 0;


/**
 * Magnify Class
 */
var Magnify = function (el, options) {

    var self = this;

    this.options = $.extend(true, {}, defaults, options);

    if (options && $.isArray(options.footToolbar)) {
        this.options.footToolbar = options.footToolbar;
    }

    if (options && $.isArray(options.headToolbar)) {
        this.options.headToolbar = options.headToolbar;
    }

    this.isOpened = false;
    this.isMaximized = false;
    this.isRotated = false;
    this.rotateAngle = 0;

    // Store image data in every instance
    this.imageData = {};
    // Store modal data in every instance
    this.modalData = {
        width: null,
        height: null,
        left: null,
        top: null
    }

    this.init(el, self.options);

}


/**
 * Mangify prototype
 */
Magnify.prototype = {

    init: function (el, options) {

        this.open();

        // Get image src
        var imgSrc = this.getImgSrc(el);

        // Get image group
        this.groupName = null;

        var currentGroupName = $(el).attr('data-group'),
            groupList = $D.find('[data-group="' + currentGroupName + '"]');

        if (currentGroupName !== undefined) {

            this.groupName = currentGroupName;
            this.getImgGroup(groupList, imgSrc);

        } else {

            this.getImgGroup(jqEl.not('[data-group]'), imgSrc);

        }

        this.loadImg(imgSrc);

    },
    creatBtns: function (toolbar, btns) {

        var btnsStr = '';

        $.each(toolbar, function (index, item) {
            btnsStr += btns[item];
        });

        return btnsStr;

    },
    creatDOM: function () {

        var btnsTpl = {
            maximize: '<button class="magnify-button magnify-button-maximize" title="' + this.options.i18n.maximize + '">\
                            <i class="' + this.options.icons.maximize + '" aria-hidden="true"></i>\
                        </button>',
            close: '<button class="magnify-button magnify-button-close" title="' + this.options.i18n.close + '">\
                            <i class="' + this.options.icons.close + '" aria-hidden="true"></i>\
                        </button>',
            zoomIn: '<button class="magnify-button magnify-button-zoom-in" title="' + this.options.i18n.zoomIn + '">\
                            <i class="' + this.options.icons.zoomIn + '" aria-hidden="true"></i>\
                        </button>',
            zoomOut: '<button class="magnify-button magnify-button-zoom-out" title="' + this.options.i18n.zoomOut + '">\
                            <i class="' + this.options.icons.zoomOut + '" aria-hidden="true"></i>\
                        </button>',
            prev: '<button class="magnify-button magnify-button-prev" title="' + this.options.i18n.prev + '">\
                            <i class="' + this.options.icons.prev + '" aria-hidden="true"></i>\
                        </button>',
            next: '<button class="magnify-button magnify-button-next" title="' + this.options.i18n.next + '">\
                            <i class="' + this.options.icons.next + '" aria-hidden="true"></i>\
                        </button>',
            fullscreen: '<button class="magnify-button magnify-button-fullscreen" title="' + this.options.i18n.fullscreen + '">\
                            <i class="' + this.options.icons.fullscreen + '" aria-hidden="true"></i>\
                        </button>',
            actualSize: '<button class="magnify-button magnify-button-actual-size" title="' + this.options.i18n.actualSize + '">\
                            <i class="' + this.options.icons.actualSize + '" aria-hidden="true"></i>\
                        </button>',
            rotateLeft: '<button class="magnify-button magnify-button-rotate-left" title="' + this.options.i18n.rotateLeft + '">\
                            <i class="' + this.options.icons.rotateLeft + '" aria-hidden="true"></i>\
                        </button>',
            rotateRight: '<button class="magnify-button magnify-button-rotate-right" title="' + this.options.i18n.rotateRight + '">\
                            <i class="' + this.options.icons.rotateRight + '" aria-hidden="true"></i>\
                        </button>'
        }

        // magnify base HTML
        var magnifyHTML = '<div class="magnify-modal">\
                                <div class="magnify-header">\
                                    <div class="magnify-title"></div>\
                                    <div class="magnify-toolbar">' + this.creatBtns(this.options.headToolbar, btnsTpl) + '</div>\
                                </div>\
                                <div class="magnify-stage">\
                                    <img class="magnify-image" src="" alt="" title="" />\
                                </div>\
                                <div class="magnify-footer">\
                                    <div class="magnify-toolbar">' + this.creatBtns(this.options.footToolbar, btnsTpl) + '</div>\
                                </div>\
                            </div>';

        return magnifyHTML;

    },
    open: function () {

        // Fixed modal position bug
        if (!$('.magnify-modal').length && this.options.fixedContent) {

            $('html').css({ 'overflow': 'hidden' });

            if (hasScrollbar()) {
                var scrollbarWidth = getScrollbarWidth();
                if (scrollbarWidth) {
                    $('html').css({ 'margin-right': scrollbarWidth });
                }
            }

        }

        this.isOpened = isOpened = true;

        this.build();

    },
    build: function () {

        // Create magnify HTML string
        var magnifyHTML = this.creatDOM();

        // Make magnify HTML string to jQuery element
        var $magnify = $(magnifyHTML);

        // Get all magnify element
        this.$magnify = $magnify;
        this.$header = $magnify.find('.magnify-header');
        this.$stage = $magnify.find('.magnify-stage');
        this.$title = $magnify.find('.magnify-title');
        this.$image = $magnify.find('.magnify-stage img');
        this.$close = $magnify.find('.magnify-button-close');
        this.$maximize = $magnify.find('.magnify-button-maximize');
        this.$zoomIn = $magnify.find('.magnify-button-zoom-in');
        this.$zoomOut = $magnify.find('.magnify-button-zoom-out');
        this.$actualSize = $magnify.find('.magnify-button-actual-size');
        this.$fullscreen = $magnify.find('.magnify-button-fullscreen');
        this.$rotateLeft = $magnify.find('.magnify-button-rotate-left');
        this.$rotateRight = $magnify.find('.magnify-button-rotate-right');
        this.$prev = $magnify.find('.magnify-button-prev');
        this.$next = $magnify.find('.magnify-button-next');

        $('body').append($magnify);

        this.setModalPos($magnify);

        // draggable & movable & resizable
        if (this.options.draggable) {
            this.draggable(this.$magnify, this.$magnify, '.magnify-button');
        }
        if (this.options.movable) {
            this.movable(this.$image, this.$stage);
        }
        if (this.options.resizable) {
            this.resizable(this.$magnify, this.$stage, this.$image, this.options.modalWidth, this.options.modalHeight);
        }

    },
    close: function (el) {

        // Remove instance
        this.$magnify.remove();

        this.isMaximized = isMaximized = false;
        this.isRotated = isRotated = false;

        this.rotateAngle = rotateAngle = 0;

        this.isOpened = isOpened = false;

        // Fixed modal position bug
        if (!$('.magnify-modal').length && this.options.fixedContent) {
            $('html').css({ 'overflow': '', 'margin-right': '' });
        }

        // off events
        if (!$('.magnify-modal').length) {
            $W.off('resize');
            $D.off('mousemove mouseup');
        }

    },
    setModalPos: function (modal) {

        var winWidth = $W.width(),
            winHeight = $W.height(),
            scrollLeft = $D.scrollLeft(),
            scrollTop = $D.scrollTop();

        var modalWidth = modal.width(),
            modalHeight = modal.height();

        // Make the modal in windows center
        modal.css({
            left: (winWidth - modalWidth) / 2 + scrollLeft + 'px',
            top: (winHeight - modalHeight) / 2 + scrollTop + 'px'
        });

    },
    setModalSize: function (img) {

        var winWidth = $W.width(),
            winHeight = $W.height(),
            scrollLeft = $D.scrollLeft(),
            scrollTop = $D.scrollTop();

        // stage css value
        var stageCSS = {
            left: this.$stage.css('left'),
            right: this.$stage.css('right'),
            top: this.$stage.css('top'),
            bottom: this.$stage.css('bottom'),
            borderLeft: this.$stage.css('border-left-width'),
            borderRight: this.$stage.css('border-right-width'),
            borderTop: this.$stage.css('border-top-width'),
            borderBottom: this.$stage.css('border-bottom-width')
        };

        // Modal size should calc with stage css value
        var modalWidth = img.width + getNumFromCSSValue(stageCSS.left) + getNumFromCSSValue(stageCSS.right) +
            getNumFromCSSValue(stageCSS.borderLeft) + getNumFromCSSValue(stageCSS.borderRight),
            modalHeight = img.height + getNumFromCSSValue(stageCSS.top) + getNumFromCSSValue(stageCSS.bottom) +
                getNumFromCSSValue(stageCSS.borderTop) + getNumFromCSSValue(stageCSS.borderBottom);

        var gapThreshold = (this.options.gapThreshold > 0 ? this.options.gapThreshold : 0) + 1,
            // modal scale to window
            scale = Math.min(winWidth / (modalWidth * gapThreshold), winHeight / (modalHeight * gapThreshold), 1);

        var minWidth = Math.max(modalWidth * scale, this.options.modalWidth),
            minHeight = Math.max(modalHeight * scale, this.options.modalHeight);

        minWidth = this.options.fixedModalSize ? this.options.modalWidth : Math.ceil(minWidth);
        minHeight = this.options.fixedModalSize ? this.options.modalHeight : Math.ceil(minHeight);

        this.$magnify.css({
            width: minWidth + 'px',
            height: minHeight + 'px',
            left: (winWidth - minWidth) / 2 + scrollLeft + 'px',
            top: (winHeight - minHeight) / 2 + scrollTop + 'px'
        });

        this.setImageSize(img);

    },
    setImageSize: function (img) {

        var stageData = {
            w: this.$stage.width(),
            h: this.$stage.height()
        }

        // image scale to stage
        var scale = 1;

        if (!this.isRotated) {
            scale = Math.min(stageData.w / img.width, stageData.h / img.height, 1);
        } else {
            scale = Math.min(stageData.w / img.height, stageData.h / img.width, 1);
        }

        this.$image.css({
            width: Math.floor(img.width * scale) + 'px',
            height: Math.floor(img.height * scale) + 'px',
            left: (stageData.w - img.width * scale) / 2 + 'px',
            top: (stageData.h - img.height * scale) / 2 + 'px'
        });

        // Store image initial data
        $.extend(this.imageData, {
            width: img.width * scale,
            height: img.height * scale,
            left: (stageData.w - img.width * scale) / 2,
            top: (stageData.h - img.height * scale) / 2
        });

        addGrabCursor(
            { w: this.$image.width(), h: this.$image.height() },
            { w: this.$stage.width(), h: this.$stage.height() },
            this.$stage,
            this.isRotated
        );

    },
    loadImg: function (imgSrc) {

        var self = this;

        var loadingHTML = '<div class="magnify-loading"><i class="' + this.options.icons.loading + '"></i></div>';

        // loading start
        this.$magnify.append(loadingHTML);

        // Set modal maximized when init
        if (this.options.initMaximized) {

            this.$magnify.addClass('magnify-maximize');

            this.$magnify.css({
                width: '100%',
                height: '100%',
                left: $D.scrollLeft(),
                top: $D.scrollTop()
            });

            this.isMaximized = true;
        }

        this.$image.attr('src', imgSrc);

        preloadImg(imgSrc, function (img) {

            // Store original data
            self.imageData = {
                originalWidth: img.width,
                originalHeight: img.height
            }

            if (self.isMaximized) {
                self.setImageSize(img);
            } else {
                self.setModalSize(img);
            }

            // loading end
            self.$magnify.find('.magnify-loading').remove();
            // Add events when image loaded success
            self.addEvent();

        }, function () {
            // loading end
            self.$magnify.find('.magnify-loading').remove();
            // Add events when image loaded failed
            self.addEvent();
        });

        if (this.options.title) {
            this.setImgTitle(imgSrc);
        }

    },
    getImgGroup: function (list, imgSrc) {

        var self = this;

        self.groupData = [];

        $(list).each(function (index, item) {

            var src = self.getImgSrc(this);

            self.groupData.push({
                src: src,
                caption: $(this).attr('data-caption')
            });
            // Get image index
            if (imgSrc === src) {
                self.groupIndex = index
            }

        });

    },
    setImgTitle: function (url) {

        var index = this.groupIndex,
            caption = this.groupData[index].caption,
            caption = caption ? caption : getImageNameFromUrl(url);

        this.$title.text(caption);

    },
    getImgSrc: function (el) {

        // Get data-src as image src at first
        var src = $(el).attr('data-src') ? $(el).attr('data-src') : $(el).attr('href');

        return src;

    },
    jump: function (index) {

        this.groupIndex = this.groupIndex + index;

        this.jumpTo(this.groupIndex);

    },
    jumpTo: function (index) {

        index = index % this.groupData.length;

        if (index >= 0) {
            index = index % this.groupData.length;
        } else if (index < 0) {
            index = (this.groupData.length + index) % this.groupData.length;
        }

        this.groupIndex = index;

        this.loadImg(this.groupData[index].src);

    },
    wheel: function (e) {

        e.preventDefault();

        var delta = 1;

        if (e.originalEvent.deltaY) {
            delta = e.originalEvent.deltaY > 0 ? 1 : -1;
        } else if (e.originalEvent.wheelDelta) {
            delta = -e.originalEvent.wheelDelta / 120;
        } else if (e.originalEvent.detail) {
            delta = e.originalEvent.detail > 0 ? 1 : -1;
        }

        // ratio threshold
        var ratio = -delta * this.options.ratioThreshold;

        // mouse point position relative to stage
        var pointer = {
            x: e.originalEvent.clientX - this.$stage.offset().left + $D.scrollLeft(),
            y: e.originalEvent.clientY - this.$stage.offset().top + $D.scrollTop()
        }

        this.zoom(ratio, pointer, e);

    },
    zoom: function (ratio, origin, e) {

        // zoom out & zoom in
        ratio = ratio < 0 ? (1 / (1 - ratio)) : (1 + ratio);

        if (ratio > 0.95 && ratio < 1.05) {
            ratio = 1;
        }

        ratio = this.$image.width() / this.imageData.originalWidth * ratio;

        // min image size
        ratio = Math.max(ratio, this.options.minRatio);
        // max image size
        ratio = Math.min(ratio, this.options.maxRatio);

        this.zoomTo(ratio, origin, e);

    },
    zoomTo: function (ratio, origin, e) {

        var $image = this.$image,
            $stage = this.$stage,
            imgData = {
                w: this.imageData.width,
                h: this.imageData.height,
                x: this.imageData.left,
                y: this.imageData.top
            };

        // image stage position
        // We will use it to calc the relative position of image
        var stageData = {
            w: $stage.width(),
            h: $stage.height(),
            x: $stage.offset().left,
            y: $stage.offset().top
        }

        var newWidth = this.imageData.originalWidth * ratio,
            newHeight = this.imageData.originalHeight * ratio,
            // Think about it for a while ~~~
            newLeft = origin.x - (origin.x - imgData.x) / imgData.w * newWidth,
            newTop = origin.y - (origin.y - imgData.y) / imgData.h * newHeight;

        // δ is the difference between image new width and new height
        var δ = !this.isRotated ? 0 : (newWidth - newHeight) / 2,
            imgNewWidth = !this.isRotated ? newWidth : newHeight,
            imgNewHeight = !this.isRotated ? newHeight : newWidth;

        var offsetX = stageData.w - newWidth,
            offsetY = stageData.h - newHeight;

        // zoom out & zoom in condition
        // It's important and it takes me a lot of time to get it
        // The conditions with image rotate 90 degree drive me crazy alomst!
        if (imgNewHeight <= stageData.h) {
            newTop = (stageData.h - newHeight) / 2;
        } else {
            newTop = newTop > δ ? δ : (newTop > (offsetY - δ) ? newTop : (offsetY - δ));
        }

        if (imgNewWidth <= stageData.w) {
            newLeft = (stageData.w - newWidth) / 2;
        } else {
            newLeft = newLeft > -δ ? -δ : (newLeft > (offsetX + δ) ? newLeft : (offsetX + δ));
        }

        $image.css({
            width: Math.ceil(newWidth) + 'px',
            height: Math.ceil(newHeight) + 'px',
            left: newLeft + 'px',
            top: newTop + 'px'
        });

        // Update image initial data
        $.extend(this.imageData, {
            width: newWidth,
            height: newHeight,
            left: newLeft,
            top: newTop
        });

        // Add grab cursor
        addGrabCursor(
            { w: imgNewWidth, h: imgNewHeight },
            { w: stageData.w, h: stageData.h },
            this.$stage
        );

    },
    rotate: function (angle) {

        this.rotateAngle = rotateAngle = this.rotateAngle + angle;

        if ((this.rotateAngle / 90) % 2 === 0) {
            this.isRotated = false;
        } else {
            this.isRotated = true;
        }

        this.rotateTo(this.rotateAngle);

    },
    rotateTo: function (angle) {

        var self = this;

        this.$image.css({
            transform: 'rotate(' + angle + 'deg)'
        });

        this.setImageSize({ width: this.imageData.originalWidth, height: this.imageData.originalHeight });

        // Remove grab cursor when rotate
        this.$stage.removeClass('is-grab');

    },
    resize: function () {

        var self = this;

        var resizeHandler = throttle(function () {

            if (self.isOpened) {

                if (!self.isMaximized) {
                    self.setModalSize({ width: self.imageData.originalWidth, height: self.imageData.originalHeight });
                }

                self.setImageSize({ width: self.imageData.originalWidth, height: self.imageData.originalHeight });

            }

        }, 500);

        return resizeHandler;

    },
    maximize: function () {

        var self = this;

        if (!this.isMaximized) {
            // Store modal data before maximize
            this.modalData = {
                width: this.$magnify.width(),
                height: this.$magnify.height(),
                left: this.$magnify.offset().left,
                top: this.$magnify.offset().top
            }

            this.$magnify.addClass('magnify-maximize');

            this.$magnify.css({
                width: '100%',
                height: '100%',
                left: $D.scrollLeft(),
                top: $D.scrollTop()
            });

            this.isMaximized = true;

        } else {

            this.$magnify.removeClass('magnify-maximize');
            
            this.$magnify.css({
                width: this.modalData.width ? this.modalData.width : this.options.modalWidth,
                height: this.modalData.height ? this.modalData.height : this.options.modalHeight,
                left: this.modalData.left ? this.modalData.left : ($W.width() - this.options.modalWidth) / 2 + $D.scrollLeft(),
                top: this.modalData.top ? this.modalData.top : ($W.height() - this.options.modalHeight) / 2 + $D.scrollTop()
            });

            this.isMaximized = false;
        }

        this.setImageSize({ width: this.imageData.originalWidth, height: this.imageData.originalHeight });

    },
    fullscreen: function () {

        requestFullscreen(this.$magnify[0]);

    },
    keydown: function (e) {

        var self = this;

        if (!this.options.keyboard) {
            return false;
        }

        var keyCode = e.keyCode || e.which || e.charCode,
            ctrlKey = e.ctrlKey || e.metaKey,
            altKey = e.altKey || e.metaKey;

        switch (keyCode) {
            // ←
            case 37:
                self.jump(-1);
                break;
            // →
            case 39:
                self.jump(1);
                break;
            // +
            case 187:
                self.zoom(self.options.ratioThreshold * 3, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
                break;
            // -
            case 189:
                self.zoom(-self.options.ratioThreshold * 3, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
                break;
            // + Firefox
            case 61:
                self.zoom(self.options.ratioThreshold * 3, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
                break;
            // - Firefox
            case 173:
                self.zoom(-self.options.ratioThreshold * 3, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
                break;
            // ctrl + alt + 0
            case 48:
                if (ctrlKey && altKey) {
                    self.zoomTo(1, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
                }
                break;
            // ctrl + ,
            case 188:
                if (ctrlKey) {
                    self.rotate(-90);
                }
                break;
            // ctrl + .
            case 190:
                if (ctrlKey) {
                    self.rotate(90);
                }
                break;
            default:
        }

    },
    addEvent: function () {

        var self = this;

        this.$close.off('click').on('click', function (e) {
            self.close();
        });

        this.$stage.off('wheel mousewheel DOMMouseScroll').on('wheel mousewheel DOMMouseScroll', function (e) {
            self.wheel(e);
        });

        this.$zoomIn.off('click').on('click', function (e) {
            self.zoom(self.options.ratioThreshold * 3, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
        });

        this.$zoomOut.off('click').on('click', function (e) {
            self.zoom(-self.options.ratioThreshold * 3, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
        });

        this.$actualSize.off('click').on('click', function (e) {
            self.zoomTo(1, { x: self.$stage.width() / 2, y: self.$stage.height() / 2 }, e);
        });

        this.$prev.off('click').on('click', function () {
            self.jump(-1);
        });

        this.$fullscreen.off('click').on('click', function () {
            self.fullscreen();
        });

        this.$next.off('click').on('click', function () {
            self.jump(1);
        });

        this.$rotateLeft.off('click').on('click', function () {
            self.rotate(-90);
        });

        this.$rotateRight.off('click').on('click', function () {
            self.rotate(90);
        });

        this.$maximize.off('click').on('click', function () {
            self.maximize();
        });

        $D.off('keydown').on('keydown', function (e) {
            self.keydown(e);
        });

        $W.on('resize', self.resize());

    }

}

/**
 * Public static functions
 */
$.magnify = {
    instance: Magnify.prototype
}


$.fn.magnify = function (options) {

    jqEl = $(this);

    if (typeof options === 'string') {

        // $(this).data('magnify')[options]();

    } else {

        jqEl.off('click.magnify').on('click.magnify', function (e) {

            if (e.isDefaultPrevented()) {
                return;
            }

            e.preventDefault();

            $(this).data('magnify', new Magnify(this, options));

        });

    }

    return jqEl;

}

/**
 * MAGNIFY DATA-API
 */
$D.on('click.magnify', '[data-magnify]', function (e) {

    jqEl = $('[data-magnify]');

    if (e.isDefaultPrevented()) {
        return;
    }

    e.preventDefault();

    $(this).data('magnify', new Magnify(this, {}));

});
