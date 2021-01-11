(function( $ ){
  class Menu {
    constructor() {
      this.menuBtn = $( '#menu-btn' );
      this.menuItems = $( '#menu-items' );
      this.addEvents();
    }

    addEvents() {
      if ( this.menuBtn && this.menuItems ) {
        this.menuBtn.on( 'click', () => {
          if ( this.menuItems.hasClass( 'is-open' ) ) {
            this.menuItems.addClass( 'h-0' );
            this.menuItems.removeClass( 'is-open max-h-full h-full' );
          } else {
            this.menuItems.addClass( 'is-open max-h-full h-full' );
            this.menuItems.removeClass( 'h-0' );
          }
        } )
      }
    }
  }

  new Menu();
})(jQuery);
