(function ($) {
    $.fn.myjquery = function () {
    // $.fn.myjquery = function (options) {
        // var settings = $.extend({
        //         htmlTag: "li",
        //     },
        //     options
        // );

        if (!window.hasOwnProperty("totalLi")) {
            // window.totalLi = this.parent().children(settings.htmlTag).length;
            window.totalLi = this.parent().children("li").length;
            // window.totalLi = this.parent().find("li").length;
            window.delay = 100;
            console.log(totalLi);
        }

        this.addClass("my-custom-class");
        this.data("title", "test");

        var index = this.index() + 1;

        setTimeout(fetchdata, window.delay, index, this);

        // console.log(index);
        j = index % 5;
        if (j == 0) {
            window.delay += 2000;
        }

        function fetchdata(index, li) {
            $.ajax("https://jsonplaceholder.typicode.com/posts/" + index, {
                success: function (data) {
                    $(li).text(data["title"]);
                    $(li).data("title", data["title"]);
                },
            });
        }

        $(this).on('click', function() {
            console.log($(this).data("title"));
        });
    };
})(jQuery);
