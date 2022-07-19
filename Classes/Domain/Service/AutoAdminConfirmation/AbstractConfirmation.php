<?php

declare(strict_types=1);
namespace In2code\Femanager\Domain\Service\AutoAdminConfirmation;

use In2code\Femanager\Domain\Model\User;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Class AbstractConfirmation
 */
abstract class AbstractConfirmation implements ConfirmationInterface
{
    /**
     * AbstractConfirmation constructor.
     *
     * @param array $config
     * @param User $user
     * @param array $settings
     * @param ContentObjectRenderer $contentObject
     */
    public function __construct(protected array $config, protected User $user, protected array $settings, protected ContentObjectRenderer $contentObject)
    {
    }

    /**
     * Skip manual confirmation from admin?
     */
    public function isAutoConfirmed(): bool
    {
        return false;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getSettings(): array
    {
        return $this->settings;
    }

    public function getContentObject(): ContentObjectRenderer
    {
        return $this->contentObject;
    }
}
