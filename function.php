<?php

$newProductsArray = array_chunk($productsArray, 9);

function downloadCatalog() {
    global $newProductsArray, $page;
    foreach($newProductsArray[$page] as $key) { 
        if ($key->price - (int)$key->price == 0.00) {
            $key->price = (int)$key->price;
        }
        $n = $key->id - 1;
        echo '<div class="product">
                <div class="like"><img src="../img/Like.png"  onclick="activelike('.$n.')" alt="" title="Нравится" class="likeProduct"></div>
                <a href="cardProduct.php?name='.$key->name.'&price='.$key->price.'" class="mainPhoto"><img src="'.$key->img.'" alt=""></a>
                <p>'.$key->name.' ('.$key->article.')</p>  
                <h3>$'.$key->price.'</h3>
                <a href="../lib/productBasket.php?action=add&id='.$key->article.'&name='.$key->name.'&count=1">Buy Now</a>
            </div>';
    }
}

/*
if ($key > 3 & $key < count($newProductsArray)-1) {
    continue;
}
*/

function navCatalog() {
    global $newProductsArray, $page;
    $pageNum = '';
    $previousButton = '';
    $nextButton = '';
    foreach ($newProductsArray as $key => $value) {
        switch ($key) {
            case $page:
                $pageNum = $pageNum.'<a href="catalog.php?pageNum='.$key++.'" class="activePage">'.$key++.'</a>';
                break;
            default:
                $pageNum = $pageNum.'<a href="catalog.php?pageNum='.$key++.'">'.$key++.'</a>';
                break;
        }
    }

    switch ($page) {
        case 0:
            $previousButton = '<a href="catalog.php?changeAction=previous" class="non-active-btn"><button><img src="../img/navCatalogLeft.png" alt=""></button></a>';
            $nextButton = '<a href="catalog.php?changeAction=next"><button><img src="../img/navCatalogRight.png" alt=""></button></a>';
            break;
        case count($newProductsArray)-1:
            $previousButton = '<a href="catalog.php?changeAction=previous"><button><img src="../img/navCatalogLeft.png" alt=""></button></a>';
            $nextButton = '<a href="catalog.php?changeAction=next" class="non-active-btn"><button><img src="../img/navCatalogRight.png" alt=""></button></a>';
            break;
        default:
            $previousButton = '<a href="catalog.php?changeAction=previous"><button><img src="../img/navCatalogLeft.png" alt=""></button></a>';
            $nextButton = '<a href="catalog.php?changeAction=next"><button><img src="../img/navCatalogRight.png" alt=""></button></a>';
            break;
    }

    echo $previousButton.'<div class="numNav">'.$pageNum.'</div>'.$nextButton;
    
}