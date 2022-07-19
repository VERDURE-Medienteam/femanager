<?php

declare(strict_types=1);

namespace In2code\Femanager\DataProcessor;

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\Arguments;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Class AbstractDataProcessor
 */
abstract class AbstractDataProcessor implements DataProcessorInterface
{

    /**
     * AbstractDataProcessor constructor.
     *
     * @param array $configuration
     * @param array $settings
     * @param ContentObjectRenderer $contentObject
     * @param Arguments $controllerArguments
     */
    public function __construct(protected array $configuration, protected array $settings, protected ?ContentObjectRenderer $contentObject, protected ?Arguments $controllerArguments)
    {
    }

    public function initializeDataProcessor()
    {
    }

    /**
     * @return mixed
     */
    public function getConfiguration(string $path = '')
    {
        $configuration = $this->configuration;
        if (!empty($path)) {
            $configuration = ArrayUtility::getValueByPath($configuration, $path, '.');
        }
        return $configuration;
    }
}
