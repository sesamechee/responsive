# Responsive Template

## Features
- 3 Layout responsive ( desktop , tablet , mobile )
- Best view IE9+
- SCSS, compass
- SVG Icon : SVG or PNG Fallback ( GRUNTICON )

## Plugin List
- jquery: ~1.10.2
- jquery.easing: ~1.3.1
- jquery-mousewheel : ~3.1.13
- magnific-popup : ~1.1.0
- jScrollPane : ~2.0.23
- jquery-selectric : ~1.9.6
- jquery.inview : 1.1.2
- smoothscroll-for-websites : ~1.4.4 ( Optional )

## Common Commard
### Popup Magnific popup box
```
popupBox( $(TARGET), {
	showCloseBtn : true,
	fixedContentPos : true,
	fixedBgPos : true,
	closeOnBgClick: true,
	callbacks:{
		open: function(){

		},
		close: function(){
		
		}
	}
});
```
### Popup Alert Msg
```
alertMsg( 'MSG HERE', config);
```
### Popup Youtube Video
```
videoPop( youtubeID , config );
```
### Inview effect
```
> It will add a class "play" when inview
<div class="invew"></div>
```
### Scroll to target function
```
scrollto('.TARGET');
```
### ImgSlider Usage
```
newSliderName = new imgSlider( $('target'), {
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
});

gBannerSlider.transition( 'next' , idx );
gBannerSlider.transition( 'prev' , idx );
gBannerSlider.changePattern( idx );
gBannerSlider.slidesOnReady();
gBannerSlider.destroy();
```
