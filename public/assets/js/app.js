const modal = document.querySelector(".modal");
const modalImg = document.querySelector(".modal-content");
const closeModal = document.querySelector(".close");
const images = document.querySelectorAll(".gallery-item img, img-thumbnail img");


images.forEach((image) => {
  image.addEventListener("click", () => {
    modal.style.display = "block";
    modalImg.src = image.src;
  });
});
closeModal.addEventListener("click", () => {
  modal.style.display = "none";
});

// function changePage(idProduct, index) {
  // alert(index);

//   $.ajax({
//     url: '/updateCommentPageByProduct/' + idProduct + '/' + index, // L'URL de votre route Symfony
//     method: 'GET',
//     dataType: 'json',
//     success: function(response) {
//       console.log(response[0])
//         // Traitement de la réponse
//         console.log(response.message);
//     },
//     error: function(error) {
//       alert("error")
//         console.error('Une erreur s\'est produite', error);
//     }
// });
// };

$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
