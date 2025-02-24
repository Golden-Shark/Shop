"use strict";
window.addEventListener("DOMContentLoaded", () => {});

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

