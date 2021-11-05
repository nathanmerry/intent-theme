<?php
/*
    Template Name: Contact
    Template Post Type: page
*/

class Contact extends Monefize\Controller\Base {
    public $template = "contact";

    public function getContactAttribute() {
        $fields = get_field('contact');      
        
        if (preg_match('/{([^}]*)}/', $fields['hero_text'] ?? null)) {
            $fields['hero_text'] = $this->underline($fields['hero_text']);
        }

        return $fields;
    }

    protected function underline($string) {
		return preg_replace_callback('/{([^}]*)}/', function($matches) {
			return "<span class='under'>{$matches[1]}</span>";
		}, $string);
	}
}

new Contact;