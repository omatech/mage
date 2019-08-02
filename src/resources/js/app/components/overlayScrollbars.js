jQ(document).ready(function () {
    let options = {
        className            : "os-theme-dark",
        resize               : "none",
        sizeAutoCapable      : true,
        clipAlways           : true,
        normalizeRTL         : true,
        paddingAbsolute      : false,
        autoUpdate           : null,
        autoUpdateInterval   : 33,
        nativeScrollbarsOverlaid : {
            showNativeScrollbars   : false,
            initialize             : true
        },
        overflowBehavior : {
            x : "scroll",
            y : "scroll"
        },
        scrollbars : {
            visibility       : "auto",
            autoHide         : "move",
            autoHideDelay    : 800,
            dragScrolling    : true,
            clickScrolling   : false,
            touchSupport     : true
        }
    };

    if( jQ('.overlayscroll').not('.scrollDown').length ) {
        jQ('.overlayscroll').not('.scrollDown').overlayScrollbars(options);
    }

    if( jQ('.overlayscroll.scrollDown').length ) {
        jQ('.overlayscroll.scrollDown').overlayScrollbars(options).overlayScrollbars().scroll({ y : "100%" });
    }

    OverlayScrollbars(document.querySelectorAll('.wrapper'), options);
    OverlayScrollbars(document.querySelectorAll('.sidebar'), options);
});
