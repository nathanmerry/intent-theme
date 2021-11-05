<?php
namespace Monefize\Controller;

trait Modular {
	public function getModulesAttribute()
    {
		$data = [];
		$modules = property_exists($this, 'modules') ? $this->modules : strtolower(get_called_class()) . '_modules';
		$modules = get_field($modules);
		
		if ($modules) {
			foreach ($modules as $module) {
				$name = $this->snakeToCamel($module['acf_fc_layout']);
				
				if (preg_match('/{([^}]*)}/', $module['title'] ?? null)) {
					$module['title'] = $this->underline($module['title']);
				}
				
				$data[] = [ 'name' => $name, 'data' => $module];
			}
		}
		
		return $data;
	}
	
	protected function snakeToCamel($str)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
	}

	protected function underline($string) {
		return preg_replace_callback('/{([^}]*)}/', function($matches) {
			return "<span class='under'>{$matches[1]}</span>";
		}, $string);
	}
}
