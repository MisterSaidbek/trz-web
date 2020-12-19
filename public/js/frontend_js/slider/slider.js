$('.links-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow:$(".use-left"),
    nextArrow:$(".use-right"),
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                item: 3,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                item: 2,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                item: 1,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.links-slider-2').slick({
    infinite: true,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:$(".use-left-2"),
    nextArrow:$(".use-right-2"),
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                item: 3,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                item: 2,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                item: 1,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// $('.ann-slider').slick({
//     infinite: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     prevArrow:$(".ann-left"),
//     nextArrow:$(".ann-right")
// });
