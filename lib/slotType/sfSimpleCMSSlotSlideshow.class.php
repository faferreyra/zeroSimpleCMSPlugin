<?php

class sfSimpleCMSSlotSlideshow implements sfSimpleCMSSlotTypeInterface
{
	public function getSlotValue($slot) {
		 
		sfLoader::loadHelpers(array('Asset', 'Url', 'Tag'));
		$images = sfYaml::load($slot->getValue());

		$value = '<div id="slider">';

		for($i = 0; $i < count($images); $i++) {
			 
			$image = $images[$i];
			 
			if(isset($image['src'])) {
				$imageTag = $this->getImageTag($image, $slot);
				$value .= $imageTag;
			}
		}

		$value .= '</div>';

		return $value;
	}

	private function getImageTag($params, $slot) {
		
		$editing = sfContext::getInstance()->getRequest()->getParameter('edit', false);
		
		$res = '';
		if(isset($params['legend']))
		{
			$res .= content_tag('p', $params['legend'], array('class' => 'image_legend'));
			$params['alt'] = $params['legend'];
			unset($params['legend']);
		}
		if(isset($params['url']))
		{
			$url = $params['url'];
			unset($params['url']);
		}
		if(!isset($params['src']))
		{
			return sprintf('<strong>Error</strong>: The value of slot %s in incorrect. The image has no source', $slot->getName());
		}
		$src = $params['src'];
		unset($params['src']);
		$res = image_tag($src, $params).$res;
		if(isset($url))
		{
			return ($editing == false) ? link_to($res, $url) : $res;
		}
		else
		{
			return $res;
		}
		 
	}

	public function getSlotEditor($slot) {
		 
		$images = sfYaml::load($slot->getValue());

		sfLoader::loadHelpers(array('sfMediaLibrary'));

		if(count($images) == 0) {
			$images[0] = array('src' => '');
			$images[1] = array('src' => '');
		}

		$formControls = '';

		for($i = 0; $i < count($images); $i++) {
			 
			$image = $images[$i];
			 
			$input_field = '<div>' . input_asset_tag('src_' . $i, $image['src']) . '</div>';
			 
			$formControls .= content_tag('div', label_for('src', __('Source')).'<div>' . $input_field . '</div>', array('class' =>  'image_slot_form'));

			$formControls .=
			$this->getControlFor('width','Width', $image).
			$this->getControlFor('height','Height', $image).
			$this->getControlFor('legend','Legend', $image).
			$this->getControlFor('url','URL', $image);

			$formControls .= '<br />';
		}

		$formControls .= '<br />';

		return $formControls;
	}

	private function getControlFor($name, $label, $params)
	{
		sfLoader::loadHelpers(array('Form', 'Tag', 'I18N'));
		return content_tag('div',
		label_for($name, __($label)) .
		input_tag($name . '[]', isset($params[$name]) ? $params[$name] : ''),
		array('class' =>  'image_slot_form'));
	}
	 

	public function getSlotValueFromRequest($request) {

		$imagesParams = array(
        	   'width' => $request->getParameter('width'),
        	   'height' => $request->getParameter('height'),
        	   'legend' => $request->getParameter('legend'),
        	   'url' => $request->getParameter('url'));
		 
		$images = array();
		 
		for($i = 0; $i < count($imagesParams['width']); $i++ ) {

			$images[$i] = array(
        		  'src' => $request->getParameter('src_' . $i),
        		  'width' => $imagesParams['width'][$i],
        		  'height' => $imagesParams['height'][$i],
        		  'legend' => $imagesParams['legend'][$i],
        		  'url' => $imagesParams['url'][$i]
			);
		}
		 
		return sfYaml::dump($images);
	}
}