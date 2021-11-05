<?php

class FrontPage extends Monefize\Controller\Base {
    public $template = "page";

    use \Monefize\Controller\Modular;
}

new FrontPage;