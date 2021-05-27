jQ(document).ready(function () {
    let options = {
        className: "os-theme-dark",
        resize: "none",
        sizeAutoCapable: true,
        clipAlways: true,
        normalizeRTL: true,
        paddingAbsolute: true,
        autoUpdate: null,
        autoUpdateInterval: 33,
        nativeScrollbarsOverlaid: {
            showNativeScrollbars: false,
            initialize: true
        },
        overflowBehavior: {
            x: "scroll",
            y: "scroll"
        },
        scrollbars: {
            visibility: "auto",
            autoHide: "move",
            autoHideDelay: 800,
            dragScrolling: true,
            clickScrolling: false,
            touchSupport: true
        }
    };

    if (jQ('.overlayscroll').not('.scrollDown').length) {
        jQ('.overlayscroll').not('.scrollDown').overlayScrollbars(options);
    }

    if (jQ('.overlayscroll.scrollDown').length) {
        jQ('.overlayscroll.scrollDown').overlayScrollbars(options).overlayScrollbars().scroll({ y: "100%" });
    }

    OverlayScrollbars(document.querySelectorAll('.sidebar-mini'), options);
    OverlayScrollbars(document.querySelectorAll('.sidebar-wrapper'), options);

    if (jQ("body").hasClass("sidebar-open")) {
        jQ('.wrapper').append('<div id="sidebar-overlay"></div>')

        jQ("#sidebar-overlay").on("click", function () {
            jQ("body").removeClass("sidebar-open")
            jQ("body").addClass("sidebar-collapse")
            axios
                .post(route('mage.sidebar.toggle'), { isShown: "true" })
                .catch((error) => {
                    console.error(error);
                });
        });
    }
});
