<?php

namespace fahmi_arzalega\belajar\PHP\MVC\Controller;

class ProductController
{

    function categories(string $productId, string $categoryId): void
    {
        echo "PRODUCT $productId, CATEGORY $categoryId";
    }

}