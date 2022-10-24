<header>

<nav class="navbar">
        <li class="logo"><a href="<?= $router->generate('home') ?>">Nicolas Mahieux</a></li>
        <div class="nav-links">
            <ul>

                <li class="active"><a href="<?= $router->generate('home') ?>">Home</a></li>
                <li class='presentation' ><a href="<?= $router->generate('presentation') ?>">Présentation</a></li>
                <li class='cv'><a href="<?= $router->generate('cv') ?>">Curriculum Vitae</a></li>
                <li class='portfolio' ><a href="<?= $router->generate('portfolio') ?>">Portfolio</a></li>
                <li class='contact' ><a href="<?= $router->generate('contact') ?>">Contact</a></li>
            </ul>
        </div>
        <img class="hamb" src="<?=$viewData['baseUri']?>/../public/assets/images/hambu.png" alt="">
    </nav>

</header>