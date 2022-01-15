// Add your JS customizations here

// jquery carousel

$(document).ready(function () {
	$("#mobile-slideshow > .m-slide:gt(0)").hide();

	setInterval(function () {
		$("#mobile-slideshow > .m-slide:first")
			.fadeOut(1500)
			.next()
			.fadeIn(1500)
			.end()
			.appendTo("#mobile-slideshow");
	}, 3000);

	$("#slideshow > .slide:gt(0)").hide();

	setInterval(function () {
		$("#slideshow > .slide:first")
			.fadeOut(1750)
			.next()
			.fadeIn(1750)
			.end()
			.appendTo("#slideshow");
	}, 3000);
});

//carousel
// const buttons = document.querySelectorAll("[data-carousel-button]");

// buttons.forEach((button) => {
// 	button.addEventListener("click", () => {
// 		const offset = button.dataset.carouselButton === "next" ? 1 : -1;
// 		const slides = button
// 			.closest("[data-carousel]")
// 			.querySelector("[data-slides]");

// 		const activeSlide = slides.querySelector("[data-active]");
// 		let newIndex = [...slides.children].indexOf(activeSlide) + offset;
// 		if (newIndex < 0) newIndex = slides.children.length - 1;
// 		if (newIndex >= slides.children.length) newIndex = 0;

// 		slides.children[newIndex].dataset.active = true;
// 		delete activeSlide.dataset.active;
// 	});
// });

// carousel mini
// const buttonsMini = document.querySelectorAll("[data-carousel-button-mini]");

// buttonsMini.forEach((button) => {
// 	buttonsMini.addEventListener("click", () => {
// 		const offset = button.dataset.carouselButton === "next" ? 1 : -1;
// 		const slides = button
// 			.closest("[data-carousel]")
// 			.querySelector("[data-slides]");

// 		const activeSlide = slides.querySelector("[data-active]");
// 		let newIndex = [...slides.children].indexOf(activeSlide) + offset;
// 		if (newIndex < 0) newIndex = slides.children.length - 1;
// 		if (newIndex >= slides.children.length) newIndex = 0;

// 		slides.children[newIndex].dataset.active = true;
// 		delete activeSlide.dataset.active;
// 	});
// });
