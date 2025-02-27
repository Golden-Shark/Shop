"use strict";
window.addEventListener("DOMContentLoaded", () => {});
const big_block = document.querySelector('.big-banner');
const small_block = document.querySelector('.bottom-banners');
const big_content = document.getElementById('big-content');
const top_content = document.getElementById('top-content');
const bottom_left_content = document.getElementById('bottom-left-content');
const bottom_right_content = document.getElementById('bottom-right-content');
const product = document.querySelectorAll('.likeProduct'); // Массив всех товаров для добавления в избранное
const filterImg = document.querySelectorAll('.filterImg'); //Массив для открытия фильтров в каталоге

const activelike = (n) => {
    const srcProduct = product[n].src.split('/');
    if (srcProduct[srcProduct.length - 1] == 'Like.png') {
        product[n].src='img/activeLike.png';
        product[n].title='Не нравится';
    } else {
        product[n].src='img/Like.png';
        product[n].title='Нравится';
    }

}

window.addEventListener('scroll', function() {
    let bigBlockPosition = big_block.getBoundingClientRect().top;
    if (bigBlockPosition < window.innerHeight) {
        big_content.style.opacity = "1";
        big_content.style.transform = "translateX(0)";
        top_content.style.opacity = "1";
        top_content.style.transform = "translateX(0)";
    }
});

window.addEventListener('scroll', function() {
    let smallBlockPosition = small_block.getBoundingClientRect().top;
    if (smallBlockPosition < window.innerHeight) {
        bottom_left_content.style.opacity = "1";
        bottom_left_content.style.transform = "translateY(0)";
        bottom_right_content.style.opacity = "1";
        bottom_right_content.style.transform = "translateY(0)";
    }
});

