; (function () {
  var time = null;
  var Slider = function (options) {
    this.oSliderWrap = options.oSliderWrap;
    this.sliderItems = options.sliderItems;
    this.sliderLen = this.sliderItems.length;
    this.yuan = options.yuan;
    this.yuanItems = options.yuanItems;
    this.btnGroupLeft = options.btnGroupLeft;
    this.btnGroupRight = options.btnGroupRight;
    this.idx = 0;
  }

  $.extend(Slider.prototype, {
    init: function () {
      this.bindEvent();
      this.autoPlay();
    },
    bindEvent: function () {
      this.oSliderWrap.on('mouseenter', this.mouseIn);
      this.oSliderWrap.on('mouseleave', $.proxy(this.mouseOut, this));
      this.yuan.on('mouseenter', ".yuan-item", $.proxy(this.manSlider, this));
      this.btnGroupLeft.on('click', $.proxy(this.handlebtnLeft, this));
      this.btnGroupRight.on('click', $.proxy(this.handlebtnRight, this))
    },

    //autoplay
    autoPlay: function () {
      time = setInterval(this.nextSlide.bind(this), 4000);
    },
    
    mouseIn: function () {
      clearInterval(time);
    },
    
    mouseOut: function () {
      this.autoPlay();
    },
    nextSlide: function () {
      if (this.idx >= this.sliderLen - 1) {
        this.idx = 0;
      } else {
        this.idx++;
      }
      this._slideAction(this.idx);
    },

    prevSlide: function () {
      if (this.idx <= 0) {
        this.idx = this.sliderLen - 1;
      } else {
        this.idx--;
      }
      this._slideAction(this.idx);
    },

    howSliderMove(things) {
      switch (things) {
        case 'left':
          this.prevSlide();
          break;
        case 'right':
          this.nextSlide();
          break;
      }
    },

    handlebtnLeft: function () {
      this.howSliderMove('left')
    },

    handlebtnRight: function () {
      this.howSliderMove('right')
    },

    
    manSlider: function (e) {
      var e = e || window.event;
      var tar = e.target || e.srcElement;
      var tagName = tar.tagName.toLowerCase();
      if (tagName === "i") {
        this.idx = Array.prototype.indexOf.call(this.yuanItems, tar);  //index的位置
        this._slideAction(this.idx);
      }
    },

    
    _slideAction: function (idx) {
      this.sliderItems.eq(idx).stop().fadeIn(1000)
        .siblings().stop().fadeOut(1000);
      this.yuanItems.eq(idx).addClass('cur')
        .siblings().removeClass('cur');
    },
  });

  window.Slider = Slider;

})();