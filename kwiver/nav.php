<nav class="top-nav justify-nav-center">
    <ul class="nav sf-menu">
        <?php
            include_once("data.php");

            $nav = array();
            $item = array("Home",((!$internas) ? "./" : "../"),true);
            // array_push($nav,$item);
            $item = array("About",((!$internas) ? "" : "../")."info/about.php",false);
            array_push($nav,$item);
            foreach($products as $product):    
                $item = array($product["title"],$product["link"],false);
                array_push($nav,$item);
            endforeach;
            $item = array("Contact",((!$internas) ? "" : "../")."info/contact.php",false);
            array_push($nav,$item);

            foreach($nav as $item):
        ?>
        <li class="<?=($item[2]) ? 'active' : ''?>">
            <a href="<?=$item[1]?>" title="<?=$item[0]?>"><?=$item[0]?></a>
        </li>
        <?php 
            endforeach; 
        ?>
    </ul>
</nav>