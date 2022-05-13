<section class="ls s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60 c-gutter-30">
    <div class="container">
        <div class="row">
            <main class="col-lg-12 col-xl-12">
                <h3 class="special-heading mb-5 text-center">
                    <span class="text-capitalize">
                    We are Introducing ...
                    </span>
                </h3>
                <div class="columns-3">
                    <ul class="products">
                        <?php foreach($products as $product): ?>
                        <li class="product">
                            <a class="woocommerce-LoopProduct-link" href="<?=$product["link"]?>">
                                <div class="img-wrap">
                                    <img src="<?=$product["image"]?>" alt="">
                                </div>
                            </a>
                            <h2 class="text-center"><a href="<?=$product["link"]?>"><?=$product["title"]?></a></h2>
                            <div class="star-rating">
                                <span style="width:<?=$product["ratting"]*20?>%">Rated <strong class="rating"><?=$product["ratting"]?></strong> out of 5</span>
                            </div>
                            <a rel="nofollow" href="<?=$product["link"]?>" class="mt-3 button product_type_simple add_to_cart_button">Read More</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </main>
        </div>
    </div>
</section>