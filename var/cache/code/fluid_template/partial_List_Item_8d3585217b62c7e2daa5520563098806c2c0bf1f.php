<?php

class partial_List_Item_8d3585217b62c7e2daa5520563098806c2c0bf1f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'ai' => 
  array (
    0 => 'C1\\AdaptiveImages\\ViewHelpers',
  ),
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '<!--
	=====================
		Partials/List/Item.html
-->';
};
$arguments1 = array();

$output0 .= '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['newsItem'] = NULL;
$array331 = array (
);$arguments329['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array331);

$output328 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);

$output328 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
		<div class="card-news col position-relative">					
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
			
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['additionalAttributes'] = NULL;
$arguments370['data'] = NULL;
$arguments370['aria'] = NULL;
$arguments370['class'] = NULL;
$arguments370['dir'] = NULL;
$arguments370['id'] = NULL;
$arguments370['lang'] = NULL;
$arguments370['style'] = NULL;
$arguments370['title'] = NULL;
$arguments370['accesskey'] = NULL;
$arguments370['tabindex'] = NULL;
$arguments370['onclick'] = NULL;
$arguments370['alt'] = NULL;
$arguments370['file'] = NULL;
$arguments370['additionalConfig'] = array (
);
$arguments370['width'] = NULL;
$arguments370['height'] = NULL;
$arguments370['cropVariant'] = 'default';
$arguments370['fileExtension'] = NULL;
$arguments370['loading'] = NULL;
$arguments370['decoding'] = NULL;
$arguments370['class'] = 'lazyload img-fluid position-relative h-100';
$array372 = array (
);$arguments370['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array372);
$arguments370['cropVariant'] = 'newscardlist';
$array373 = array (
);$arguments370['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array373);
$array374 = array (
);$arguments370['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array374);
$array375 = array (
);$arguments370['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthCard', $array375);
// Rendering Array
$array376 = array();
$array376['itemprop'] = 'image';
$arguments370['additionalAttributes'] = $array376;

$output369 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
		';
return $output369;
};
$arguments367 = array();

$output366 .= '';

$output366 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$arguments386['aria'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['alt'] = NULL;
$arguments386['ismap'] = NULL;
$arguments386['longdesc'] = NULL;
$arguments386['usemap'] = NULL;
$arguments386['loading'] = NULL;
$arguments386['decoding'] = NULL;
$arguments386['src'] = '';
$arguments386['treatIdAsReference'] = false;
$arguments386['image'] = NULL;
$arguments386['crop'] = NULL;
$arguments386['cropVariant'] = 'default';
$arguments386['fileExtension'] = NULL;
$arguments386['width'] = NULL;
$arguments386['height'] = NULL;
$arguments386['minWidth'] = NULL;
$arguments386['minHeight'] = NULL;
$arguments386['maxWidth'] = NULL;
$arguments386['maxHeight'] = NULL;
$arguments386['absolute'] = false;
$arguments386['class'] = 'img-dummy img-responsive';
$array388 = array (
);$arguments386['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array388);
$arguments386['title'] = '';
$arguments386['alt'] = '';
$array389 = array (
);$arguments386['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array389);
$array390 = array (
);$arguments386['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array390);

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output385 .= '
			';
return $output385;
};
$arguments380 = array();
$arguments380['then'] = NULL;
$arguments380['else'] = NULL;
$arguments380['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array382 = array();
$array383 = array (
);$array382['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array383);

$expression384 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments380['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression384(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array382)
					),
					$renderingContext
				);
$arguments380['__thenClosure'] = $renderChildrenClosure381;

$output379 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output379 .= '
		';
return $output379;
};
$arguments377 = array();
$arguments377['if'] = NULL;

$output366 .= '';

$output366 .= '
	';
return $output366;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array364);

$expression365 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments341['__thenClosure'] = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
			
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['additionalAttributes'] = NULL;
$arguments344['data'] = NULL;
$arguments344['aria'] = NULL;
$arguments344['class'] = NULL;
$arguments344['dir'] = NULL;
$arguments344['id'] = NULL;
$arguments344['lang'] = NULL;
$arguments344['style'] = NULL;
$arguments344['title'] = NULL;
$arguments344['accesskey'] = NULL;
$arguments344['tabindex'] = NULL;
$arguments344['onclick'] = NULL;
$arguments344['alt'] = NULL;
$arguments344['file'] = NULL;
$arguments344['additionalConfig'] = array (
);
$arguments344['width'] = NULL;
$arguments344['height'] = NULL;
$arguments344['cropVariant'] = 'default';
$arguments344['fileExtension'] = NULL;
$arguments344['loading'] = NULL;
$arguments344['decoding'] = NULL;
$arguments344['class'] = 'lazyload img-fluid position-relative h-100';
$array346 = array (
);$arguments344['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array346);
$arguments344['cropVariant'] = 'newscardlist';
$array347 = array (
);$arguments344['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array347);
$array348 = array (
);$arguments344['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array348);
$array349 = array (
);$arguments344['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthCard', $array349);
// Rendering Array
$array350 = array();
$array350['itemprop'] = 'image';
$arguments344['additionalAttributes'] = $array350;

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
		';
return $output343;
};
$arguments341['__elseClosures'][] = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['additionalAttributes'] = NULL;
$arguments358['data'] = NULL;
$arguments358['aria'] = NULL;
$arguments358['class'] = NULL;
$arguments358['dir'] = NULL;
$arguments358['id'] = NULL;
$arguments358['lang'] = NULL;
$arguments358['style'] = NULL;
$arguments358['title'] = NULL;
$arguments358['accesskey'] = NULL;
$arguments358['tabindex'] = NULL;
$arguments358['onclick'] = NULL;
$arguments358['alt'] = NULL;
$arguments358['ismap'] = NULL;
$arguments358['longdesc'] = NULL;
$arguments358['usemap'] = NULL;
$arguments358['loading'] = NULL;
$arguments358['decoding'] = NULL;
$arguments358['src'] = '';
$arguments358['treatIdAsReference'] = false;
$arguments358['image'] = NULL;
$arguments358['crop'] = NULL;
$arguments358['cropVariant'] = 'default';
$arguments358['fileExtension'] = NULL;
$arguments358['width'] = NULL;
$arguments358['height'] = NULL;
$arguments358['minWidth'] = NULL;
$arguments358['minHeight'] = NULL;
$arguments358['maxWidth'] = NULL;
$arguments358['maxHeight'] = NULL;
$arguments358['absolute'] = false;
$arguments358['class'] = 'img-dummy img-responsive';
$array360 = array (
);$arguments358['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array360);
$arguments358['title'] = '';
$arguments358['alt'] = '';
$array361 = array (
);$arguments358['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array361);
$array362 = array (
);$arguments358['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array362);

$output357 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
			';
return $output357;
};
$arguments352 = array();
$arguments352['then'] = NULL;
$arguments352['else'] = NULL;
$arguments352['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array354 = array();
$array355 = array (
);$array354['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array355);

$expression356 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments352['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression356(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array354)
					),
					$renderingContext
				);
$arguments352['__thenClosure'] = $renderChildrenClosure353;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output351 .= '
		';
return $output351;
};

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
';
return $output340;
};
$arguments335 = array();
$arguments335['additionalAttributes'] = NULL;
$arguments335['data'] = NULL;
$arguments335['aria'] = NULL;
$arguments335['class'] = NULL;
$arguments335['dir'] = NULL;
$arguments335['id'] = NULL;
$arguments335['lang'] = NULL;
$arguments335['style'] = NULL;
$arguments335['title'] = NULL;
$arguments335['accesskey'] = NULL;
$arguments335['tabindex'] = NULL;
$arguments335['onclick'] = NULL;
$arguments335['newsItem'] = NULL;
$arguments335['settings'] = array (
);
$arguments335['uriOnly'] = false;
$arguments335['configuration'] = array (
);
$arguments335['content'] = '';
$arguments335['section'] = NULL;
$array337 = array (
);$arguments335['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array337);
$array338 = array (
);$arguments335['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array338);
$array339 = array (
);$arguments335['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array339);

$output334 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
<div class="news-overlay bg-rgba-coal-50 articletype-';
$array391 = array (
);
$output334 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array391)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['then'] = NULL;
$arguments392['else'] = NULL;
$arguments392['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array394 = array();
$array395 = array (
);$array394['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array395);

$expression396 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments392['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression396(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array394)
					),
					$renderingContext
				);
$arguments392['then'] = ' topnews';

$output334 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output334 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
	<h5 itemprop="headline" class="text-white h4 w-75">
			';
$array403 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array403)]);

$output402 .= '
	</h5>
';
return $output402;
};
$arguments397 = array();
$arguments397['additionalAttributes'] = NULL;
$arguments397['data'] = NULL;
$arguments397['aria'] = NULL;
$arguments397['class'] = NULL;
$arguments397['dir'] = NULL;
$arguments397['id'] = NULL;
$arguments397['lang'] = NULL;
$arguments397['style'] = NULL;
$arguments397['title'] = NULL;
$arguments397['accesskey'] = NULL;
$arguments397['tabindex'] = NULL;
$arguments397['onclick'] = NULL;
$arguments397['newsItem'] = NULL;
$arguments397['settings'] = array (
);
$arguments397['uriOnly'] = false;
$arguments397['configuration'] = array (
);
$arguments397['content'] = '';
$arguments397['section'] = NULL;
$array399 = array (
);$arguments397['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array399);
$array400 = array (
);$arguments397['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array400);
$array401 = array (
);$arguments397['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array401);
$arguments397['class'] = 'text-decoration-none';

$output334 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output334 .= '
	</div>
</div>

	';
return $output334;
};
$arguments332 = array();

$output328 .= '';

$output328 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
<li class="list-group-item pl-0 pb-30 pb-lg-10 mb-20">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['section'] = NULL;
$arguments410['partial'] = NULL;
$arguments410['delegate'] = NULL;
$arguments410['renderable'] = NULL;
$arguments410['arguments'] = array (
);
$arguments410['optional'] = false;
$arguments410['default'] = NULL;
$arguments410['contentAs'] = NULL;
$arguments410['debug'] = true;
$arguments410['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array412 = array();
$array413 = array (
);$array412['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array413);
$array414 = array (
);$array412['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array414);
$arguments410['arguments'] = $array412;

$output409 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '	
		<h3 itemprop="headline">			
				';
$array421 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array421)]);

$output420 .= '			
		</h3>
<span class="row">
	<span class="col-3 pt-5 pe-0">
		<span class="ratio ratio-4x3 h-auto d-block">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['additionalAttributes'] = NULL;
$arguments450['data'] = NULL;
$arguments450['aria'] = NULL;
$arguments450['class'] = NULL;
$arguments450['dir'] = NULL;
$arguments450['id'] = NULL;
$arguments450['lang'] = NULL;
$arguments450['style'] = NULL;
$arguments450['title'] = NULL;
$arguments450['accesskey'] = NULL;
$arguments450['tabindex'] = NULL;
$arguments450['onclick'] = NULL;
$arguments450['alt'] = NULL;
$arguments450['file'] = NULL;
$arguments450['additionalConfig'] = array (
);
$arguments450['width'] = NULL;
$arguments450['height'] = NULL;
$arguments450['cropVariant'] = 'default';
$arguments450['fileExtension'] = NULL;
$arguments450['loading'] = NULL;
$arguments450['decoding'] = NULL;
$arguments450['class'] = 'img-fluid lazyload h-auto';
$array452 = array (
);$arguments450['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array452);
$arguments450['cropVariant'] = 'newslistview';
$array453 = array (
);$arguments450['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array453);
$array454 = array (
);$arguments450['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array454);
$array455 = array (
);$arguments450['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array455);
// Rendering Array
$array456 = array();
$array456['itemprop'] = 'image';
$arguments450['additionalAttributes'] = $array456;

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
				';
return $output449;
};
$arguments447 = array();

$output446 .= '';

$output446 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['additionalAttributes'] = NULL;
$arguments466['data'] = NULL;
$arguments466['aria'] = NULL;
$arguments466['class'] = NULL;
$arguments466['dir'] = NULL;
$arguments466['id'] = NULL;
$arguments466['lang'] = NULL;
$arguments466['style'] = NULL;
$arguments466['title'] = NULL;
$arguments466['accesskey'] = NULL;
$arguments466['tabindex'] = NULL;
$arguments466['onclick'] = NULL;
$arguments466['alt'] = NULL;
$arguments466['ismap'] = NULL;
$arguments466['longdesc'] = NULL;
$arguments466['usemap'] = NULL;
$arguments466['loading'] = NULL;
$arguments466['decoding'] = NULL;
$arguments466['src'] = '';
$arguments466['treatIdAsReference'] = false;
$arguments466['image'] = NULL;
$arguments466['crop'] = NULL;
$arguments466['cropVariant'] = 'default';
$arguments466['fileExtension'] = NULL;
$arguments466['width'] = NULL;
$arguments466['height'] = NULL;
$arguments466['minWidth'] = NULL;
$arguments466['minHeight'] = NULL;
$arguments466['maxWidth'] = NULL;
$arguments466['maxHeight'] = NULL;
$arguments466['absolute'] = false;
$arguments466['class'] = 'img-dummy img-fluid lazyload position-relative h-auto';
$array468 = array (
);$arguments466['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array468);
$arguments466['title'] = '';
$arguments466['alt'] = '';
$array469 = array (
);$arguments466['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthmaxWidthListDetail', $array469);

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '
					';
return $output465;
};
$arguments460 = array();
$arguments460['then'] = NULL;
$arguments460['else'] = NULL;
$arguments460['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array463);

$expression464 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments460['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression464(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments460['__thenClosure'] = $renderChildrenClosure461;

$output459 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output459 .= '
				';
return $output459;
};
$arguments457 = array();
$arguments457['if'] = NULL;

$output446 .= '';

$output446 .= '
			';
return $output446;
};
$arguments422 = array();
$arguments422['then'] = NULL;
$arguments422['else'] = NULL;
$arguments422['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array443 = array();
$array444 = array (
);$array443['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array444);

$expression445 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments422['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array443)
					),
					$renderingContext
				);
$arguments422['__thenClosure'] = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['additionalAttributes'] = NULL;
$arguments425['data'] = NULL;
$arguments425['aria'] = NULL;
$arguments425['class'] = NULL;
$arguments425['dir'] = NULL;
$arguments425['id'] = NULL;
$arguments425['lang'] = NULL;
$arguments425['style'] = NULL;
$arguments425['title'] = NULL;
$arguments425['accesskey'] = NULL;
$arguments425['tabindex'] = NULL;
$arguments425['onclick'] = NULL;
$arguments425['alt'] = NULL;
$arguments425['file'] = NULL;
$arguments425['additionalConfig'] = array (
);
$arguments425['width'] = NULL;
$arguments425['height'] = NULL;
$arguments425['cropVariant'] = 'default';
$arguments425['fileExtension'] = NULL;
$arguments425['loading'] = NULL;
$arguments425['decoding'] = NULL;
$arguments425['class'] = 'img-fluid lazyload h-auto';
$array427 = array (
);$arguments425['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array427);
$arguments425['cropVariant'] = 'newslistview';
$array428 = array (
);$arguments425['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array428);
$array429 = array (
);$arguments425['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array429);
$array430 = array (
);$arguments425['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array430);
// Rendering Array
$array431 = array();
$array431['itemprop'] = 'image';
$arguments425['additionalAttributes'] = $array431;

$output424 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output424 .= '
				';
return $output424;
};
$arguments422['__elseClosures'][] = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['aria'] = NULL;
$arguments439['class'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['alt'] = NULL;
$arguments439['ismap'] = NULL;
$arguments439['longdesc'] = NULL;
$arguments439['usemap'] = NULL;
$arguments439['loading'] = NULL;
$arguments439['decoding'] = NULL;
$arguments439['src'] = '';
$arguments439['treatIdAsReference'] = false;
$arguments439['image'] = NULL;
$arguments439['crop'] = NULL;
$arguments439['cropVariant'] = 'default';
$arguments439['fileExtension'] = NULL;
$arguments439['width'] = NULL;
$arguments439['height'] = NULL;
$arguments439['minWidth'] = NULL;
$arguments439['minHeight'] = NULL;
$arguments439['maxWidth'] = NULL;
$arguments439['maxHeight'] = NULL;
$arguments439['absolute'] = false;
$arguments439['class'] = 'img-dummy img-fluid lazyload position-relative h-auto';
$array441 = array (
);$arguments439['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array441);
$arguments439['title'] = '';
$arguments439['alt'] = '';
$array442 = array (
);$arguments439['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthmaxWidthListDetail', $array442);

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
					';
return $output438;
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array435 = array();
$array436 = array (
);$array435['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array436);

$expression437 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array435)
					),
					$renderingContext
				);
$arguments433['__thenClosure'] = $renderChildrenClosure434;

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output432 .= '
				';
return $output432;
};

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output420 .= '
		</span>
	</span>

	<span class="col-9 articletype-';
$array470 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array470)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['then'] = NULL;
$arguments471['else'] = NULL;
$arguments471['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array474);

$expression475 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments471['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments471['then'] = ' topnews';

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output420 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
		<!-- teaser -->
		<div class="lead bg-white text-dark" itemprop="description">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output498 = '';

$output498 .= '
						{newsItem.teaser -> f:format.crop(maxCharacters: \'';
$array499 = array (
);
$output498 .= $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array499);

$output498 .= '\', respectWordBoundaries:\'1) -> f:format.html()}
					';
return $output498;
};
$arguments496 = array();

$output495 .= '';

$output495 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$array510 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array510);
};
$arguments505 = array();
$arguments505['maxCharacters'] = NULL;
$arguments505['append'] = '&hellip;';
$arguments505['respectWordBoundaries'] = true;
$arguments505['respectHtml'] = true;
$array507 = array (
);$arguments505['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array507);
// Rendering Boolean node
// Rendering Array
$array508 = array();
$array508['0'] = 1;

$expression509 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments505['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression509(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array508)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);
};
$arguments503 = array();
$arguments503['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments503['data'] = NULL;
$arguments503['current'] = NULL;
$arguments503['currentValueKey'] = NULL;
$arguments503['table'] = '';

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '		
					';
return $output502;
};
$arguments500 = array();
$arguments500['if'] = NULL;

$output495 .= '';

$output495 .= '
				';
return $output495;
};
$arguments479 = array();
$arguments479['then'] = NULL;
$arguments479['else'] = NULL;
$arguments479['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array493);

$expression494 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments479['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression494(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array492)
					),
					$renderingContext
				);
$arguments479['__thenClosure'] = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
						{newsItem.teaser -> f:format.crop(maxCharacters: \'';
$array482 = array (
);
$output481 .= $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array482);

$output481 .= '\', respectWordBoundaries:\'1) -> f:format.html()}
					';
return $output481;
};
$arguments479['__elseClosures'][] = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$array491 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array491);
};
$arguments486 = array();
$arguments486['maxCharacters'] = NULL;
$arguments486['append'] = '&hellip;';
$arguments486['respectWordBoundaries'] = true;
$arguments486['respectHtml'] = true;
$array488 = array (
);$arguments486['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array488);
// Rendering Boolean node
// Rendering Array
$array489 = array();
$array489['0'] = 1;

$expression490 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array489)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);
};
$arguments484 = array();
$arguments484['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments484['data'] = NULL;
$arguments484['current'] = NULL;
$arguments484['currentValueKey'] = NULL;
$arguments484['table'] = '';

$output483 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output483 .= '		
					';
return $output483;
};

$output478 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output478 .= '
			';
return $output478;
};
$arguments476 = array();

$output420 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output420 .= '
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['key'] = NULL;
$arguments520['id'] = NULL;
$arguments520['default'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extensionName'] = NULL;
$arguments520['languageKey'] = NULL;
$arguments520['alternativeLanguageKeys'] = NULL;
$arguments520['key'] = 'more-link';

$output519 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output519 .= '
		';
return $output519;
};
$arguments514 = array();
$arguments514['additionalAttributes'] = NULL;
$arguments514['data'] = NULL;
$arguments514['aria'] = NULL;
$arguments514['class'] = NULL;
$arguments514['dir'] = NULL;
$arguments514['id'] = NULL;
$arguments514['lang'] = NULL;
$arguments514['style'] = NULL;
$arguments514['title'] = NULL;
$arguments514['accesskey'] = NULL;
$arguments514['tabindex'] = NULL;
$arguments514['onclick'] = NULL;
$arguments514['newsItem'] = NULL;
$arguments514['settings'] = array (
);
$arguments514['uriOnly'] = false;
$arguments514['configuration'] = array (
);
$arguments514['content'] = '';
$arguments514['section'] = NULL;
$array516 = array (
);$arguments514['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array516);
$array517 = array (
);$arguments514['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array517);
$arguments514['class'] = 'btn btn-primary btn-read-more';
$array518 = array (
);$arguments514['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array518);

$output513 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);
return $output513;
};
$arguments511 = array();

$output420 .= '';

$output420 .= '
	</span>
</span>
	';
return $output420;
};
$arguments415 = array();
$arguments415['additionalAttributes'] = NULL;
$arguments415['data'] = NULL;
$arguments415['aria'] = NULL;
$arguments415['class'] = NULL;
$arguments415['dir'] = NULL;
$arguments415['id'] = NULL;
$arguments415['lang'] = NULL;
$arguments415['style'] = NULL;
$arguments415['title'] = NULL;
$arguments415['accesskey'] = NULL;
$arguments415['tabindex'] = NULL;
$arguments415['onclick'] = NULL;
$arguments415['newsItem'] = NULL;
$arguments415['settings'] = array (
);
$arguments415['uriOnly'] = false;
$arguments415['configuration'] = array (
);
$arguments415['content'] = '';
$arguments415['section'] = NULL;
$array417 = array (
);$arguments415['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array417);
$array418 = array (
);$arguments415['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array418);
$array419 = array (
);$arguments415['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array419);
$arguments415['class'] = 'd-block text-decoration-none';

$output409 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output409 .= '
</li>
';
return $output409;
};
$arguments404 = array();
$arguments404['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array407);
$array406['1'] = ' == 2';

$expression408 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments404['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array406)
					),
					$renderingContext
				);

$output328 .= '';

$output328 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
	<li class="list-group-item pl-0 pb-10 mb-20">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['section'] = NULL;
$arguments525['partial'] = NULL;
$arguments525['delegate'] = NULL;
$arguments525['renderable'] = NULL;
$arguments525['arguments'] = array (
);
$arguments525['optional'] = false;
$arguments525['default'] = NULL;
$arguments525['contentAs'] = NULL;
$arguments525['debug'] = true;
$arguments525['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array527 = array();
$array528 = array (
);$array527['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array528);
$array529 = array (
);$array527['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array529);
$arguments525['arguments'] = $array527;

$output524 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output524 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['additionalAttributes'] = NULL;
$arguments530['data'] = NULL;
$arguments530['aria'] = NULL;
$arguments530['class'] = NULL;
$arguments530['dir'] = NULL;
$arguments530['id'] = NULL;
$arguments530['lang'] = NULL;
$arguments530['style'] = NULL;
$arguments530['title'] = NULL;
$arguments530['accesskey'] = NULL;
$arguments530['tabindex'] = NULL;
$arguments530['onclick'] = NULL;
$arguments530['newsItem'] = NULL;
$arguments530['settings'] = array (
);
$arguments530['uriOnly'] = false;
$arguments530['configuration'] = array (
);
$arguments530['content'] = '';
$arguments530['section'] = NULL;
$array532 = array (
);$arguments530['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array532);
$array533 = array (
);$arguments530['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array533);
$array534 = array (
);$arguments530['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array534);
$arguments530['class'] = 'text-decoration-none';

$output524 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output524 .= '
			<h3 itemprop="headline">			
					';
$array535 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array535)]);

$output524 .= '			
			</h3>
		<div class="row">
		<div class="col-md-3">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['additionalAttributes'] = NULL;
$arguments571['data'] = NULL;
$arguments571['aria'] = NULL;
$arguments571['class'] = NULL;
$arguments571['dir'] = NULL;
$arguments571['id'] = NULL;
$arguments571['lang'] = NULL;
$arguments571['style'] = NULL;
$arguments571['title'] = NULL;
$arguments571['accesskey'] = NULL;
$arguments571['tabindex'] = NULL;
$arguments571['onclick'] = NULL;
$arguments571['alt'] = NULL;
$arguments571['file'] = NULL;
$arguments571['additionalConfig'] = array (
);
$arguments571['width'] = NULL;
$arguments571['height'] = NULL;
$arguments571['cropVariant'] = 'default';
$arguments571['fileExtension'] = NULL;
$arguments571['loading'] = NULL;
$arguments571['decoding'] = NULL;
$arguments571['class'] = 'img-fluid lazyload position-relative h-auto';
$array573 = array (
);$arguments571['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array573);
$arguments571['cropVariant'] = 'newslistview';
$array574 = array (
);$arguments571['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array574);
$array575 = array (
);$arguments571['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array575);
$array576 = array (
);$arguments571['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array576);

$output570 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);

$output570 .= '
				';
return $output570;
};
$arguments568 = array();

$output567 .= '';

$output567 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
$output579 = '';

$output579 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['additionalAttributes'] = NULL;
$arguments586['data'] = NULL;
$arguments586['aria'] = NULL;
$arguments586['class'] = NULL;
$arguments586['dir'] = NULL;
$arguments586['id'] = NULL;
$arguments586['lang'] = NULL;
$arguments586['style'] = NULL;
$arguments586['title'] = NULL;
$arguments586['accesskey'] = NULL;
$arguments586['tabindex'] = NULL;
$arguments586['onclick'] = NULL;
$arguments586['alt'] = NULL;
$arguments586['ismap'] = NULL;
$arguments586['longdesc'] = NULL;
$arguments586['usemap'] = NULL;
$arguments586['loading'] = NULL;
$arguments586['decoding'] = NULL;
$arguments586['src'] = '';
$arguments586['treatIdAsReference'] = false;
$arguments586['image'] = NULL;
$arguments586['crop'] = NULL;
$arguments586['cropVariant'] = 'default';
$arguments586['fileExtension'] = NULL;
$arguments586['width'] = NULL;
$arguments586['height'] = NULL;
$arguments586['minWidth'] = NULL;
$arguments586['minHeight'] = NULL;
$arguments586['maxWidth'] = NULL;
$arguments586['maxHeight'] = NULL;
$arguments586['absolute'] = false;
$arguments586['class'] = 'img-dummy img-fluid';
$array588 = array (
);$arguments586['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array588);
$arguments586['title'] = '';
$arguments586['alt'] = '';
$array589 = array (
);$arguments586['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading', $array589);
$array590 = array (
);$arguments586['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array590);
$array591 = array (
);$arguments586['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array591);

$output585 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
						';
return $output585;
};
$arguments580 = array();
$arguments580['then'] = NULL;
$arguments580['else'] = NULL;
$arguments580['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array582 = array();
$array583 = array (
);$array582['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array583);

$expression584 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments580['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression584(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array582)
					),
					$renderingContext
				);
$arguments580['__thenClosure'] = $renderChildrenClosure581;

$output579 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output579 .= '
					';
return $output579;
};
$arguments577 = array();
$arguments577['if'] = NULL;

$output567 .= '';

$output567 .= '
				';
return $output567;
};
$arguments542 = array();
$arguments542['then'] = NULL;
$arguments542['else'] = NULL;
$arguments542['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array565);

$expression566 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments542['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array564)
					),
					$renderingContext
				);
$arguments542['__thenClosure'] = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['additionalAttributes'] = NULL;
$arguments545['data'] = NULL;
$arguments545['aria'] = NULL;
$arguments545['class'] = NULL;
$arguments545['dir'] = NULL;
$arguments545['id'] = NULL;
$arguments545['lang'] = NULL;
$arguments545['style'] = NULL;
$arguments545['title'] = NULL;
$arguments545['accesskey'] = NULL;
$arguments545['tabindex'] = NULL;
$arguments545['onclick'] = NULL;
$arguments545['alt'] = NULL;
$arguments545['file'] = NULL;
$arguments545['additionalConfig'] = array (
);
$arguments545['width'] = NULL;
$arguments545['height'] = NULL;
$arguments545['cropVariant'] = 'default';
$arguments545['fileExtension'] = NULL;
$arguments545['loading'] = NULL;
$arguments545['decoding'] = NULL;
$arguments545['class'] = 'img-fluid lazyload position-relative h-auto';
$array547 = array (
);$arguments545['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array547);
$arguments545['cropVariant'] = 'newslistview';
$array548 = array (
);$arguments545['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array548);
$array549 = array (
);$arguments545['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array549);
$array550 = array (
);$arguments545['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array550);

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
				';
return $output544;
};
$arguments542['__elseClosures'][] = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output557 = '';

$output557 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['additionalAttributes'] = NULL;
$arguments558['data'] = NULL;
$arguments558['aria'] = NULL;
$arguments558['class'] = NULL;
$arguments558['dir'] = NULL;
$arguments558['id'] = NULL;
$arguments558['lang'] = NULL;
$arguments558['style'] = NULL;
$arguments558['title'] = NULL;
$arguments558['accesskey'] = NULL;
$arguments558['tabindex'] = NULL;
$arguments558['onclick'] = NULL;
$arguments558['alt'] = NULL;
$arguments558['ismap'] = NULL;
$arguments558['longdesc'] = NULL;
$arguments558['usemap'] = NULL;
$arguments558['loading'] = NULL;
$arguments558['decoding'] = NULL;
$arguments558['src'] = '';
$arguments558['treatIdAsReference'] = false;
$arguments558['image'] = NULL;
$arguments558['crop'] = NULL;
$arguments558['cropVariant'] = 'default';
$arguments558['fileExtension'] = NULL;
$arguments558['width'] = NULL;
$arguments558['height'] = NULL;
$arguments558['minWidth'] = NULL;
$arguments558['minHeight'] = NULL;
$arguments558['maxWidth'] = NULL;
$arguments558['maxHeight'] = NULL;
$arguments558['absolute'] = false;
$arguments558['class'] = 'img-dummy img-fluid';
$array560 = array (
);$arguments558['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array560);
$arguments558['title'] = '';
$arguments558['alt'] = '';
$array561 = array (
);$arguments558['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading', $array561);
$array562 = array (
);$arguments558['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array562);
$array563 = array (
);$arguments558['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array563);

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output557 .= '
						';
return $output557;
};
$arguments552 = array();
$arguments552['then'] = NULL;
$arguments552['else'] = NULL;
$arguments552['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array554 = array();
$array555 = array (
);$array554['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array555);

$expression556 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments552['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression556(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array554)
					),
					$renderingContext
				);
$arguments552['__thenClosure'] = $renderChildrenClosure553;

$output551 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '
					';
return $output551;
};

$output541 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output541 .= '
		</div>
	
		<div class="col-md-9 articletype-';
$array592 = array (
);
$output541 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array592)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['then'] = NULL;
$arguments593['else'] = NULL;
$arguments593['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array595 = array();
$array596 = array (
);$array595['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array596);

$expression597 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments593['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression597(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array595)
					),
					$renderingContext
				);
$arguments593['then'] = ' topnews';

$output541 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output541 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
			<!-- teaser -->
			<div class="lead" itemprop="description">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
$output600 = '';

$output600 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
$output624 = '';

$output624 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$array635 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array635);
};
$arguments630 = array();
$arguments630['maxCharacters'] = NULL;
$arguments630['append'] = '&hellip;';
$arguments630['respectWordBoundaries'] = true;
$arguments630['respectHtml'] = true;
$array632 = array (
);$arguments630['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array632);
// Rendering Boolean node
// Rendering Array
$array633 = array();
$array633['0'] = 1;

$expression634 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments630['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression634(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array633)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);
};
$arguments628 = array();
$arguments628['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments628['data'] = NULL;
$arguments628['current'] = NULL;
$arguments628['currentValueKey'] = NULL;
$arguments628['table'] = '';

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output627 .= '
						';
return $output627;
};
$arguments625 = array();

$output624 .= '';

$output624 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
$array646 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array646);
};
$arguments641 = array();
$arguments641['maxCharacters'] = NULL;
$arguments641['append'] = '&hellip;';
$arguments641['respectWordBoundaries'] = true;
$arguments641['respectHtml'] = true;
$array643 = array (
);$arguments641['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array643);
// Rendering Boolean node
// Rendering Array
$array644 = array();
$array644['0'] = 1;

$expression645 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments641['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression645(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array644)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);
};
$arguments639 = array();
$arguments639['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments639['data'] = NULL;
$arguments639['current'] = NULL;
$arguments639['currentValueKey'] = NULL;
$arguments639['table'] = '';

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output638 .= '
						';
return $output638;
};
$arguments636 = array();
$arguments636['if'] = NULL;

$output624 .= '';

$output624 .= '
					';
return $output624;
};
$arguments601 = array();
$arguments601['then'] = NULL;
$arguments601['else'] = NULL;
$arguments601['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array621 = array();
$array622 = array (
);$array621['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array622);

$expression623 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments601['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression623(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array621)
					),
					$renderingContext
				);
$arguments601['__thenClosure'] = function() use ($renderingContext, $self) {
$output603 = '';

$output603 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$array611 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array611);
};
$arguments606 = array();
$arguments606['maxCharacters'] = NULL;
$arguments606['append'] = '&hellip;';
$arguments606['respectWordBoundaries'] = true;
$arguments606['respectHtml'] = true;
$array608 = array (
);$arguments606['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array608);
// Rendering Boolean node
// Rendering Array
$array609 = array();
$array609['0'] = 1;

$expression610 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments606['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression610(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array609)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);
};
$arguments604 = array();
$arguments604['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments604['data'] = NULL;
$arguments604['current'] = NULL;
$arguments604['currentValueKey'] = NULL;
$arguments604['table'] = '';

$output603 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output603 .= '
						';
return $output603;
};
$arguments601['__elseClosures'][] = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
$array620 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array620);
};
$arguments615 = array();
$arguments615['maxCharacters'] = NULL;
$arguments615['append'] = '&hellip;';
$arguments615['respectWordBoundaries'] = true;
$arguments615['respectHtml'] = true;
$array617 = array (
);$arguments615['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array617);
// Rendering Boolean node
// Rendering Array
$array618 = array();
$array618['0'] = 1;

$expression619 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments615['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression619(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array618)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);
};
$arguments613 = array();
$arguments613['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments613['data'] = NULL;
$arguments613['current'] = NULL;
$arguments613['currentValueKey'] = NULL;
$arguments613['table'] = '';

$output612 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext);

$output612 .= '
						';
return $output612;
};

$output600 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext);

$output600 .= '
				';
return $output600;
};
$arguments598 = array();

$output541 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output541 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$output649 = '';

$output649 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
$output655 = '';

$output655 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments656 = array();
$arguments656['key'] = NULL;
$arguments656['id'] = NULL;
$arguments656['default'] = NULL;
$arguments656['arguments'] = NULL;
$arguments656['extensionName'] = NULL;
$arguments656['languageKey'] = NULL;
$arguments656['alternativeLanguageKeys'] = NULL;
$arguments656['key'] = 'more-link';

$output655 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments656, $renderChildrenClosure657, $renderingContext);

$output655 .= '
			';
return $output655;
};
$arguments650 = array();
$arguments650['additionalAttributes'] = NULL;
$arguments650['data'] = NULL;
$arguments650['aria'] = NULL;
$arguments650['class'] = NULL;
$arguments650['dir'] = NULL;
$arguments650['id'] = NULL;
$arguments650['lang'] = NULL;
$arguments650['style'] = NULL;
$arguments650['title'] = NULL;
$arguments650['accesskey'] = NULL;
$arguments650['tabindex'] = NULL;
$arguments650['onclick'] = NULL;
$arguments650['newsItem'] = NULL;
$arguments650['settings'] = array (
);
$arguments650['uriOnly'] = false;
$arguments650['configuration'] = array (
);
$arguments650['content'] = '';
$arguments650['section'] = NULL;
$array652 = array (
);$arguments650['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array652);
$array653 = array (
);$arguments650['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array653);
$arguments650['class'] = 'btn btn-primary btn-read-more';
$array654 = array (
);$arguments650['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array654);

$output649 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments650, $renderChildrenClosure651, $renderingContext);
return $output649;
};
$arguments647 = array();

$output541 .= '';

$output541 .= '
		</div>
	</div>
	';
return $output541;
};
$arguments536 = array();
$arguments536['additionalAttributes'] = NULL;
$arguments536['data'] = NULL;
$arguments536['aria'] = NULL;
$arguments536['class'] = NULL;
$arguments536['dir'] = NULL;
$arguments536['id'] = NULL;
$arguments536['lang'] = NULL;
$arguments536['style'] = NULL;
$arguments536['title'] = NULL;
$arguments536['accesskey'] = NULL;
$arguments536['tabindex'] = NULL;
$arguments536['onclick'] = NULL;
$arguments536['newsItem'] = NULL;
$arguments536['settings'] = array (
);
$arguments536['uriOnly'] = false;
$arguments536['configuration'] = array (
);
$arguments536['content'] = '';
$arguments536['section'] = NULL;
$array538 = array (
);$arguments536['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array538);
$array539 = array (
);$arguments536['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array539);
$array540 = array (
);$arguments536['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array540);

$output524 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output524 .= '
	</li>
';
return $output524;
};
$arguments522 = array();
$arguments522['if'] = NULL;

$output328 .= '';

$output328 .= '
';
return $output328;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array326);
$array325['1'] = ' == 1';

$expression327 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
		<div class="card-news col position-relative">					
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
			
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['aria'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['alt'] = NULL;
$arguments41['file'] = NULL;
$arguments41['additionalConfig'] = array (
);
$arguments41['width'] = NULL;
$arguments41['height'] = NULL;
$arguments41['cropVariant'] = 'default';
$arguments41['fileExtension'] = NULL;
$arguments41['loading'] = NULL;
$arguments41['decoding'] = NULL;
$arguments41['class'] = 'lazyload img-fluid position-relative h-100';
$array43 = array (
);$arguments41['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array43);
$arguments41['cropVariant'] = 'newscardlist';
$array44 = array (
);$arguments41['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array44);
$array45 = array (
);$arguments41['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array45);
$array46 = array (
);$arguments41['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthCard', $array46);
// Rendering Array
$array47 = array();
$array47['itemprop'] = 'image';
$arguments41['additionalAttributes'] = $array47;

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
		';
return $output40;
};
$arguments38 = array();

$output37 .= '';

$output37 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['aria'] = NULL;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['alt'] = NULL;
$arguments57['ismap'] = NULL;
$arguments57['longdesc'] = NULL;
$arguments57['usemap'] = NULL;
$arguments57['loading'] = NULL;
$arguments57['decoding'] = NULL;
$arguments57['src'] = '';
$arguments57['treatIdAsReference'] = false;
$arguments57['image'] = NULL;
$arguments57['crop'] = NULL;
$arguments57['cropVariant'] = 'default';
$arguments57['fileExtension'] = NULL;
$arguments57['width'] = NULL;
$arguments57['height'] = NULL;
$arguments57['minWidth'] = NULL;
$arguments57['minHeight'] = NULL;
$arguments57['maxWidth'] = NULL;
$arguments57['maxHeight'] = NULL;
$arguments57['absolute'] = false;
$arguments57['class'] = 'img-dummy img-responsive';
$array59 = array (
);$arguments57['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array59);
$arguments57['title'] = '';
$arguments57['alt'] = '';
$array60 = array (
);$arguments57['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array60);
$array61 = array (
);$arguments57['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array61);

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
			';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
		';
return $output50;
};
$arguments48 = array();
$arguments48['if'] = NULL;

$output37 .= '';

$output37 .= '
	';
return $output37;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
			
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['alt'] = NULL;
$arguments15['file'] = NULL;
$arguments15['additionalConfig'] = array (
);
$arguments15['width'] = NULL;
$arguments15['height'] = NULL;
$arguments15['cropVariant'] = 'default';
$arguments15['fileExtension'] = NULL;
$arguments15['loading'] = NULL;
$arguments15['decoding'] = NULL;
$arguments15['class'] = 'lazyload img-fluid position-relative h-100';
$array17 = array (
);$arguments15['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array17);
$arguments15['cropVariant'] = 'newscardlist';
$array18 = array (
);$arguments15['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array18);
$array19 = array (
);$arguments15['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array19);
$array20 = array (
);$arguments15['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthCard', $array20);
// Rendering Array
$array21 = array();
$array21['itemprop'] = 'image';
$arguments15['additionalAttributes'] = $array21;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
		';
return $output14;
};
$arguments12['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['aria'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['alt'] = NULL;
$arguments29['ismap'] = NULL;
$arguments29['longdesc'] = NULL;
$arguments29['usemap'] = NULL;
$arguments29['loading'] = NULL;
$arguments29['decoding'] = NULL;
$arguments29['src'] = '';
$arguments29['treatIdAsReference'] = false;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['cropVariant'] = 'default';
$arguments29['fileExtension'] = NULL;
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['absolute'] = false;
$arguments29['class'] = 'img-dummy img-responsive';
$array31 = array (
);$arguments29['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array31);
$arguments29['title'] = '';
$arguments29['alt'] = '';
$array32 = array (
);$arguments29['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array32);
$array33 = array (
);$arguments29['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array33);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
			';
return $output28;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = $renderChildrenClosure24;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
		';
return $output22;
};

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
';
return $output11;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['aria'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['newsItem'] = NULL;
$arguments6['settings'] = array (
);
$arguments6['uriOnly'] = false;
$arguments6['configuration'] = array (
);
$arguments6['content'] = '';
$arguments6['section'] = NULL;
$array8 = array (
);$arguments6['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array8);
$array9 = array (
);$arguments6['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array9);
$array10 = array (
);$arguments6['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array10);

$output5 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
<div class="news-overlay bg-rgba-coal-50 articletype-';
$array62 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array62)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['then'] = ' topnews';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output5 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
	<h5 itemprop="headline" class="text-white h4 w-75">
			';
$array74 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array74)]);

$output73 .= '
	</h5>
';
return $output73;
};
$arguments68 = array();
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['aria'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['newsItem'] = NULL;
$arguments68['settings'] = array (
);
$arguments68['uriOnly'] = false;
$arguments68['configuration'] = array (
);
$arguments68['content'] = '';
$arguments68['section'] = NULL;
$array70 = array (
);$arguments68['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array70);
$array71 = array (
);$arguments68['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array71);
$array72 = array (
);$arguments68['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array72);
$arguments68['class'] = 'text-decoration-none';

$output5 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output5 .= '
	</div>
</div>

	';
return $output5;
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
<li class="list-group-item pl-0 pb-30 pb-lg-10 mb-20">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['section'] = NULL;
$arguments76['partial'] = NULL;
$arguments76['delegate'] = NULL;
$arguments76['renderable'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['optional'] = false;
$arguments76['default'] = NULL;
$arguments76['contentAs'] = NULL;
$arguments76['debug'] = true;
$arguments76['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array79);
$array80 = array (
);$array78['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array80);
$arguments76['arguments'] = $array78;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '	
		<h3 itemprop="headline">			
				';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array87)]);

$output86 .= '			
		</h3>
<span class="row">
	<span class="col-3 pt-5 pe-0">
		<span class="ratio ratio-4x3 h-auto d-block">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['aria'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['alt'] = NULL;
$arguments116['file'] = NULL;
$arguments116['additionalConfig'] = array (
);
$arguments116['width'] = NULL;
$arguments116['height'] = NULL;
$arguments116['cropVariant'] = 'default';
$arguments116['fileExtension'] = NULL;
$arguments116['loading'] = NULL;
$arguments116['decoding'] = NULL;
$arguments116['class'] = 'img-fluid lazyload h-auto';
$array118 = array (
);$arguments116['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array118);
$arguments116['cropVariant'] = 'newslistview';
$array119 = array (
);$arguments116['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array119);
$array120 = array (
);$arguments116['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array120);
$array121 = array (
);$arguments116['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array121);
// Rendering Array
$array122 = array();
$array122['itemprop'] = 'image';
$arguments116['additionalAttributes'] = $array122;

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
				';
return $output115;
};
$arguments113 = array();

$output112 .= '';

$output112 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['aria'] = NULL;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['alt'] = NULL;
$arguments132['ismap'] = NULL;
$arguments132['longdesc'] = NULL;
$arguments132['usemap'] = NULL;
$arguments132['loading'] = NULL;
$arguments132['decoding'] = NULL;
$arguments132['src'] = '';
$arguments132['treatIdAsReference'] = false;
$arguments132['image'] = NULL;
$arguments132['crop'] = NULL;
$arguments132['cropVariant'] = 'default';
$arguments132['fileExtension'] = NULL;
$arguments132['width'] = NULL;
$arguments132['height'] = NULL;
$arguments132['minWidth'] = NULL;
$arguments132['minHeight'] = NULL;
$arguments132['maxWidth'] = NULL;
$arguments132['maxHeight'] = NULL;
$arguments132['absolute'] = false;
$arguments132['class'] = 'img-dummy img-fluid lazyload position-relative h-auto';
$array134 = array (
);$arguments132['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array134);
$arguments132['title'] = '';
$arguments132['alt'] = '';
$array135 = array (
);$arguments132['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthmaxWidthListDetail', $array135);

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
					';
return $output131;
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments126['__thenClosure'] = $renderChildrenClosure127;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
				';
return $output125;
};
$arguments123 = array();
$arguments123['if'] = NULL;

$output112 .= '';

$output112 .= '
			';
return $output112;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['aria'] = NULL;
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['alt'] = NULL;
$arguments91['file'] = NULL;
$arguments91['additionalConfig'] = array (
);
$arguments91['width'] = NULL;
$arguments91['height'] = NULL;
$arguments91['cropVariant'] = 'default';
$arguments91['fileExtension'] = NULL;
$arguments91['loading'] = NULL;
$arguments91['decoding'] = NULL;
$arguments91['class'] = 'img-fluid lazyload h-auto';
$array93 = array (
);$arguments91['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array93);
$arguments91['cropVariant'] = 'newslistview';
$array94 = array (
);$arguments91['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array94);
$array95 = array (
);$arguments91['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array95);
$array96 = array (
);$arguments91['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array96);
// Rendering Array
$array97 = array();
$array97['itemprop'] = 'image';
$arguments91['additionalAttributes'] = $array97;

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
				';
return $output90;
};
$arguments88['__elseClosures'][] = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['aria'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['alt'] = NULL;
$arguments105['ismap'] = NULL;
$arguments105['longdesc'] = NULL;
$arguments105['usemap'] = NULL;
$arguments105['loading'] = NULL;
$arguments105['decoding'] = NULL;
$arguments105['src'] = '';
$arguments105['treatIdAsReference'] = false;
$arguments105['image'] = NULL;
$arguments105['crop'] = NULL;
$arguments105['cropVariant'] = 'default';
$arguments105['fileExtension'] = NULL;
$arguments105['width'] = NULL;
$arguments105['height'] = NULL;
$arguments105['minWidth'] = NULL;
$arguments105['minHeight'] = NULL;
$arguments105['maxWidth'] = NULL;
$arguments105['maxHeight'] = NULL;
$arguments105['absolute'] = false;
$arguments105['class'] = 'img-dummy img-fluid lazyload position-relative h-auto';
$array107 = array (
);$arguments105['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array107);
$arguments105['title'] = '';
$arguments105['alt'] = '';
$array108 = array (
);$arguments105['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthmaxWidthListDetail', $array108);

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
					';
return $output104;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = $renderChildrenClosure100;

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
				';
return $output98;
};

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output86 .= '
		</span>
	</span>

	<span class="col-9 articletype-';
$array136 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array136)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array140);

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['then'] = ' topnews';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output86 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
		<!-- teaser -->
		<div class="lead bg-white text-dark" itemprop="description">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
						{newsItem.teaser -> f:format.crop(maxCharacters: \'';
$array165 = array (
);
$output164 .= $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array165);

$output164 .= '\', respectWordBoundaries:\'1) -> f:format.html()}
					';
return $output164;
};
$arguments162 = array();

$output161 .= '';

$output161 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array176);
};
$arguments171 = array();
$arguments171['maxCharacters'] = NULL;
$arguments171['append'] = '&hellip;';
$arguments171['respectWordBoundaries'] = true;
$arguments171['respectHtml'] = true;
$array173 = array (
);$arguments171['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array173);
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array174['0'] = 1;

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments171['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);
};
$arguments169 = array();
$arguments169['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments169['data'] = NULL;
$arguments169['current'] = NULL;
$arguments169['currentValueKey'] = NULL;
$arguments169['table'] = '';

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '		
					';
return $output168;
};
$arguments166 = array();
$arguments166['if'] = NULL;

$output161 .= '';

$output161 .= '
				';
return $output161;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array159);

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments145['__thenClosure'] = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
						{newsItem.teaser -> f:format.crop(maxCharacters: \'';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array148);

$output147 .= '\', respectWordBoundaries:\'1) -> f:format.html()}
					';
return $output147;
};
$arguments145['__elseClosures'][] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array157 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array157);
};
$arguments152 = array();
$arguments152['maxCharacters'] = NULL;
$arguments152['append'] = '&hellip;';
$arguments152['respectWordBoundaries'] = true;
$arguments152['respectHtml'] = true;
$array154 = array (
);$arguments152['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array154);
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array155['0'] = 1;

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
};
$arguments150 = array();
$arguments150['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments150['data'] = NULL;
$arguments150['current'] = NULL;
$arguments150['currentValueKey'] = NULL;
$arguments150['table'] = '';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '		
					';
return $output149;
};

$output144 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
			';
return $output144;
};
$arguments142 = array();

$output86 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output86 .= '
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'more-link';

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
		';
return $output185;
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['aria'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['newsItem'] = NULL;
$arguments180['settings'] = array (
);
$arguments180['uriOnly'] = false;
$arguments180['configuration'] = array (
);
$arguments180['content'] = '';
$arguments180['section'] = NULL;
$array182 = array (
);$arguments180['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array182);
$array183 = array (
);$arguments180['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array183);
$arguments180['class'] = 'btn btn-primary btn-read-more';
$array184 = array (
);$arguments180['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array184);

$output179 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
return $output179;
};
$arguments177 = array();

$output86 .= '';

$output86 .= '
	</span>
</span>
	';
return $output86;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['aria'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['newsItem'] = NULL;
$arguments81['settings'] = array (
);
$arguments81['uriOnly'] = false;
$arguments81['configuration'] = array (
);
$arguments81['content'] = '';
$arguments81['section'] = NULL;
$array83 = array (
);$arguments81['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array83);
$array84 = array (
);$arguments81['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array84);
$array85 = array (
);$arguments81['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array85);
$arguments81['class'] = 'd-block text-decoration-none';

$output75 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output75 .= '
</li>
';
return $output75;
};
$arguments3['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array189);
$array188['1'] = ' == 2';

$expression190 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
	<li class="list-group-item pl-0 pb-10 mb-20">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['section'] = NULL;
$arguments192['partial'] = NULL;
$arguments192['delegate'] = NULL;
$arguments192['renderable'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['optional'] = false;
$arguments192['default'] = NULL;
$arguments192['contentAs'] = NULL;
$arguments192['debug'] = true;
$arguments192['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array195);
$array196 = array (
);$array194['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array196);
$arguments192['arguments'] = $array194;

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['additionalAttributes'] = NULL;
$arguments197['data'] = NULL;
$arguments197['aria'] = NULL;
$arguments197['class'] = NULL;
$arguments197['dir'] = NULL;
$arguments197['id'] = NULL;
$arguments197['lang'] = NULL;
$arguments197['style'] = NULL;
$arguments197['title'] = NULL;
$arguments197['accesskey'] = NULL;
$arguments197['tabindex'] = NULL;
$arguments197['onclick'] = NULL;
$arguments197['newsItem'] = NULL;
$arguments197['settings'] = array (
);
$arguments197['uriOnly'] = false;
$arguments197['configuration'] = array (
);
$arguments197['content'] = '';
$arguments197['section'] = NULL;
$array199 = array (
);$arguments197['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array199);
$array200 = array (
);$arguments197['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array200);
$array201 = array (
);$arguments197['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array201);
$arguments197['class'] = 'text-decoration-none';

$output191 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output191 .= '
			<h3 itemprop="headline">			
					';
$array202 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array202)]);

$output191 .= '			
			</h3>
		<div class="row">
		<div class="col-md-3">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['additionalAttributes'] = NULL;
$arguments238['data'] = NULL;
$arguments238['aria'] = NULL;
$arguments238['class'] = NULL;
$arguments238['dir'] = NULL;
$arguments238['id'] = NULL;
$arguments238['lang'] = NULL;
$arguments238['style'] = NULL;
$arguments238['title'] = NULL;
$arguments238['accesskey'] = NULL;
$arguments238['tabindex'] = NULL;
$arguments238['onclick'] = NULL;
$arguments238['alt'] = NULL;
$arguments238['file'] = NULL;
$arguments238['additionalConfig'] = array (
);
$arguments238['width'] = NULL;
$arguments238['height'] = NULL;
$arguments238['cropVariant'] = 'default';
$arguments238['fileExtension'] = NULL;
$arguments238['loading'] = NULL;
$arguments238['decoding'] = NULL;
$arguments238['class'] = 'img-fluid lazyload position-relative h-auto';
$array240 = array (
);$arguments238['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array240);
$arguments238['cropVariant'] = 'newslistview';
$array241 = array (
);$arguments238['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array241);
$array242 = array (
);$arguments238['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array242);
$array243 = array (
);$arguments238['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array243);

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '
				';
return $output237;
};
$arguments235 = array();

$output234 .= '';

$output234 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['additionalAttributes'] = NULL;
$arguments253['data'] = NULL;
$arguments253['aria'] = NULL;
$arguments253['class'] = NULL;
$arguments253['dir'] = NULL;
$arguments253['id'] = NULL;
$arguments253['lang'] = NULL;
$arguments253['style'] = NULL;
$arguments253['title'] = NULL;
$arguments253['accesskey'] = NULL;
$arguments253['tabindex'] = NULL;
$arguments253['onclick'] = NULL;
$arguments253['alt'] = NULL;
$arguments253['ismap'] = NULL;
$arguments253['longdesc'] = NULL;
$arguments253['usemap'] = NULL;
$arguments253['loading'] = NULL;
$arguments253['decoding'] = NULL;
$arguments253['src'] = '';
$arguments253['treatIdAsReference'] = false;
$arguments253['image'] = NULL;
$arguments253['crop'] = NULL;
$arguments253['cropVariant'] = 'default';
$arguments253['fileExtension'] = NULL;
$arguments253['width'] = NULL;
$arguments253['height'] = NULL;
$arguments253['minWidth'] = NULL;
$arguments253['minHeight'] = NULL;
$arguments253['maxWidth'] = NULL;
$arguments253['maxHeight'] = NULL;
$arguments253['absolute'] = false;
$arguments253['class'] = 'img-dummy img-fluid';
$array255 = array (
);$arguments253['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array255);
$arguments253['title'] = '';
$arguments253['alt'] = '';
$array256 = array (
);$arguments253['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading', $array256);
$array257 = array (
);$arguments253['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array257);
$array258 = array (
);$arguments253['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array258);

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
						';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
					';
return $output246;
};
$arguments244 = array();
$arguments244['if'] = NULL;

$output234 .= '';

$output234 .= '
				';
return $output234;
};
$arguments209 = array();
$arguments209['then'] = NULL;
$arguments209['else'] = NULL;
$arguments209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array232);

$expression233 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments209['__thenClosure'] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['aria'] = NULL;
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['alt'] = NULL;
$arguments212['file'] = NULL;
$arguments212['additionalConfig'] = array (
);
$arguments212['width'] = NULL;
$arguments212['height'] = NULL;
$arguments212['cropVariant'] = 'default';
$arguments212['fileExtension'] = NULL;
$arguments212['loading'] = NULL;
$arguments212['decoding'] = NULL;
$arguments212['class'] = 'img-fluid lazyload position-relative h-auto';
$array214 = array (
);$arguments212['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array214);
$arguments212['cropVariant'] = 'newslistview';
$array215 = array (
);$arguments212['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array215);
$array216 = array (
);$arguments212['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array216);
$array217 = array (
);$arguments212['width'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidthListDetail', $array217);

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
				';
return $output211;
};
$arguments209['__elseClosures'][] = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['additionalAttributes'] = NULL;
$arguments225['data'] = NULL;
$arguments225['aria'] = NULL;
$arguments225['class'] = NULL;
$arguments225['dir'] = NULL;
$arguments225['id'] = NULL;
$arguments225['lang'] = NULL;
$arguments225['style'] = NULL;
$arguments225['title'] = NULL;
$arguments225['accesskey'] = NULL;
$arguments225['tabindex'] = NULL;
$arguments225['onclick'] = NULL;
$arguments225['alt'] = NULL;
$arguments225['ismap'] = NULL;
$arguments225['longdesc'] = NULL;
$arguments225['usemap'] = NULL;
$arguments225['loading'] = NULL;
$arguments225['decoding'] = NULL;
$arguments225['src'] = '';
$arguments225['treatIdAsReference'] = false;
$arguments225['image'] = NULL;
$arguments225['crop'] = NULL;
$arguments225['cropVariant'] = 'default';
$arguments225['fileExtension'] = NULL;
$arguments225['width'] = NULL;
$arguments225['height'] = NULL;
$arguments225['minWidth'] = NULL;
$arguments225['minHeight'] = NULL;
$arguments225['maxWidth'] = NULL;
$arguments225['maxHeight'] = NULL;
$arguments225['absolute'] = false;
$arguments225['class'] = 'img-dummy img-fluid';
$array227 = array (
);$arguments225['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array227);
$arguments225['title'] = '';
$arguments225['alt'] = '';
$array228 = array (
);$arguments225['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading', $array228);
$array229 = array (
);$arguments225['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array229);
$array230 = array (
);$arguments225['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array230);

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '
						';
return $output224;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array222);

$expression223 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = $renderChildrenClosure220;

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
					';
return $output218;
};

$output208 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
		</div>
	
		<div class="col-md-9 articletype-';
$array259 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array259)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array263);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['then'] = ' topnews';

$output208 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output208 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
			<!-- teaser -->
			<div class="lead" itemprop="description">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$array302 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array302);
};
$arguments297 = array();
$arguments297['maxCharacters'] = NULL;
$arguments297['append'] = '&hellip;';
$arguments297['respectWordBoundaries'] = true;
$arguments297['respectHtml'] = true;
$array299 = array (
);$arguments297['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array299);
// Rendering Boolean node
// Rendering Array
$array300 = array();
$array300['0'] = 1;

$expression301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments297['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array300)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);
};
$arguments295 = array();
$arguments295['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments295['data'] = NULL;
$arguments295['current'] = NULL;
$arguments295['currentValueKey'] = NULL;
$arguments295['table'] = '';

$output294 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output294 .= '
						';
return $output294;
};
$arguments292 = array();

$output291 .= '';

$output291 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$array313 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array313);
};
$arguments308 = array();
$arguments308['maxCharacters'] = NULL;
$arguments308['append'] = '&hellip;';
$arguments308['respectWordBoundaries'] = true;
$arguments308['respectHtml'] = true;
$array310 = array (
);$arguments308['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array310);
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array311['0'] = 1;

$expression312 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments308['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);
};
$arguments306 = array();
$arguments306['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments306['data'] = NULL;
$arguments306['current'] = NULL;
$arguments306['currentValueKey'] = NULL;
$arguments306['table'] = '';

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
						';
return $output305;
};
$arguments303 = array();
$arguments303['if'] = NULL;

$output291 .= '';

$output291 .= '
					';
return $output291;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments268['__thenClosure'] = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$array278 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array278);
};
$arguments273 = array();
$arguments273['maxCharacters'] = NULL;
$arguments273['append'] = '&hellip;';
$arguments273['respectWordBoundaries'] = true;
$arguments273['respectHtml'] = true;
$array275 = array (
);$arguments273['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array275);
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array276['0'] = 1;

$expression277 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);
};
$arguments271 = array();
$arguments271['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments271['data'] = NULL;
$arguments271['current'] = NULL;
$arguments271['currentValueKey'] = NULL;
$arguments271['table'] = '';

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
						';
return $output270;
};
$arguments268['__elseClosures'][] = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$array287 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array287);
};
$arguments282 = array();
$arguments282['maxCharacters'] = NULL;
$arguments282['append'] = '&hellip;';
$arguments282['respectWordBoundaries'] = true;
$arguments282['respectHtml'] = true;
$array284 = array (
);$arguments282['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array284);
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array285['0'] = 1;

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);
};
$arguments280 = array();
$arguments280['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments280['data'] = NULL;
$arguments280['current'] = NULL;
$arguments280['currentValueKey'] = NULL;
$arguments280['table'] = '';

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
						';
return $output279;
};

$output267 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
				';
return $output267;
};
$arguments265 = array();

$output208 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output208 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['key'] = NULL;
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['languageKey'] = NULL;
$arguments323['alternativeLanguageKeys'] = NULL;
$arguments323['key'] = 'more-link';

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
			';
return $output322;
};
$arguments317 = array();
$arguments317['additionalAttributes'] = NULL;
$arguments317['data'] = NULL;
$arguments317['aria'] = NULL;
$arguments317['class'] = NULL;
$arguments317['dir'] = NULL;
$arguments317['id'] = NULL;
$arguments317['lang'] = NULL;
$arguments317['style'] = NULL;
$arguments317['title'] = NULL;
$arguments317['accesskey'] = NULL;
$arguments317['tabindex'] = NULL;
$arguments317['onclick'] = NULL;
$arguments317['newsItem'] = NULL;
$arguments317['settings'] = array (
);
$arguments317['uriOnly'] = false;
$arguments317['configuration'] = array (
);
$arguments317['content'] = '';
$arguments317['section'] = NULL;
$array319 = array (
);$arguments317['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array319);
$array320 = array (
);$arguments317['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array320);
$arguments317['class'] = 'btn btn-primary btn-read-more';
$array321 = array (
);$arguments317['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array321);

$output316 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);
return $output316;
};
$arguments314 = array();

$output208 .= '';

$output208 .= '
		</div>
	</div>
	';
return $output208;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['aria'] = NULL;
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['newsItem'] = NULL;
$arguments203['settings'] = array (
);
$arguments203['uriOnly'] = false;
$arguments203['configuration'] = array (
);
$arguments203['content'] = '';
$arguments203['section'] = NULL;
$array205 = array (
);$arguments203['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array205);
$array206 = array (
);$arguments203['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array206);
$array207 = array (
);$arguments203['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array207);

$output191 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output191 .= '
	</li>
';
return $output191;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#