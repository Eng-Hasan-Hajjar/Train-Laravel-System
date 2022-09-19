(function($) {
    "use strict";
 $(document).ready(function() {
/* ---------------------------------------------
Our work
--------------------------------------------- */
    // layout Isotope after each image loads

    // init Isotope
    var $grid = $('.grid ');
    if($grid.length){
    $grid.isotope({});
    $grid.imagesLoaded().progress(function() {
        $grid.isotope('layout');

    });
  

    ! function(e) {
        "use strict";
        e(document).ready(function() {
            function t(t) {
                o.find(".hidden").removeClass("hidden");
                var a = r.filteredItems.slice(t, r.filteredItems.length).map(function(e) {
                    return e.element
                });
                e(a).addClass("hidden"),
                    o.isotope("layout"),
                    0 == a.length ? jQuery("#loadMore").hide() : jQuery("#loadMore").show()
            }

            var o = e(".grid").isotope({
                    itemSelector: ".portfolio-item",
                    getSortData: {
                        name: ".name",
                        symbol: ".symbol",
                        number: ".number parseInt",
                        category: "[data-category]",
                        weight: function(t) {
                            var o = e(t).find(".weight").text();
                            return parseFloat(o.replace(/[\(\)]/g, ""))
                        }
                    },
                }),
                
                a = 6,
                i = 3,
                n = a,
                r = o.data("isotope");
            t(a),
                e("#loadMore").on("click",
                    function() {
                        e("#filters").data("clicked") ? (n = i, e("#filters").data("clicked", !1)) : n = n, n += i, t(n)
                    }
                ),
                e("#filters").on("click",
                    function() {
                        e(this).data("clicked", !0), t(i)
                    }
                )
        })
    }
    (jQuery);
        
          }
});
})(jQuery);