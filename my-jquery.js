(function ($) {
    $.fn.myjquery = function () {
        // console.log(this);
        var delay = 1000;
        var liCount = document.querySelectorAll("li").length
        // console.log(liCount);
        var i = 0;

        $("li").each(function (index) {
            $(this).addClass("my-custom-class");

            postID = index + 1;
            setTimeout(fetchdata, delay, postID, this);
            i++;
            j = i % 5;
            if ( j == 0 ) {
                delay += 1000;
            }
        });

        // $(this).addClass("my-custom-class");

        // postID = index + 1;
        // setTimeout(fetchdata, delay, postID, this);
        // i++;
        // j = i % 5;
        // if ( j == 0 ) {
        //     delay += 1000;
        // }

        function fetchdata(postID, li) {
            $.ajax("https://jsonplaceholder.typicode.com/posts/" + postID, {
                success: function (data, status, xhr) {
                    // console.log(li);
                    $(li).text(data["title"]);
                    // setTimeout(fetchdata, 2000, postID, li);
                },
            });
        }
    };
})(jQuery);
