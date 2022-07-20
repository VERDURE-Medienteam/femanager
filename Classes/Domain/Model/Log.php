<?php

declare(strict_types=1);
namespace In2code\Femanager\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Log
 */
class Log extends AbstractEntity
{
    final const STATUS_NEWREGISTRATION = 101;
    final const STATUS_REGISTRATIONCONFIRMEDUSER = 102;
    final const STATUS_REGISTRATIONCONFIRMEDADMIN = 103;
    final const STATUS_REGISTRATIONREFUSEDUSER = 104;
    final const STATUS_REGISTRATIONREFUSEDADMIN = 105;
    final const STATUS_PROFILECREATIONREQUEST = 106;
    final const STATUS_PROFILEUPDATED = 201;
    final const STATUS_PROFILEUPDATECONFIRMEDADMIN = 202;
    final const STATUS_PROFILEUPDATEREFUSEDADMIN = 203;
    final const STATUS_PROFILEUPDATEREQUEST = 204;
    final const STATUS_PROFILEUPDATEREFUSEDSECURITY = 205;
    final const STATUS_PROFILEUPDATEIMAGEDELETE = 206;
    final const STATUS_PROFILEDELETE = 301;
    final const STATUS_INVITATIONPROFILECREATED = 401;
    final const STATUS_INVITATIONPROFILEDELETEDUSER = 402;
    final const STATUS_INVITATIONHASHERROR = 403;
    final const STATUS_INVITATIONRESTRICTEDPAGE = 404;
    final const STATUS_INVITATIONPROFILEENABLED = 405;

    /**
     * title
     *
     * @var string
     */
    protected $title;

    /**
     * state
     *
     * @var int
     */
    protected $state;

    /**
     * user
     *
     * @var User
     */
    protected User $user;

    /**
     * @param string $title
     * @return Log
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param int $state
     * @return Log
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set user
     *
     * @return Log
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
