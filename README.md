# Responsive Template
> Support to IE9+
> SCSS
> SVG Icon

## ImgSlider Usage
    newSliderName = new imgSlider( $('target'), {
      speed: 300,
      drag: true,
      loop: true,
      autoHeight: false,
      autoPlay: false,
      autoPlaySpeed: 5000,
      fade: false,
      thumbnailCarousel: true,
      afterSlideCallback: function(){
      }
    });
    
    gBannerSlider.transition( 'next' , idx );
    gBannerSlider.transition( 'prev' , idx );
    gBannerSlider.changePattern( idx );
    gBannerSlider.slidesOnReady();
    gBannerSlider.destroy();
