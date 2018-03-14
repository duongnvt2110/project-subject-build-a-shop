//----start----
$(document).ready(function()
{

	$(".my-Btn").click(function()
	{
		$("#myModal").show();
		console.log("test");
	});
	$("#myModal").click(function()
	{
		$("#myModal").hide();
		console.log("test1");
	});
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
		responsiveClass:true,
		pagination:false,
		navigation:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:2,
			},
			1000:{
				items:4,
				dots:true,
			}
		}

	});
	$("#input-text").keyup(function()
	{
		var txt=$(this).val();
		if(txt=='')
		{
			$(".quick-view").css('display','none');
		}
		else
		{
			$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
			$.ajax({
				type:"post",
				url:'search',
				data:{search:txt},
				dataType:"text",
				success:function(data){
					$(".quick-view").html(data);
					$(".quick-view").css("display","block");
				}
			});
		}
	});
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	// $("#pay-btn").click(function(){
	// 	alert("Đã Mua Hàng Thành Công");
	// }); 
});


//-Function---
// function hover(element) {
//     element.setAttribute('src', '../image/banner/lipstick-icon.png');
// }
// function unhover(element) {
//     element.setAttribute('src', '../image/banner/lipstick-icon.png');
// }
// Get the modal
// var modal = document.getElementById('myModal');

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function(){
//     modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function(event){
//     modal.style.display = "none";
// }


// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }