<?php

class News_action_list_c176be0ccd0943a69c04c310dd25a363ed49528c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'General';
}
public function hasLayout() {
return TRUE;
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output677 = '';

$output677 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments681 = array();
$arguments681['then'] = NULL;
$arguments681['else'] = NULL;
$arguments681['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array683 = array();
$array684 = array (
);$array683['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array684);
$array683['1'] = ' == 1';

$expression685 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments681['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression685(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array683)
					),
					$renderingContext
				);
$arguments681['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output680 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output680 .= '" id="news-container-';
$array686 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array686)]);

$output680 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
$output749 = '';

$output749 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments750 = array();
$arguments750['section'] = NULL;
$arguments750['partial'] = NULL;
$arguments750['delegate'] = NULL;
$arguments750['renderable'] = NULL;
$arguments750['arguments'] = array (
);
$arguments750['optional'] = false;
$arguments750['default'] = NULL;
$arguments750['contentAs'] = NULL;
$arguments750['debug'] = true;
$arguments750['partial'] = 'List/Item';
// Rendering Array
$array752 = array();
$array753 = array (
);$array752['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array753);
$array754 = array (
);$array752['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array754);
$array755 = array (
);$array752['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array755);
$arguments750['arguments'] = $array752;

$output749 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext);

$output749 .= '
                                ';
return $output749;
};
$arguments746 = array();
$arguments746['each'] = NULL;
$arguments746['as'] = NULL;
$arguments746['key'] = NULL;
$arguments746['reverse'] = false;
$arguments746['iteration'] = NULL;
$array748 = array (
);$arguments746['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array748);
$arguments746['as'] = 'newsItem';
$arguments746['iteration'] = 'iterator';

$output745 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output745 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure757 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments756 = array();
$arguments756['additionalAttributes'] = NULL;
$arguments756['data'] = NULL;
$arguments756['aria'] = NULL;
$arguments756['class'] = NULL;
$arguments756['dir'] = NULL;
$arguments756['id'] = NULL;
$arguments756['lang'] = NULL;
$arguments756['style'] = NULL;
$arguments756['title'] = NULL;
$arguments756['accesskey'] = NULL;
$arguments756['tabindex'] = NULL;
$arguments756['onclick'] = NULL;
$arguments756['async'] = NULL;
$arguments756['crossorigin'] = NULL;
$arguments756['defer'] = NULL;
$arguments756['integrity'] = NULL;
$arguments756['nomodule'] = NULL;
$arguments756['nonce'] = NULL;
$arguments756['referrerpolicy'] = NULL;
$arguments756['src'] = NULL;
$arguments756['type'] = NULL;
$arguments756['identifier'] = NULL;
$arguments756['priority'] = false;
$arguments756['identifier'] = 'news-card-list-js';

$output745 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments756, $renderChildrenClosure757, $renderingContext);

$output745 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments758 = array();
$arguments758['additionalAttributes'] = NULL;
$arguments758['data'] = NULL;
$arguments758['aria'] = NULL;
$arguments758['class'] = NULL;
$arguments758['dir'] = NULL;
$arguments758['id'] = NULL;
$arguments758['lang'] = NULL;
$arguments758['style'] = NULL;
$arguments758['title'] = NULL;
$arguments758['accesskey'] = NULL;
$arguments758['tabindex'] = NULL;
$arguments758['onclick'] = NULL;
$arguments758['as'] = NULL;
$arguments758['crossorigin'] = NULL;
$arguments758['disabled'] = NULL;
$arguments758['href'] = NULL;
$arguments758['hreflang'] = NULL;
$arguments758['importance'] = NULL;
$arguments758['integrity'] = NULL;
$arguments758['media'] = NULL;
$arguments758['referrerpolicy'] = NULL;
$arguments758['rel'] = NULL;
$arguments758['sizes'] = NULL;
$arguments758['type'] = NULL;
$arguments758['nonce'] = NULL;
$arguments758['identifier'] = NULL;
$arguments758['priority'] = false;
$arguments758['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array760 = array();
$array760['0'] = 'true';

$expression761 = function($context) {return TRUE;};
$arguments758['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression761(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array760)
					),
					$renderingContext
				);

$output745 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext);

$output745 .= '

                        ';
return $output745;
};
$arguments743 = array();

$output742 .= '';

$output742 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$output764 = '';

$output764 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
$output770 = '';

$output770 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure772 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments771 = array();
$arguments771['section'] = NULL;
$arguments771['partial'] = NULL;
$arguments771['delegate'] = NULL;
$arguments771['renderable'] = NULL;
$arguments771['arguments'] = array (
);
$arguments771['optional'] = false;
$arguments771['default'] = NULL;
$arguments771['contentAs'] = NULL;
$arguments771['debug'] = true;
$arguments771['partial'] = 'List/Pagination';
// Rendering Array
$array773 = array();
$array774 = array (
);$array773['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array774);
$array775 = array (
);$array773['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array775);
$arguments771['arguments'] = $array773;

$output770 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments771, $renderChildrenClosure772, $renderingContext);

$output770 .= '
                            ';
return $output770;
};
$arguments765 = array();
$arguments765['then'] = NULL;
$arguments765['else'] = NULL;
$arguments765['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array767 = array();
$array768 = array (
);$array767['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array768);

$expression769 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments765['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression769(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array767)
					),
					$renderingContext
				);
$arguments765['__thenClosure'] = $renderChildrenClosure766;

$output764 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext);

$output764 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure777 = function() use ($renderingContext, $self) {
$output779 = '';

$output779 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments780 = array();
$arguments780['section'] = NULL;
$arguments780['partial'] = NULL;
$arguments780['delegate'] = NULL;
$arguments780['renderable'] = NULL;
$arguments780['arguments'] = array (
);
$arguments780['optional'] = false;
$arguments780['default'] = NULL;
$arguments780['contentAs'] = NULL;
$arguments780['debug'] = true;
$arguments780['partial'] = 'List/Item';
// Rendering Array
$array782 = array();
$array783 = array (
);$array782['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array783);
$array784 = array (
);$array782['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array784);
$array785 = array (
);$array782['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array785);
$arguments780['arguments'] = $array782;

$output779 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);

$output779 .= '
                                ';
return $output779;
};
$arguments776 = array();
$arguments776['each'] = NULL;
$arguments776['as'] = NULL;
$arguments776['key'] = NULL;
$arguments776['reverse'] = false;
$arguments776['iteration'] = NULL;
$array778 = array (
);$arguments776['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array778);
$arguments776['as'] = 'newsItem';
$arguments776['iteration'] = 'iterator';

$output764 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext);

$output764 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure787 = function() use ($renderingContext, $self) {
$output791 = '';

$output791 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments792 = array();
$arguments792['section'] = NULL;
$arguments792['partial'] = NULL;
$arguments792['delegate'] = NULL;
$arguments792['renderable'] = NULL;
$arguments792['arguments'] = array (
);
$arguments792['optional'] = false;
$arguments792['default'] = NULL;
$arguments792['contentAs'] = NULL;
$arguments792['debug'] = true;
$arguments792['partial'] = 'List/Pagination';
// Rendering Array
$array794 = array();
$array795 = array (
);$array794['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array795);
$array796 = array (
);$array794['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array796);
$arguments792['arguments'] = $array794;

$output791 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output791 .= '
                            ';
return $output791;
};
$arguments786 = array();
$arguments786['then'] = NULL;
$arguments786['else'] = NULL;
$arguments786['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array788 = array();
$array789 = array (
);$array788['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array789);

$expression790 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments786['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression790(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array788)
					),
					$renderingContext
				);
$arguments786['__thenClosure'] = $renderChildrenClosure787;

$output764 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments786, $renderChildrenClosure787, $renderingContext);

$output764 .= '
                        ';
return $output764;
};
$arguments762 = array();
$arguments762['if'] = NULL;

$output742 .= '';

$output742 .= '
                    ';
return $output742;
};
$arguments687 = array();
$arguments687['then'] = NULL;
$arguments687['else'] = NULL;
$arguments687['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array739 = array();
$array740 = array (
);$array739['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array740);

$expression741 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments687['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression741(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array739)
					),
					$renderingContext
				);
$arguments687['__thenClosure'] = function() use ($renderingContext, $self) {
$output689 = '';

$output689 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments694 = array();
$arguments694['section'] = NULL;
$arguments694['partial'] = NULL;
$arguments694['delegate'] = NULL;
$arguments694['renderable'] = NULL;
$arguments694['arguments'] = array (
);
$arguments694['optional'] = false;
$arguments694['default'] = NULL;
$arguments694['contentAs'] = NULL;
$arguments694['debug'] = true;
$arguments694['partial'] = 'List/Item';
// Rendering Array
$array696 = array();
$array697 = array (
);$array696['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array697);
$array698 = array (
);$array696['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array698);
$array699 = array (
);$array696['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array699);
$arguments694['arguments'] = $array696;

$output693 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext);

$output693 .= '
                                ';
return $output693;
};
$arguments690 = array();
$arguments690['each'] = NULL;
$arguments690['as'] = NULL;
$arguments690['key'] = NULL;
$arguments690['reverse'] = false;
$arguments690['iteration'] = NULL;
$array692 = array (
);$arguments690['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array692);
$arguments690['as'] = 'newsItem';
$arguments690['iteration'] = 'iterator';

$output689 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);

$output689 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments700 = array();
$arguments700['additionalAttributes'] = NULL;
$arguments700['data'] = NULL;
$arguments700['aria'] = NULL;
$arguments700['class'] = NULL;
$arguments700['dir'] = NULL;
$arguments700['id'] = NULL;
$arguments700['lang'] = NULL;
$arguments700['style'] = NULL;
$arguments700['title'] = NULL;
$arguments700['accesskey'] = NULL;
$arguments700['tabindex'] = NULL;
$arguments700['onclick'] = NULL;
$arguments700['async'] = NULL;
$arguments700['crossorigin'] = NULL;
$arguments700['defer'] = NULL;
$arguments700['integrity'] = NULL;
$arguments700['nomodule'] = NULL;
$arguments700['nonce'] = NULL;
$arguments700['referrerpolicy'] = NULL;
$arguments700['src'] = NULL;
$arguments700['type'] = NULL;
$arguments700['identifier'] = NULL;
$arguments700['priority'] = false;
$arguments700['identifier'] = 'news-card-list-js';

$output689 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output689 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments702 = array();
$arguments702['additionalAttributes'] = NULL;
$arguments702['data'] = NULL;
$arguments702['aria'] = NULL;
$arguments702['class'] = NULL;
$arguments702['dir'] = NULL;
$arguments702['id'] = NULL;
$arguments702['lang'] = NULL;
$arguments702['style'] = NULL;
$arguments702['title'] = NULL;
$arguments702['accesskey'] = NULL;
$arguments702['tabindex'] = NULL;
$arguments702['onclick'] = NULL;
$arguments702['as'] = NULL;
$arguments702['crossorigin'] = NULL;
$arguments702['disabled'] = NULL;
$arguments702['href'] = NULL;
$arguments702['hreflang'] = NULL;
$arguments702['importance'] = NULL;
$arguments702['integrity'] = NULL;
$arguments702['media'] = NULL;
$arguments702['referrerpolicy'] = NULL;
$arguments702['rel'] = NULL;
$arguments702['sizes'] = NULL;
$arguments702['type'] = NULL;
$arguments702['nonce'] = NULL;
$arguments702['identifier'] = NULL;
$arguments702['priority'] = false;
$arguments702['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array704 = array();
$array704['0'] = 'true';

$expression705 = function($context) {return TRUE;};
$arguments702['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression705(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array704)
					),
					$renderingContext
				);

$output689 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output689 .= '

                        ';
return $output689;
};
$arguments687['__elseClosures'][] = function() use ($renderingContext, $self) {
$output706 = '';

$output706 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
$output712 = '';

$output712 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['section'] = NULL;
$arguments713['partial'] = NULL;
$arguments713['delegate'] = NULL;
$arguments713['renderable'] = NULL;
$arguments713['arguments'] = array (
);
$arguments713['optional'] = false;
$arguments713['default'] = NULL;
$arguments713['contentAs'] = NULL;
$arguments713['debug'] = true;
$arguments713['partial'] = 'List/Pagination';
// Rendering Array
$array715 = array();
$array716 = array (
);$array715['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array716);
$array717 = array (
);$array715['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array717);
$arguments713['arguments'] = $array715;

$output712 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output712 .= '
                            ';
return $output712;
};
$arguments707 = array();
$arguments707['then'] = NULL;
$arguments707['else'] = NULL;
$arguments707['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array709 = array();
$array710 = array (
);$array709['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array710);

$expression711 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments707['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression711(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array709)
					),
					$renderingContext
				);
$arguments707['__thenClosure'] = $renderChildrenClosure708;

$output706 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext);

$output706 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['section'] = NULL;
$arguments722['partial'] = NULL;
$arguments722['delegate'] = NULL;
$arguments722['renderable'] = NULL;
$arguments722['arguments'] = array (
);
$arguments722['optional'] = false;
$arguments722['default'] = NULL;
$arguments722['contentAs'] = NULL;
$arguments722['debug'] = true;
$arguments722['partial'] = 'List/Item';
// Rendering Array
$array724 = array();
$array725 = array (
);$array724['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array725);
$array726 = array (
);$array724['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array726);
$array727 = array (
);$array724['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array727);
$arguments722['arguments'] = $array724;

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output721 .= '
                                ';
return $output721;
};
$arguments718 = array();
$arguments718['each'] = NULL;
$arguments718['as'] = NULL;
$arguments718['key'] = NULL;
$arguments718['reverse'] = false;
$arguments718['iteration'] = NULL;
$array720 = array (
);$arguments718['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array720);
$arguments718['as'] = 'newsItem';
$arguments718['iteration'] = 'iterator';

$output706 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output706 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
$output733 = '';

$output733 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure735 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments734 = array();
$arguments734['section'] = NULL;
$arguments734['partial'] = NULL;
$arguments734['delegate'] = NULL;
$arguments734['renderable'] = NULL;
$arguments734['arguments'] = array (
);
$arguments734['optional'] = false;
$arguments734['default'] = NULL;
$arguments734['contentAs'] = NULL;
$arguments734['debug'] = true;
$arguments734['partial'] = 'List/Pagination';
// Rendering Array
$array736 = array();
$array737 = array (
);$array736['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array737);
$array738 = array (
);$array736['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array738);
$arguments734['arguments'] = $array736;

$output733 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments734, $renderChildrenClosure735, $renderingContext);

$output733 .= '
                            ';
return $output733;
};
$arguments728 = array();
$arguments728['then'] = NULL;
$arguments728['else'] = NULL;
$arguments728['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array730 = array();
$array731 = array (
);$array730['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array731);

$expression732 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments728['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression732(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array730)
					),
					$renderingContext
				);
$arguments728['__thenClosure'] = $renderChildrenClosure729;

$output706 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output706 .= '
                        ';
return $output706;
};

$output680 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output680 .= '
                </div>
        ';
return $output680;
};
$arguments678 = array();

$output677 .= '';

$output677 .= '       
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure798 = function() use ($renderingContext, $self) {
$output799 = '';

$output799 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
$output849 = '';

$output849 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
$output852 = '';

$output852 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
$output856 = '';

$output856 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments857 = array();
$arguments857['section'] = NULL;
$arguments857['partial'] = NULL;
$arguments857['delegate'] = NULL;
$arguments857['renderable'] = NULL;
$arguments857['arguments'] = array (
);
$arguments857['optional'] = false;
$arguments857['default'] = NULL;
$arguments857['contentAs'] = NULL;
$arguments857['debug'] = true;
$arguments857['partial'] = 'List/Item';
// Rendering Array
$array859 = array();
$array860 = array (
);$array859['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array860);
$array861 = array (
);$array859['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array861);
$array862 = array (
);$array859['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array862);
$arguments857['arguments'] = $array859;

$output856 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments857, $renderChildrenClosure858, $renderingContext);

$output856 .= '
                            ';
return $output856;
};
$arguments853 = array();
$arguments853['each'] = NULL;
$arguments853['as'] = NULL;
$arguments853['key'] = NULL;
$arguments853['reverse'] = false;
$arguments853['iteration'] = NULL;
$array855 = array (
);$arguments853['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array855);
$arguments853['as'] = 'newsItem';
$arguments853['iteration'] = 'iterator';

$output852 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext);

$output852 .= '
                            </ul></div>
                    ';
return $output852;
};
$arguments850 = array();

$output849 .= '';

$output849 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure864 = function() use ($renderingContext, $self) {
$output865 = '';

$output865 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
$output871 = '';

$output871 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments872 = array();
$arguments872['section'] = NULL;
$arguments872['partial'] = NULL;
$arguments872['delegate'] = NULL;
$arguments872['renderable'] = NULL;
$arguments872['arguments'] = array (
);
$arguments872['optional'] = false;
$arguments872['default'] = NULL;
$arguments872['contentAs'] = NULL;
$arguments872['debug'] = true;
$arguments872['partial'] = 'List/Pagination';
// Rendering Array
$array874 = array();
$array875 = array (
);$array874['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array875);
$array876 = array (
);$array874['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array876);
$arguments872['arguments'] = $array874;

$output871 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments872, $renderChildrenClosure873, $renderingContext);

$output871 .= '
                        ';
return $output871;
};
$arguments866 = array();
$arguments866['then'] = NULL;
$arguments866['else'] = NULL;
$arguments866['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array868 = array();
$array869 = array (
);$array868['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array869);

$expression870 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments866['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression870(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array868)
					),
					$renderingContext
				);
$arguments866['__thenClosure'] = $renderChildrenClosure867;

$output865 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments866, $renderChildrenClosure867, $renderingContext);

$output865 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$output880 = '';

$output880 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure882 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments881 = array();
$arguments881['section'] = NULL;
$arguments881['partial'] = NULL;
$arguments881['delegate'] = NULL;
$arguments881['renderable'] = NULL;
$arguments881['arguments'] = array (
);
$arguments881['optional'] = false;
$arguments881['default'] = NULL;
$arguments881['contentAs'] = NULL;
$arguments881['debug'] = true;
$arguments881['partial'] = 'List/Item';
// Rendering Array
$array883 = array();
$array884 = array (
);$array883['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array884);
$array885 = array (
);$array883['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array885);
$array886 = array (
);$array883['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array886);
$arguments881['arguments'] = $array883;

$output880 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments881, $renderChildrenClosure882, $renderingContext);

$output880 .= '
                            ';
return $output880;
};
$arguments877 = array();
$arguments877['each'] = NULL;
$arguments877['as'] = NULL;
$arguments877['key'] = NULL;
$arguments877['reverse'] = false;
$arguments877['iteration'] = NULL;
$array879 = array (
);$arguments877['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array879);
$arguments877['as'] = 'newsItem';
$arguments877['iteration'] = 'iterator';

$output865 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output865 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
$output892 = '';

$output892 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments893 = array();
$arguments893['section'] = NULL;
$arguments893['partial'] = NULL;
$arguments893['delegate'] = NULL;
$arguments893['renderable'] = NULL;
$arguments893['arguments'] = array (
);
$arguments893['optional'] = false;
$arguments893['default'] = NULL;
$arguments893['contentAs'] = NULL;
$arguments893['debug'] = true;
$arguments893['partial'] = 'List/Pagination';
// Rendering Array
$array895 = array();
$array896 = array (
);$array895['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array896);
$array897 = array (
);$array895['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array897);
$arguments893['arguments'] = $array895;

$output892 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext);

$output892 .= '
                        ';
return $output892;
};
$arguments887 = array();
$arguments887['then'] = NULL;
$arguments887['else'] = NULL;
$arguments887['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array889 = array();
$array890 = array (
);$array889['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array890);

$expression891 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments887['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression891(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array889)
					),
					$renderingContext
				);
$arguments887['__thenClosure'] = $renderChildrenClosure888;

$output865 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);

$output865 .= '
                    ';
return $output865;
};
$arguments863 = array();
$arguments863['if'] = NULL;

$output849 .= '';

$output849 .= '
                ';
return $output849;
};
$arguments800 = array();
$arguments800['then'] = NULL;
$arguments800['else'] = NULL;
$arguments800['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array846 = array();
$array847 = array (
);$array846['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array847);

$expression848 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments800['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression848(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array846)
					),
					$renderingContext
				);
$arguments800['__thenClosure'] = function() use ($renderingContext, $self) {
$output802 = '';

$output802 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure804 = function() use ($renderingContext, $self) {
$output806 = '';

$output806 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments807 = array();
$arguments807['section'] = NULL;
$arguments807['partial'] = NULL;
$arguments807['delegate'] = NULL;
$arguments807['renderable'] = NULL;
$arguments807['arguments'] = array (
);
$arguments807['optional'] = false;
$arguments807['default'] = NULL;
$arguments807['contentAs'] = NULL;
$arguments807['debug'] = true;
$arguments807['partial'] = 'List/Item';
// Rendering Array
$array809 = array();
$array810 = array (
);$array809['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array810);
$array811 = array (
);$array809['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array811);
$array812 = array (
);$array809['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array812);
$arguments807['arguments'] = $array809;

$output806 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments807, $renderChildrenClosure808, $renderingContext);

$output806 .= '
                            ';
return $output806;
};
$arguments803 = array();
$arguments803['each'] = NULL;
$arguments803['as'] = NULL;
$arguments803['key'] = NULL;
$arguments803['reverse'] = false;
$arguments803['iteration'] = NULL;
$array805 = array (
);$arguments803['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array805);
$arguments803['as'] = 'newsItem';
$arguments803['iteration'] = 'iterator';

$output802 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments803, $renderChildrenClosure804, $renderingContext);

$output802 .= '
                            </ul></div>
                    ';
return $output802;
};
$arguments800['__elseClosures'][] = function() use ($renderingContext, $self) {
$output813 = '';

$output813 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
$output819 = '';

$output819 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure821 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments820 = array();
$arguments820['section'] = NULL;
$arguments820['partial'] = NULL;
$arguments820['delegate'] = NULL;
$arguments820['renderable'] = NULL;
$arguments820['arguments'] = array (
);
$arguments820['optional'] = false;
$arguments820['default'] = NULL;
$arguments820['contentAs'] = NULL;
$arguments820['debug'] = true;
$arguments820['partial'] = 'List/Pagination';
// Rendering Array
$array822 = array();
$array823 = array (
);$array822['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array823);
$array824 = array (
);$array822['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array824);
$arguments820['arguments'] = $array822;

$output819 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments820, $renderChildrenClosure821, $renderingContext);

$output819 .= '
                        ';
return $output819;
};
$arguments814 = array();
$arguments814['then'] = NULL;
$arguments814['else'] = NULL;
$arguments814['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array816 = array();
$array817 = array (
);$array816['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array817);

$expression818 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments814['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression818(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array816)
					),
					$renderingContext
				);
$arguments814['__thenClosure'] = $renderChildrenClosure815;

$output813 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext);

$output813 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
$output828 = '';

$output828 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure830 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments829 = array();
$arguments829['section'] = NULL;
$arguments829['partial'] = NULL;
$arguments829['delegate'] = NULL;
$arguments829['renderable'] = NULL;
$arguments829['arguments'] = array (
);
$arguments829['optional'] = false;
$arguments829['default'] = NULL;
$arguments829['contentAs'] = NULL;
$arguments829['debug'] = true;
$arguments829['partial'] = 'List/Item';
// Rendering Array
$array831 = array();
$array832 = array (
);$array831['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array832);
$array833 = array (
);$array831['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array833);
$array834 = array (
);$array831['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array834);
$arguments829['arguments'] = $array831;

$output828 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments829, $renderChildrenClosure830, $renderingContext);

$output828 .= '
                            ';
return $output828;
};
$arguments825 = array();
$arguments825['each'] = NULL;
$arguments825['as'] = NULL;
$arguments825['key'] = NULL;
$arguments825['reverse'] = false;
$arguments825['iteration'] = NULL;
$array827 = array (
);$arguments825['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array827);
$arguments825['as'] = 'newsItem';
$arguments825['iteration'] = 'iterator';

$output813 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext);

$output813 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
$output840 = '';

$output840 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure842 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments841 = array();
$arguments841['section'] = NULL;
$arguments841['partial'] = NULL;
$arguments841['delegate'] = NULL;
$arguments841['renderable'] = NULL;
$arguments841['arguments'] = array (
);
$arguments841['optional'] = false;
$arguments841['default'] = NULL;
$arguments841['contentAs'] = NULL;
$arguments841['debug'] = true;
$arguments841['partial'] = 'List/Pagination';
// Rendering Array
$array843 = array();
$array844 = array (
);$array843['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array844);
$array845 = array (
);$array843['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array845);
$arguments841['arguments'] = $array843;

$output840 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments841, $renderChildrenClosure842, $renderingContext);

$output840 .= '
                        ';
return $output840;
};
$arguments835 = array();
$arguments835['then'] = NULL;
$arguments835['else'] = NULL;
$arguments835['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array837 = array();
$array838 = array (
);$array837['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array838);

$expression839 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments835['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression839(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array837)
					),
					$renderingContext
				);
$arguments835['__thenClosure'] = $renderChildrenClosure836;

$output813 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments835, $renderChildrenClosure836, $renderingContext);

$output813 .= '
                    ';
return $output813;
};

$output799 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);

$output799 .= '
        ';
return $output799;
};
$arguments797 = array();
$arguments797['if'] = NULL;

$output677 .= '';

$output677 .= '
        ';
return $output677;
};
$arguments456 = array();
$arguments456['then'] = NULL;
$arguments456['else'] = NULL;
$arguments456['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array674 = array();
$array675 = array (
);$array674['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array675);
$array674['1'] = ' == 1';

$expression676 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments456['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression676(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array674)
					),
					$renderingContext
				);
$arguments456['__thenClosure'] = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array461 = array();
$array462 = array (
);$array461['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array462);
$array461['1'] = ' == 1';

$expression463 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array461)
					),
					$renderingContext
				);
$arguments459['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output458 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '" id="news-container-';
$array464 = array (
);
$output458 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array464)]);

$output458 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output527 = '';

$output527 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['section'] = NULL;
$arguments528['partial'] = NULL;
$arguments528['delegate'] = NULL;
$arguments528['renderable'] = NULL;
$arguments528['arguments'] = array (
);
$arguments528['optional'] = false;
$arguments528['default'] = NULL;
$arguments528['contentAs'] = NULL;
$arguments528['debug'] = true;
$arguments528['partial'] = 'List/Item';
// Rendering Array
$array530 = array();
$array531 = array (
);$array530['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array531);
$array532 = array (
);$array530['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array532);
$array533 = array (
);$array530['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array533);
$arguments528['arguments'] = $array530;

$output527 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output527 .= '
                                ';
return $output527;
};
$arguments524 = array();
$arguments524['each'] = NULL;
$arguments524['as'] = NULL;
$arguments524['key'] = NULL;
$arguments524['reverse'] = false;
$arguments524['iteration'] = NULL;
$array526 = array (
);$arguments524['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array526);
$arguments524['as'] = 'newsItem';
$arguments524['iteration'] = 'iterator';

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output523 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments534 = array();
$arguments534['additionalAttributes'] = NULL;
$arguments534['data'] = NULL;
$arguments534['aria'] = NULL;
$arguments534['class'] = NULL;
$arguments534['dir'] = NULL;
$arguments534['id'] = NULL;
$arguments534['lang'] = NULL;
$arguments534['style'] = NULL;
$arguments534['title'] = NULL;
$arguments534['accesskey'] = NULL;
$arguments534['tabindex'] = NULL;
$arguments534['onclick'] = NULL;
$arguments534['async'] = NULL;
$arguments534['crossorigin'] = NULL;
$arguments534['defer'] = NULL;
$arguments534['integrity'] = NULL;
$arguments534['nomodule'] = NULL;
$arguments534['nonce'] = NULL;
$arguments534['referrerpolicy'] = NULL;
$arguments534['src'] = NULL;
$arguments534['type'] = NULL;
$arguments534['identifier'] = NULL;
$arguments534['priority'] = false;
$arguments534['identifier'] = 'news-card-list-js';

$output523 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output523 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
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
$arguments536['as'] = NULL;
$arguments536['crossorigin'] = NULL;
$arguments536['disabled'] = NULL;
$arguments536['href'] = NULL;
$arguments536['hreflang'] = NULL;
$arguments536['importance'] = NULL;
$arguments536['integrity'] = NULL;
$arguments536['media'] = NULL;
$arguments536['referrerpolicy'] = NULL;
$arguments536['rel'] = NULL;
$arguments536['sizes'] = NULL;
$arguments536['type'] = NULL;
$arguments536['nonce'] = NULL;
$arguments536['identifier'] = NULL;
$arguments536['priority'] = false;
$arguments536['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array538 = array();
$array538['0'] = 'true';

$expression539 = function($context) {return TRUE;};
$arguments536['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression539(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array538)
					),
					$renderingContext
				);

$output523 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output523 .= '

                        ';
return $output523;
};
$arguments521 = array();

$output520 .= '';

$output520 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['section'] = NULL;
$arguments549['partial'] = NULL;
$arguments549['delegate'] = NULL;
$arguments549['renderable'] = NULL;
$arguments549['arguments'] = array (
);
$arguments549['optional'] = false;
$arguments549['default'] = NULL;
$arguments549['contentAs'] = NULL;
$arguments549['debug'] = true;
$arguments549['partial'] = 'List/Pagination';
// Rendering Array
$array551 = array();
$array552 = array (
);$array551['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array552);
$array553 = array (
);$array551['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array553);
$arguments549['arguments'] = $array551;

$output548 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output548 .= '
                            ';
return $output548;
};
$arguments543 = array();
$arguments543['then'] = NULL;
$arguments543['else'] = NULL;
$arguments543['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array545 = array();
$array546 = array (
);$array545['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array546);

$expression547 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments543['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression547(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array545)
					),
					$renderingContext
				);
$arguments543['__thenClosure'] = $renderChildrenClosure544;

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output542 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$output557 = '';

$output557 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['section'] = NULL;
$arguments558['partial'] = NULL;
$arguments558['delegate'] = NULL;
$arguments558['renderable'] = NULL;
$arguments558['arguments'] = array (
);
$arguments558['optional'] = false;
$arguments558['default'] = NULL;
$arguments558['contentAs'] = NULL;
$arguments558['debug'] = true;
$arguments558['partial'] = 'List/Item';
// Rendering Array
$array560 = array();
$array561 = array (
);$array560['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array561);
$array562 = array (
);$array560['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array562);
$array563 = array (
);$array560['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array563);
$arguments558['arguments'] = $array560;

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output557 .= '
                                ';
return $output557;
};
$arguments554 = array();
$arguments554['each'] = NULL;
$arguments554['as'] = NULL;
$arguments554['key'] = NULL;
$arguments554['reverse'] = false;
$arguments554['iteration'] = NULL;
$array556 = array (
);$arguments554['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array556);
$arguments554['as'] = 'newsItem';
$arguments554['iteration'] = 'iterator';

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output542 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['section'] = NULL;
$arguments570['partial'] = NULL;
$arguments570['delegate'] = NULL;
$arguments570['renderable'] = NULL;
$arguments570['arguments'] = array (
);
$arguments570['optional'] = false;
$arguments570['default'] = NULL;
$arguments570['contentAs'] = NULL;
$arguments570['debug'] = true;
$arguments570['partial'] = 'List/Pagination';
// Rendering Array
$array572 = array();
$array573 = array (
);$array572['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array573);
$array574 = array (
);$array572['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array574);
$arguments570['arguments'] = $array572;

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '
                            ';
return $output569;
};
$arguments564 = array();
$arguments564['then'] = NULL;
$arguments564['else'] = NULL;
$arguments564['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array566 = array();
$array567 = array (
);$array566['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array567);

$expression568 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments564['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression568(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array566)
					),
					$renderingContext
				);
$arguments564['__thenClosure'] = $renderChildrenClosure565;

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output542 .= '
                        ';
return $output542;
};
$arguments540 = array();
$arguments540['if'] = NULL;

$output520 .= '';

$output520 .= '
                    ';
return $output520;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array517 = array();
$array518 = array (
);$array517['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array518);

$expression519 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression519(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array517)
					),
					$renderingContext
				);
$arguments465['__thenClosure'] = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['section'] = NULL;
$arguments472['partial'] = NULL;
$arguments472['delegate'] = NULL;
$arguments472['renderable'] = NULL;
$arguments472['arguments'] = array (
);
$arguments472['optional'] = false;
$arguments472['default'] = NULL;
$arguments472['contentAs'] = NULL;
$arguments472['debug'] = true;
$arguments472['partial'] = 'List/Item';
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array475);
$array476 = array (
);$array474['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array476);
$array477 = array (
);$array474['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array477);
$arguments472['arguments'] = $array474;

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output471 .= '
                                ';
return $output471;
};
$arguments468 = array();
$arguments468['each'] = NULL;
$arguments468['as'] = NULL;
$arguments468['key'] = NULL;
$arguments468['reverse'] = false;
$arguments468['iteration'] = NULL;
$array470 = array (
);$arguments468['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array470);
$arguments468['as'] = 'newsItem';
$arguments468['iteration'] = 'iterator';

$output467 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output467 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['aria'] = NULL;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['async'] = NULL;
$arguments478['crossorigin'] = NULL;
$arguments478['defer'] = NULL;
$arguments478['integrity'] = NULL;
$arguments478['nomodule'] = NULL;
$arguments478['nonce'] = NULL;
$arguments478['referrerpolicy'] = NULL;
$arguments478['src'] = NULL;
$arguments478['type'] = NULL;
$arguments478['identifier'] = NULL;
$arguments478['priority'] = false;
$arguments478['identifier'] = 'news-card-list-js';

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output467 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments480 = array();
$arguments480['additionalAttributes'] = NULL;
$arguments480['data'] = NULL;
$arguments480['aria'] = NULL;
$arguments480['class'] = NULL;
$arguments480['dir'] = NULL;
$arguments480['id'] = NULL;
$arguments480['lang'] = NULL;
$arguments480['style'] = NULL;
$arguments480['title'] = NULL;
$arguments480['accesskey'] = NULL;
$arguments480['tabindex'] = NULL;
$arguments480['onclick'] = NULL;
$arguments480['as'] = NULL;
$arguments480['crossorigin'] = NULL;
$arguments480['disabled'] = NULL;
$arguments480['href'] = NULL;
$arguments480['hreflang'] = NULL;
$arguments480['importance'] = NULL;
$arguments480['integrity'] = NULL;
$arguments480['media'] = NULL;
$arguments480['referrerpolicy'] = NULL;
$arguments480['rel'] = NULL;
$arguments480['sizes'] = NULL;
$arguments480['type'] = NULL;
$arguments480['nonce'] = NULL;
$arguments480['identifier'] = NULL;
$arguments480['priority'] = false;
$arguments480['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array482 = array();
$array482['0'] = 'true';

$expression483 = function($context) {return TRUE;};
$arguments480['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression483(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array482)
					),
					$renderingContext
				);

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output467 .= '

                        ';
return $output467;
};
$arguments465['__elseClosures'][] = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['section'] = NULL;
$arguments491['partial'] = NULL;
$arguments491['delegate'] = NULL;
$arguments491['renderable'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['optional'] = false;
$arguments491['default'] = NULL;
$arguments491['contentAs'] = NULL;
$arguments491['debug'] = true;
$arguments491['partial'] = 'List/Pagination';
// Rendering Array
$array493 = array();
$array494 = array (
);$array493['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array494);
$array495 = array (
);$array493['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array495);
$arguments491['arguments'] = $array493;

$output490 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output490 .= '
                            ';
return $output490;
};
$arguments485 = array();
$arguments485['then'] = NULL;
$arguments485['else'] = NULL;
$arguments485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array488);

$expression489 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments485['__thenClosure'] = $renderChildrenClosure486;

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output484 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['section'] = NULL;
$arguments500['partial'] = NULL;
$arguments500['delegate'] = NULL;
$arguments500['renderable'] = NULL;
$arguments500['arguments'] = array (
);
$arguments500['optional'] = false;
$arguments500['default'] = NULL;
$arguments500['contentAs'] = NULL;
$arguments500['debug'] = true;
$arguments500['partial'] = 'List/Item';
// Rendering Array
$array502 = array();
$array503 = array (
);$array502['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array503);
$array504 = array (
);$array502['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array504);
$array505 = array (
);$array502['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array505);
$arguments500['arguments'] = $array502;

$output499 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output499 .= '
                                ';
return $output499;
};
$arguments496 = array();
$arguments496['each'] = NULL;
$arguments496['as'] = NULL;
$arguments496['key'] = NULL;
$arguments496['reverse'] = false;
$arguments496['iteration'] = NULL;
$array498 = array (
);$arguments496['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array498);
$arguments496['as'] = 'newsItem';
$arguments496['iteration'] = 'iterator';

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output484 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['section'] = NULL;
$arguments512['partial'] = NULL;
$arguments512['delegate'] = NULL;
$arguments512['renderable'] = NULL;
$arguments512['arguments'] = array (
);
$arguments512['optional'] = false;
$arguments512['default'] = NULL;
$arguments512['contentAs'] = NULL;
$arguments512['debug'] = true;
$arguments512['partial'] = 'List/Pagination';
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array515);
$array516 = array (
);$array514['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array516);
$arguments512['arguments'] = $array514;

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '
                            ';
return $output511;
};
$arguments506 = array();
$arguments506['then'] = NULL;
$arguments506['else'] = NULL;
$arguments506['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array508 = array();
$array509 = array (
);$array508['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array509);

$expression510 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments506['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression510(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array508)
					),
					$renderingContext
				);
$arguments506['__thenClosure'] = $renderChildrenClosure507;

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output484 .= '
                        ';
return $output484;
};

$output458 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output458 .= '
                </div>
        ';
return $output458;
};
$arguments456['__elseClosures'][] = function() use ($renderingContext, $self) {
$output575 = '';

$output575 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
$output625 = '';

$output625 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
$output632 = '';

$output632 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['section'] = NULL;
$arguments633['partial'] = NULL;
$arguments633['delegate'] = NULL;
$arguments633['renderable'] = NULL;
$arguments633['arguments'] = array (
);
$arguments633['optional'] = false;
$arguments633['default'] = NULL;
$arguments633['contentAs'] = NULL;
$arguments633['debug'] = true;
$arguments633['partial'] = 'List/Item';
// Rendering Array
$array635 = array();
$array636 = array (
);$array635['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array636);
$array637 = array (
);$array635['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array637);
$array638 = array (
);$array635['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array638);
$arguments633['arguments'] = $array635;

$output632 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output632 .= '
                            ';
return $output632;
};
$arguments629 = array();
$arguments629['each'] = NULL;
$arguments629['as'] = NULL;
$arguments629['key'] = NULL;
$arguments629['reverse'] = false;
$arguments629['iteration'] = NULL;
$array631 = array (
);$arguments629['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array631);
$arguments629['as'] = 'newsItem';
$arguments629['iteration'] = 'iterator';

$output628 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output628 .= '
                            </ul></div>
                    ';
return $output628;
};
$arguments626 = array();

$output625 .= '';

$output625 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$output641 = '';

$output641 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$output647 = '';

$output647 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['section'] = NULL;
$arguments648['partial'] = NULL;
$arguments648['delegate'] = NULL;
$arguments648['renderable'] = NULL;
$arguments648['arguments'] = array (
);
$arguments648['optional'] = false;
$arguments648['default'] = NULL;
$arguments648['contentAs'] = NULL;
$arguments648['debug'] = true;
$arguments648['partial'] = 'List/Pagination';
// Rendering Array
$array650 = array();
$array651 = array (
);$array650['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array651);
$array652 = array (
);$array650['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array652);
$arguments648['arguments'] = $array650;

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output647 .= '
                        ';
return $output647;
};
$arguments642 = array();
$arguments642['then'] = NULL;
$arguments642['else'] = NULL;
$arguments642['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array644 = array();
$array645 = array (
);$array644['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array645);

$expression646 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments642['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression646(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array644)
					),
					$renderingContext
				);
$arguments642['__thenClosure'] = $renderChildrenClosure643;

$output641 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output641 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['section'] = NULL;
$arguments657['partial'] = NULL;
$arguments657['delegate'] = NULL;
$arguments657['renderable'] = NULL;
$arguments657['arguments'] = array (
);
$arguments657['optional'] = false;
$arguments657['default'] = NULL;
$arguments657['contentAs'] = NULL;
$arguments657['debug'] = true;
$arguments657['partial'] = 'List/Item';
// Rendering Array
$array659 = array();
$array660 = array (
);$array659['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array660);
$array661 = array (
);$array659['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array661);
$array662 = array (
);$array659['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array662);
$arguments657['arguments'] = $array659;

$output656 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output656 .= '
                            ';
return $output656;
};
$arguments653 = array();
$arguments653['each'] = NULL;
$arguments653['as'] = NULL;
$arguments653['key'] = NULL;
$arguments653['reverse'] = false;
$arguments653['iteration'] = NULL;
$array655 = array (
);$arguments653['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array655);
$arguments653['as'] = 'newsItem';
$arguments653['iteration'] = 'iterator';

$output641 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output641 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
$output668 = '';

$output668 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments669 = array();
$arguments669['section'] = NULL;
$arguments669['partial'] = NULL;
$arguments669['delegate'] = NULL;
$arguments669['renderable'] = NULL;
$arguments669['arguments'] = array (
);
$arguments669['optional'] = false;
$arguments669['default'] = NULL;
$arguments669['contentAs'] = NULL;
$arguments669['debug'] = true;
$arguments669['partial'] = 'List/Pagination';
// Rendering Array
$array671 = array();
$array672 = array (
);$array671['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array672);
$array673 = array (
);$array671['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array673);
$arguments669['arguments'] = $array671;

$output668 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output668 .= '
                        ';
return $output668;
};
$arguments663 = array();
$arguments663['then'] = NULL;
$arguments663['else'] = NULL;
$arguments663['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array665 = array();
$array666 = array (
);$array665['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array666);

$expression667 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments663['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression667(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array665)
					),
					$renderingContext
				);
$arguments663['__thenClosure'] = $renderChildrenClosure664;

$output641 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext);

$output641 .= '
                    ';
return $output641;
};
$arguments639 = array();
$arguments639['if'] = NULL;

$output625 .= '';

$output625 .= '
                ';
return $output625;
};
$arguments576 = array();
$arguments576['then'] = NULL;
$arguments576['else'] = NULL;
$arguments576['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array622 = array();
$array623 = array (
);$array622['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array623);

$expression624 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments576['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression624(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array622)
					),
					$renderingContext
				);
$arguments576['__thenClosure'] = function() use ($renderingContext, $self) {
$output578 = '';

$output578 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments583 = array();
$arguments583['section'] = NULL;
$arguments583['partial'] = NULL;
$arguments583['delegate'] = NULL;
$arguments583['renderable'] = NULL;
$arguments583['arguments'] = array (
);
$arguments583['optional'] = false;
$arguments583['default'] = NULL;
$arguments583['contentAs'] = NULL;
$arguments583['debug'] = true;
$arguments583['partial'] = 'List/Item';
// Rendering Array
$array585 = array();
$array586 = array (
);$array585['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array586);
$array587 = array (
);$array585['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array587);
$array588 = array (
);$array585['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array588);
$arguments583['arguments'] = $array585;

$output582 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output582 .= '
                            ';
return $output582;
};
$arguments579 = array();
$arguments579['each'] = NULL;
$arguments579['as'] = NULL;
$arguments579['key'] = NULL;
$arguments579['reverse'] = false;
$arguments579['iteration'] = NULL;
$array581 = array (
);$arguments579['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array581);
$arguments579['as'] = 'newsItem';
$arguments579['iteration'] = 'iterator';

$output578 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);

$output578 .= '
                            </ul></div>
                    ';
return $output578;
};
$arguments576['__elseClosures'][] = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$output595 = '';

$output595 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments596 = array();
$arguments596['section'] = NULL;
$arguments596['partial'] = NULL;
$arguments596['delegate'] = NULL;
$arguments596['renderable'] = NULL;
$arguments596['arguments'] = array (
);
$arguments596['optional'] = false;
$arguments596['default'] = NULL;
$arguments596['contentAs'] = NULL;
$arguments596['debug'] = true;
$arguments596['partial'] = 'List/Pagination';
// Rendering Array
$array598 = array();
$array599 = array (
);$array598['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array599);
$array600 = array (
);$array598['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array600);
$arguments596['arguments'] = $array598;

$output595 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output595 .= '
                        ';
return $output595;
};
$arguments590 = array();
$arguments590['then'] = NULL;
$arguments590['else'] = NULL;
$arguments590['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array592 = array();
$array593 = array (
);$array592['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array593);

$expression594 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments590['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression594(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array592)
					),
					$renderingContext
				);
$arguments590['__thenClosure'] = $renderChildrenClosure591;

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output589 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments605 = array();
$arguments605['section'] = NULL;
$arguments605['partial'] = NULL;
$arguments605['delegate'] = NULL;
$arguments605['renderable'] = NULL;
$arguments605['arguments'] = array (
);
$arguments605['optional'] = false;
$arguments605['default'] = NULL;
$arguments605['contentAs'] = NULL;
$arguments605['debug'] = true;
$arguments605['partial'] = 'List/Item';
// Rendering Array
$array607 = array();
$array608 = array (
);$array607['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array608);
$array609 = array (
);$array607['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array609);
$array610 = array (
);$array607['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array610);
$arguments605['arguments'] = $array607;

$output604 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output604 .= '
                            ';
return $output604;
};
$arguments601 = array();
$arguments601['each'] = NULL;
$arguments601['as'] = NULL;
$arguments601['key'] = NULL;
$arguments601['reverse'] = false;
$arguments601['iteration'] = NULL;
$array603 = array (
);$arguments601['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array603);
$arguments601['as'] = 'newsItem';
$arguments601['iteration'] = 'iterator';

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext);

$output589 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$output616 = '';

$output616 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['section'] = NULL;
$arguments617['partial'] = NULL;
$arguments617['delegate'] = NULL;
$arguments617['renderable'] = NULL;
$arguments617['arguments'] = array (
);
$arguments617['optional'] = false;
$arguments617['default'] = NULL;
$arguments617['contentAs'] = NULL;
$arguments617['debug'] = true;
$arguments617['partial'] = 'List/Pagination';
// Rendering Array
$array619 = array();
$array620 = array (
);$array619['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array620);
$array621 = array (
);$array619['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array621);
$arguments617['arguments'] = $array619;

$output616 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output616 .= '
                        ';
return $output616;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array613 = array();
$array614 = array (
);$array613['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array614);

$expression615 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array613)
					),
					$renderingContext
				);
$arguments611['__thenClosure'] = $renderChildrenClosure612;

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output589 .= '
                    ';
return $output589;
};

$output575 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);

$output575 .= '
        ';
return $output575;
};

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
		';
return $output455;
};
$arguments453 = array();

$output452 .= '';

$output452 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
$output900 = '';

$output900 .= '
			<div class="alert ">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure902 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments901 = array();
$arguments901['key'] = NULL;
$arguments901['id'] = NULL;
$arguments901['default'] = NULL;
$arguments901['arguments'] = NULL;
$arguments901['extensionName'] = NULL;
$arguments901['languageKey'] = NULL;
$arguments901['alternativeLanguageKeys'] = NULL;
$arguments901['key'] = 'list_nonewsfound';

$output900 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments901, $renderChildrenClosure902, $renderingContext)]);

$output900 .= '
			</div>
		';
return $output900;
};
$arguments898 = array();
$arguments898['if'] = NULL;

$output452 .= '';

$output452 .= '
	';
return $output452;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array449 = array();
$array450 = array (
);$array449['0'] = $renderingContext->getVariableProvider()->getByPath('news', $array450);

$expression451 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression451(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array449)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['then'] = NULL;
$arguments229['else'] = NULL;
$arguments229['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array232);
$array231['1'] = ' == 1';

$expression233 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments229['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments229['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '" id="news-container-';
$array234 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array234)]);

$output228 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['section'] = NULL;
$arguments298['partial'] = NULL;
$arguments298['delegate'] = NULL;
$arguments298['renderable'] = NULL;
$arguments298['arguments'] = array (
);
$arguments298['optional'] = false;
$arguments298['default'] = NULL;
$arguments298['contentAs'] = NULL;
$arguments298['debug'] = true;
$arguments298['partial'] = 'List/Item';
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array301);
$array302 = array (
);$array300['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array302);
$array303 = array (
);$array300['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array303);
$arguments298['arguments'] = $array300;

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output297 .= '
                                ';
return $output297;
};
$arguments294 = array();
$arguments294['each'] = NULL;
$arguments294['as'] = NULL;
$arguments294['key'] = NULL;
$arguments294['reverse'] = false;
$arguments294['iteration'] = NULL;
$array296 = array (
);$arguments294['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array296);
$arguments294['as'] = 'newsItem';
$arguments294['iteration'] = 'iterator';

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments304 = array();
$arguments304['additionalAttributes'] = NULL;
$arguments304['data'] = NULL;
$arguments304['aria'] = NULL;
$arguments304['class'] = NULL;
$arguments304['dir'] = NULL;
$arguments304['id'] = NULL;
$arguments304['lang'] = NULL;
$arguments304['style'] = NULL;
$arguments304['title'] = NULL;
$arguments304['accesskey'] = NULL;
$arguments304['tabindex'] = NULL;
$arguments304['onclick'] = NULL;
$arguments304['async'] = NULL;
$arguments304['crossorigin'] = NULL;
$arguments304['defer'] = NULL;
$arguments304['integrity'] = NULL;
$arguments304['nomodule'] = NULL;
$arguments304['nonce'] = NULL;
$arguments304['referrerpolicy'] = NULL;
$arguments304['src'] = NULL;
$arguments304['type'] = NULL;
$arguments304['identifier'] = NULL;
$arguments304['priority'] = false;
$arguments304['identifier'] = 'news-card-list-js';

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output293 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['aria'] = NULL;
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['as'] = NULL;
$arguments306['crossorigin'] = NULL;
$arguments306['disabled'] = NULL;
$arguments306['href'] = NULL;
$arguments306['hreflang'] = NULL;
$arguments306['importance'] = NULL;
$arguments306['integrity'] = NULL;
$arguments306['media'] = NULL;
$arguments306['referrerpolicy'] = NULL;
$arguments306['rel'] = NULL;
$arguments306['sizes'] = NULL;
$arguments306['type'] = NULL;
$arguments306['nonce'] = NULL;
$arguments306['identifier'] = NULL;
$arguments306['priority'] = false;
$arguments306['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array308['0'] = 'true';

$expression309 = function($context) {return TRUE;};
$arguments306['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression309(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output293 .= '

                        ';
return $output293;
};
$arguments291 = array();

$output290 .= '';

$output290 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['section'] = NULL;
$arguments319['partial'] = NULL;
$arguments319['delegate'] = NULL;
$arguments319['renderable'] = NULL;
$arguments319['arguments'] = array (
);
$arguments319['optional'] = false;
$arguments319['default'] = NULL;
$arguments319['contentAs'] = NULL;
$arguments319['debug'] = true;
$arguments319['partial'] = 'List/Pagination';
// Rendering Array
$array321 = array();
$array322 = array (
);$array321['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array322);
$array323 = array (
);$array321['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array323);
$arguments319['arguments'] = $array321;

$output318 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '
                            ';
return $output318;
};
$arguments313 = array();
$arguments313['then'] = NULL;
$arguments313['else'] = NULL;
$arguments313['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array316);

$expression317 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments313['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array315)
					),
					$renderingContext
				);
$arguments313['__thenClosure'] = $renderChildrenClosure314;

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['section'] = NULL;
$arguments328['partial'] = NULL;
$arguments328['delegate'] = NULL;
$arguments328['renderable'] = NULL;
$arguments328['arguments'] = array (
);
$arguments328['optional'] = false;
$arguments328['default'] = NULL;
$arguments328['contentAs'] = NULL;
$arguments328['debug'] = true;
$arguments328['partial'] = 'List/Item';
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array331);
$array332 = array (
);$array330['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array332);
$array333 = array (
);$array330['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array333);
$arguments328['arguments'] = $array330;

$output327 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
                                ';
return $output327;
};
$arguments324 = array();
$arguments324['each'] = NULL;
$arguments324['as'] = NULL;
$arguments324['key'] = NULL;
$arguments324['reverse'] = false;
$arguments324['iteration'] = NULL;
$array326 = array (
);$arguments324['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array326);
$arguments324['as'] = 'newsItem';
$arguments324['iteration'] = 'iterator';

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output312 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments340 = array();
$arguments340['section'] = NULL;
$arguments340['partial'] = NULL;
$arguments340['delegate'] = NULL;
$arguments340['renderable'] = NULL;
$arguments340['arguments'] = array (
);
$arguments340['optional'] = false;
$arguments340['default'] = NULL;
$arguments340['contentAs'] = NULL;
$arguments340['debug'] = true;
$arguments340['partial'] = 'List/Pagination';
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array343);
$array344 = array (
);$array342['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array344);
$arguments340['arguments'] = $array342;

$output339 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output339 .= '
                            ';
return $output339;
};
$arguments334 = array();
$arguments334['then'] = NULL;
$arguments334['else'] = NULL;
$arguments334['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array337);

$expression338 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments334['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression338(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array336)
					),
					$renderingContext
				);
$arguments334['__thenClosure'] = $renderChildrenClosure335;

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output312 .= '
                        ';
return $output312;
};
$arguments310 = array();
$arguments310['if'] = NULL;

$output290 .= '';

$output290 .= '
                    ';
return $output290;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['section'] = NULL;
$arguments242['partial'] = NULL;
$arguments242['delegate'] = NULL;
$arguments242['renderable'] = NULL;
$arguments242['arguments'] = array (
);
$arguments242['optional'] = false;
$arguments242['default'] = NULL;
$arguments242['contentAs'] = NULL;
$arguments242['debug'] = true;
$arguments242['partial'] = 'List/Item';
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array245);
$array246 = array (
);$array244['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array246);
$array247 = array (
);$array244['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array247);
$arguments242['arguments'] = $array244;

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
                                ';
return $output241;
};
$arguments238 = array();
$arguments238['each'] = NULL;
$arguments238['as'] = NULL;
$arguments238['key'] = NULL;
$arguments238['reverse'] = false;
$arguments238['iteration'] = NULL;
$array240 = array (
);$arguments238['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array240);
$arguments238['as'] = 'newsItem';
$arguments238['iteration'] = 'iterator';

$output237 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments248 = array();
$arguments248['additionalAttributes'] = NULL;
$arguments248['data'] = NULL;
$arguments248['aria'] = NULL;
$arguments248['class'] = NULL;
$arguments248['dir'] = NULL;
$arguments248['id'] = NULL;
$arguments248['lang'] = NULL;
$arguments248['style'] = NULL;
$arguments248['title'] = NULL;
$arguments248['accesskey'] = NULL;
$arguments248['tabindex'] = NULL;
$arguments248['onclick'] = NULL;
$arguments248['async'] = NULL;
$arguments248['crossorigin'] = NULL;
$arguments248['defer'] = NULL;
$arguments248['integrity'] = NULL;
$arguments248['nomodule'] = NULL;
$arguments248['nonce'] = NULL;
$arguments248['referrerpolicy'] = NULL;
$arguments248['src'] = NULL;
$arguments248['type'] = NULL;
$arguments248['identifier'] = NULL;
$arguments248['priority'] = false;
$arguments248['identifier'] = 'news-card-list-js';

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output237 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments250 = array();
$arguments250['additionalAttributes'] = NULL;
$arguments250['data'] = NULL;
$arguments250['aria'] = NULL;
$arguments250['class'] = NULL;
$arguments250['dir'] = NULL;
$arguments250['id'] = NULL;
$arguments250['lang'] = NULL;
$arguments250['style'] = NULL;
$arguments250['title'] = NULL;
$arguments250['accesskey'] = NULL;
$arguments250['tabindex'] = NULL;
$arguments250['onclick'] = NULL;
$arguments250['as'] = NULL;
$arguments250['crossorigin'] = NULL;
$arguments250['disabled'] = NULL;
$arguments250['href'] = NULL;
$arguments250['hreflang'] = NULL;
$arguments250['importance'] = NULL;
$arguments250['integrity'] = NULL;
$arguments250['media'] = NULL;
$arguments250['referrerpolicy'] = NULL;
$arguments250['rel'] = NULL;
$arguments250['sizes'] = NULL;
$arguments250['type'] = NULL;
$arguments250['nonce'] = NULL;
$arguments250['identifier'] = NULL;
$arguments250['priority'] = false;
$arguments250['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array252['0'] = 'true';

$expression253 = function($context) {return TRUE;};
$arguments250['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output237 .= '

                        ';
return $output237;
};
$arguments235['__elseClosures'][] = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['section'] = NULL;
$arguments261['partial'] = NULL;
$arguments261['delegate'] = NULL;
$arguments261['renderable'] = NULL;
$arguments261['arguments'] = array (
);
$arguments261['optional'] = false;
$arguments261['default'] = NULL;
$arguments261['contentAs'] = NULL;
$arguments261['debug'] = true;
$arguments261['partial'] = 'List/Pagination';
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array264);
$array265 = array (
);$array263['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array265);
$arguments261['arguments'] = $array263;

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
                            ';
return $output260;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array258);

$expression259 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
$arguments255['__thenClosure'] = $renderChildrenClosure256;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['section'] = NULL;
$arguments270['partial'] = NULL;
$arguments270['delegate'] = NULL;
$arguments270['renderable'] = NULL;
$arguments270['arguments'] = array (
);
$arguments270['optional'] = false;
$arguments270['default'] = NULL;
$arguments270['contentAs'] = NULL;
$arguments270['debug'] = true;
$arguments270['partial'] = 'List/Item';
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array273);
$array274 = array (
);$array272['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array274);
$array275 = array (
);$array272['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array275);
$arguments270['arguments'] = $array272;

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output269 .= '
                                ';
return $output269;
};
$arguments266 = array();
$arguments266['each'] = NULL;
$arguments266['as'] = NULL;
$arguments266['key'] = NULL;
$arguments266['reverse'] = false;
$arguments266['iteration'] = NULL;
$array268 = array (
);$arguments266['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array268);
$arguments266['as'] = 'newsItem';
$arguments266['iteration'] = 'iterator';

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output254 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['section'] = NULL;
$arguments282['partial'] = NULL;
$arguments282['delegate'] = NULL;
$arguments282['renderable'] = NULL;
$arguments282['arguments'] = array (
);
$arguments282['optional'] = false;
$arguments282['default'] = NULL;
$arguments282['contentAs'] = NULL;
$arguments282['debug'] = true;
$arguments282['partial'] = 'List/Pagination';
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array285);
$array286 = array (
);$array284['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array286);
$arguments282['arguments'] = $array284;

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
                            ';
return $output281;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array279);

$expression280 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['__thenClosure'] = $renderChildrenClosure277;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output254 .= '
                        ';
return $output254;
};

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output228 .= '
                </div>
        ';
return $output228;
};
$arguments226 = array();

$output225 .= '';

$output225 .= '       
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['section'] = NULL;
$arguments405['partial'] = NULL;
$arguments405['delegate'] = NULL;
$arguments405['renderable'] = NULL;
$arguments405['arguments'] = array (
);
$arguments405['optional'] = false;
$arguments405['default'] = NULL;
$arguments405['contentAs'] = NULL;
$arguments405['debug'] = true;
$arguments405['partial'] = 'List/Item';
// Rendering Array
$array407 = array();
$array408 = array (
);$array407['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array408);
$array409 = array (
);$array407['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array409);
$array410 = array (
);$array407['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array410);
$arguments405['arguments'] = $array407;

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
                            ';
return $output404;
};
$arguments401 = array();
$arguments401['each'] = NULL;
$arguments401['as'] = NULL;
$arguments401['key'] = NULL;
$arguments401['reverse'] = false;
$arguments401['iteration'] = NULL;
$array403 = array (
);$arguments401['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array403);
$arguments401['as'] = 'newsItem';
$arguments401['iteration'] = 'iterator';

$output400 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output400 .= '
                            </ul></div>
                    ';
return $output400;
};
$arguments398 = array();

$output397 .= '';

$output397 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['section'] = NULL;
$arguments420['partial'] = NULL;
$arguments420['delegate'] = NULL;
$arguments420['renderable'] = NULL;
$arguments420['arguments'] = array (
);
$arguments420['optional'] = false;
$arguments420['default'] = NULL;
$arguments420['contentAs'] = NULL;
$arguments420['debug'] = true;
$arguments420['partial'] = 'List/Pagination';
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array423);
$array424 = array (
);$array422['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array424);
$arguments420['arguments'] = $array422;

$output419 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
                        ';
return $output419;
};
$arguments414 = array();
$arguments414['then'] = NULL;
$arguments414['else'] = NULL;
$arguments414['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array416 = array();
$array417 = array (
);$array416['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array417);

$expression418 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments414['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression418(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array416)
					),
					$renderingContext
				);
$arguments414['__thenClosure'] = $renderChildrenClosure415;

$output413 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output413 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['section'] = NULL;
$arguments429['partial'] = NULL;
$arguments429['delegate'] = NULL;
$arguments429['renderable'] = NULL;
$arguments429['arguments'] = array (
);
$arguments429['optional'] = false;
$arguments429['default'] = NULL;
$arguments429['contentAs'] = NULL;
$arguments429['debug'] = true;
$arguments429['partial'] = 'List/Item';
// Rendering Array
$array431 = array();
$array432 = array (
);$array431['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array432);
$array433 = array (
);$array431['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array433);
$array434 = array (
);$array431['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array434);
$arguments429['arguments'] = $array431;

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output428 .= '
                            ';
return $output428;
};
$arguments425 = array();
$arguments425['each'] = NULL;
$arguments425['as'] = NULL;
$arguments425['key'] = NULL;
$arguments425['reverse'] = false;
$arguments425['iteration'] = NULL;
$array427 = array (
);$arguments425['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array427);
$arguments425['as'] = 'newsItem';
$arguments425['iteration'] = 'iterator';

$output413 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output413 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['section'] = NULL;
$arguments441['partial'] = NULL;
$arguments441['delegate'] = NULL;
$arguments441['renderable'] = NULL;
$arguments441['arguments'] = array (
);
$arguments441['optional'] = false;
$arguments441['default'] = NULL;
$arguments441['contentAs'] = NULL;
$arguments441['debug'] = true;
$arguments441['partial'] = 'List/Pagination';
// Rendering Array
$array443 = array();
$array444 = array (
);$array443['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array444);
$array445 = array (
);$array443['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array445);
$arguments441['arguments'] = $array443;

$output440 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output440 .= '
                        ';
return $output440;
};
$arguments435 = array();
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$arguments435['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array438);

$expression439 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments435['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression439(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array437)
					),
					$renderingContext
				);
$arguments435['__thenClosure'] = $renderChildrenClosure436;

$output413 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output413 .= '
                    ';
return $output413;
};
$arguments411 = array();
$arguments411['if'] = NULL;

$output397 .= '';

$output397 .= '
                ';
return $output397;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array394 = array();
$array395 = array (
);$array394['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array395);

$expression396 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression396(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array394)
					),
					$renderingContext
				);
$arguments348['__thenClosure'] = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['section'] = NULL;
$arguments355['partial'] = NULL;
$arguments355['delegate'] = NULL;
$arguments355['renderable'] = NULL;
$arguments355['arguments'] = array (
);
$arguments355['optional'] = false;
$arguments355['default'] = NULL;
$arguments355['contentAs'] = NULL;
$arguments355['debug'] = true;
$arguments355['partial'] = 'List/Item';
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array358);
$array359 = array (
);$array357['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array359);
$array360 = array (
);$array357['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array360);
$arguments355['arguments'] = $array357;

$output354 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
                            ';
return $output354;
};
$arguments351 = array();
$arguments351['each'] = NULL;
$arguments351['as'] = NULL;
$arguments351['key'] = NULL;
$arguments351['reverse'] = false;
$arguments351['iteration'] = NULL;
$array353 = array (
);$arguments351['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array353);
$arguments351['as'] = 'newsItem';
$arguments351['iteration'] = 'iterator';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
                            </ul></div>
                    ';
return $output350;
};
$arguments348['__elseClosures'][] = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['section'] = NULL;
$arguments368['partial'] = NULL;
$arguments368['delegate'] = NULL;
$arguments368['renderable'] = NULL;
$arguments368['arguments'] = array (
);
$arguments368['optional'] = false;
$arguments368['default'] = NULL;
$arguments368['contentAs'] = NULL;
$arguments368['debug'] = true;
$arguments368['partial'] = 'List/Pagination';
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array371);
$array372 = array (
);$array370['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array372);
$arguments368['arguments'] = $array370;

$output367 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
                        ';
return $output367;
};
$arguments362 = array();
$arguments362['then'] = NULL;
$arguments362['else'] = NULL;
$arguments362['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = array();
$array365 = array (
);$array364['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array365);

$expression366 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments362['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
$arguments362['__thenClosure'] = $renderChildrenClosure363;

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['section'] = NULL;
$arguments377['partial'] = NULL;
$arguments377['delegate'] = NULL;
$arguments377['renderable'] = NULL;
$arguments377['arguments'] = array (
);
$arguments377['optional'] = false;
$arguments377['default'] = NULL;
$arguments377['contentAs'] = NULL;
$arguments377['debug'] = true;
$arguments377['partial'] = 'List/Item';
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array380);
$array381 = array (
);$array379['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array381);
$array382 = array (
);$array379['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array382);
$arguments377['arguments'] = $array379;

$output376 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output376 .= '
                            ';
return $output376;
};
$arguments373 = array();
$arguments373['each'] = NULL;
$arguments373['as'] = NULL;
$arguments373['key'] = NULL;
$arguments373['reverse'] = false;
$arguments373['iteration'] = NULL;
$array375 = array (
);$arguments373['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array375);
$arguments373['as'] = 'newsItem';
$arguments373['iteration'] = 'iterator';

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output361 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['section'] = NULL;
$arguments389['partial'] = NULL;
$arguments389['delegate'] = NULL;
$arguments389['renderable'] = NULL;
$arguments389['arguments'] = array (
);
$arguments389['optional'] = false;
$arguments389['default'] = NULL;
$arguments389['contentAs'] = NULL;
$arguments389['debug'] = true;
$arguments389['partial'] = 'List/Pagination';
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array392);
$array393 = array (
);$array391['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array393);
$arguments389['arguments'] = $array391;

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '
                        ';
return $output388;
};
$arguments383 = array();
$arguments383['then'] = NULL;
$arguments383['else'] = NULL;
$arguments383['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array386 = array (
);$array385['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array386);

$expression387 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments383['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);
$arguments383['__thenClosure'] = $renderChildrenClosure384;

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output361 .= '
                    ';
return $output361;
};

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '
        ';
return $output347;
};
$arguments345 = array();
$arguments345['if'] = NULL;

$output225 .= '';

$output225 .= '
        ';
return $output225;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array223);
$array222['1'] = ' == 1';

$expression224 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array10);
$array9['1'] = ' == 1';

$expression11 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '" id="news-container-';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array12)]);

$output6 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
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
$arguments76['partial'] = 'List/Item';
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array79);
$array80 = array (
);$array78['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array80);
$array81 = array (
);$array78['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array81);
$arguments76['arguments'] = $array78;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
                                ';
return $output75;
};
$arguments72 = array();
$arguments72['each'] = NULL;
$arguments72['as'] = NULL;
$arguments72['key'] = NULL;
$arguments72['reverse'] = false;
$arguments72['iteration'] = NULL;
$array74 = array (
);$arguments72['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array74);
$arguments72['as'] = 'newsItem';
$arguments72['iteration'] = 'iterator';

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['aria'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['async'] = NULL;
$arguments82['crossorigin'] = NULL;
$arguments82['defer'] = NULL;
$arguments82['integrity'] = NULL;
$arguments82['nomodule'] = NULL;
$arguments82['nonce'] = NULL;
$arguments82['referrerpolicy'] = NULL;
$arguments82['src'] = NULL;
$arguments82['type'] = NULL;
$arguments82['identifier'] = NULL;
$arguments82['priority'] = false;
$arguments82['identifier'] = 'news-card-list-js';

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output71 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['aria'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['as'] = NULL;
$arguments84['crossorigin'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['href'] = NULL;
$arguments84['hreflang'] = NULL;
$arguments84['importance'] = NULL;
$arguments84['integrity'] = NULL;
$arguments84['media'] = NULL;
$arguments84['referrerpolicy'] = NULL;
$arguments84['rel'] = NULL;
$arguments84['sizes'] = NULL;
$arguments84['type'] = NULL;
$arguments84['nonce'] = NULL;
$arguments84['identifier'] = NULL;
$arguments84['priority'] = false;
$arguments84['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array86['0'] = 'true';

$expression87 = function($context) {return TRUE;};
$arguments84['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output71 .= '

                        ';
return $output71;
};
$arguments69 = array();

$output68 .= '';

$output68 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'List/Pagination';
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array100);
$array101 = array (
);$array99['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array101);
$arguments97['arguments'] = $array99;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
                            ';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['partial'] = 'List/Item';
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array109);
$array110 = array (
);$array108['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array110);
$array111 = array (
);$array108['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array111);
$arguments106['arguments'] = $array108;

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                                ';
return $output105;
};
$arguments102 = array();
$arguments102['each'] = NULL;
$arguments102['as'] = NULL;
$arguments102['key'] = NULL;
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$array104 = array (
);$arguments102['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array104);
$arguments102['as'] = 'newsItem';
$arguments102['iteration'] = 'iterator';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output90 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['section'] = NULL;
$arguments118['partial'] = NULL;
$arguments118['delegate'] = NULL;
$arguments118['renderable'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['optional'] = false;
$arguments118['default'] = NULL;
$arguments118['contentAs'] = NULL;
$arguments118['debug'] = true;
$arguments118['partial'] = 'List/Pagination';
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array121);
$array122 = array (
);$array120['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array122);
$arguments118['arguments'] = $array120;

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                            ';
return $output117;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output90 .= '
                        ';
return $output90;
};
$arguments88 = array();
$arguments88['if'] = NULL;

$output68 .= '';

$output68 .= '
                    ';
return $output68;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'List/Item';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array23);
$array24 = array (
);$array22['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array24);
$array25 = array (
);$array22['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array25);
$arguments20['arguments'] = $array22;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                                ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array18);
$arguments16['as'] = 'newsItem';
$arguments16['iteration'] = 'iterator';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['aria'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['async'] = NULL;
$arguments26['crossorigin'] = NULL;
$arguments26['defer'] = NULL;
$arguments26['integrity'] = NULL;
$arguments26['nomodule'] = NULL;
$arguments26['nonce'] = NULL;
$arguments26['referrerpolicy'] = NULL;
$arguments26['src'] = NULL;
$arguments26['type'] = NULL;
$arguments26['identifier'] = NULL;
$arguments26['priority'] = false;
$arguments26['identifier'] = 'news-card-list-js';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output15 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['as'] = NULL;
$arguments28['crossorigin'] = NULL;
$arguments28['disabled'] = NULL;
$arguments28['href'] = NULL;
$arguments28['hreflang'] = NULL;
$arguments28['importance'] = NULL;
$arguments28['integrity'] = NULL;
$arguments28['media'] = NULL;
$arguments28['referrerpolicy'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['sizes'] = NULL;
$arguments28['type'] = NULL;
$arguments28['nonce'] = NULL;
$arguments28['identifier'] = NULL;
$arguments28['priority'] = false;
$arguments28['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array30['0'] = 'true';

$expression31 = function($context) {return TRUE;};
$arguments28['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output15 .= '

                        ';
return $output15;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$arguments39['partial'] = 'List/Pagination';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array42);
$array43 = array (
);$array41['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array43);
$arguments39['arguments'] = $array41;

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                            ';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['partial'] = 'List/Item';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array51);
$array52 = array (
);$array50['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array52);
$array53 = array (
);$array50['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array53);
$arguments48['arguments'] = $array50;

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                                ';
return $output47;
};
$arguments44 = array();
$arguments44['each'] = NULL;
$arguments44['as'] = NULL;
$arguments44['key'] = NULL;
$arguments44['reverse'] = false;
$arguments44['iteration'] = NULL;
$array46 = array (
);$arguments44['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array46);
$arguments44['as'] = 'newsItem';
$arguments44['iteration'] = 'iterator';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output32 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['section'] = NULL;
$arguments60['partial'] = NULL;
$arguments60['delegate'] = NULL;
$arguments60['renderable'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['optional'] = false;
$arguments60['default'] = NULL;
$arguments60['contentAs'] = NULL;
$arguments60['debug'] = true;
$arguments60['partial'] = 'List/Pagination';
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array63);
$array64 = array (
);$array62['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array64);
$arguments60['arguments'] = $array62;

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                            ';
return $output59;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array57);

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = $renderChildrenClosure55;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output32 .= '
                        ';
return $output32;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
                </div>
        ';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['section'] = NULL;
$arguments181['partial'] = NULL;
$arguments181['delegate'] = NULL;
$arguments181['renderable'] = NULL;
$arguments181['arguments'] = array (
);
$arguments181['optional'] = false;
$arguments181['default'] = NULL;
$arguments181['contentAs'] = NULL;
$arguments181['debug'] = true;
$arguments181['partial'] = 'List/Item';
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array184);
$array185 = array (
);$array183['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array185);
$array186 = array (
);$array183['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array186);
$arguments181['arguments'] = $array183;

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                            ';
return $output180;
};
$arguments177 = array();
$arguments177['each'] = NULL;
$arguments177['as'] = NULL;
$arguments177['key'] = NULL;
$arguments177['reverse'] = false;
$arguments177['iteration'] = NULL;
$array179 = array (
);$arguments177['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array179);
$arguments177['as'] = 'newsItem';
$arguments177['iteration'] = 'iterator';

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
                            </ul></div>
                    ';
return $output176;
};
$arguments174 = array();

$output173 .= '';

$output173 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['section'] = NULL;
$arguments196['partial'] = NULL;
$arguments196['delegate'] = NULL;
$arguments196['renderable'] = NULL;
$arguments196['arguments'] = array (
);
$arguments196['optional'] = false;
$arguments196['default'] = NULL;
$arguments196['contentAs'] = NULL;
$arguments196['debug'] = true;
$arguments196['partial'] = 'List/Pagination';
// Rendering Array
$array198 = array();
$array199 = array (
);$array198['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array199);
$array200 = array (
);$array198['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array200);
$arguments196['arguments'] = $array198;

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
                        ';
return $output195;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['section'] = NULL;
$arguments205['partial'] = NULL;
$arguments205['delegate'] = NULL;
$arguments205['renderable'] = NULL;
$arguments205['arguments'] = array (
);
$arguments205['optional'] = false;
$arguments205['default'] = NULL;
$arguments205['contentAs'] = NULL;
$arguments205['debug'] = true;
$arguments205['partial'] = 'List/Item';
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array208);
$array209 = array (
);$array207['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array209);
$array210 = array (
);$array207['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array210);
$arguments205['arguments'] = $array207;

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
                            ';
return $output204;
};
$arguments201 = array();
$arguments201['each'] = NULL;
$arguments201['as'] = NULL;
$arguments201['key'] = NULL;
$arguments201['reverse'] = false;
$arguments201['iteration'] = NULL;
$array203 = array (
);$arguments201['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array203);
$arguments201['as'] = 'newsItem';
$arguments201['iteration'] = 'iterator';

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output189 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['section'] = NULL;
$arguments217['partial'] = NULL;
$arguments217['delegate'] = NULL;
$arguments217['renderable'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['optional'] = false;
$arguments217['default'] = NULL;
$arguments217['contentAs'] = NULL;
$arguments217['debug'] = true;
$arguments217['partial'] = 'List/Pagination';
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array220);
$array221 = array (
);$array219['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array221);
$arguments217['arguments'] = $array219;

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                        ';
return $output216;
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = $renderChildrenClosure212;

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output189 .= '
                    ';
return $output189;
};
$arguments187 = array();
$arguments187['if'] = NULL;

$output173 .= '';

$output173 .= '
                ';
return $output173;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array171);

$expression172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['section'] = NULL;
$arguments131['partial'] = NULL;
$arguments131['delegate'] = NULL;
$arguments131['renderable'] = NULL;
$arguments131['arguments'] = array (
);
$arguments131['optional'] = false;
$arguments131['default'] = NULL;
$arguments131['contentAs'] = NULL;
$arguments131['debug'] = true;
$arguments131['partial'] = 'List/Item';
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array134);
$array135 = array (
);$array133['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array135);
$array136 = array (
);$array133['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array136);
$arguments131['arguments'] = $array133;

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
                            ';
return $output130;
};
$arguments127 = array();
$arguments127['each'] = NULL;
$arguments127['as'] = NULL;
$arguments127['key'] = NULL;
$arguments127['reverse'] = false;
$arguments127['iteration'] = NULL;
$array129 = array (
);$arguments127['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array129);
$arguments127['as'] = 'newsItem';
$arguments127['iteration'] = 'iterator';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                            </ul></div>
                    ';
return $output126;
};
$arguments124['__elseClosures'][] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['section'] = NULL;
$arguments144['partial'] = NULL;
$arguments144['delegate'] = NULL;
$arguments144['renderable'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['optional'] = false;
$arguments144['default'] = NULL;
$arguments144['contentAs'] = NULL;
$arguments144['debug'] = true;
$arguments144['partial'] = 'List/Pagination';
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array147);
$array148 = array (
);$array146['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array148);
$arguments144['arguments'] = $array146;

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
                        ';
return $output143;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array141);

$expression142 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = $renderChildrenClosure139;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['debug'] = true;
$arguments153['partial'] = 'List/Item';
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array156);
$array157 = array (
);$array155['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array157);
$array158 = array (
);$array155['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array158);
$arguments153['arguments'] = $array155;

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                            ';
return $output152;
};
$arguments149 = array();
$arguments149['each'] = NULL;
$arguments149['as'] = NULL;
$arguments149['key'] = NULL;
$arguments149['reverse'] = false;
$arguments149['iteration'] = NULL;
$array151 = array (
);$arguments149['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array151);
$arguments149['as'] = 'newsItem';
$arguments149['iteration'] = 'iterator';

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output137 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['section'] = NULL;
$arguments165['partial'] = NULL;
$arguments165['delegate'] = NULL;
$arguments165['renderable'] = NULL;
$arguments165['arguments'] = array (
);
$arguments165['optional'] = false;
$arguments165['default'] = NULL;
$arguments165['contentAs'] = NULL;
$arguments165['debug'] = true;
$arguments165['partial'] = 'List/Pagination';
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array168);
$array169 = array (
);$array167['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array169);
$arguments165['arguments'] = $array167;

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
                        ';
return $output164;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output137 .= '
                    ';
return $output137;
};

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
        ';
return $output123;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
			<div class="alert ">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['key'] = NULL;
$arguments447['id'] = NULL;
$arguments447['default'] = NULL;
$arguments447['arguments'] = NULL;
$arguments447['extensionName'] = NULL;
$arguments447['languageKey'] = NULL;
$arguments447['alternativeLanguageKeys'] = NULL;
$arguments447['key'] = 'list_nonewsfound';

$output446 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext)]);

$output446 .= '
			</div>
		';
return $output446;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output903 = '';

$output903 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure905 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments904 = array();
$arguments904['name'] = NULL;
$arguments904['name'] = 'General';

$output903 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output903 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure907 = function() use ($renderingContext, $self) {
return '<!--
	=====================
		Templates/News/List.html
-->';
};
$arguments906 = array();

$output903 .= '';

$output903 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
$output910 = '';

$output910 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
$output1362 = '';

$output1362 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1364 = function() use ($renderingContext, $self) {
$output1365 = '';

$output1365 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1367 = function() use ($renderingContext, $self) {
$output1587 = '';

$output1587 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1589 = function() use ($renderingContext, $self) {
$output1590 = '';

$output1590 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1592 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1591 = array();
$arguments1591['then'] = NULL;
$arguments1591['else'] = NULL;
$arguments1591['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1593 = array();
$array1594 = array (
);$array1593['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1594);
$array1593['1'] = ' == 1';

$expression1595 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1591['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1595(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1593)
					),
					$renderingContext
				);
$arguments1591['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output1590 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1591, $renderChildrenClosure1592, $renderingContext);

$output1590 .= '" id="news-container-';
$array1596 = array (
);
$output1590 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array1596)]);

$output1590 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1598 = function() use ($renderingContext, $self) {
$output1652 = '';

$output1652 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1654 = function() use ($renderingContext, $self) {
$output1655 = '';

$output1655 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1657 = function() use ($renderingContext, $self) {
$output1659 = '';

$output1659 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1661 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1660 = array();
$arguments1660['section'] = NULL;
$arguments1660['partial'] = NULL;
$arguments1660['delegate'] = NULL;
$arguments1660['renderable'] = NULL;
$arguments1660['arguments'] = array (
);
$arguments1660['optional'] = false;
$arguments1660['default'] = NULL;
$arguments1660['contentAs'] = NULL;
$arguments1660['debug'] = true;
$arguments1660['partial'] = 'List/Item';
// Rendering Array
$array1662 = array();
$array1663 = array (
);$array1662['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1663);
$array1664 = array (
);$array1662['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1664);
$array1665 = array (
);$array1662['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1665);
$arguments1660['arguments'] = $array1662;

$output1659 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1660, $renderChildrenClosure1661, $renderingContext);

$output1659 .= '
                                ';
return $output1659;
};
$arguments1656 = array();
$arguments1656['each'] = NULL;
$arguments1656['as'] = NULL;
$arguments1656['key'] = NULL;
$arguments1656['reverse'] = false;
$arguments1656['iteration'] = NULL;
$array1658 = array (
);$arguments1656['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1658);
$arguments1656['as'] = 'newsItem';
$arguments1656['iteration'] = 'iterator';

$output1655 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1656, $renderChildrenClosure1657, $renderingContext);

$output1655 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1667 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments1666 = array();
$arguments1666['additionalAttributes'] = NULL;
$arguments1666['data'] = NULL;
$arguments1666['aria'] = NULL;
$arguments1666['class'] = NULL;
$arguments1666['dir'] = NULL;
$arguments1666['id'] = NULL;
$arguments1666['lang'] = NULL;
$arguments1666['style'] = NULL;
$arguments1666['title'] = NULL;
$arguments1666['accesskey'] = NULL;
$arguments1666['tabindex'] = NULL;
$arguments1666['onclick'] = NULL;
$arguments1666['async'] = NULL;
$arguments1666['crossorigin'] = NULL;
$arguments1666['defer'] = NULL;
$arguments1666['integrity'] = NULL;
$arguments1666['nomodule'] = NULL;
$arguments1666['nonce'] = NULL;
$arguments1666['referrerpolicy'] = NULL;
$arguments1666['src'] = NULL;
$arguments1666['type'] = NULL;
$arguments1666['identifier'] = NULL;
$arguments1666['priority'] = false;
$arguments1666['identifier'] = 'news-card-list-js';

$output1655 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1666, $renderChildrenClosure1667, $renderingContext);

$output1655 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1669 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments1668 = array();
$arguments1668['additionalAttributes'] = NULL;
$arguments1668['data'] = NULL;
$arguments1668['aria'] = NULL;
$arguments1668['class'] = NULL;
$arguments1668['dir'] = NULL;
$arguments1668['id'] = NULL;
$arguments1668['lang'] = NULL;
$arguments1668['style'] = NULL;
$arguments1668['title'] = NULL;
$arguments1668['accesskey'] = NULL;
$arguments1668['tabindex'] = NULL;
$arguments1668['onclick'] = NULL;
$arguments1668['as'] = NULL;
$arguments1668['crossorigin'] = NULL;
$arguments1668['disabled'] = NULL;
$arguments1668['href'] = NULL;
$arguments1668['hreflang'] = NULL;
$arguments1668['importance'] = NULL;
$arguments1668['integrity'] = NULL;
$arguments1668['media'] = NULL;
$arguments1668['referrerpolicy'] = NULL;
$arguments1668['rel'] = NULL;
$arguments1668['sizes'] = NULL;
$arguments1668['type'] = NULL;
$arguments1668['nonce'] = NULL;
$arguments1668['identifier'] = NULL;
$arguments1668['priority'] = false;
$arguments1668['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array1670 = array();
$array1670['0'] = 'true';

$expression1671 = function($context) {return TRUE;};
$arguments1668['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1671(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1670)
					),
					$renderingContext
				);

$output1655 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1668, $renderChildrenClosure1669, $renderingContext);

$output1655 .= '

                        ';
return $output1655;
};
$arguments1653 = array();

$output1652 .= '';

$output1652 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1673 = function() use ($renderingContext, $self) {
$output1674 = '';

$output1674 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1676 = function() use ($renderingContext, $self) {
$output1680 = '';

$output1680 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1681 = array();
$arguments1681['section'] = NULL;
$arguments1681['partial'] = NULL;
$arguments1681['delegate'] = NULL;
$arguments1681['renderable'] = NULL;
$arguments1681['arguments'] = array (
);
$arguments1681['optional'] = false;
$arguments1681['default'] = NULL;
$arguments1681['contentAs'] = NULL;
$arguments1681['debug'] = true;
$arguments1681['partial'] = 'List/Pagination';
// Rendering Array
$array1683 = array();
$array1684 = array (
);$array1683['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1684);
$array1685 = array (
);$array1683['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1685);
$arguments1681['arguments'] = $array1683;

$output1680 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1681, $renderChildrenClosure1682, $renderingContext);

$output1680 .= '
                            ';
return $output1680;
};
$arguments1675 = array();
$arguments1675['then'] = NULL;
$arguments1675['else'] = NULL;
$arguments1675['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1677 = array();
$array1678 = array (
);$array1677['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1678);

$expression1679 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1675['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1679(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1677)
					),
					$renderingContext
				);
$arguments1675['__thenClosure'] = $renderChildrenClosure1676;

$output1674 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1675, $renderChildrenClosure1676, $renderingContext);

$output1674 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1687 = function() use ($renderingContext, $self) {
$output1689 = '';

$output1689 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1690 = array();
$arguments1690['section'] = NULL;
$arguments1690['partial'] = NULL;
$arguments1690['delegate'] = NULL;
$arguments1690['renderable'] = NULL;
$arguments1690['arguments'] = array (
);
$arguments1690['optional'] = false;
$arguments1690['default'] = NULL;
$arguments1690['contentAs'] = NULL;
$arguments1690['debug'] = true;
$arguments1690['partial'] = 'List/Item';
// Rendering Array
$array1692 = array();
$array1693 = array (
);$array1692['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1693);
$array1694 = array (
);$array1692['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1694);
$array1695 = array (
);$array1692['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1695);
$arguments1690['arguments'] = $array1692;

$output1689 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1690, $renderChildrenClosure1691, $renderingContext);

$output1689 .= '
                                ';
return $output1689;
};
$arguments1686 = array();
$arguments1686['each'] = NULL;
$arguments1686['as'] = NULL;
$arguments1686['key'] = NULL;
$arguments1686['reverse'] = false;
$arguments1686['iteration'] = NULL;
$array1688 = array (
);$arguments1686['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1688);
$arguments1686['as'] = 'newsItem';
$arguments1686['iteration'] = 'iterator';

$output1674 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1686, $renderChildrenClosure1687, $renderingContext);

$output1674 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1697 = function() use ($renderingContext, $self) {
$output1701 = '';

$output1701 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1703 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1702 = array();
$arguments1702['section'] = NULL;
$arguments1702['partial'] = NULL;
$arguments1702['delegate'] = NULL;
$arguments1702['renderable'] = NULL;
$arguments1702['arguments'] = array (
);
$arguments1702['optional'] = false;
$arguments1702['default'] = NULL;
$arguments1702['contentAs'] = NULL;
$arguments1702['debug'] = true;
$arguments1702['partial'] = 'List/Pagination';
// Rendering Array
$array1704 = array();
$array1705 = array (
);$array1704['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1705);
$array1706 = array (
);$array1704['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1706);
$arguments1702['arguments'] = $array1704;

$output1701 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1702, $renderChildrenClosure1703, $renderingContext);

$output1701 .= '
                            ';
return $output1701;
};
$arguments1696 = array();
$arguments1696['then'] = NULL;
$arguments1696['else'] = NULL;
$arguments1696['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1698 = array();
$array1699 = array (
);$array1698['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1699);

$expression1700 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1696['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1700(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1698)
					),
					$renderingContext
				);
$arguments1696['__thenClosure'] = $renderChildrenClosure1697;

$output1674 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1696, $renderChildrenClosure1697, $renderingContext);

$output1674 .= '
                        ';
return $output1674;
};
$arguments1672 = array();
$arguments1672['if'] = NULL;

$output1652 .= '';

$output1652 .= '
                    ';
return $output1652;
};
$arguments1597 = array();
$arguments1597['then'] = NULL;
$arguments1597['else'] = NULL;
$arguments1597['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1649 = array();
$array1650 = array (
);$array1649['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1650);

$expression1651 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1597['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1651(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1649)
					),
					$renderingContext
				);
$arguments1597['__thenClosure'] = function() use ($renderingContext, $self) {
$output1599 = '';

$output1599 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1601 = function() use ($renderingContext, $self) {
$output1603 = '';

$output1603 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1604 = array();
$arguments1604['section'] = NULL;
$arguments1604['partial'] = NULL;
$arguments1604['delegate'] = NULL;
$arguments1604['renderable'] = NULL;
$arguments1604['arguments'] = array (
);
$arguments1604['optional'] = false;
$arguments1604['default'] = NULL;
$arguments1604['contentAs'] = NULL;
$arguments1604['debug'] = true;
$arguments1604['partial'] = 'List/Item';
// Rendering Array
$array1606 = array();
$array1607 = array (
);$array1606['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1607);
$array1608 = array (
);$array1606['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1608);
$array1609 = array (
);$array1606['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1609);
$arguments1604['arguments'] = $array1606;

$output1603 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1604, $renderChildrenClosure1605, $renderingContext);

$output1603 .= '
                                ';
return $output1603;
};
$arguments1600 = array();
$arguments1600['each'] = NULL;
$arguments1600['as'] = NULL;
$arguments1600['key'] = NULL;
$arguments1600['reverse'] = false;
$arguments1600['iteration'] = NULL;
$array1602 = array (
);$arguments1600['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1602);
$arguments1600['as'] = 'newsItem';
$arguments1600['iteration'] = 'iterator';

$output1599 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1600, $renderChildrenClosure1601, $renderingContext);

$output1599 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1611 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments1610 = array();
$arguments1610['additionalAttributes'] = NULL;
$arguments1610['data'] = NULL;
$arguments1610['aria'] = NULL;
$arguments1610['class'] = NULL;
$arguments1610['dir'] = NULL;
$arguments1610['id'] = NULL;
$arguments1610['lang'] = NULL;
$arguments1610['style'] = NULL;
$arguments1610['title'] = NULL;
$arguments1610['accesskey'] = NULL;
$arguments1610['tabindex'] = NULL;
$arguments1610['onclick'] = NULL;
$arguments1610['async'] = NULL;
$arguments1610['crossorigin'] = NULL;
$arguments1610['defer'] = NULL;
$arguments1610['integrity'] = NULL;
$arguments1610['nomodule'] = NULL;
$arguments1610['nonce'] = NULL;
$arguments1610['referrerpolicy'] = NULL;
$arguments1610['src'] = NULL;
$arguments1610['type'] = NULL;
$arguments1610['identifier'] = NULL;
$arguments1610['priority'] = false;
$arguments1610['identifier'] = 'news-card-list-js';

$output1599 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1610, $renderChildrenClosure1611, $renderingContext);

$output1599 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1613 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments1612 = array();
$arguments1612['additionalAttributes'] = NULL;
$arguments1612['data'] = NULL;
$arguments1612['aria'] = NULL;
$arguments1612['class'] = NULL;
$arguments1612['dir'] = NULL;
$arguments1612['id'] = NULL;
$arguments1612['lang'] = NULL;
$arguments1612['style'] = NULL;
$arguments1612['title'] = NULL;
$arguments1612['accesskey'] = NULL;
$arguments1612['tabindex'] = NULL;
$arguments1612['onclick'] = NULL;
$arguments1612['as'] = NULL;
$arguments1612['crossorigin'] = NULL;
$arguments1612['disabled'] = NULL;
$arguments1612['href'] = NULL;
$arguments1612['hreflang'] = NULL;
$arguments1612['importance'] = NULL;
$arguments1612['integrity'] = NULL;
$arguments1612['media'] = NULL;
$arguments1612['referrerpolicy'] = NULL;
$arguments1612['rel'] = NULL;
$arguments1612['sizes'] = NULL;
$arguments1612['type'] = NULL;
$arguments1612['nonce'] = NULL;
$arguments1612['identifier'] = NULL;
$arguments1612['priority'] = false;
$arguments1612['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array1614 = array();
$array1614['0'] = 'true';

$expression1615 = function($context) {return TRUE;};
$arguments1612['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1614)
					),
					$renderingContext
				);

$output1599 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1612, $renderChildrenClosure1613, $renderingContext);

$output1599 .= '

                        ';
return $output1599;
};
$arguments1597['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1616 = '';

$output1616 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1618 = function() use ($renderingContext, $self) {
$output1622 = '';

$output1622 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1623 = array();
$arguments1623['section'] = NULL;
$arguments1623['partial'] = NULL;
$arguments1623['delegate'] = NULL;
$arguments1623['renderable'] = NULL;
$arguments1623['arguments'] = array (
);
$arguments1623['optional'] = false;
$arguments1623['default'] = NULL;
$arguments1623['contentAs'] = NULL;
$arguments1623['debug'] = true;
$arguments1623['partial'] = 'List/Pagination';
// Rendering Array
$array1625 = array();
$array1626 = array (
);$array1625['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1626);
$array1627 = array (
);$array1625['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1627);
$arguments1623['arguments'] = $array1625;

$output1622 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1623, $renderChildrenClosure1624, $renderingContext);

$output1622 .= '
                            ';
return $output1622;
};
$arguments1617 = array();
$arguments1617['then'] = NULL;
$arguments1617['else'] = NULL;
$arguments1617['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1619 = array();
$array1620 = array (
);$array1619['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1620);

$expression1621 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1617['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1621(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1619)
					),
					$renderingContext
				);
$arguments1617['__thenClosure'] = $renderChildrenClosure1618;

$output1616 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1617, $renderChildrenClosure1618, $renderingContext);

$output1616 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1629 = function() use ($renderingContext, $self) {
$output1631 = '';

$output1631 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1632 = array();
$arguments1632['section'] = NULL;
$arguments1632['partial'] = NULL;
$arguments1632['delegate'] = NULL;
$arguments1632['renderable'] = NULL;
$arguments1632['arguments'] = array (
);
$arguments1632['optional'] = false;
$arguments1632['default'] = NULL;
$arguments1632['contentAs'] = NULL;
$arguments1632['debug'] = true;
$arguments1632['partial'] = 'List/Item';
// Rendering Array
$array1634 = array();
$array1635 = array (
);$array1634['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1635);
$array1636 = array (
);$array1634['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1636);
$array1637 = array (
);$array1634['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1637);
$arguments1632['arguments'] = $array1634;

$output1631 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1632, $renderChildrenClosure1633, $renderingContext);

$output1631 .= '
                                ';
return $output1631;
};
$arguments1628 = array();
$arguments1628['each'] = NULL;
$arguments1628['as'] = NULL;
$arguments1628['key'] = NULL;
$arguments1628['reverse'] = false;
$arguments1628['iteration'] = NULL;
$array1630 = array (
);$arguments1628['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1630);
$arguments1628['as'] = 'newsItem';
$arguments1628['iteration'] = 'iterator';

$output1616 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1628, $renderChildrenClosure1629, $renderingContext);

$output1616 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1639 = function() use ($renderingContext, $self) {
$output1643 = '';

$output1643 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1645 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1644 = array();
$arguments1644['section'] = NULL;
$arguments1644['partial'] = NULL;
$arguments1644['delegate'] = NULL;
$arguments1644['renderable'] = NULL;
$arguments1644['arguments'] = array (
);
$arguments1644['optional'] = false;
$arguments1644['default'] = NULL;
$arguments1644['contentAs'] = NULL;
$arguments1644['debug'] = true;
$arguments1644['partial'] = 'List/Pagination';
// Rendering Array
$array1646 = array();
$array1647 = array (
);$array1646['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1647);
$array1648 = array (
);$array1646['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1648);
$arguments1644['arguments'] = $array1646;

$output1643 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1644, $renderChildrenClosure1645, $renderingContext);

$output1643 .= '
                            ';
return $output1643;
};
$arguments1638 = array();
$arguments1638['then'] = NULL;
$arguments1638['else'] = NULL;
$arguments1638['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1640 = array();
$array1641 = array (
);$array1640['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1641);

$expression1642 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1638['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1642(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1640)
					),
					$renderingContext
				);
$arguments1638['__thenClosure'] = $renderChildrenClosure1639;

$output1616 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1638, $renderChildrenClosure1639, $renderingContext);

$output1616 .= '
                        ';
return $output1616;
};

$output1590 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1597, $renderChildrenClosure1598, $renderingContext);

$output1590 .= '
                </div>
        ';
return $output1590;
};
$arguments1588 = array();

$output1587 .= '';

$output1587 .= '       
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1708 = function() use ($renderingContext, $self) {
$output1709 = '';

$output1709 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1711 = function() use ($renderingContext, $self) {
$output1759 = '';

$output1759 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1761 = function() use ($renderingContext, $self) {
$output1762 = '';

$output1762 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1764 = function() use ($renderingContext, $self) {
$output1766 = '';

$output1766 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1767 = array();
$arguments1767['section'] = NULL;
$arguments1767['partial'] = NULL;
$arguments1767['delegate'] = NULL;
$arguments1767['renderable'] = NULL;
$arguments1767['arguments'] = array (
);
$arguments1767['optional'] = false;
$arguments1767['default'] = NULL;
$arguments1767['contentAs'] = NULL;
$arguments1767['debug'] = true;
$arguments1767['partial'] = 'List/Item';
// Rendering Array
$array1769 = array();
$array1770 = array (
);$array1769['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1770);
$array1771 = array (
);$array1769['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1771);
$array1772 = array (
);$array1769['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1772);
$arguments1767['arguments'] = $array1769;

$output1766 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1767, $renderChildrenClosure1768, $renderingContext);

$output1766 .= '
                            ';
return $output1766;
};
$arguments1763 = array();
$arguments1763['each'] = NULL;
$arguments1763['as'] = NULL;
$arguments1763['key'] = NULL;
$arguments1763['reverse'] = false;
$arguments1763['iteration'] = NULL;
$array1765 = array (
);$arguments1763['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1765);
$arguments1763['as'] = 'newsItem';
$arguments1763['iteration'] = 'iterator';

$output1762 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1763, $renderChildrenClosure1764, $renderingContext);

$output1762 .= '
                            </ul></div>
                    ';
return $output1762;
};
$arguments1760 = array();

$output1759 .= '';

$output1759 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1774 = function() use ($renderingContext, $self) {
$output1775 = '';

$output1775 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1777 = function() use ($renderingContext, $self) {
$output1781 = '';

$output1781 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1783 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1782 = array();
$arguments1782['section'] = NULL;
$arguments1782['partial'] = NULL;
$arguments1782['delegate'] = NULL;
$arguments1782['renderable'] = NULL;
$arguments1782['arguments'] = array (
);
$arguments1782['optional'] = false;
$arguments1782['default'] = NULL;
$arguments1782['contentAs'] = NULL;
$arguments1782['debug'] = true;
$arguments1782['partial'] = 'List/Pagination';
// Rendering Array
$array1784 = array();
$array1785 = array (
);$array1784['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1785);
$array1786 = array (
);$array1784['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1786);
$arguments1782['arguments'] = $array1784;

$output1781 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1782, $renderChildrenClosure1783, $renderingContext);

$output1781 .= '
                        ';
return $output1781;
};
$arguments1776 = array();
$arguments1776['then'] = NULL;
$arguments1776['else'] = NULL;
$arguments1776['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1778 = array();
$array1779 = array (
);$array1778['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1779);

$expression1780 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1776['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1780(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1778)
					),
					$renderingContext
				);
$arguments1776['__thenClosure'] = $renderChildrenClosure1777;

$output1775 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1776, $renderChildrenClosure1777, $renderingContext);

$output1775 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1788 = function() use ($renderingContext, $self) {
$output1790 = '';

$output1790 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1791 = array();
$arguments1791['section'] = NULL;
$arguments1791['partial'] = NULL;
$arguments1791['delegate'] = NULL;
$arguments1791['renderable'] = NULL;
$arguments1791['arguments'] = array (
);
$arguments1791['optional'] = false;
$arguments1791['default'] = NULL;
$arguments1791['contentAs'] = NULL;
$arguments1791['debug'] = true;
$arguments1791['partial'] = 'List/Item';
// Rendering Array
$array1793 = array();
$array1794 = array (
);$array1793['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1794);
$array1795 = array (
);$array1793['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1795);
$array1796 = array (
);$array1793['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1796);
$arguments1791['arguments'] = $array1793;

$output1790 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1791, $renderChildrenClosure1792, $renderingContext);

$output1790 .= '
                            ';
return $output1790;
};
$arguments1787 = array();
$arguments1787['each'] = NULL;
$arguments1787['as'] = NULL;
$arguments1787['key'] = NULL;
$arguments1787['reverse'] = false;
$arguments1787['iteration'] = NULL;
$array1789 = array (
);$arguments1787['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1789);
$arguments1787['as'] = 'newsItem';
$arguments1787['iteration'] = 'iterator';

$output1775 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1787, $renderChildrenClosure1788, $renderingContext);

$output1775 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1798 = function() use ($renderingContext, $self) {
$output1802 = '';

$output1802 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1804 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1803 = array();
$arguments1803['section'] = NULL;
$arguments1803['partial'] = NULL;
$arguments1803['delegate'] = NULL;
$arguments1803['renderable'] = NULL;
$arguments1803['arguments'] = array (
);
$arguments1803['optional'] = false;
$arguments1803['default'] = NULL;
$arguments1803['contentAs'] = NULL;
$arguments1803['debug'] = true;
$arguments1803['partial'] = 'List/Pagination';
// Rendering Array
$array1805 = array();
$array1806 = array (
);$array1805['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1806);
$array1807 = array (
);$array1805['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1807);
$arguments1803['arguments'] = $array1805;

$output1802 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1803, $renderChildrenClosure1804, $renderingContext);

$output1802 .= '
                        ';
return $output1802;
};
$arguments1797 = array();
$arguments1797['then'] = NULL;
$arguments1797['else'] = NULL;
$arguments1797['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1799 = array();
$array1800 = array (
);$array1799['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1800);

$expression1801 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1797['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1801(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1799)
					),
					$renderingContext
				);
$arguments1797['__thenClosure'] = $renderChildrenClosure1798;

$output1775 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1797, $renderChildrenClosure1798, $renderingContext);

$output1775 .= '
                    ';
return $output1775;
};
$arguments1773 = array();
$arguments1773['if'] = NULL;

$output1759 .= '';

$output1759 .= '
                ';
return $output1759;
};
$arguments1710 = array();
$arguments1710['then'] = NULL;
$arguments1710['else'] = NULL;
$arguments1710['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1756 = array();
$array1757 = array (
);$array1756['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1757);

$expression1758 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1710['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1758(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1756)
					),
					$renderingContext
				);
$arguments1710['__thenClosure'] = function() use ($renderingContext, $self) {
$output1712 = '';

$output1712 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1714 = function() use ($renderingContext, $self) {
$output1716 = '';

$output1716 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1718 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1717 = array();
$arguments1717['section'] = NULL;
$arguments1717['partial'] = NULL;
$arguments1717['delegate'] = NULL;
$arguments1717['renderable'] = NULL;
$arguments1717['arguments'] = array (
);
$arguments1717['optional'] = false;
$arguments1717['default'] = NULL;
$arguments1717['contentAs'] = NULL;
$arguments1717['debug'] = true;
$arguments1717['partial'] = 'List/Item';
// Rendering Array
$array1719 = array();
$array1720 = array (
);$array1719['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1720);
$array1721 = array (
);$array1719['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1721);
$array1722 = array (
);$array1719['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1722);
$arguments1717['arguments'] = $array1719;

$output1716 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1717, $renderChildrenClosure1718, $renderingContext);

$output1716 .= '
                            ';
return $output1716;
};
$arguments1713 = array();
$arguments1713['each'] = NULL;
$arguments1713['as'] = NULL;
$arguments1713['key'] = NULL;
$arguments1713['reverse'] = false;
$arguments1713['iteration'] = NULL;
$array1715 = array (
);$arguments1713['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1715);
$arguments1713['as'] = 'newsItem';
$arguments1713['iteration'] = 'iterator';

$output1712 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1713, $renderChildrenClosure1714, $renderingContext);

$output1712 .= '
                            </ul></div>
                    ';
return $output1712;
};
$arguments1710['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1723 = '';

$output1723 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1725 = function() use ($renderingContext, $self) {
$output1729 = '';

$output1729 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1730 = array();
$arguments1730['section'] = NULL;
$arguments1730['partial'] = NULL;
$arguments1730['delegate'] = NULL;
$arguments1730['renderable'] = NULL;
$arguments1730['arguments'] = array (
);
$arguments1730['optional'] = false;
$arguments1730['default'] = NULL;
$arguments1730['contentAs'] = NULL;
$arguments1730['debug'] = true;
$arguments1730['partial'] = 'List/Pagination';
// Rendering Array
$array1732 = array();
$array1733 = array (
);$array1732['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1733);
$array1734 = array (
);$array1732['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1734);
$arguments1730['arguments'] = $array1732;

$output1729 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1730, $renderChildrenClosure1731, $renderingContext);

$output1729 .= '
                        ';
return $output1729;
};
$arguments1724 = array();
$arguments1724['then'] = NULL;
$arguments1724['else'] = NULL;
$arguments1724['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1726 = array();
$array1727 = array (
);$array1726['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1727);

$expression1728 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1724['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1728(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1726)
					),
					$renderingContext
				);
$arguments1724['__thenClosure'] = $renderChildrenClosure1725;

$output1723 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1724, $renderChildrenClosure1725, $renderingContext);

$output1723 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1736 = function() use ($renderingContext, $self) {
$output1738 = '';

$output1738 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1740 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1739 = array();
$arguments1739['section'] = NULL;
$arguments1739['partial'] = NULL;
$arguments1739['delegate'] = NULL;
$arguments1739['renderable'] = NULL;
$arguments1739['arguments'] = array (
);
$arguments1739['optional'] = false;
$arguments1739['default'] = NULL;
$arguments1739['contentAs'] = NULL;
$arguments1739['debug'] = true;
$arguments1739['partial'] = 'List/Item';
// Rendering Array
$array1741 = array();
$array1742 = array (
);$array1741['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1742);
$array1743 = array (
);$array1741['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1743);
$array1744 = array (
);$array1741['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1744);
$arguments1739['arguments'] = $array1741;

$output1738 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1739, $renderChildrenClosure1740, $renderingContext);

$output1738 .= '
                            ';
return $output1738;
};
$arguments1735 = array();
$arguments1735['each'] = NULL;
$arguments1735['as'] = NULL;
$arguments1735['key'] = NULL;
$arguments1735['reverse'] = false;
$arguments1735['iteration'] = NULL;
$array1737 = array (
);$arguments1735['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1737);
$arguments1735['as'] = 'newsItem';
$arguments1735['iteration'] = 'iterator';

$output1723 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1735, $renderChildrenClosure1736, $renderingContext);

$output1723 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1746 = function() use ($renderingContext, $self) {
$output1750 = '';

$output1750 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1752 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1751 = array();
$arguments1751['section'] = NULL;
$arguments1751['partial'] = NULL;
$arguments1751['delegate'] = NULL;
$arguments1751['renderable'] = NULL;
$arguments1751['arguments'] = array (
);
$arguments1751['optional'] = false;
$arguments1751['default'] = NULL;
$arguments1751['contentAs'] = NULL;
$arguments1751['debug'] = true;
$arguments1751['partial'] = 'List/Pagination';
// Rendering Array
$array1753 = array();
$array1754 = array (
);$array1753['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1754);
$array1755 = array (
);$array1753['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1755);
$arguments1751['arguments'] = $array1753;

$output1750 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1751, $renderChildrenClosure1752, $renderingContext);

$output1750 .= '
                        ';
return $output1750;
};
$arguments1745 = array();
$arguments1745['then'] = NULL;
$arguments1745['else'] = NULL;
$arguments1745['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1747 = array();
$array1748 = array (
);$array1747['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1748);

$expression1749 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1745['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1749(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1747)
					),
					$renderingContext
				);
$arguments1745['__thenClosure'] = $renderChildrenClosure1746;

$output1723 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1745, $renderChildrenClosure1746, $renderingContext);

$output1723 .= '
                    ';
return $output1723;
};

$output1709 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1710, $renderChildrenClosure1711, $renderingContext);

$output1709 .= '
        ';
return $output1709;
};
$arguments1707 = array();
$arguments1707['if'] = NULL;

$output1587 .= '';

$output1587 .= '
        ';
return $output1587;
};
$arguments1366 = array();
$arguments1366['then'] = NULL;
$arguments1366['else'] = NULL;
$arguments1366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1584 = array();
$array1585 = array (
);$array1584['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1585);
$array1584['1'] = ' == 1';

$expression1586 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1586(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1584)
					),
					$renderingContext
				);
$arguments1366['__thenClosure'] = function() use ($renderingContext, $self) {
$output1368 = '';

$output1368 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1369 = array();
$arguments1369['then'] = NULL;
$arguments1369['else'] = NULL;
$arguments1369['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1371 = array();
$array1372 = array (
);$array1371['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1372);
$array1371['1'] = ' == 1';

$expression1373 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1369['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1373(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1371)
					),
					$renderingContext
				);
$arguments1369['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output1368 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1369, $renderChildrenClosure1370, $renderingContext);

$output1368 .= '" id="news-container-';
$array1374 = array (
);
$output1368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array1374)]);

$output1368 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1376 = function() use ($renderingContext, $self) {
$output1430 = '';

$output1430 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1432 = function() use ($renderingContext, $self) {
$output1433 = '';

$output1433 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1435 = function() use ($renderingContext, $self) {
$output1437 = '';

$output1437 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1438 = array();
$arguments1438['section'] = NULL;
$arguments1438['partial'] = NULL;
$arguments1438['delegate'] = NULL;
$arguments1438['renderable'] = NULL;
$arguments1438['arguments'] = array (
);
$arguments1438['optional'] = false;
$arguments1438['default'] = NULL;
$arguments1438['contentAs'] = NULL;
$arguments1438['debug'] = true;
$arguments1438['partial'] = 'List/Item';
// Rendering Array
$array1440 = array();
$array1441 = array (
);$array1440['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1441);
$array1442 = array (
);$array1440['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1442);
$array1443 = array (
);$array1440['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1443);
$arguments1438['arguments'] = $array1440;

$output1437 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1438, $renderChildrenClosure1439, $renderingContext);

$output1437 .= '
                                ';
return $output1437;
};
$arguments1434 = array();
$arguments1434['each'] = NULL;
$arguments1434['as'] = NULL;
$arguments1434['key'] = NULL;
$arguments1434['reverse'] = false;
$arguments1434['iteration'] = NULL;
$array1436 = array (
);$arguments1434['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1436);
$arguments1434['as'] = 'newsItem';
$arguments1434['iteration'] = 'iterator';

$output1433 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1434, $renderChildrenClosure1435, $renderingContext);

$output1433 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1445 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments1444 = array();
$arguments1444['additionalAttributes'] = NULL;
$arguments1444['data'] = NULL;
$arguments1444['aria'] = NULL;
$arguments1444['class'] = NULL;
$arguments1444['dir'] = NULL;
$arguments1444['id'] = NULL;
$arguments1444['lang'] = NULL;
$arguments1444['style'] = NULL;
$arguments1444['title'] = NULL;
$arguments1444['accesskey'] = NULL;
$arguments1444['tabindex'] = NULL;
$arguments1444['onclick'] = NULL;
$arguments1444['async'] = NULL;
$arguments1444['crossorigin'] = NULL;
$arguments1444['defer'] = NULL;
$arguments1444['integrity'] = NULL;
$arguments1444['nomodule'] = NULL;
$arguments1444['nonce'] = NULL;
$arguments1444['referrerpolicy'] = NULL;
$arguments1444['src'] = NULL;
$arguments1444['type'] = NULL;
$arguments1444['identifier'] = NULL;
$arguments1444['priority'] = false;
$arguments1444['identifier'] = 'news-card-list-js';

$output1433 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1444, $renderChildrenClosure1445, $renderingContext);

$output1433 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1447 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments1446 = array();
$arguments1446['additionalAttributes'] = NULL;
$arguments1446['data'] = NULL;
$arguments1446['aria'] = NULL;
$arguments1446['class'] = NULL;
$arguments1446['dir'] = NULL;
$arguments1446['id'] = NULL;
$arguments1446['lang'] = NULL;
$arguments1446['style'] = NULL;
$arguments1446['title'] = NULL;
$arguments1446['accesskey'] = NULL;
$arguments1446['tabindex'] = NULL;
$arguments1446['onclick'] = NULL;
$arguments1446['as'] = NULL;
$arguments1446['crossorigin'] = NULL;
$arguments1446['disabled'] = NULL;
$arguments1446['href'] = NULL;
$arguments1446['hreflang'] = NULL;
$arguments1446['importance'] = NULL;
$arguments1446['integrity'] = NULL;
$arguments1446['media'] = NULL;
$arguments1446['referrerpolicy'] = NULL;
$arguments1446['rel'] = NULL;
$arguments1446['sizes'] = NULL;
$arguments1446['type'] = NULL;
$arguments1446['nonce'] = NULL;
$arguments1446['identifier'] = NULL;
$arguments1446['priority'] = false;
$arguments1446['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array1448 = array();
$array1448['0'] = 'true';

$expression1449 = function($context) {return TRUE;};
$arguments1446['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1449(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1448)
					),
					$renderingContext
				);

$output1433 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1446, $renderChildrenClosure1447, $renderingContext);

$output1433 .= '

                        ';
return $output1433;
};
$arguments1431 = array();

$output1430 .= '';

$output1430 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1451 = function() use ($renderingContext, $self) {
$output1452 = '';

$output1452 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1454 = function() use ($renderingContext, $self) {
$output1458 = '';

$output1458 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1459 = array();
$arguments1459['section'] = NULL;
$arguments1459['partial'] = NULL;
$arguments1459['delegate'] = NULL;
$arguments1459['renderable'] = NULL;
$arguments1459['arguments'] = array (
);
$arguments1459['optional'] = false;
$arguments1459['default'] = NULL;
$arguments1459['contentAs'] = NULL;
$arguments1459['debug'] = true;
$arguments1459['partial'] = 'List/Pagination';
// Rendering Array
$array1461 = array();
$array1462 = array (
);$array1461['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1462);
$array1463 = array (
);$array1461['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1463);
$arguments1459['arguments'] = $array1461;

$output1458 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1459, $renderChildrenClosure1460, $renderingContext);

$output1458 .= '
                            ';
return $output1458;
};
$arguments1453 = array();
$arguments1453['then'] = NULL;
$arguments1453['else'] = NULL;
$arguments1453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1455 = array();
$array1456 = array (
);$array1455['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1456);

$expression1457 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1457(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1455)
					),
					$renderingContext
				);
$arguments1453['__thenClosure'] = $renderChildrenClosure1454;

$output1452 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1453, $renderChildrenClosure1454, $renderingContext);

$output1452 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1465 = function() use ($renderingContext, $self) {
$output1467 = '';

$output1467 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1468 = array();
$arguments1468['section'] = NULL;
$arguments1468['partial'] = NULL;
$arguments1468['delegate'] = NULL;
$arguments1468['renderable'] = NULL;
$arguments1468['arguments'] = array (
);
$arguments1468['optional'] = false;
$arguments1468['default'] = NULL;
$arguments1468['contentAs'] = NULL;
$arguments1468['debug'] = true;
$arguments1468['partial'] = 'List/Item';
// Rendering Array
$array1470 = array();
$array1471 = array (
);$array1470['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1471);
$array1472 = array (
);$array1470['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1472);
$array1473 = array (
);$array1470['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1473);
$arguments1468['arguments'] = $array1470;

$output1467 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1468, $renderChildrenClosure1469, $renderingContext);

$output1467 .= '
                                ';
return $output1467;
};
$arguments1464 = array();
$arguments1464['each'] = NULL;
$arguments1464['as'] = NULL;
$arguments1464['key'] = NULL;
$arguments1464['reverse'] = false;
$arguments1464['iteration'] = NULL;
$array1466 = array (
);$arguments1464['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1466);
$arguments1464['as'] = 'newsItem';
$arguments1464['iteration'] = 'iterator';

$output1452 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1464, $renderChildrenClosure1465, $renderingContext);

$output1452 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1475 = function() use ($renderingContext, $self) {
$output1479 = '';

$output1479 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1480 = array();
$arguments1480['section'] = NULL;
$arguments1480['partial'] = NULL;
$arguments1480['delegate'] = NULL;
$arguments1480['renderable'] = NULL;
$arguments1480['arguments'] = array (
);
$arguments1480['optional'] = false;
$arguments1480['default'] = NULL;
$arguments1480['contentAs'] = NULL;
$arguments1480['debug'] = true;
$arguments1480['partial'] = 'List/Pagination';
// Rendering Array
$array1482 = array();
$array1483 = array (
);$array1482['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1483);
$array1484 = array (
);$array1482['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1484);
$arguments1480['arguments'] = $array1482;

$output1479 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1480, $renderChildrenClosure1481, $renderingContext);

$output1479 .= '
                            ';
return $output1479;
};
$arguments1474 = array();
$arguments1474['then'] = NULL;
$arguments1474['else'] = NULL;
$arguments1474['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1476 = array();
$array1477 = array (
);$array1476['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1477);

$expression1478 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1474['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1478(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1476)
					),
					$renderingContext
				);
$arguments1474['__thenClosure'] = $renderChildrenClosure1475;

$output1452 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1474, $renderChildrenClosure1475, $renderingContext);

$output1452 .= '
                        ';
return $output1452;
};
$arguments1450 = array();
$arguments1450['if'] = NULL;

$output1430 .= '';

$output1430 .= '
                    ';
return $output1430;
};
$arguments1375 = array();
$arguments1375['then'] = NULL;
$arguments1375['else'] = NULL;
$arguments1375['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1427 = array();
$array1428 = array (
);$array1427['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1428);

$expression1429 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1375['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1429(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1427)
					),
					$renderingContext
				);
$arguments1375['__thenClosure'] = function() use ($renderingContext, $self) {
$output1377 = '';

$output1377 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1379 = function() use ($renderingContext, $self) {
$output1381 = '';

$output1381 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1382 = array();
$arguments1382['section'] = NULL;
$arguments1382['partial'] = NULL;
$arguments1382['delegate'] = NULL;
$arguments1382['renderable'] = NULL;
$arguments1382['arguments'] = array (
);
$arguments1382['optional'] = false;
$arguments1382['default'] = NULL;
$arguments1382['contentAs'] = NULL;
$arguments1382['debug'] = true;
$arguments1382['partial'] = 'List/Item';
// Rendering Array
$array1384 = array();
$array1385 = array (
);$array1384['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1385);
$array1386 = array (
);$array1384['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1386);
$array1387 = array (
);$array1384['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1387);
$arguments1382['arguments'] = $array1384;

$output1381 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1382, $renderChildrenClosure1383, $renderingContext);

$output1381 .= '
                                ';
return $output1381;
};
$arguments1378 = array();
$arguments1378['each'] = NULL;
$arguments1378['as'] = NULL;
$arguments1378['key'] = NULL;
$arguments1378['reverse'] = false;
$arguments1378['iteration'] = NULL;
$array1380 = array (
);$arguments1378['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1380);
$arguments1378['as'] = 'newsItem';
$arguments1378['iteration'] = 'iterator';

$output1377 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1378, $renderChildrenClosure1379, $renderingContext);

$output1377 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1389 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments1388 = array();
$arguments1388['additionalAttributes'] = NULL;
$arguments1388['data'] = NULL;
$arguments1388['aria'] = NULL;
$arguments1388['class'] = NULL;
$arguments1388['dir'] = NULL;
$arguments1388['id'] = NULL;
$arguments1388['lang'] = NULL;
$arguments1388['style'] = NULL;
$arguments1388['title'] = NULL;
$arguments1388['accesskey'] = NULL;
$arguments1388['tabindex'] = NULL;
$arguments1388['onclick'] = NULL;
$arguments1388['async'] = NULL;
$arguments1388['crossorigin'] = NULL;
$arguments1388['defer'] = NULL;
$arguments1388['integrity'] = NULL;
$arguments1388['nomodule'] = NULL;
$arguments1388['nonce'] = NULL;
$arguments1388['referrerpolicy'] = NULL;
$arguments1388['src'] = NULL;
$arguments1388['type'] = NULL;
$arguments1388['identifier'] = NULL;
$arguments1388['priority'] = false;
$arguments1388['identifier'] = 'news-card-list-js';

$output1377 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1388, $renderChildrenClosure1389, $renderingContext);

$output1377 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1391 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments1390 = array();
$arguments1390['additionalAttributes'] = NULL;
$arguments1390['data'] = NULL;
$arguments1390['aria'] = NULL;
$arguments1390['class'] = NULL;
$arguments1390['dir'] = NULL;
$arguments1390['id'] = NULL;
$arguments1390['lang'] = NULL;
$arguments1390['style'] = NULL;
$arguments1390['title'] = NULL;
$arguments1390['accesskey'] = NULL;
$arguments1390['tabindex'] = NULL;
$arguments1390['onclick'] = NULL;
$arguments1390['as'] = NULL;
$arguments1390['crossorigin'] = NULL;
$arguments1390['disabled'] = NULL;
$arguments1390['href'] = NULL;
$arguments1390['hreflang'] = NULL;
$arguments1390['importance'] = NULL;
$arguments1390['integrity'] = NULL;
$arguments1390['media'] = NULL;
$arguments1390['referrerpolicy'] = NULL;
$arguments1390['rel'] = NULL;
$arguments1390['sizes'] = NULL;
$arguments1390['type'] = NULL;
$arguments1390['nonce'] = NULL;
$arguments1390['identifier'] = NULL;
$arguments1390['priority'] = false;
$arguments1390['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array1392 = array();
$array1392['0'] = 'true';

$expression1393 = function($context) {return TRUE;};
$arguments1390['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1393(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1392)
					),
					$renderingContext
				);

$output1377 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1390, $renderChildrenClosure1391, $renderingContext);

$output1377 .= '

                        ';
return $output1377;
};
$arguments1375['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1394 = '';

$output1394 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1396 = function() use ($renderingContext, $self) {
$output1400 = '';

$output1400 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1401 = array();
$arguments1401['section'] = NULL;
$arguments1401['partial'] = NULL;
$arguments1401['delegate'] = NULL;
$arguments1401['renderable'] = NULL;
$arguments1401['arguments'] = array (
);
$arguments1401['optional'] = false;
$arguments1401['default'] = NULL;
$arguments1401['contentAs'] = NULL;
$arguments1401['debug'] = true;
$arguments1401['partial'] = 'List/Pagination';
// Rendering Array
$array1403 = array();
$array1404 = array (
);$array1403['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1404);
$array1405 = array (
);$array1403['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1405);
$arguments1401['arguments'] = $array1403;

$output1400 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1401, $renderChildrenClosure1402, $renderingContext);

$output1400 .= '
                            ';
return $output1400;
};
$arguments1395 = array();
$arguments1395['then'] = NULL;
$arguments1395['else'] = NULL;
$arguments1395['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1397 = array();
$array1398 = array (
);$array1397['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1398);

$expression1399 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1395['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1397)
					),
					$renderingContext
				);
$arguments1395['__thenClosure'] = $renderChildrenClosure1396;

$output1394 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1395, $renderChildrenClosure1396, $renderingContext);

$output1394 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1407 = function() use ($renderingContext, $self) {
$output1409 = '';

$output1409 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1410 = array();
$arguments1410['section'] = NULL;
$arguments1410['partial'] = NULL;
$arguments1410['delegate'] = NULL;
$arguments1410['renderable'] = NULL;
$arguments1410['arguments'] = array (
);
$arguments1410['optional'] = false;
$arguments1410['default'] = NULL;
$arguments1410['contentAs'] = NULL;
$arguments1410['debug'] = true;
$arguments1410['partial'] = 'List/Item';
// Rendering Array
$array1412 = array();
$array1413 = array (
);$array1412['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1413);
$array1414 = array (
);$array1412['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1414);
$array1415 = array (
);$array1412['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1415);
$arguments1410['arguments'] = $array1412;

$output1409 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1410, $renderChildrenClosure1411, $renderingContext);

$output1409 .= '
                                ';
return $output1409;
};
$arguments1406 = array();
$arguments1406['each'] = NULL;
$arguments1406['as'] = NULL;
$arguments1406['key'] = NULL;
$arguments1406['reverse'] = false;
$arguments1406['iteration'] = NULL;
$array1408 = array (
);$arguments1406['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1408);
$arguments1406['as'] = 'newsItem';
$arguments1406['iteration'] = 'iterator';

$output1394 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1406, $renderChildrenClosure1407, $renderingContext);

$output1394 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1417 = function() use ($renderingContext, $self) {
$output1421 = '';

$output1421 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1422 = array();
$arguments1422['section'] = NULL;
$arguments1422['partial'] = NULL;
$arguments1422['delegate'] = NULL;
$arguments1422['renderable'] = NULL;
$arguments1422['arguments'] = array (
);
$arguments1422['optional'] = false;
$arguments1422['default'] = NULL;
$arguments1422['contentAs'] = NULL;
$arguments1422['debug'] = true;
$arguments1422['partial'] = 'List/Pagination';
// Rendering Array
$array1424 = array();
$array1425 = array (
);$array1424['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1425);
$array1426 = array (
);$array1424['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1426);
$arguments1422['arguments'] = $array1424;

$output1421 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1422, $renderChildrenClosure1423, $renderingContext);

$output1421 .= '
                            ';
return $output1421;
};
$arguments1416 = array();
$arguments1416['then'] = NULL;
$arguments1416['else'] = NULL;
$arguments1416['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1418 = array();
$array1419 = array (
);$array1418['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1419);

$expression1420 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1416['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1420(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1418)
					),
					$renderingContext
				);
$arguments1416['__thenClosure'] = $renderChildrenClosure1417;

$output1394 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1416, $renderChildrenClosure1417, $renderingContext);

$output1394 .= '
                        ';
return $output1394;
};

$output1368 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1375, $renderChildrenClosure1376, $renderingContext);

$output1368 .= '
                </div>
        ';
return $output1368;
};
$arguments1366['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1485 = '';

$output1485 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1487 = function() use ($renderingContext, $self) {
$output1535 = '';

$output1535 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1537 = function() use ($renderingContext, $self) {
$output1538 = '';

$output1538 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1540 = function() use ($renderingContext, $self) {
$output1542 = '';

$output1542 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1543 = array();
$arguments1543['section'] = NULL;
$arguments1543['partial'] = NULL;
$arguments1543['delegate'] = NULL;
$arguments1543['renderable'] = NULL;
$arguments1543['arguments'] = array (
);
$arguments1543['optional'] = false;
$arguments1543['default'] = NULL;
$arguments1543['contentAs'] = NULL;
$arguments1543['debug'] = true;
$arguments1543['partial'] = 'List/Item';
// Rendering Array
$array1545 = array();
$array1546 = array (
);$array1545['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1546);
$array1547 = array (
);$array1545['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1547);
$array1548 = array (
);$array1545['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1548);
$arguments1543['arguments'] = $array1545;

$output1542 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1543, $renderChildrenClosure1544, $renderingContext);

$output1542 .= '
                            ';
return $output1542;
};
$arguments1539 = array();
$arguments1539['each'] = NULL;
$arguments1539['as'] = NULL;
$arguments1539['key'] = NULL;
$arguments1539['reverse'] = false;
$arguments1539['iteration'] = NULL;
$array1541 = array (
);$arguments1539['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1541);
$arguments1539['as'] = 'newsItem';
$arguments1539['iteration'] = 'iterator';

$output1538 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1539, $renderChildrenClosure1540, $renderingContext);

$output1538 .= '
                            </ul></div>
                    ';
return $output1538;
};
$arguments1536 = array();

$output1535 .= '';

$output1535 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1550 = function() use ($renderingContext, $self) {
$output1551 = '';

$output1551 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1553 = function() use ($renderingContext, $self) {
$output1557 = '';

$output1557 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1558 = array();
$arguments1558['section'] = NULL;
$arguments1558['partial'] = NULL;
$arguments1558['delegate'] = NULL;
$arguments1558['renderable'] = NULL;
$arguments1558['arguments'] = array (
);
$arguments1558['optional'] = false;
$arguments1558['default'] = NULL;
$arguments1558['contentAs'] = NULL;
$arguments1558['debug'] = true;
$arguments1558['partial'] = 'List/Pagination';
// Rendering Array
$array1560 = array();
$array1561 = array (
);$array1560['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1561);
$array1562 = array (
);$array1560['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1562);
$arguments1558['arguments'] = $array1560;

$output1557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1558, $renderChildrenClosure1559, $renderingContext);

$output1557 .= '
                        ';
return $output1557;
};
$arguments1552 = array();
$arguments1552['then'] = NULL;
$arguments1552['else'] = NULL;
$arguments1552['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1554 = array();
$array1555 = array (
);$array1554['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1555);

$expression1556 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1552['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1556(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1554)
					),
					$renderingContext
				);
$arguments1552['__thenClosure'] = $renderChildrenClosure1553;

$output1551 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1552, $renderChildrenClosure1553, $renderingContext);

$output1551 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1564 = function() use ($renderingContext, $self) {
$output1566 = '';

$output1566 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1567 = array();
$arguments1567['section'] = NULL;
$arguments1567['partial'] = NULL;
$arguments1567['delegate'] = NULL;
$arguments1567['renderable'] = NULL;
$arguments1567['arguments'] = array (
);
$arguments1567['optional'] = false;
$arguments1567['default'] = NULL;
$arguments1567['contentAs'] = NULL;
$arguments1567['debug'] = true;
$arguments1567['partial'] = 'List/Item';
// Rendering Array
$array1569 = array();
$array1570 = array (
);$array1569['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1570);
$array1571 = array (
);$array1569['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1571);
$array1572 = array (
);$array1569['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1572);
$arguments1567['arguments'] = $array1569;

$output1566 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1567, $renderChildrenClosure1568, $renderingContext);

$output1566 .= '
                            ';
return $output1566;
};
$arguments1563 = array();
$arguments1563['each'] = NULL;
$arguments1563['as'] = NULL;
$arguments1563['key'] = NULL;
$arguments1563['reverse'] = false;
$arguments1563['iteration'] = NULL;
$array1565 = array (
);$arguments1563['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1565);
$arguments1563['as'] = 'newsItem';
$arguments1563['iteration'] = 'iterator';

$output1551 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1563, $renderChildrenClosure1564, $renderingContext);

$output1551 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1574 = function() use ($renderingContext, $self) {
$output1578 = '';

$output1578 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1579 = array();
$arguments1579['section'] = NULL;
$arguments1579['partial'] = NULL;
$arguments1579['delegate'] = NULL;
$arguments1579['renderable'] = NULL;
$arguments1579['arguments'] = array (
);
$arguments1579['optional'] = false;
$arguments1579['default'] = NULL;
$arguments1579['contentAs'] = NULL;
$arguments1579['debug'] = true;
$arguments1579['partial'] = 'List/Pagination';
// Rendering Array
$array1581 = array();
$array1582 = array (
);$array1581['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1582);
$array1583 = array (
);$array1581['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1583);
$arguments1579['arguments'] = $array1581;

$output1578 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1579, $renderChildrenClosure1580, $renderingContext);

$output1578 .= '
                        ';
return $output1578;
};
$arguments1573 = array();
$arguments1573['then'] = NULL;
$arguments1573['else'] = NULL;
$arguments1573['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1575 = array();
$array1576 = array (
);$array1575['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1576);

$expression1577 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1573['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1577(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1575)
					),
					$renderingContext
				);
$arguments1573['__thenClosure'] = $renderChildrenClosure1574;

$output1551 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1573, $renderChildrenClosure1574, $renderingContext);

$output1551 .= '
                    ';
return $output1551;
};
$arguments1549 = array();
$arguments1549['if'] = NULL;

$output1535 .= '';

$output1535 .= '
                ';
return $output1535;
};
$arguments1486 = array();
$arguments1486['then'] = NULL;
$arguments1486['else'] = NULL;
$arguments1486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1532 = array();
$array1533 = array (
);$array1532['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1533);

$expression1534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1532)
					),
					$renderingContext
				);
$arguments1486['__thenClosure'] = function() use ($renderingContext, $self) {
$output1488 = '';

$output1488 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1490 = function() use ($renderingContext, $self) {
$output1492 = '';

$output1492 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1493 = array();
$arguments1493['section'] = NULL;
$arguments1493['partial'] = NULL;
$arguments1493['delegate'] = NULL;
$arguments1493['renderable'] = NULL;
$arguments1493['arguments'] = array (
);
$arguments1493['optional'] = false;
$arguments1493['default'] = NULL;
$arguments1493['contentAs'] = NULL;
$arguments1493['debug'] = true;
$arguments1493['partial'] = 'List/Item';
// Rendering Array
$array1495 = array();
$array1496 = array (
);$array1495['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1496);
$array1497 = array (
);$array1495['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1497);
$array1498 = array (
);$array1495['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1498);
$arguments1493['arguments'] = $array1495;

$output1492 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1493, $renderChildrenClosure1494, $renderingContext);

$output1492 .= '
                            ';
return $output1492;
};
$arguments1489 = array();
$arguments1489['each'] = NULL;
$arguments1489['as'] = NULL;
$arguments1489['key'] = NULL;
$arguments1489['reverse'] = false;
$arguments1489['iteration'] = NULL;
$array1491 = array (
);$arguments1489['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1491);
$arguments1489['as'] = 'newsItem';
$arguments1489['iteration'] = 'iterator';

$output1488 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1489, $renderChildrenClosure1490, $renderingContext);

$output1488 .= '
                            </ul></div>
                    ';
return $output1488;
};
$arguments1486['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1499 = '';

$output1499 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1501 = function() use ($renderingContext, $self) {
$output1505 = '';

$output1505 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1506 = array();
$arguments1506['section'] = NULL;
$arguments1506['partial'] = NULL;
$arguments1506['delegate'] = NULL;
$arguments1506['renderable'] = NULL;
$arguments1506['arguments'] = array (
);
$arguments1506['optional'] = false;
$arguments1506['default'] = NULL;
$arguments1506['contentAs'] = NULL;
$arguments1506['debug'] = true;
$arguments1506['partial'] = 'List/Pagination';
// Rendering Array
$array1508 = array();
$array1509 = array (
);$array1508['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1509);
$array1510 = array (
);$array1508['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1510);
$arguments1506['arguments'] = $array1508;

$output1505 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1506, $renderChildrenClosure1507, $renderingContext);

$output1505 .= '
                        ';
return $output1505;
};
$arguments1500 = array();
$arguments1500['then'] = NULL;
$arguments1500['else'] = NULL;
$arguments1500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1502 = array();
$array1503 = array (
);$array1502['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1503);

$expression1504 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1502)
					),
					$renderingContext
				);
$arguments1500['__thenClosure'] = $renderChildrenClosure1501;

$output1499 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1500, $renderChildrenClosure1501, $renderingContext);

$output1499 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1512 = function() use ($renderingContext, $self) {
$output1514 = '';

$output1514 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1515 = array();
$arguments1515['section'] = NULL;
$arguments1515['partial'] = NULL;
$arguments1515['delegate'] = NULL;
$arguments1515['renderable'] = NULL;
$arguments1515['arguments'] = array (
);
$arguments1515['optional'] = false;
$arguments1515['default'] = NULL;
$arguments1515['contentAs'] = NULL;
$arguments1515['debug'] = true;
$arguments1515['partial'] = 'List/Item';
// Rendering Array
$array1517 = array();
$array1518 = array (
);$array1517['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1518);
$array1519 = array (
);$array1517['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1519);
$array1520 = array (
);$array1517['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1520);
$arguments1515['arguments'] = $array1517;

$output1514 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1515, $renderChildrenClosure1516, $renderingContext);

$output1514 .= '
                            ';
return $output1514;
};
$arguments1511 = array();
$arguments1511['each'] = NULL;
$arguments1511['as'] = NULL;
$arguments1511['key'] = NULL;
$arguments1511['reverse'] = false;
$arguments1511['iteration'] = NULL;
$array1513 = array (
);$arguments1511['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1513);
$arguments1511['as'] = 'newsItem';
$arguments1511['iteration'] = 'iterator';

$output1499 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1511, $renderChildrenClosure1512, $renderingContext);

$output1499 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1522 = function() use ($renderingContext, $self) {
$output1526 = '';

$output1526 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1528 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1527 = array();
$arguments1527['section'] = NULL;
$arguments1527['partial'] = NULL;
$arguments1527['delegate'] = NULL;
$arguments1527['renderable'] = NULL;
$arguments1527['arguments'] = array (
);
$arguments1527['optional'] = false;
$arguments1527['default'] = NULL;
$arguments1527['contentAs'] = NULL;
$arguments1527['debug'] = true;
$arguments1527['partial'] = 'List/Pagination';
// Rendering Array
$array1529 = array();
$array1530 = array (
);$array1529['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1530);
$array1531 = array (
);$array1529['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1531);
$arguments1527['arguments'] = $array1529;

$output1526 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1527, $renderChildrenClosure1528, $renderingContext);

$output1526 .= '
                        ';
return $output1526;
};
$arguments1521 = array();
$arguments1521['then'] = NULL;
$arguments1521['else'] = NULL;
$arguments1521['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1523 = array();
$array1524 = array (
);$array1523['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1524);

$expression1525 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1521['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1523)
					),
					$renderingContext
				);
$arguments1521['__thenClosure'] = $renderChildrenClosure1522;

$output1499 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1521, $renderChildrenClosure1522, $renderingContext);

$output1499 .= '
                    ';
return $output1499;
};

$output1485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1486, $renderChildrenClosure1487, $renderingContext);

$output1485 .= '
        ';
return $output1485;
};

$output1365 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1366, $renderChildrenClosure1367, $renderingContext);

$output1365 .= '
		';
return $output1365;
};
$arguments1363 = array();

$output1362 .= '';

$output1362 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1809 = function() use ($renderingContext, $self) {
$output1810 = '';

$output1810 .= '
			<div class="alert ">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1812 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1811 = array();
$arguments1811['key'] = NULL;
$arguments1811['id'] = NULL;
$arguments1811['default'] = NULL;
$arguments1811['arguments'] = NULL;
$arguments1811['extensionName'] = NULL;
$arguments1811['languageKey'] = NULL;
$arguments1811['alternativeLanguageKeys'] = NULL;
$arguments1811['key'] = 'list_nonewsfound';

$output1810 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1811, $renderChildrenClosure1812, $renderingContext)]);

$output1810 .= '
			</div>
		';
return $output1810;
};
$arguments1808 = array();
$arguments1808['if'] = NULL;

$output1362 .= '';

$output1362 .= '
	';
return $output1362;
};
$arguments911 = array();
$arguments911['then'] = NULL;
$arguments911['else'] = NULL;
$arguments911['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1359 = array();
$array1360 = array (
);$array1359['0'] = $renderingContext->getVariableProvider()->getByPath('news', $array1360);

$expression1361 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments911['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1361(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1359)
					),
					$renderingContext
				);
$arguments911['__thenClosure'] = function() use ($renderingContext, $self) {
$output913 = '';

$output913 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
$output1135 = '';

$output1135 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1137 = function() use ($renderingContext, $self) {
$output1138 = '';

$output1138 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1139 = array();
$arguments1139['then'] = NULL;
$arguments1139['else'] = NULL;
$arguments1139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1141 = array();
$array1142 = array (
);$array1141['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1142);
$array1141['1'] = ' == 1';

$expression1143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1141)
					),
					$renderingContext
				);
$arguments1139['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output1138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1139, $renderChildrenClosure1140, $renderingContext);

$output1138 .= '" id="news-container-';
$array1144 = array (
);
$output1138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array1144)]);

$output1138 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1146 = function() use ($renderingContext, $self) {
$output1200 = '';

$output1200 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1202 = function() use ($renderingContext, $self) {
$output1203 = '';

$output1203 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1205 = function() use ($renderingContext, $self) {
$output1207 = '';

$output1207 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1208 = array();
$arguments1208['section'] = NULL;
$arguments1208['partial'] = NULL;
$arguments1208['delegate'] = NULL;
$arguments1208['renderable'] = NULL;
$arguments1208['arguments'] = array (
);
$arguments1208['optional'] = false;
$arguments1208['default'] = NULL;
$arguments1208['contentAs'] = NULL;
$arguments1208['debug'] = true;
$arguments1208['partial'] = 'List/Item';
// Rendering Array
$array1210 = array();
$array1211 = array (
);$array1210['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1211);
$array1212 = array (
);$array1210['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1212);
$array1213 = array (
);$array1210['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1213);
$arguments1208['arguments'] = $array1210;

$output1207 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1208, $renderChildrenClosure1209, $renderingContext);

$output1207 .= '
                                ';
return $output1207;
};
$arguments1204 = array();
$arguments1204['each'] = NULL;
$arguments1204['as'] = NULL;
$arguments1204['key'] = NULL;
$arguments1204['reverse'] = false;
$arguments1204['iteration'] = NULL;
$array1206 = array (
);$arguments1204['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1206);
$arguments1204['as'] = 'newsItem';
$arguments1204['iteration'] = 'iterator';

$output1203 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1204, $renderChildrenClosure1205, $renderingContext);

$output1203 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1215 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments1214 = array();
$arguments1214['additionalAttributes'] = NULL;
$arguments1214['data'] = NULL;
$arguments1214['aria'] = NULL;
$arguments1214['class'] = NULL;
$arguments1214['dir'] = NULL;
$arguments1214['id'] = NULL;
$arguments1214['lang'] = NULL;
$arguments1214['style'] = NULL;
$arguments1214['title'] = NULL;
$arguments1214['accesskey'] = NULL;
$arguments1214['tabindex'] = NULL;
$arguments1214['onclick'] = NULL;
$arguments1214['async'] = NULL;
$arguments1214['crossorigin'] = NULL;
$arguments1214['defer'] = NULL;
$arguments1214['integrity'] = NULL;
$arguments1214['nomodule'] = NULL;
$arguments1214['nonce'] = NULL;
$arguments1214['referrerpolicy'] = NULL;
$arguments1214['src'] = NULL;
$arguments1214['type'] = NULL;
$arguments1214['identifier'] = NULL;
$arguments1214['priority'] = false;
$arguments1214['identifier'] = 'news-card-list-js';

$output1203 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1214, $renderChildrenClosure1215, $renderingContext);

$output1203 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1217 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments1216 = array();
$arguments1216['additionalAttributes'] = NULL;
$arguments1216['data'] = NULL;
$arguments1216['aria'] = NULL;
$arguments1216['class'] = NULL;
$arguments1216['dir'] = NULL;
$arguments1216['id'] = NULL;
$arguments1216['lang'] = NULL;
$arguments1216['style'] = NULL;
$arguments1216['title'] = NULL;
$arguments1216['accesskey'] = NULL;
$arguments1216['tabindex'] = NULL;
$arguments1216['onclick'] = NULL;
$arguments1216['as'] = NULL;
$arguments1216['crossorigin'] = NULL;
$arguments1216['disabled'] = NULL;
$arguments1216['href'] = NULL;
$arguments1216['hreflang'] = NULL;
$arguments1216['importance'] = NULL;
$arguments1216['integrity'] = NULL;
$arguments1216['media'] = NULL;
$arguments1216['referrerpolicy'] = NULL;
$arguments1216['rel'] = NULL;
$arguments1216['sizes'] = NULL;
$arguments1216['type'] = NULL;
$arguments1216['nonce'] = NULL;
$arguments1216['identifier'] = NULL;
$arguments1216['priority'] = false;
$arguments1216['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array1218 = array();
$array1218['0'] = 'true';

$expression1219 = function($context) {return TRUE;};
$arguments1216['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1218)
					),
					$renderingContext
				);

$output1203 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1216, $renderChildrenClosure1217, $renderingContext);

$output1203 .= '

                        ';
return $output1203;
};
$arguments1201 = array();

$output1200 .= '';

$output1200 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1221 = function() use ($renderingContext, $self) {
$output1222 = '';

$output1222 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1224 = function() use ($renderingContext, $self) {
$output1228 = '';

$output1228 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1229 = array();
$arguments1229['section'] = NULL;
$arguments1229['partial'] = NULL;
$arguments1229['delegate'] = NULL;
$arguments1229['renderable'] = NULL;
$arguments1229['arguments'] = array (
);
$arguments1229['optional'] = false;
$arguments1229['default'] = NULL;
$arguments1229['contentAs'] = NULL;
$arguments1229['debug'] = true;
$arguments1229['partial'] = 'List/Pagination';
// Rendering Array
$array1231 = array();
$array1232 = array (
);$array1231['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1232);
$array1233 = array (
);$array1231['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1233);
$arguments1229['arguments'] = $array1231;

$output1228 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1229, $renderChildrenClosure1230, $renderingContext);

$output1228 .= '
                            ';
return $output1228;
};
$arguments1223 = array();
$arguments1223['then'] = NULL;
$arguments1223['else'] = NULL;
$arguments1223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1225 = array();
$array1226 = array (
);$array1225['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1226);

$expression1227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1225)
					),
					$renderingContext
				);
$arguments1223['__thenClosure'] = $renderChildrenClosure1224;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1223, $renderChildrenClosure1224, $renderingContext);

$output1222 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1235 = function() use ($renderingContext, $self) {
$output1237 = '';

$output1237 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1238 = array();
$arguments1238['section'] = NULL;
$arguments1238['partial'] = NULL;
$arguments1238['delegate'] = NULL;
$arguments1238['renderable'] = NULL;
$arguments1238['arguments'] = array (
);
$arguments1238['optional'] = false;
$arguments1238['default'] = NULL;
$arguments1238['contentAs'] = NULL;
$arguments1238['debug'] = true;
$arguments1238['partial'] = 'List/Item';
// Rendering Array
$array1240 = array();
$array1241 = array (
);$array1240['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1241);
$array1242 = array (
);$array1240['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1242);
$array1243 = array (
);$array1240['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1243);
$arguments1238['arguments'] = $array1240;

$output1237 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1238, $renderChildrenClosure1239, $renderingContext);

$output1237 .= '
                                ';
return $output1237;
};
$arguments1234 = array();
$arguments1234['each'] = NULL;
$arguments1234['as'] = NULL;
$arguments1234['key'] = NULL;
$arguments1234['reverse'] = false;
$arguments1234['iteration'] = NULL;
$array1236 = array (
);$arguments1234['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1236);
$arguments1234['as'] = 'newsItem';
$arguments1234['iteration'] = 'iterator';

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1234, $renderChildrenClosure1235, $renderingContext);

$output1222 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1245 = function() use ($renderingContext, $self) {
$output1249 = '';

$output1249 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1250 = array();
$arguments1250['section'] = NULL;
$arguments1250['partial'] = NULL;
$arguments1250['delegate'] = NULL;
$arguments1250['renderable'] = NULL;
$arguments1250['arguments'] = array (
);
$arguments1250['optional'] = false;
$arguments1250['default'] = NULL;
$arguments1250['contentAs'] = NULL;
$arguments1250['debug'] = true;
$arguments1250['partial'] = 'List/Pagination';
// Rendering Array
$array1252 = array();
$array1253 = array (
);$array1252['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1253);
$array1254 = array (
);$array1252['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1254);
$arguments1250['arguments'] = $array1252;

$output1249 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1250, $renderChildrenClosure1251, $renderingContext);

$output1249 .= '
                            ';
return $output1249;
};
$arguments1244 = array();
$arguments1244['then'] = NULL;
$arguments1244['else'] = NULL;
$arguments1244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1246 = array();
$array1247 = array (
);$array1246['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1247);

$expression1248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1246)
					),
					$renderingContext
				);
$arguments1244['__thenClosure'] = $renderChildrenClosure1245;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1244, $renderChildrenClosure1245, $renderingContext);

$output1222 .= '
                        ';
return $output1222;
};
$arguments1220 = array();
$arguments1220['if'] = NULL;

$output1200 .= '';

$output1200 .= '
                    ';
return $output1200;
};
$arguments1145 = array();
$arguments1145['then'] = NULL;
$arguments1145['else'] = NULL;
$arguments1145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1197 = array();
$array1198 = array (
);$array1197['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1198);

$expression1199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1197)
					),
					$renderingContext
				);
$arguments1145['__thenClosure'] = function() use ($renderingContext, $self) {
$output1147 = '';

$output1147 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1149 = function() use ($renderingContext, $self) {
$output1151 = '';

$output1151 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1152 = array();
$arguments1152['section'] = NULL;
$arguments1152['partial'] = NULL;
$arguments1152['delegate'] = NULL;
$arguments1152['renderable'] = NULL;
$arguments1152['arguments'] = array (
);
$arguments1152['optional'] = false;
$arguments1152['default'] = NULL;
$arguments1152['contentAs'] = NULL;
$arguments1152['debug'] = true;
$arguments1152['partial'] = 'List/Item';
// Rendering Array
$array1154 = array();
$array1155 = array (
);$array1154['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1155);
$array1156 = array (
);$array1154['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1156);
$array1157 = array (
);$array1154['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1157);
$arguments1152['arguments'] = $array1154;

$output1151 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1152, $renderChildrenClosure1153, $renderingContext);

$output1151 .= '
                                ';
return $output1151;
};
$arguments1148 = array();
$arguments1148['each'] = NULL;
$arguments1148['as'] = NULL;
$arguments1148['key'] = NULL;
$arguments1148['reverse'] = false;
$arguments1148['iteration'] = NULL;
$array1150 = array (
);$arguments1148['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1150);
$arguments1148['as'] = 'newsItem';
$arguments1148['iteration'] = 'iterator';

$output1147 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1148, $renderChildrenClosure1149, $renderingContext);

$output1147 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1159 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments1158 = array();
$arguments1158['additionalAttributes'] = NULL;
$arguments1158['data'] = NULL;
$arguments1158['aria'] = NULL;
$arguments1158['class'] = NULL;
$arguments1158['dir'] = NULL;
$arguments1158['id'] = NULL;
$arguments1158['lang'] = NULL;
$arguments1158['style'] = NULL;
$arguments1158['title'] = NULL;
$arguments1158['accesskey'] = NULL;
$arguments1158['tabindex'] = NULL;
$arguments1158['onclick'] = NULL;
$arguments1158['async'] = NULL;
$arguments1158['crossorigin'] = NULL;
$arguments1158['defer'] = NULL;
$arguments1158['integrity'] = NULL;
$arguments1158['nomodule'] = NULL;
$arguments1158['nonce'] = NULL;
$arguments1158['referrerpolicy'] = NULL;
$arguments1158['src'] = NULL;
$arguments1158['type'] = NULL;
$arguments1158['identifier'] = NULL;
$arguments1158['priority'] = false;
$arguments1158['identifier'] = 'news-card-list-js';

$output1147 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1158, $renderChildrenClosure1159, $renderingContext);

$output1147 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1161 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments1160 = array();
$arguments1160['additionalAttributes'] = NULL;
$arguments1160['data'] = NULL;
$arguments1160['aria'] = NULL;
$arguments1160['class'] = NULL;
$arguments1160['dir'] = NULL;
$arguments1160['id'] = NULL;
$arguments1160['lang'] = NULL;
$arguments1160['style'] = NULL;
$arguments1160['title'] = NULL;
$arguments1160['accesskey'] = NULL;
$arguments1160['tabindex'] = NULL;
$arguments1160['onclick'] = NULL;
$arguments1160['as'] = NULL;
$arguments1160['crossorigin'] = NULL;
$arguments1160['disabled'] = NULL;
$arguments1160['href'] = NULL;
$arguments1160['hreflang'] = NULL;
$arguments1160['importance'] = NULL;
$arguments1160['integrity'] = NULL;
$arguments1160['media'] = NULL;
$arguments1160['referrerpolicy'] = NULL;
$arguments1160['rel'] = NULL;
$arguments1160['sizes'] = NULL;
$arguments1160['type'] = NULL;
$arguments1160['nonce'] = NULL;
$arguments1160['identifier'] = NULL;
$arguments1160['priority'] = false;
$arguments1160['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array1162 = array();
$array1162['0'] = 'true';

$expression1163 = function($context) {return TRUE;};
$arguments1160['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1162)
					),
					$renderingContext
				);

$output1147 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1160, $renderChildrenClosure1161, $renderingContext);

$output1147 .= '

                        ';
return $output1147;
};
$arguments1145['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1164 = '';

$output1164 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1166 = function() use ($renderingContext, $self) {
$output1170 = '';

$output1170 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1171 = array();
$arguments1171['section'] = NULL;
$arguments1171['partial'] = NULL;
$arguments1171['delegate'] = NULL;
$arguments1171['renderable'] = NULL;
$arguments1171['arguments'] = array (
);
$arguments1171['optional'] = false;
$arguments1171['default'] = NULL;
$arguments1171['contentAs'] = NULL;
$arguments1171['debug'] = true;
$arguments1171['partial'] = 'List/Pagination';
// Rendering Array
$array1173 = array();
$array1174 = array (
);$array1173['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1174);
$array1175 = array (
);$array1173['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1175);
$arguments1171['arguments'] = $array1173;

$output1170 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1171, $renderChildrenClosure1172, $renderingContext);

$output1170 .= '
                            ';
return $output1170;
};
$arguments1165 = array();
$arguments1165['then'] = NULL;
$arguments1165['else'] = NULL;
$arguments1165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1167 = array();
$array1168 = array (
);$array1167['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1168);

$expression1169 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1167)
					),
					$renderingContext
				);
$arguments1165['__thenClosure'] = $renderChildrenClosure1166;

$output1164 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1165, $renderChildrenClosure1166, $renderingContext);

$output1164 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1177 = function() use ($renderingContext, $self) {
$output1179 = '';

$output1179 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1180 = array();
$arguments1180['section'] = NULL;
$arguments1180['partial'] = NULL;
$arguments1180['delegate'] = NULL;
$arguments1180['renderable'] = NULL;
$arguments1180['arguments'] = array (
);
$arguments1180['optional'] = false;
$arguments1180['default'] = NULL;
$arguments1180['contentAs'] = NULL;
$arguments1180['debug'] = true;
$arguments1180['partial'] = 'List/Item';
// Rendering Array
$array1182 = array();
$array1183 = array (
);$array1182['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1183);
$array1184 = array (
);$array1182['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1184);
$array1185 = array (
);$array1182['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1185);
$arguments1180['arguments'] = $array1182;

$output1179 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1180, $renderChildrenClosure1181, $renderingContext);

$output1179 .= '
                                ';
return $output1179;
};
$arguments1176 = array();
$arguments1176['each'] = NULL;
$arguments1176['as'] = NULL;
$arguments1176['key'] = NULL;
$arguments1176['reverse'] = false;
$arguments1176['iteration'] = NULL;
$array1178 = array (
);$arguments1176['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1178);
$arguments1176['as'] = 'newsItem';
$arguments1176['iteration'] = 'iterator';

$output1164 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1176, $renderChildrenClosure1177, $renderingContext);

$output1164 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
$output1191 = '';

$output1191 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1192 = array();
$arguments1192['section'] = NULL;
$arguments1192['partial'] = NULL;
$arguments1192['delegate'] = NULL;
$arguments1192['renderable'] = NULL;
$arguments1192['arguments'] = array (
);
$arguments1192['optional'] = false;
$arguments1192['default'] = NULL;
$arguments1192['contentAs'] = NULL;
$arguments1192['debug'] = true;
$arguments1192['partial'] = 'List/Pagination';
// Rendering Array
$array1194 = array();
$array1195 = array (
);$array1194['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1195);
$array1196 = array (
);$array1194['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1196);
$arguments1192['arguments'] = $array1194;

$output1191 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1192, $renderChildrenClosure1193, $renderingContext);

$output1191 .= '
                            ';
return $output1191;
};
$arguments1186 = array();
$arguments1186['then'] = NULL;
$arguments1186['else'] = NULL;
$arguments1186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1188 = array();
$array1189 = array (
);$array1188['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1189);

$expression1190 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1188)
					),
					$renderingContext
				);
$arguments1186['__thenClosure'] = $renderChildrenClosure1187;

$output1164 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext);

$output1164 .= '
                        ';
return $output1164;
};

$output1138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1145, $renderChildrenClosure1146, $renderingContext);

$output1138 .= '
                </div>
        ';
return $output1138;
};
$arguments1136 = array();

$output1135 .= '';

$output1135 .= '       
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1256 = function() use ($renderingContext, $self) {
$output1257 = '';

$output1257 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1259 = function() use ($renderingContext, $self) {
$output1307 = '';

$output1307 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1309 = function() use ($renderingContext, $self) {
$output1310 = '';

$output1310 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1312 = function() use ($renderingContext, $self) {
$output1314 = '';

$output1314 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1315 = array();
$arguments1315['section'] = NULL;
$arguments1315['partial'] = NULL;
$arguments1315['delegate'] = NULL;
$arguments1315['renderable'] = NULL;
$arguments1315['arguments'] = array (
);
$arguments1315['optional'] = false;
$arguments1315['default'] = NULL;
$arguments1315['contentAs'] = NULL;
$arguments1315['debug'] = true;
$arguments1315['partial'] = 'List/Item';
// Rendering Array
$array1317 = array();
$array1318 = array (
);$array1317['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1318);
$array1319 = array (
);$array1317['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1319);
$array1320 = array (
);$array1317['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1320);
$arguments1315['arguments'] = $array1317;

$output1314 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1315, $renderChildrenClosure1316, $renderingContext);

$output1314 .= '
                            ';
return $output1314;
};
$arguments1311 = array();
$arguments1311['each'] = NULL;
$arguments1311['as'] = NULL;
$arguments1311['key'] = NULL;
$arguments1311['reverse'] = false;
$arguments1311['iteration'] = NULL;
$array1313 = array (
);$arguments1311['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1313);
$arguments1311['as'] = 'newsItem';
$arguments1311['iteration'] = 'iterator';

$output1310 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1311, $renderChildrenClosure1312, $renderingContext);

$output1310 .= '
                            </ul></div>
                    ';
return $output1310;
};
$arguments1308 = array();

$output1307 .= '';

$output1307 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1322 = function() use ($renderingContext, $self) {
$output1323 = '';

$output1323 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1325 = function() use ($renderingContext, $self) {
$output1329 = '';

$output1329 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1330 = array();
$arguments1330['section'] = NULL;
$arguments1330['partial'] = NULL;
$arguments1330['delegate'] = NULL;
$arguments1330['renderable'] = NULL;
$arguments1330['arguments'] = array (
);
$arguments1330['optional'] = false;
$arguments1330['default'] = NULL;
$arguments1330['contentAs'] = NULL;
$arguments1330['debug'] = true;
$arguments1330['partial'] = 'List/Pagination';
// Rendering Array
$array1332 = array();
$array1333 = array (
);$array1332['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1333);
$array1334 = array (
);$array1332['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1334);
$arguments1330['arguments'] = $array1332;

$output1329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1330, $renderChildrenClosure1331, $renderingContext);

$output1329 .= '
                        ';
return $output1329;
};
$arguments1324 = array();
$arguments1324['then'] = NULL;
$arguments1324['else'] = NULL;
$arguments1324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1326 = array();
$array1327 = array (
);$array1326['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1327);

$expression1328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1326)
					),
					$renderingContext
				);
$arguments1324['__thenClosure'] = $renderChildrenClosure1325;

$output1323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1324, $renderChildrenClosure1325, $renderingContext);

$output1323 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1336 = function() use ($renderingContext, $self) {
$output1338 = '';

$output1338 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1339 = array();
$arguments1339['section'] = NULL;
$arguments1339['partial'] = NULL;
$arguments1339['delegate'] = NULL;
$arguments1339['renderable'] = NULL;
$arguments1339['arguments'] = array (
);
$arguments1339['optional'] = false;
$arguments1339['default'] = NULL;
$arguments1339['contentAs'] = NULL;
$arguments1339['debug'] = true;
$arguments1339['partial'] = 'List/Item';
// Rendering Array
$array1341 = array();
$array1342 = array (
);$array1341['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1342);
$array1343 = array (
);$array1341['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1343);
$array1344 = array (
);$array1341['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1344);
$arguments1339['arguments'] = $array1341;

$output1338 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1339, $renderChildrenClosure1340, $renderingContext);

$output1338 .= '
                            ';
return $output1338;
};
$arguments1335 = array();
$arguments1335['each'] = NULL;
$arguments1335['as'] = NULL;
$arguments1335['key'] = NULL;
$arguments1335['reverse'] = false;
$arguments1335['iteration'] = NULL;
$array1337 = array (
);$arguments1335['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1337);
$arguments1335['as'] = 'newsItem';
$arguments1335['iteration'] = 'iterator';

$output1323 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1335, $renderChildrenClosure1336, $renderingContext);

$output1323 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1346 = function() use ($renderingContext, $self) {
$output1350 = '';

$output1350 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1351 = array();
$arguments1351['section'] = NULL;
$arguments1351['partial'] = NULL;
$arguments1351['delegate'] = NULL;
$arguments1351['renderable'] = NULL;
$arguments1351['arguments'] = array (
);
$arguments1351['optional'] = false;
$arguments1351['default'] = NULL;
$arguments1351['contentAs'] = NULL;
$arguments1351['debug'] = true;
$arguments1351['partial'] = 'List/Pagination';
// Rendering Array
$array1353 = array();
$array1354 = array (
);$array1353['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1354);
$array1355 = array (
);$array1353['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1355);
$arguments1351['arguments'] = $array1353;

$output1350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1351, $renderChildrenClosure1352, $renderingContext);

$output1350 .= '
                        ';
return $output1350;
};
$arguments1345 = array();
$arguments1345['then'] = NULL;
$arguments1345['else'] = NULL;
$arguments1345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1347 = array();
$array1348 = array (
);$array1347['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1348);

$expression1349 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1347)
					),
					$renderingContext
				);
$arguments1345['__thenClosure'] = $renderChildrenClosure1346;

$output1323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1345, $renderChildrenClosure1346, $renderingContext);

$output1323 .= '
                    ';
return $output1323;
};
$arguments1321 = array();
$arguments1321['if'] = NULL;

$output1307 .= '';

$output1307 .= '
                ';
return $output1307;
};
$arguments1258 = array();
$arguments1258['then'] = NULL;
$arguments1258['else'] = NULL;
$arguments1258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1304 = array();
$array1305 = array (
);$array1304['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1305);

$expression1306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1304)
					),
					$renderingContext
				);
$arguments1258['__thenClosure'] = function() use ($renderingContext, $self) {
$output1260 = '';

$output1260 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1262 = function() use ($renderingContext, $self) {
$output1264 = '';

$output1264 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1265 = array();
$arguments1265['section'] = NULL;
$arguments1265['partial'] = NULL;
$arguments1265['delegate'] = NULL;
$arguments1265['renderable'] = NULL;
$arguments1265['arguments'] = array (
);
$arguments1265['optional'] = false;
$arguments1265['default'] = NULL;
$arguments1265['contentAs'] = NULL;
$arguments1265['debug'] = true;
$arguments1265['partial'] = 'List/Item';
// Rendering Array
$array1267 = array();
$array1268 = array (
);$array1267['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1268);
$array1269 = array (
);$array1267['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1269);
$array1270 = array (
);$array1267['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1270);
$arguments1265['arguments'] = $array1267;

$output1264 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1265, $renderChildrenClosure1266, $renderingContext);

$output1264 .= '
                            ';
return $output1264;
};
$arguments1261 = array();
$arguments1261['each'] = NULL;
$arguments1261['as'] = NULL;
$arguments1261['key'] = NULL;
$arguments1261['reverse'] = false;
$arguments1261['iteration'] = NULL;
$array1263 = array (
);$arguments1261['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1263);
$arguments1261['as'] = 'newsItem';
$arguments1261['iteration'] = 'iterator';

$output1260 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1261, $renderChildrenClosure1262, $renderingContext);

$output1260 .= '
                            </ul></div>
                    ';
return $output1260;
};
$arguments1258['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1271 = '';

$output1271 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1273 = function() use ($renderingContext, $self) {
$output1277 = '';

$output1277 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1278 = array();
$arguments1278['section'] = NULL;
$arguments1278['partial'] = NULL;
$arguments1278['delegate'] = NULL;
$arguments1278['renderable'] = NULL;
$arguments1278['arguments'] = array (
);
$arguments1278['optional'] = false;
$arguments1278['default'] = NULL;
$arguments1278['contentAs'] = NULL;
$arguments1278['debug'] = true;
$arguments1278['partial'] = 'List/Pagination';
// Rendering Array
$array1280 = array();
$array1281 = array (
);$array1280['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1281);
$array1282 = array (
);$array1280['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1282);
$arguments1278['arguments'] = $array1280;

$output1277 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1278, $renderChildrenClosure1279, $renderingContext);

$output1277 .= '
                        ';
return $output1277;
};
$arguments1272 = array();
$arguments1272['then'] = NULL;
$arguments1272['else'] = NULL;
$arguments1272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1274 = array();
$array1275 = array (
);$array1274['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1275);

$expression1276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1274)
					),
					$renderingContext
				);
$arguments1272['__thenClosure'] = $renderChildrenClosure1273;

$output1271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1272, $renderChildrenClosure1273, $renderingContext);

$output1271 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1284 = function() use ($renderingContext, $self) {
$output1286 = '';

$output1286 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1287 = array();
$arguments1287['section'] = NULL;
$arguments1287['partial'] = NULL;
$arguments1287['delegate'] = NULL;
$arguments1287['renderable'] = NULL;
$arguments1287['arguments'] = array (
);
$arguments1287['optional'] = false;
$arguments1287['default'] = NULL;
$arguments1287['contentAs'] = NULL;
$arguments1287['debug'] = true;
$arguments1287['partial'] = 'List/Item';
// Rendering Array
$array1289 = array();
$array1290 = array (
);$array1289['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1290);
$array1291 = array (
);$array1289['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1291);
$array1292 = array (
);$array1289['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1292);
$arguments1287['arguments'] = $array1289;

$output1286 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1287, $renderChildrenClosure1288, $renderingContext);

$output1286 .= '
                            ';
return $output1286;
};
$arguments1283 = array();
$arguments1283['each'] = NULL;
$arguments1283['as'] = NULL;
$arguments1283['key'] = NULL;
$arguments1283['reverse'] = false;
$arguments1283['iteration'] = NULL;
$array1285 = array (
);$arguments1283['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1285);
$arguments1283['as'] = 'newsItem';
$arguments1283['iteration'] = 'iterator';

$output1271 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1283, $renderChildrenClosure1284, $renderingContext);

$output1271 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1294 = function() use ($renderingContext, $self) {
$output1298 = '';

$output1298 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1299 = array();
$arguments1299['section'] = NULL;
$arguments1299['partial'] = NULL;
$arguments1299['delegate'] = NULL;
$arguments1299['renderable'] = NULL;
$arguments1299['arguments'] = array (
);
$arguments1299['optional'] = false;
$arguments1299['default'] = NULL;
$arguments1299['contentAs'] = NULL;
$arguments1299['debug'] = true;
$arguments1299['partial'] = 'List/Pagination';
// Rendering Array
$array1301 = array();
$array1302 = array (
);$array1301['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1302);
$array1303 = array (
);$array1301['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1303);
$arguments1299['arguments'] = $array1301;

$output1298 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1299, $renderChildrenClosure1300, $renderingContext);

$output1298 .= '
                        ';
return $output1298;
};
$arguments1293 = array();
$arguments1293['then'] = NULL;
$arguments1293['else'] = NULL;
$arguments1293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1295 = array();
$array1296 = array (
);$array1295['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1296);

$expression1297 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1295)
					),
					$renderingContext
				);
$arguments1293['__thenClosure'] = $renderChildrenClosure1294;

$output1271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1293, $renderChildrenClosure1294, $renderingContext);

$output1271 .= '
                    ';
return $output1271;
};

$output1257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1258, $renderChildrenClosure1259, $renderingContext);

$output1257 .= '
        ';
return $output1257;
};
$arguments1255 = array();
$arguments1255['if'] = NULL;

$output1135 .= '';

$output1135 .= '
        ';
return $output1135;
};
$arguments914 = array();
$arguments914['then'] = NULL;
$arguments914['else'] = NULL;
$arguments914['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1132 = array();
$array1133 = array (
);$array1132['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1133);
$array1132['1'] = ' == 1';

$expression1134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments914['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1132)
					),
					$renderingContext
				);
$arguments914['__thenClosure'] = function() use ($renderingContext, $self) {
$output916 = '';

$output916 .= '
                <div class="news-list-view ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments917 = array();
$arguments917['then'] = NULL;
$arguments917['else'] = NULL;
$arguments917['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array919 = array();
$array920 = array (
);$array919['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array920);
$array919['1'] = ' == 1';

$expression921 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments917['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression921(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array919)
					),
					$renderingContext
				);
$arguments917['then'] = 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-25 gx-0 g-md-30';

$output916 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output916 .= '" id="news-container-';
$array922 = array (
);
$output916 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('contentObjectData.uid', $array922)]);

$output916 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
$output978 = '';

$output978 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
$output981 = '';

$output981 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure983 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['section'] = NULL;
$arguments986['partial'] = NULL;
$arguments986['delegate'] = NULL;
$arguments986['renderable'] = NULL;
$arguments986['arguments'] = array (
);
$arguments986['optional'] = false;
$arguments986['default'] = NULL;
$arguments986['contentAs'] = NULL;
$arguments986['debug'] = true;
$arguments986['partial'] = 'List/Item';
// Rendering Array
$array988 = array();
$array989 = array (
);$array988['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array989);
$array990 = array (
);$array988['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array990);
$array991 = array (
);$array988['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array991);
$arguments986['arguments'] = $array988;

$output985 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);

$output985 .= '
                                ';
return $output985;
};
$arguments982 = array();
$arguments982['each'] = NULL;
$arguments982['as'] = NULL;
$arguments982['key'] = NULL;
$arguments982['reverse'] = false;
$arguments982['iteration'] = NULL;
$array984 = array (
);$arguments982['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array984);
$arguments982['as'] = 'newsItem';
$arguments982['iteration'] = 'iterator';

$output981 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments982, $renderChildrenClosure983, $renderingContext);

$output981 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure993 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments992 = array();
$arguments992['additionalAttributes'] = NULL;
$arguments992['data'] = NULL;
$arguments992['aria'] = NULL;
$arguments992['class'] = NULL;
$arguments992['dir'] = NULL;
$arguments992['id'] = NULL;
$arguments992['lang'] = NULL;
$arguments992['style'] = NULL;
$arguments992['title'] = NULL;
$arguments992['accesskey'] = NULL;
$arguments992['tabindex'] = NULL;
$arguments992['onclick'] = NULL;
$arguments992['async'] = NULL;
$arguments992['crossorigin'] = NULL;
$arguments992['defer'] = NULL;
$arguments992['integrity'] = NULL;
$arguments992['nomodule'] = NULL;
$arguments992['nonce'] = NULL;
$arguments992['referrerpolicy'] = NULL;
$arguments992['src'] = NULL;
$arguments992['type'] = NULL;
$arguments992['identifier'] = NULL;
$arguments992['priority'] = false;
$arguments992['identifier'] = 'news-card-list-js';

$output981 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments992, $renderChildrenClosure993, $renderingContext);

$output981 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure995 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments994 = array();
$arguments994['additionalAttributes'] = NULL;
$arguments994['data'] = NULL;
$arguments994['aria'] = NULL;
$arguments994['class'] = NULL;
$arguments994['dir'] = NULL;
$arguments994['id'] = NULL;
$arguments994['lang'] = NULL;
$arguments994['style'] = NULL;
$arguments994['title'] = NULL;
$arguments994['accesskey'] = NULL;
$arguments994['tabindex'] = NULL;
$arguments994['onclick'] = NULL;
$arguments994['as'] = NULL;
$arguments994['crossorigin'] = NULL;
$arguments994['disabled'] = NULL;
$arguments994['href'] = NULL;
$arguments994['hreflang'] = NULL;
$arguments994['importance'] = NULL;
$arguments994['integrity'] = NULL;
$arguments994['media'] = NULL;
$arguments994['referrerpolicy'] = NULL;
$arguments994['rel'] = NULL;
$arguments994['sizes'] = NULL;
$arguments994['type'] = NULL;
$arguments994['nonce'] = NULL;
$arguments994['identifier'] = NULL;
$arguments994['priority'] = false;
$arguments994['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array996 = array();
$array996['0'] = 'true';

$expression997 = function($context) {return TRUE;};
$arguments994['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression997(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array996)
					),
					$renderingContext
				);

$output981 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments994, $renderChildrenClosure995, $renderingContext);

$output981 .= '

                        ';
return $output981;
};
$arguments979 = array();

$output978 .= '';

$output978 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure999 = function() use ($renderingContext, $self) {
$output1000 = '';

$output1000 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1002 = function() use ($renderingContext, $self) {
$output1006 = '';

$output1006 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1008 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1007 = array();
$arguments1007['section'] = NULL;
$arguments1007['partial'] = NULL;
$arguments1007['delegate'] = NULL;
$arguments1007['renderable'] = NULL;
$arguments1007['arguments'] = array (
);
$arguments1007['optional'] = false;
$arguments1007['default'] = NULL;
$arguments1007['contentAs'] = NULL;
$arguments1007['debug'] = true;
$arguments1007['partial'] = 'List/Pagination';
// Rendering Array
$array1009 = array();
$array1010 = array (
);$array1009['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1010);
$array1011 = array (
);$array1009['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1011);
$arguments1007['arguments'] = $array1009;

$output1006 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1007, $renderChildrenClosure1008, $renderingContext);

$output1006 .= '
                            ';
return $output1006;
};
$arguments1001 = array();
$arguments1001['then'] = NULL;
$arguments1001['else'] = NULL;
$arguments1001['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1003 = array();
$array1004 = array (
);$array1003['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1004);

$expression1005 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1001['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1005(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1003)
					),
					$renderingContext
				);
$arguments1001['__thenClosure'] = $renderChildrenClosure1002;

$output1000 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1001, $renderChildrenClosure1002, $renderingContext);

$output1000 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
$output1015 = '';

$output1015 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1016 = array();
$arguments1016['section'] = NULL;
$arguments1016['partial'] = NULL;
$arguments1016['delegate'] = NULL;
$arguments1016['renderable'] = NULL;
$arguments1016['arguments'] = array (
);
$arguments1016['optional'] = false;
$arguments1016['default'] = NULL;
$arguments1016['contentAs'] = NULL;
$arguments1016['debug'] = true;
$arguments1016['partial'] = 'List/Item';
// Rendering Array
$array1018 = array();
$array1019 = array (
);$array1018['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1019);
$array1020 = array (
);$array1018['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1020);
$array1021 = array (
);$array1018['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1021);
$arguments1016['arguments'] = $array1018;

$output1015 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);

$output1015 .= '
                                ';
return $output1015;
};
$arguments1012 = array();
$arguments1012['each'] = NULL;
$arguments1012['as'] = NULL;
$arguments1012['key'] = NULL;
$arguments1012['reverse'] = false;
$arguments1012['iteration'] = NULL;
$array1014 = array (
);$arguments1012['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1014);
$arguments1012['as'] = 'newsItem';
$arguments1012['iteration'] = 'iterator';

$output1000 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext);

$output1000 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
$output1027 = '';

$output1027 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1029 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1028 = array();
$arguments1028['section'] = NULL;
$arguments1028['partial'] = NULL;
$arguments1028['delegate'] = NULL;
$arguments1028['renderable'] = NULL;
$arguments1028['arguments'] = array (
);
$arguments1028['optional'] = false;
$arguments1028['default'] = NULL;
$arguments1028['contentAs'] = NULL;
$arguments1028['debug'] = true;
$arguments1028['partial'] = 'List/Pagination';
// Rendering Array
$array1030 = array();
$array1031 = array (
);$array1030['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1031);
$array1032 = array (
);$array1030['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1032);
$arguments1028['arguments'] = $array1030;

$output1027 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1028, $renderChildrenClosure1029, $renderingContext);

$output1027 .= '
                            ';
return $output1027;
};
$arguments1022 = array();
$arguments1022['then'] = NULL;
$arguments1022['else'] = NULL;
$arguments1022['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1024 = array();
$array1025 = array (
);$array1024['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1025);

$expression1026 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1022['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1026(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1024)
					),
					$renderingContext
				);
$arguments1022['__thenClosure'] = $renderChildrenClosure1023;

$output1000 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1022, $renderChildrenClosure1023, $renderingContext);

$output1000 .= '
                        ';
return $output1000;
};
$arguments998 = array();
$arguments998['if'] = NULL;

$output978 .= '';

$output978 .= '
                    ';
return $output978;
};
$arguments923 = array();
$arguments923['then'] = NULL;
$arguments923['else'] = NULL;
$arguments923['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array975 = array();
$array976 = array (
);$array975['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array976);

$expression977 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments923['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression977(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array975)
					),
					$renderingContext
				);
$arguments923['__thenClosure'] = function() use ($renderingContext, $self) {
$output925 = '';

$output925 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
$output929 = '';

$output929 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure931 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments930 = array();
$arguments930['section'] = NULL;
$arguments930['partial'] = NULL;
$arguments930['delegate'] = NULL;
$arguments930['renderable'] = NULL;
$arguments930['arguments'] = array (
);
$arguments930['optional'] = false;
$arguments930['default'] = NULL;
$arguments930['contentAs'] = NULL;
$arguments930['debug'] = true;
$arguments930['partial'] = 'List/Item';
// Rendering Array
$array932 = array();
$array933 = array (
);$array932['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array933);
$array934 = array (
);$array932['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array934);
$array935 = array (
);$array932['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array935);
$arguments930['arguments'] = $array932;

$output929 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments930, $renderChildrenClosure931, $renderingContext);

$output929 .= '
                                ';
return $output929;
};
$arguments926 = array();
$arguments926['each'] = NULL;
$arguments926['as'] = NULL;
$arguments926['key'] = NULL;
$arguments926['reverse'] = false;
$arguments926['iteration'] = NULL;
$array928 = array (
);$arguments926['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array928);
$arguments926['as'] = 'newsItem';
$arguments926['iteration'] = 'iterator';

$output925 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext);

$output925 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
return '
                                                document.querySelector(".card-news").ontouchstart = function (e) {
                                                document.querySelector(".card-news .news-overlay").classList.toggle("news-overlay-touch");
                                            }
                                        ';
};
$arguments936 = array();
$arguments936['additionalAttributes'] = NULL;
$arguments936['data'] = NULL;
$arguments936['aria'] = NULL;
$arguments936['class'] = NULL;
$arguments936['dir'] = NULL;
$arguments936['id'] = NULL;
$arguments936['lang'] = NULL;
$arguments936['style'] = NULL;
$arguments936['title'] = NULL;
$arguments936['accesskey'] = NULL;
$arguments936['tabindex'] = NULL;
$arguments936['onclick'] = NULL;
$arguments936['async'] = NULL;
$arguments936['crossorigin'] = NULL;
$arguments936['defer'] = NULL;
$arguments936['integrity'] = NULL;
$arguments936['nomodule'] = NULL;
$arguments936['nonce'] = NULL;
$arguments936['referrerpolicy'] = NULL;
$arguments936['src'] = NULL;
$arguments936['type'] = NULL;
$arguments936['identifier'] = NULL;
$arguments936['priority'] = false;
$arguments936['identifier'] = 'news-card-list-js';

$output925 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext);

$output925 .= '                           
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure939 = function() use ($renderingContext, $self) {
return '
                                            .news-overlay,
                                            .news-overlay-touch {
                                                position: absolute;
                                                bottom: 100%;
                                                left: .625rem;
                                                right: .625rem;
                                                overflow: hidden;
                                                width: calc(100% - 1.25rem);
                                                height:0;
                                                transition: .2s ease;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .news-overlay,
                                                .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                    width: calc(100% - 1.875rem);
                                                }
                                            }
                                            
                                            .card-news:hover .news-overlay,
                                            .card-news .news-overlay-touch {
                                                bottom: 0;
                                                left: .625rem;
                                                right: .625rem;
                                                height: 100%;
                                                z-index: 1020;
                                            }
                                            @media (min-width: 768px) { 
                                                .card-news:hover .news-overlay,
                                                .card-news .news-overlay-touch {
                                                    left: .9375rem;
                                                    right: .9375rem;
                                                }
                                            }

                                            .card-news .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                display: none;
                                            }

                                            .card-news:hover .news-overlay h5,
                                            .card-news .news-overlay-touch h5 {
                                                color: $white;
                                                position: absolute;
                                                display: block;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                text-align: center;
                                                }

                                            .card-news:hover .news-overlay h5:after,
                                            .card-news .news-overlay-touch h5:after {
                                                    border: none;
                                                }
                                        ';
};
$arguments938 = array();
$arguments938['additionalAttributes'] = NULL;
$arguments938['data'] = NULL;
$arguments938['aria'] = NULL;
$arguments938['class'] = NULL;
$arguments938['dir'] = NULL;
$arguments938['id'] = NULL;
$arguments938['lang'] = NULL;
$arguments938['style'] = NULL;
$arguments938['title'] = NULL;
$arguments938['accesskey'] = NULL;
$arguments938['tabindex'] = NULL;
$arguments938['onclick'] = NULL;
$arguments938['as'] = NULL;
$arguments938['crossorigin'] = NULL;
$arguments938['disabled'] = NULL;
$arguments938['href'] = NULL;
$arguments938['hreflang'] = NULL;
$arguments938['importance'] = NULL;
$arguments938['integrity'] = NULL;
$arguments938['media'] = NULL;
$arguments938['referrerpolicy'] = NULL;
$arguments938['rel'] = NULL;
$arguments938['sizes'] = NULL;
$arguments938['type'] = NULL;
$arguments938['nonce'] = NULL;
$arguments938['identifier'] = NULL;
$arguments938['priority'] = false;
$arguments938['identifier'] = 'news-card-list-css';
// Rendering Boolean node
// Rendering Array
$array940 = array();
$array940['0'] = 'true';

$expression941 = function($context) {return TRUE;};
$arguments938['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression941(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array940)
					),
					$renderingContext
				);

$output925 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments938, $renderChildrenClosure939, $renderingContext);

$output925 .= '

                        ';
return $output925;
};
$arguments923['__elseClosures'][] = function() use ($renderingContext, $self) {
$output942 = '';

$output942 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
$output948 = '';

$output948 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments949 = array();
$arguments949['section'] = NULL;
$arguments949['partial'] = NULL;
$arguments949['delegate'] = NULL;
$arguments949['renderable'] = NULL;
$arguments949['arguments'] = array (
);
$arguments949['optional'] = false;
$arguments949['default'] = NULL;
$arguments949['contentAs'] = NULL;
$arguments949['debug'] = true;
$arguments949['partial'] = 'List/Pagination';
// Rendering Array
$array951 = array();
$array952 = array (
);$array951['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array952);
$array953 = array (
);$array951['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array953);
$arguments949['arguments'] = $array951;

$output948 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments949, $renderChildrenClosure950, $renderingContext);

$output948 .= '
                            ';
return $output948;
};
$arguments943 = array();
$arguments943['then'] = NULL;
$arguments943['else'] = NULL;
$arguments943['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array945 = array();
$array946 = array (
);$array945['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array946);

$expression947 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments943['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression947(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array945)
					),
					$renderingContext
				);
$arguments943['__thenClosure'] = $renderChildrenClosure944;

$output942 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments943, $renderChildrenClosure944, $renderingContext);

$output942 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
$output957 = '';

$output957 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments958 = array();
$arguments958['section'] = NULL;
$arguments958['partial'] = NULL;
$arguments958['delegate'] = NULL;
$arguments958['renderable'] = NULL;
$arguments958['arguments'] = array (
);
$arguments958['optional'] = false;
$arguments958['default'] = NULL;
$arguments958['contentAs'] = NULL;
$arguments958['debug'] = true;
$arguments958['partial'] = 'List/Item';
// Rendering Array
$array960 = array();
$array961 = array (
);$array960['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array961);
$array962 = array (
);$array960['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array962);
$array963 = array (
);$array960['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array963);
$arguments958['arguments'] = $array960;

$output957 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext);

$output957 .= '
                                ';
return $output957;
};
$arguments954 = array();
$arguments954['each'] = NULL;
$arguments954['as'] = NULL;
$arguments954['key'] = NULL;
$arguments954['reverse'] = false;
$arguments954['iteration'] = NULL;
$array956 = array (
);$arguments954['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array956);
$arguments954['as'] = 'newsItem';
$arguments954['iteration'] = 'iterator';

$output942 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext);

$output942 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure965 = function() use ($renderingContext, $self) {
$output969 = '';

$output969 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure971 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments970 = array();
$arguments970['section'] = NULL;
$arguments970['partial'] = NULL;
$arguments970['delegate'] = NULL;
$arguments970['renderable'] = NULL;
$arguments970['arguments'] = array (
);
$arguments970['optional'] = false;
$arguments970['default'] = NULL;
$arguments970['contentAs'] = NULL;
$arguments970['debug'] = true;
$arguments970['partial'] = 'List/Pagination';
// Rendering Array
$array972 = array();
$array973 = array (
);$array972['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array973);
$array974 = array (
);$array972['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array974);
$arguments970['arguments'] = $array972;

$output969 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments970, $renderChildrenClosure971, $renderingContext);

$output969 .= '
                            ';
return $output969;
};
$arguments964 = array();
$arguments964['then'] = NULL;
$arguments964['else'] = NULL;
$arguments964['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array966 = array();
$array967 = array (
);$array966['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array967);

$expression968 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments964['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression968(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array966)
					),
					$renderingContext
				);
$arguments964['__thenClosure'] = $renderChildrenClosure965;

$output942 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments964, $renderChildrenClosure965, $renderingContext);

$output942 .= '
                        ';
return $output942;
};

$output916 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments923, $renderChildrenClosure924, $renderingContext);

$output916 .= '
                </div>
        ';
return $output916;
};
$arguments914['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1033 = '';

$output1033 .= '          
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1035 = function() use ($renderingContext, $self) {
$output1083 = '';

$output1083 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1085 = function() use ($renderingContext, $self) {
$output1086 = '';

$output1086 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1088 = function() use ($renderingContext, $self) {
$output1090 = '';

$output1090 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1091 = array();
$arguments1091['section'] = NULL;
$arguments1091['partial'] = NULL;
$arguments1091['delegate'] = NULL;
$arguments1091['renderable'] = NULL;
$arguments1091['arguments'] = array (
);
$arguments1091['optional'] = false;
$arguments1091['default'] = NULL;
$arguments1091['contentAs'] = NULL;
$arguments1091['debug'] = true;
$arguments1091['partial'] = 'List/Item';
// Rendering Array
$array1093 = array();
$array1094 = array (
);$array1093['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1094);
$array1095 = array (
);$array1093['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1095);
$array1096 = array (
);$array1093['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1096);
$arguments1091['arguments'] = $array1093;

$output1090 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext);

$output1090 .= '
                            ';
return $output1090;
};
$arguments1087 = array();
$arguments1087['each'] = NULL;
$arguments1087['as'] = NULL;
$arguments1087['key'] = NULL;
$arguments1087['reverse'] = false;
$arguments1087['iteration'] = NULL;
$array1089 = array (
);$arguments1087['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1089);
$arguments1087['as'] = 'newsItem';
$arguments1087['iteration'] = 'iterator';

$output1086 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1087, $renderChildrenClosure1088, $renderingContext);

$output1086 .= '
                            </ul></div>
                    ';
return $output1086;
};
$arguments1084 = array();

$output1083 .= '';

$output1083 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1098 = function() use ($renderingContext, $self) {
$output1099 = '';

$output1099 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1101 = function() use ($renderingContext, $self) {
$output1105 = '';

$output1105 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1106 = array();
$arguments1106['section'] = NULL;
$arguments1106['partial'] = NULL;
$arguments1106['delegate'] = NULL;
$arguments1106['renderable'] = NULL;
$arguments1106['arguments'] = array (
);
$arguments1106['optional'] = false;
$arguments1106['default'] = NULL;
$arguments1106['contentAs'] = NULL;
$arguments1106['debug'] = true;
$arguments1106['partial'] = 'List/Pagination';
// Rendering Array
$array1108 = array();
$array1109 = array (
);$array1108['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1109);
$array1110 = array (
);$array1108['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1110);
$arguments1106['arguments'] = $array1108;

$output1105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1106, $renderChildrenClosure1107, $renderingContext);

$output1105 .= '
                        ';
return $output1105;
};
$arguments1100 = array();
$arguments1100['then'] = NULL;
$arguments1100['else'] = NULL;
$arguments1100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1102 = array();
$array1103 = array (
);$array1102['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1103);

$expression1104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1102)
					),
					$renderingContext
				);
$arguments1100['__thenClosure'] = $renderChildrenClosure1101;

$output1099 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1100, $renderChildrenClosure1101, $renderingContext);

$output1099 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1112 = function() use ($renderingContext, $self) {
$output1114 = '';

$output1114 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1115 = array();
$arguments1115['section'] = NULL;
$arguments1115['partial'] = NULL;
$arguments1115['delegate'] = NULL;
$arguments1115['renderable'] = NULL;
$arguments1115['arguments'] = array (
);
$arguments1115['optional'] = false;
$arguments1115['default'] = NULL;
$arguments1115['contentAs'] = NULL;
$arguments1115['debug'] = true;
$arguments1115['partial'] = 'List/Item';
// Rendering Array
$array1117 = array();
$array1118 = array (
);$array1117['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1118);
$array1119 = array (
);$array1117['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1119);
$array1120 = array (
);$array1117['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1120);
$arguments1115['arguments'] = $array1117;

$output1114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1115, $renderChildrenClosure1116, $renderingContext);

$output1114 .= '
                            ';
return $output1114;
};
$arguments1111 = array();
$arguments1111['each'] = NULL;
$arguments1111['as'] = NULL;
$arguments1111['key'] = NULL;
$arguments1111['reverse'] = false;
$arguments1111['iteration'] = NULL;
$array1113 = array (
);$arguments1111['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1113);
$arguments1111['as'] = 'newsItem';
$arguments1111['iteration'] = 'iterator';

$output1099 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1111, $renderChildrenClosure1112, $renderingContext);

$output1099 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1122 = function() use ($renderingContext, $self) {
$output1126 = '';

$output1126 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1127 = array();
$arguments1127['section'] = NULL;
$arguments1127['partial'] = NULL;
$arguments1127['delegate'] = NULL;
$arguments1127['renderable'] = NULL;
$arguments1127['arguments'] = array (
);
$arguments1127['optional'] = false;
$arguments1127['default'] = NULL;
$arguments1127['contentAs'] = NULL;
$arguments1127['debug'] = true;
$arguments1127['partial'] = 'List/Pagination';
// Rendering Array
$array1129 = array();
$array1130 = array (
);$array1129['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1130);
$array1131 = array (
);$array1129['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1131);
$arguments1127['arguments'] = $array1129;

$output1126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1127, $renderChildrenClosure1128, $renderingContext);

$output1126 .= '
                        ';
return $output1126;
};
$arguments1121 = array();
$arguments1121['then'] = NULL;
$arguments1121['else'] = NULL;
$arguments1121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1123 = array();
$array1124 = array (
);$array1123['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1124);

$expression1125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1123)
					),
					$renderingContext
				);
$arguments1121['__thenClosure'] = $renderChildrenClosure1122;

$output1099 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1121, $renderChildrenClosure1122, $renderingContext);

$output1099 .= '
                    ';
return $output1099;
};
$arguments1097 = array();
$arguments1097['if'] = NULL;

$output1083 .= '';

$output1083 .= '
                ';
return $output1083;
};
$arguments1034 = array();
$arguments1034['then'] = NULL;
$arguments1034['else'] = NULL;
$arguments1034['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1080 = array();
$array1081 = array (
);$array1080['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination', $array1081);

$expression1082 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1034['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1082(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1080)
					),
					$renderingContext
				);
$arguments1034['__thenClosure'] = function() use ($renderingContext, $self) {
$output1036 = '';

$output1036 .= '
                        <div class="news-list-view">
                                <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1038 = function() use ($renderingContext, $self) {
$output1040 = '';

$output1040 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1041 = array();
$arguments1041['section'] = NULL;
$arguments1041['partial'] = NULL;
$arguments1041['delegate'] = NULL;
$arguments1041['renderable'] = NULL;
$arguments1041['arguments'] = array (
);
$arguments1041['optional'] = false;
$arguments1041['default'] = NULL;
$arguments1041['contentAs'] = NULL;
$arguments1041['debug'] = true;
$arguments1041['partial'] = 'List/Item';
// Rendering Array
$array1043 = array();
$array1044 = array (
);$array1043['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1044);
$array1045 = array (
);$array1043['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1045);
$array1046 = array (
);$array1043['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1046);
$arguments1041['arguments'] = $array1043;

$output1040 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output1040 .= '
                            ';
return $output1040;
};
$arguments1037 = array();
$arguments1037['each'] = NULL;
$arguments1037['as'] = NULL;
$arguments1037['key'] = NULL;
$arguments1037['reverse'] = false;
$arguments1037['iteration'] = NULL;
$array1039 = array (
);$arguments1037['each'] = $renderingContext->getVariableProvider()->getByPath('news', $array1039);
$arguments1037['as'] = 'newsItem';
$arguments1037['iteration'] = 'iterator';

$output1036 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1037, $renderChildrenClosure1038, $renderingContext);

$output1036 .= '
                            </ul></div>
                    ';
return $output1036;
};
$arguments1034['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1047 = '';

$output1047 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1049 = function() use ($renderingContext, $self) {
$output1053 = '';

$output1053 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1055 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1054 = array();
$arguments1054['section'] = NULL;
$arguments1054['partial'] = NULL;
$arguments1054['delegate'] = NULL;
$arguments1054['renderable'] = NULL;
$arguments1054['arguments'] = array (
);
$arguments1054['optional'] = false;
$arguments1054['default'] = NULL;
$arguments1054['contentAs'] = NULL;
$arguments1054['debug'] = true;
$arguments1054['partial'] = 'List/Pagination';
// Rendering Array
$array1056 = array();
$array1057 = array (
);$array1056['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1057);
$array1058 = array (
);$array1056['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1058);
$arguments1054['arguments'] = $array1056;

$output1053 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1054, $renderChildrenClosure1055, $renderingContext);

$output1053 .= '
                        ';
return $output1053;
};
$arguments1048 = array();
$arguments1048['then'] = NULL;
$arguments1048['else'] = NULL;
$arguments1048['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1050 = array();
$array1051 = array (
);$array1050['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertAbove', $array1051);

$expression1052 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1048['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1052(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1050)
					),
					$renderingContext
				);
$arguments1048['__thenClosure'] = $renderChildrenClosure1049;

$output1047 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1048, $renderChildrenClosure1049, $renderingContext);

$output1047 .= '
                        <div class="news-list-view">
                            <ul class="list-group list-group-flush p-0 m-0 list-unstyled position-relative">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1060 = function() use ($renderingContext, $self) {
$output1062 = '';

$output1062 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1064 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1063 = array();
$arguments1063['section'] = NULL;
$arguments1063['partial'] = NULL;
$arguments1063['delegate'] = NULL;
$arguments1063['renderable'] = NULL;
$arguments1063['arguments'] = array (
);
$arguments1063['optional'] = false;
$arguments1063['default'] = NULL;
$arguments1063['contentAs'] = NULL;
$arguments1063['debug'] = true;
$arguments1063['partial'] = 'List/Item';
// Rendering Array
$array1065 = array();
$array1066 = array (
);$array1065['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1066);
$array1067 = array (
);$array1065['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1067);
$array1068 = array (
);$array1065['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array1068);
$arguments1063['arguments'] = $array1065;

$output1062 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1063, $renderChildrenClosure1064, $renderingContext);

$output1062 .= '
                            ';
return $output1062;
};
$arguments1059 = array();
$arguments1059['each'] = NULL;
$arguments1059['as'] = NULL;
$arguments1059['key'] = NULL;
$arguments1059['reverse'] = false;
$arguments1059['iteration'] = NULL;
$array1061 = array (
);$arguments1059['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems', $array1061);
$arguments1059['as'] = 'newsItem';
$arguments1059['iteration'] = 'iterator';

$output1047 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1059, $renderChildrenClosure1060, $renderingContext);

$output1047 .= '
                        </ul></div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1070 = function() use ($renderingContext, $self) {
$output1074 = '';

$output1074 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1076 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1075 = array();
$arguments1075['section'] = NULL;
$arguments1075['partial'] = NULL;
$arguments1075['delegate'] = NULL;
$arguments1075['renderable'] = NULL;
$arguments1075['arguments'] = array (
);
$arguments1075['optional'] = false;
$arguments1075['default'] = NULL;
$arguments1075['contentAs'] = NULL;
$arguments1075['debug'] = true;
$arguments1075['partial'] = 'List/Pagination';
// Rendering Array
$array1077 = array();
$array1078 = array (
);$array1077['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination', $array1078);
$array1079 = array (
);$array1077['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator', $array1079);
$arguments1075['arguments'] = $array1077;

$output1074 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1075, $renderChildrenClosure1076, $renderingContext);

$output1074 .= '
                        ';
return $output1074;
};
$arguments1069 = array();
$arguments1069['then'] = NULL;
$arguments1069['else'] = NULL;
$arguments1069['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1071 = array();
$array1072 = array (
);$array1071['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow', $array1072);

$expression1073 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1069['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1073(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1071)
					),
					$renderingContext
				);
$arguments1069['__thenClosure'] = $renderChildrenClosure1070;

$output1047 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1069, $renderChildrenClosure1070, $renderingContext);

$output1047 .= '
                    ';
return $output1047;
};

$output1033 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1034, $renderChildrenClosure1035, $renderingContext);

$output1033 .= '
        ';
return $output1033;
};

$output913 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments914, $renderChildrenClosure915, $renderingContext);

$output913 .= '
		';
return $output913;
};
$arguments911['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1356 = '';

$output1356 .= '
			<div class="alert ">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1357 = array();
$arguments1357['key'] = NULL;
$arguments1357['id'] = NULL;
$arguments1357['default'] = NULL;
$arguments1357['arguments'] = NULL;
$arguments1357['extensionName'] = NULL;
$arguments1357['languageKey'] = NULL;
$arguments1357['alternativeLanguageKeys'] = NULL;
$arguments1357['key'] = 'list_nonewsfound';

$output1356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1357, $renderChildrenClosure1358, $renderingContext)]);

$output1356 .= '
			</div>
		';
return $output1356;
};

$output910 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments911, $renderChildrenClosure912, $renderingContext);

$output910 .= '
';
return $output910;
};
$arguments908 = array();
$arguments908['name'] = NULL;
$arguments908['name'] = 'content';

$output903 .= '';

$output903 .= '

';

return $output903;
}


}
#