<?php

declare(strict_types=1);

namespace In2code\Femanager\ViewHelpers\Be;

use TYPO3\CMS\Fluid\Core\Rendering\RenderingContext;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Exception as FluidViewHelperException;

/**
 * Class GetClassNameOnActionViewHelper
 */
class GetClassNameOnActionViewHelper extends AbstractViewHelper
{
    /**
     * Return className if actionName fits to current action
     *
     * @throws FluidViewHelperException
     */
    public function render(): string
    {
        $actionName = $this->arguments['actionName'];
        $className = $this->arguments['className'];
        $fallbackClassName = $this->arguments['fallbackClassName'];

        if ($this->getCurrentActionName() === $actionName) {
            return $className;
        }

        return $fallbackClassName;
    }

    /**
     * Return the current action name from the controller context
     *
     * @throws FluidViewHelperException
     */
    protected function getCurrentActionName(): string
    {
        if (! $this->renderingContext instanceof RenderingContext) {
            throw new FluidViewHelperException(
                'Something went wrong; RenderingContext should be available in ViewHelper',
                1638341674
            );
        }
        return $this->renderingContext->getRequest()->getControllerActionName();
    }

    /**
     * Register all arguments for this viewhelper
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('actionName', 'string', 'action name to compare with current action', true);
        $this->registerArgument('className', 'string', 'classname that should be returned if action fits', false, ' btn-info');
        $this->registerArgument('fallbackClassName', 'string', 'fallback classname if action does not fit', false, '');
    }
}
