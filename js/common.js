var IE9down = false;
var IpadFlag = false;
var MobileFlag = false;
var gEasing = "easeInOutQuint";

function common_init(){

	new responsive();
	
	detectBroswer();
	menuControl();
	
	$(window).load(function(){
		hideLoading();
	});
	
	$(window).on('resize', function(){
		resize();
	});
	
	$(window).on('responsive',function(){
		resetLayout();
	});
	
	$(window).on('scroll',function(){
		scroll();
	});
	
	//form
	$('select').selectric();
	$('.inputBox').each(function(){
		inputBox = new InputHints();
		inputBox.init( $(this) );
	});
	
}

function detectBroswer(){
	var ua = window.navigator.userAgent.toLowerCase();
	var ver = window.navigator.appVersion.toLowerCase();
	var gHasTouch = 'ontouchstart' in window;

	if( !gHasTouch ) {
		$('body').addClass('noTouch');
	}

	if (ua.indexOf("msie") != -1){
		if (ver.indexOf("msie 6.") != -1){
			IE9down =true
		}else if (ver.indexOf("msie 7.") != -1){
			IE9down =true
		}else if (ver.indexOf("msie 8.") != -1){
			IE9down =true
		}else if (ver.indexOf("msie 9.") != -1){
			IE9down =true
		}else if (ver.indexOf("msie 10.") != -1){
			IE9down =false
		}else{
			IE9down =false
		}
	}

	if (ua.match(/(iphone)/) || ua.match(/(ipad)/) || ua.match(/(ipod)/) || ua.match(/(android)/) )	{
		MobileFlag = true;
	}

	if (ua.match(/(ipad)/) )	{
		IpadFlag = true;
	}

	if ( IE9down ) {
		jQuery.fx.interval = 1000 / 30;
	} else {		
		jQuery.fx.interval = 1000 / 60;
	}

}

function showLoading(){
	$('.loading').stop().fadeIn(300);
}

function hideLoading(){
	$('.loading').stop().fadeOut(300);
}

function dimBgShow(){
	$('.dimBg').stop().fadeIn(300);
}

function dimBgHide(){
	$('.dimBg').stop().fadeOut(300);
}

function menuControl(){
	$('.menuBtn').on('click', function(){
		if( $('body').hasClass('menuOpen') ){
			$('body').removeClass('menuOpen');
			dimBgHide();
		}else{
			$('body').addClass('menuOpen');
			dimBgShow();
			$('.mobile .content').css('min-height',$(window).height());
		}
	});
	$('.dimBg').on('click', function(){
		$('body').removeClass('menuOpen');
		$('.content').attr('style','');
		dimBgHide();
	});
	
}

function resetLayout(){
	$('body').removeClass('menuOpen');
	$('.dimBg').attr('style','');
	$('.content').attr('style','');
}

function resize(){
	$('.content').css('min-height',$(window).height());
}

function scroll(){
	//BacKTop
	if( $(window).scrollTop() == 0 ){
		$('.btnBackTop').removeClass('active');
	}else{
		$('.btnBackTop').addClass('active');
	}
	if( $(window).scrollTop()+ $(window).height() >= $('.footerWrapper').offset().top ){
		$('.btnBackTop').removeClass('fixed');
	}else{
		$('.btnBackTop').addClass('fixed');
	}
}

function scrollto( target ){
	var target = ( target == undefined )? 'body' : target
	$('html, body').animate({
		scrollTop: $(target).offset().top
	},800 , gEasing);
}

function popupBox( target , config ) {
	var _settings = {
		items: {
			src: target,
			type: 'inline'
		},
		showCloseBtn : true,
		fixedContentPos : true,
		mainClass: 'mfp-fade',
		removalDelay: 300,
		fixedBgPos : true,
		closeOnBgClick: true,
		closeMarkup : '<button title="%title%" class="mfp-close"></button>',
		callbacks:{
			open: function(){

			}
		}
	};

	$.extend(_settings, config);
	$.magnificPopup.open(_settings);
}

function alertMsg( msg , config ) {
	$('.alertPopup .popupContent').html(msg);

	popupBox($('.alertPopup'));
}

function videoPop( youtubeID , config ) {
	var _settings = {
		callbacks:{
			open: function(){
				$('.videoPopup .videoWrapper').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+ youtubeID +'?rel=0&autoplay=1&wmode=transparent" frameborder="0" allowfullscreen></iframe>');
			},
			close: function(){
				$('.videoPopup .videoWrapper').html('');
			}
		}
	};

	popupBox($('.videoPopup'), _settings);
}

/******************************** RESPONSIVE *******************************/

var layout;

function responsive() {
	var _self = this;

	_self.layoutSize = [0, 780 , 1200];
	_self.layout = ['mobile', 'tablet' , 'desktop'];

	_self.window = $(window);
	_self.body = $('body');
	_self.current = _self.layout[_self.layout.length - 1];
	if (IE9down) {
		_self.changeClass(_self.layout[1]);
	} else {
		_self.init();
	}
}
responsive.prototype.init = function () {
	var _self = this;

	_self.changeClass(_self.layout[_self.checkSize()]);
	_self.addEvent();
}
responsive.prototype.addEvent = function () {
	var _self = this;

	_self.window.on('resize', function () {
		_self.changeClass(_self.layout[_self.checkSize()]);
	});
}
responsive.prototype.checkSize = function () {
	var _self = this;

	var _layout = 0;

	for (var i = 0; i < _self.layoutSize.length; i++) {
		if (_self.layoutSize[i] > _self.window.width()) {
			break;
		} else {
			_layout = i;
		}
	}
	return _layout;
}
responsive.prototype.changeClass = function (className) {
	var _self = this;

	if (!_self.body.hasClass(className)) {
		for (var i = 0; i < _self.layoutSize.length; i++) {
			_self.body.removeClass(_self.layout[i]);
		}
		_self.body.addClass(className);
		layout = className;
		$(document).trigger('responsive', className);
	}
}


/******************************** INPUT HINTS *******************************/

/**
*
* Copyright 2012, Pixopunch
* http://www.pixopunch.com/
*
* {Class}
* InputHints
* -destroy():void
* -init(pTarget, pParam_obj):void
*
* {Events}
*
*/

InputHints.prototype.mInputHints = null;

function InputHints()
{
}

InputHints.prototype.destroy = function()
{
	this.mInputHints.children(".hints").unbind("click");
	this.mInputHints.children("input, textarea").unbind("focus");
	this.mInputHints.children("input, textarea").unbind("blur");
	
	this.mInputHints = null;
}

InputHints.prototype.init = function(pTarget, pParam_obj)
{
	var _self = this;
	
	this.mInputHints = pTarget;
	
	this.mInputHints.children(".hints").bind("click", function(){_self.doFocusBegin()});
	this.mInputHints.children("input, textarea").bind("focus", function(){_self.focusBegin()});
	this.mInputHints.children("input, textarea").bind("blur", function(){_self.focusEnd()});
	
	this.mInputHints.children(".hints").css("display", "none");
	this.focusEnd();
}

InputHints.prototype.doFocusBegin = function()
{
	this.mInputHints.children("input, textarea").focus();
	this.focusBegin(this.mInputHints.children("input, textarea"));
}

InputHints.prototype.focusBegin = function()
{
	this.mInputHints.children(".hints").css("display", "none");
}

InputHints.prototype.focusEnd = function()
{
	if (this.mInputHints.children("input, textarea").val() == "")
	{
		this.mInputHints.children(".hints").css("display", "block");
	}
}



/************************* IMAGE SLIDER ****************************/
var imgSlider = function (container, config) {
	var _self = this;

	_self.defaults = {
		speed: 300,
		drag: true,
		loop: true,
		autoHeight: false,
		autoPlay: false,
		autoPlaySpeed: 5000,
		fade: false,
		offsetWidth: 1,
		thumbnailCarousel: true,
		beforeSlideCallback: function(){
		},
		afterSlideCallback: function(){
		}
	};
	$.extend(_self.defaults, config);

	_self.container = container;

	_self.init();
};

imgSlider.prototype.init = function () {
	var _self = this;

	_self.sliderContainer = _self.container.find('.sliderContainer');
	_self.slider = _self.container.find('.slider');
	_self.slides = _self.container.find('.slides');
	_self.slides.hide();

	_self.autoPlayTimer = null;
	_self.current = 0;
	_self.thumbnailMove = 0;
	_self.isAnimating = false;
	_self.destroyed = false;
	_self.dragging = false;

	// create bullet
	if( _self.container.find('.sliderBullet').length ) {
		_self.container.find('.sliderBullet').html('');
		for (var i = 0; i < _self.slides.length; i++) {
			var _bullet = '<a href="#"><span class="sliderBulletBg"></span></a>';
			_self.container.find('.sliderBullet').append(_bullet);
		}
	}
	_self.bullet = _self.container.find('.sliderBullet a');

	// create thumbnail
	_self.thumbnailInit();

	// check images loaded
	var _count = _self.slides.find('img').length;
	if(_count <= 0) {
		_self.contentLoaded();
	} else {
		_self.slides.find('img').each(function() {
			$("<img/>").load(function() {
				if( !--_count ) {
					// callback function here
					_self.contentLoaded();
				}
			}).attr("src", $(this).attr('src'));
		});
	}

	if (_self.slides.length > 1) _self.bindEvent();

	$(window).on('resize', function () {
		if( _self.destroyed ) return;
		_self.thumbnailMove = 0;
		_self.container.find('.sliderThumbnailInner').css({'margin-left': ''});
		_self.checkThumbnailMove();

		_self.slideLeft = _self.sliderContainer.width();
		_self.slidesOnReady();
		_self.autoPlay();
	});

	_self.autoPlay();
};

imgSlider.prototype.contentLoaded = function () {
	var _self = this;

	_self.slideLeft = _self.sliderContainer.width();
	_self.setCurrent();
	_self.slidesOnReady();
	_self.setSliderHeight();
	_self.container.addClass('loaded');
	_self.sliderContainer.addClass('ready');
	if (_self.slides.length <= 1) _self.container.find('.slides').css('cursor', 'default');
};

imgSlider.prototype.bindEvent = function () {
	var _self = this;
	var startPos = 0;

	if (_self.defaults.drag) _self.touchEvent();

	_self.container.on('click', '.sliderBullet a, .sliderThumbnailItem', function (e) {
		e.preventDefault();

		if (!_self.isAnimating && $(this).index() != _self.current) {
			_self.isAnimating = true;
			var _dir = ($(this).index() > _self.current) ? 'next' : 'prev';
			_self.transition(_dir, $(this).index());
		}
	});

	_self.container.find('.sliderBtnPrev').on('click', function (e) {
		e.preventDefault();

		if (!_self.isAnimating) {
			_self.isAnimating = true;
			_self.transition('prev');
		}
	});

	_self.container.find('.sliderBtnNext').on('click', function (e) {
		e.preventDefault();

		if (!_self.isAnimating) {
			_self.isAnimating = true;
			_self.transition('next');
		}
	});

	_self.container.find('.sliderThumbnailPrev').on('click', function (e) {
		e.preventDefault();

		if (!_self.isAnimating) {
			_self.isAnimating = true;
			_self.thumbnailTransition('prev');
		}
	});

	_self.container.find('.sliderThumbnailNext').on('click', function (e) {
		e.preventDefault();

		if (!_self.isAnimating) {
			_self.isAnimating = true;
			_self.thumbnailTransition('next');
		}
	});

	_self.container.find('a').on('click', function (e) {
		if (_self.dragging) {
			e.preventDefault();
		}
		_self.dragging = false;
	});

};

imgSlider.prototype.setCurrent = function () {
	var _self = this;

	_self.bullet.removeClass('active');
	_self.bullet.eq(_self.current).addClass('active');
	_self.container.find('.sliderThumbnailItem').removeClass('active');
	_self.container.find('.sliderThumbnailItem').eq(_self.current).addClass('active');
	_self.slides.removeClass('on');
	_self.slides.eq(_self.current).addClass('on').css({
		'left': 0
	});

	if (!_self.defaults.loop) {
		_self.container.find('.sliderBtnPrev').show();
		_self.container.find('.sliderBtnNext').show();
		if (_self.current === 0) {
			_self.container.find('.sliderBtnPrev').hide();
		} else if (_self.current + 1 >= _self.slides.length) {
			_self.container.find('.sliderBtnNext').hide();
		}
	}else if( _self.container.find('.slides').length > 1 ){
		_self.container.find('.sliderBtnPrev').show();
		_self.container.find('.sliderBtnNext').show();
	}
};

imgSlider.prototype.slidesOnReady = function ( dir ) {
	var _self = this;

	_self.resetSlidesCSS();
	_self.slides.css({
		'height': ''
	}).attr('data-dir','').attr('data-offsetIdx','');
	_self.setSliderHeight();

	if (_self.slides.length === 1) {

		_self.bullet.hide();
		_self.container.find('.sliderBtnPrev').hide();
		_self.container.find('.sliderBtnNext').hide();

	} else {
		var leftSlidePos = (_self.current - 1 < 0) ? _self.slides.length - 1 : _self.current - 1;
		var leftSlidePos2 = (_self.current - 1 < 0) ? _self.slides.length - 2 : _self.current - 2;
		var leftSlidePos3 = (_self.current - 1 < 0) ? _self.slides.length - 3 : _self.current - 3;
		var leftSlidePos4 = (_self.current - 1 < 0) ? _self.slides.length - 4 : _self.current - 4;
		var leftSlidePos5 = (_self.current - 1 < 0) ? _self.slides.length - 5 : _self.current - 5;

		_self.slideLeft = _self.sliderContainer.width();

		_self.slides.eq((_self.current + 5) % _self.slides.length).css({
			'left': _self.slideLeft * 5 * _self.defaults.offsetWidth
		}).attr('data-dir','next').attr('data-offsetIdx','5');
		_self.slides.eq(leftSlidePos5).css({
			'left': -5 * _self.slideLeft * _self.defaults.offsetWidth
		}).attr('data-dir','prev').attr('data-offsetIdx','5');
		_self.slides.eq((_self.current + 4) % _self.slides.length).css({
			'left': _self.slideLeft * 4 * _self.defaults.offsetWidth
		}).attr('data-dir','next').attr('data-offsetIdx','4');
		_self.slides.eq(leftSlidePos4).css({
			'left': -4 * _self.slideLeft * _self.defaults.offsetWidth
		}).attr('data-dir','prev').attr('data-offsetIdx','4');
		_self.slides.eq((_self.current + 3) % _self.slides.length).css({
			'left': _self.slideLeft * 3 * _self.defaults.offsetWidth
		}).attr('data-dir','next').attr('data-offsetIdx','3');
		_self.slides.eq(leftSlidePos3).css({
			'left': -3 * _self.slideLeft * _self.defaults.offsetWidth
		}).attr('data-dir','prev').attr('data-offsetIdx','3');
		_self.slides.eq((_self.current + 2) % _self.slides.length).css({
			'left': _self.slideLeft * 2 * _self.defaults.offsetWidth
		}).attr('data-dir','next').attr('data-offsetIdx','2');
		_self.slides.eq(leftSlidePos2).css({
			'left': -2 * _self.slideLeft * _self.defaults.offsetWidth
		}).attr('data-dir','prev').attr('data-offsetIdx','2');
		_self.slides.eq((_self.current + 1) % _self.slides.length).css({
			'left': _self.slideLeft * _self.defaults.offsetWidth
		}).attr('data-dir','next').attr('data-offsetIdx','1');

		if( dir === 1 ){
			_self.slides.eq((_self.current + 1) % _self.slides.length).css({
				'left': _self.slideLeft * _self.defaults.offsetWidth
			}).attr('data-dir','next').attr('data-offsetIdx','1');
			_self.slides.eq(leftSlidePos).css({
				'left': -_self.slideLeft * _self.defaults.offsetWidth
			}).attr('data-dir','prev').attr('data-offsetIdx','1');
		}else{
			_self.slides.eq(leftSlidePos).css({
				'left': -_self.slideLeft * _self.defaults.offsetWidth
			}).attr('data-dir','prev').attr('data-offsetIdx','1');
			_self.slides.eq((_self.current + 1) % _self.slides.length).css({
				'left': _self.slideLeft * _self.defaults.offsetWidth
			}).attr('data-dir','next').attr('data-offsetIdx','1');
		}

		//Pos Current Slide
		_self.slides.eq(_self.current).css({
			'left': 0
		});

		//display none for the item far away
		_self.slides.each(function(i){
			if( !$(this).hasClass('on') ){
				if( parseInt( $(this).css('left')) === 0 || $(this).css('left') === 'auto' ){
					$(this).hide();
				}
			}
		});

		if (!_self.defaults.loop) {
			_self.slides.each(function(i){
				if( i > _self.current && parseInt( $(this).css('left')) < 0 ){
					$(this).css({
						'left': _self.slideLeft * (i-_self.current)
					});
				}
				if( i < _self.current && parseInt( $(this).css('left')) > 0 ){
					$(this).css({
						'left': _self.slideLeft * (i-_self.current)
					});
				}
			});
		}

	}
};

imgSlider.prototype.transition = function (dir, cur) {
	var _self = this;

	var _cur = {
		css: {'display' : 'block'},
		anim: {}
	};

	_self.defaults.beforeSlideCallback();
	_self.setSliderHeight();
	_self.oldIdx = _self.current;

	if (dir === 'prev') {
		_self.current = (_self.current - 1 < 0) ? _self.slides.length - 1 : _self.current - 1;
		dir = -1;
	} else if (dir === 'next') {
		_self.current = (_self.current + 1) % _self.slides.length;
		dir = 1;
	}

	if( cur !== undefined ) _self.current = cur;

	_self.container.trigger('onTransition');

	if (_self.defaults.fade) {
		_self.slider.animate({
			'opacity' : 0
		}, _self.defaults.speed, function(){
			_self.setCurrent();
			_self.slidesOnReady(dir);
			_self.slider.animate({
				'opacity' : 1
			}, _self.defaults.speed, function(){
				_self.slidesOnReady(dir);
				_self.isAnimating = false;
				_self.container.trigger('endTransition');
			});
		});
	} else {
		_self.setCurrent();
		_self.slidesOnReady(dir);
		_cur.css.left = _self.slideLeft * dir;
		_cur.anim.left = 0;

		_self.slider.css({
			'left': _cur.css.left * _self.defaults.offsetWidth
		}).stop().animate({
			'left': _cur.anim.left
		}, _self.defaults.speed , function(){
			_self.isAnimating = false;
			_self.container.trigger('endTransition');
			_self.defaults.afterSlideCallback();
		});

	}

	_self.autoPlay();
};

imgSlider.prototype.thumbnailInit = function () {
	var _self = this;

	if( _self.container.find('.sliderThumbnail').length ) {
		_self.container.find('.sliderThumbnailInner').html('');
		for (var i = 0; i < _self.slides.length; i++) {
			var _src = _self.slides.find('img').eq(i).attr('src');
			var _thumbnail = '<a class="sliderThumbnailItem" href="#"><img src="'+_src+'"></a>';
			if( !_self.container.find('.sliderThumbnailContent').length ) _self.container.find('.sliderThumbnail').append('<div class="sliderThumbnailContent">');
			if( !_self.container.find('.sliderThumbnailInner').length ) _self.container.find('.sliderThumbnailContent').append('<div class="sliderThumbnailInner">');

			_self.container.find('.sliderThumbnailInner').append(_thumbnail);
		}

		var _item = _self.container.find('.sliderThumbnailItem');
		_self.thumbnailWidth = _item.outerWidth(true) * _item.length;
		if( _self.defaults.thumbnailCarousel ) _self.container.find('.sliderThumbnailInner').css('width', _self.thumbnailWidth);

	}
	_self.checkThumbnailMove();
};

imgSlider.prototype.thumbnailTransition = function (dir) {
	var _self = this;

	if (dir === 'prev') {
		dir = -1;
	} else if (dir === 'next') {
		dir = 1;
	}

	_self.thumbnailMove = _self.thumbnailMove - ($('.sliderThumbnailContent').width()*dir);

	_self.container.find('.sliderThumbnailInner').stop().animate({
		'margin-left': _self.thumbnailMove
	}, function() {
		_self.isAnimating = false;

		_self.checkThumbnailMove();
	});
};

imgSlider.prototype.checkThumbnailMove = function () {
	var _self = this;

	_self.container.find('.sliderThumbnailPrev').show();
	_self.container.find('.sliderThumbnailNext').show();

	if( _self.container.find('.sliderThumbnailInner').width() < (_self.thumbnailMove*-1)+_self.container.find('.sliderThumbnailContent').width() ) {
		_self.container.find('.sliderThumbnailNext').hide();
	}
	if( _self.thumbnailMove >= 0 ) {
		_self.container.find('.sliderThumbnailPrev').hide();
	}
};

imgSlider.prototype.changePattern = function (num) {
	var _self = this;

	if( _self.container.find('.sliderItem').parents('.slides').length ) {
		_self.container.find('.sliderItem').unwrap('.slides');

		var _itemPerRow = num;
		var _items = [];

		_self.container.find('.sliderItem').each(function() {
			if( !$(this).parents('.slides').length ) {
				var _idx = $(this).index();

				if( _idx%_itemPerRow === 0 ) _items.push( _self.container.find('.sliderItem').slice(_idx, _idx+_itemPerRow) );
			}
		});
		for(var i=0; i<_items.length; i++) {
			_items[i].wrapAll('<div class="slides"></div>');
		}

		// create bullet
		if( _self.container.find('.sliderBullet').length ) {
			_self.container.find('.sliderBullet').html('');
			for (var _i = 0; _i < _self.container.find('.slides').length; _i++) {
				var _bullet = '<a href="#"><span class="sliderBulletBg"></span></a>';
				_self.container.find('.sliderBullet').append(_bullet);
			}
		}
		_self.bullet = _self.container.find('.sliderBullet a');

		_self.slides = _self.container.find('.slides');
		_self.current = 0;
		_self.setCurrent();
		_self.slidesOnReady();
	}
};

imgSlider.prototype.autoPlay = function () {
	var _self = this;

	if (_self.defaults.autoPlay) {
		if (_self.slides.length > 1) {
			clearTimeout(_self.autoPlayTimer);
			_self.autoPlayTimer = setTimeout(function () {

				if (!_self.isAnimating) {
					_self.isAnimating = true;
					_self.transition('next');
				}
				_self.autoPlay();

			}, _self.defaults.autoPlaySpeed);
		}
	}
};

imgSlider.prototype.setSliderHeight = function () {
	var _self = this;
	var _slidesHeight = _self.container.find('.slides.on .sliderItem').outerHeight(true);
	_slidesHeight = (_slidesHeight <= 0) ? _self.container.find('.slides.on img').outerHeight(true) : _slidesHeight;

	if (_self.defaults.autoHeight) {
		if (_self.container.height() > 0) {
			_slidesHeight = _self.container.height();
		}
		_slidesHeight = _self.container.find('.slides.on .sliderItem').outerHeight(true);
		_slidesHeight = (_slidesHeight <= 0) ? _self.container.find('.slides.on img').outerHeight(true) : _slidesHeight;
	}

	_self.sliderContainer.css('height', _slidesHeight);
	_self.slides.css('height', _slidesHeight);
};

imgSlider.prototype.resetSlidesCSS = function () {
	var _self = this;
	_self.slides.css({
		'left': '',
		'display': ''
	});
};

imgSlider.prototype.touchEvent = function () {
	var _self = this;

	_self.sliderContainer.bind('mousedown touchstart', function (e) {
		if( _self.container.find('.slides').length < 2 ) return;

		if (!_self.isAnimating) {
			_self.isAnimating = true;

			clearTimeout(_self.autoPlayTimer);
			var touch = e;
			if (e.type !== 'mousedown') {
				touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
			} else {
				e.preventDefault();
			}

			$(document).bind('resize', function(){
				_self.isAnimating = false;
				resetDragFunc();
				setSlidesCurrent();
			});

			startPos = touch.pageX;
			$(document).bind('mousemove touchmove', function (e) {
				var touch = e;
				if (e.type !== 'mousemove') {
					touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
				}else{
					e.preventDefault();
				}
				if (startPos - touch.pageX < 15 && startPos - touch.pageX > -15) return;
				_self.isAnimating = true;
				_self.dragging = true;

				_self.defaults.beforeSlideCallback();
				_self.slides.eq(_self.current).css('left', 0);

				// slider position
				_self.slider.css('left', touch.pageX - startPos);

				if (startPos - touch.pageX >= _self.slideLeft * _self.defaults.offsetWidth ) {
					if (!_self.defaults.loop) {
						if (_self.current + 1 >= _self.slides.length) return;
					}
					_self.current = (_self.current + 1) % _self.slides.length;
					setSlidesCurrent();
					_self.isAnimating = false;
				}
				if (startPos - touch.pageX <= -_self.slideLeft * _self.defaults.offsetWidth ) {
					if (!_self.defaults.loop) {
						if (_self.current === 0) return;
					}
					_self.current = (_self.current - 1 < 0) ? _self.slides.length - 1 : _self.current - 1;
					setSlidesCurrent();
					_self.isAnimating = false;
				}

			});
			$(document).bind('mouseup touchend', function (e) {
				var touch = e;
				if (e.type !== 'mouseup') {
					touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
				} else {
					e.preventDefault();
				}

				//resetDragFunc();
				$(document).unbind('mousemove touchmove');
				$(document).unbind('mouseup touchend');
				//_self.isAnimating = true;
				_self.slider.animate({
					'left': 0
				}, _self.defaults.speed , function(){
					_self.isAnimating = false;
				});
				_self.autoPlay();

				// detect direction
				if (startPos - touch.pageX >= 100) {
					if (!_self.defaults.loop) {
						if (_self.current + 1 >= _self.slides.length) return;
					}
					_self.slider.css('left', touch.pageX - startPos).stop().animate({
						'left': -_self.slideLeft * _self.defaults.offsetWidth
					}, _self.defaults.speed ,function () {
						_self.isAnimating = false;
						_self.current = (_self.current + 1) % _self.slides.length;
						setSlidesCurrent(1);
					});
				}
				if (startPos - touch.pageX <= -100) {
					if (!_self.defaults.loop) {
						if (_self.current === 0) return;
					}
					_self.slider.css('left', touch.pageX - startPos).stop().animate({
						'left': _self.slideLeft * _self.defaults.offsetWidth
					}, _self.defaults.speed ,function () {
						_self.isAnimating = false;
						_self.current = (_self.current - 1 < 0) ? _self.slides.length - 1 : _self.current - 1;
						setSlidesCurrent(0);
					});
				}
			});
		}
	});

	function setSlidesCurrent(dir) {
		_self.setCurrent();
		_self.slides.eq(_self.current).css('left', 0);
		resetDragFunc();
		_self.slidesOnReady(dir);
		_self.defaults.afterSlideCallback();
	}

	function resetDragFunc() {
		$(document).unbind('mousemove touchmove');
		$(document).unbind('mouseup touchend');
		_self.slider.css('left', 0);
		_self.autoPlay();
	}
};

imgSlider.prototype.destroy = function () {
	var _self = this;

	clearTimeout(_self.autoPlayTimer);

	_self.destroyed = true;
	_self.slides.stop();

	_self.container.removeClass('loaded');
	_self.container.off('click', '.sliderBullet a');
	_self.container.find('.sliderBtnPrev').off('click').hide();
	_self.container.find('.sliderBtnNext').off('click').hide();

	_self.sliderContainer.unbind('mousedown touchstart');
	$(document).unbind('mousemove touchmove');
	$(document).unbind('mouseup touchend');

	_self.sliderContainer.removeClass('ready');
	_self.slides.removeClass('on');

	_self.sliderContainer.css('height', '');
	_self.slides.css('height', '');
	_self.slider.css('left', '');
	_self.resetSlidesCSS();
};

