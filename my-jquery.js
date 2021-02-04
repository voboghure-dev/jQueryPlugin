(function ($) {
    $.fn.myjquery = function () {
        if (!window.hasOwnProperty("totalLi")) {
            window.totalLi = this.parent().children().length;
            window.delay = 1000;
            console.log(totalLi);
        }

        // console.log(this);
        // var liCount = document.querySelectorAll("li").length
        // console.log(liCount);
        // var i = 0;

        // Traverse through all li and shedule ajax request
        // $("li").each(function (index) {
        //     $(this).addClass("my-custom-class");

        //     postID = index + 1;
        //     setTimeout(fetchdata, delay, postID, this);
        //     i++;
        //     j = i % 5;
        //     if ( j == 0 ) {
        //         delay += 1000;
        //     }
        // });
        // console.log(this);

        this.addClass("my-custom-class");
        var index = this.index() + 1;

        setTimeout(fetchdata, window.delay, index, this);

        // console.log(index);
        j = index % 5;
        if (j == 0) {
            window.delay += 1000;
        }

        function fetchdata(index, li) {
            $.ajax("https://jsonplaceholder.typicode.com/posts/" + index, {
                success: function (data, status, xhr) {
                    // console.log(li);
                    $(li).text(data["title"]);
                    // setTimeout(fetchdata, 2000, postID, li);
                },
            });
        }
    };
})(jQuery);
