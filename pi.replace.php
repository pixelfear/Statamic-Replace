<?php
class Plugin_replace extends Plugin
{
	public function index()
	{
		$find     = Helper::ensureArray(Helper::explodeOptions($this->fetchParam('find', null, null, null, true)));
		$replace  = Helper::ensureArray(Helper::explodeOptions($this->fetch_param('replace', null, null, null, true)));
		
		$content = Parse::template($this->content, $this->context);

		foreach ($find as $i => $term) {
			if ( ! $replace_with = array_get($replace, $i)) {
				continue;
			}

			$content = str_replace($term, $replace_with, $content);
		}

		return $content;
	}
}
