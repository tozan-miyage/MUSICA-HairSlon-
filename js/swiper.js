jQuery(function () {
    // ここに処理を書く


    let swiper1 = new Swiper('.swiper-container1', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        speed: 3000,
        
    });

    let swiper2 = new Swiper('.swiper-container2', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },
        effect: 'fade',
        speed: 2000,
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
    });


    let swiper3 = new Swiper('.swiper-container3', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },
        effect: 'fade',
        speed: 2000,
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
    });

    //終了
    console.log('swiper.js,read ok!');
});