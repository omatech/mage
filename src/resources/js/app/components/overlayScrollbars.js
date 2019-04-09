$(document).ready(function () {
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

    if( $('.overlayscroll').not('.scrollDown').length ) {
        $('.overlayscroll').not('.scrollDown').overlayScrollbars(options);
    }

    if( $('.overlayscroll.scrollDown').length ) {
        $('.overlayscroll.scrollDown').overlayScrollbars(options).overlayScrollbars().scroll({ y : "100%" });
    }
});
