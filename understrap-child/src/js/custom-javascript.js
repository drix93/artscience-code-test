window.$ = jQuery;

$(function () {
    /*==========================================================
        SCROLL - STICKY NAV / TUCK
    ==========================================================*/

    var lastScrollTop = 0;
    var deltaDown = 50; // determines when the nav shrinks, when scrolling down
    var deltaUp = 50; // determines when the nav grows back, when scrolling up

    $(window).on('scroll', function (event) {

        // Detect scroll position
        var st = $(this).scrollTop();

        // If user has scrolled down
        if (st == lastScrollTop) {
            return;
        } else if (st > lastScrollTop && lastScrollTop >= 0) {
            $("html").removeClass("scrollingUp");

            // Ready to shrink nav if user scrolled down far enough
            if (st > deltaDown) {
                $("html").addClass("scrollingDownward").addClass("scrollPoint");
            }

        } else {

            // User has started to scroll up
            $("html").removeClass("scrollingDownward").addClass("scrollingUp").addClass("scrolling");

        }

        lastScrollTop = st;

        // Detect if hit top of page
        if (st <= deltaUp) {
            $("html").removeClass("scrolling").addClass("hitTop").removeClass("scrollingUp").removeClass('scrollPoint');
        } else {
            $("html").removeClass("hitTop");
        }

        if (st > 1) {
            $("html").addClass("scrolling");
        }

    });

    /*==========================================================
        SET CONTENT MARGIN TOP FOR STICKY HEADER
    ==========================================================*/
    $(window).on('ready load resize orientationchange', function () {
        var headerWrapper = $('#wrapper-navbar');

        headerWrapper.next().css('margin-top', headerWrapper.height());
    });

    /*==========================================================
        ANIMATION
    ==========================================================*/
    var v = document.querySelectorAll(".animate"),
        m = new IntersectionObserver((function (e) {
            e.forEach((function (e) {
                e.isIntersecting && e.target.classList.add("animated")
            }))
        }), {
            threshold: .4
        });
    v.forEach((function (e) {
        m.observe(e)
    }));
});