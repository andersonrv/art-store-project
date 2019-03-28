function redirect() {
    var url = "index.php";
    window.location(url);
}
// var btn=document.getElementById("login").onclick =

//      function () {
//         location.href = "../index.php";
//     };

// Attempt to make Favourites button work with JS
// var btn = document.getElementById('btn');

// btn.addEventListener('click', function() {
//     document.location.href = 'favourites.php';
//     
// });

//Attempt to make Favourites button work with JQuery

// $(function() {
//     $("#btn").click(function () {
//         var url = "includes/favouritesList.inc.php";
//         var param = $('#btn span:first-child').attr('id');
//         console.log(param);
//         $.get(url, param, function(data, status) {
//             if (status == "success") {
//                 // addFavouriteArtist($requestedArtist)
//                 document.getElementById("message").innerHTML = "The artist was added to the Favourits List";
//             }
//             else {
//                 alert("nope!, this did not work");
//             }
//         }
//     )});
// });

// setting up validation handler when page is downloaded and ready

//  window.onload = init;