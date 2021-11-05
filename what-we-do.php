<?php
/*
    Template Name: What We Do
    Template Post Type: page
*/

class WhatWeDo extends Monefize\Controller\Base {
    public $template = "page";
    public $modules = "what_we_do_modules";

    use \Monefize\Controller\Modular;
}

new WhatWeDo;