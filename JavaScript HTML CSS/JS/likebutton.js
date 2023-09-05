// let button = document.querySelectorAll(".heart-like-button");

// button.forEach(function(span) {
//     span.addEventListener("click", () => {
//         if (span.classList.contains("liked")) {
//             span.classList.remove("liked");
//         } else {
//             span.classList.add("liked");
//         } 
//     });
// });

//when user clicks on heart
$(document).ready(function(){
    $(".heart-like-button").on("click", function(){
        if($(this).hasClass("liked")){
            unliked = "unliked";
            $(this).removeClass("liked");
            var postid = $(this).attr('id');
            data = {'unliked': unliked, 'postid': postid}
            $.post('/JavaScript HTML CSS/includes/unlikes.inc.php',
                data,
                function(data){console.log(data)}
            );
        }else{
            $(this).addClass("liked");
            liked = "liked";
            var postid = $(this).attr('id');
            data = {'liked': liked, 'postid': postid}
            $.post('/JavaScript HTML CSS/includes/likes.inc.php',
                data,
                function(data){console.log(data)}
            );
        }
        // $.ajax({
        //     url: 'likes.inc.php',
        //     type: 'post',
        //     data: {
        //         'liked': 1,
        //         'postid': postid
        //     },
        //     success: function(response){
        //         $post.parent().find('span.likes_count').text(response + " likes");
        //         $post.addClass('hide');
        //         $post.siblings().removeClass('hide');
        //     }
        // });
    });
});

