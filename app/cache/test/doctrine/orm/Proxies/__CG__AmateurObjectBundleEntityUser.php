<?php

namespace Proxies\__CG__\Amateur\ObjectBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Amateur\ObjectBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function addRole($role)
    {
        $this->__load();
        return parent::addRole($role);
    }

    public function getRolesNames()
    {
        $this->__load();
        return parent::getRolesNames();
    }

    public function setRoles($role)
    {
        $this->__load();
        return parent::setRoles($role);
    }

    public function getRolesCollection()
    {
        $this->__load();
        return parent::getRolesCollection();
    }

    public function setRolesCollection($roles)
    {
        $this->__load();
        return parent::setRolesCollection($roles);
    }

    public function setStreet($street)
    {
        $this->__load();
        return parent::setStreet($street);
    }

    public function getStreet()
    {
        $this->__load();
        return parent::getStreet();
    }

    public function setNumber($number)
    {
        $this->__load();
        return parent::setNumber($number);
    }

    public function getNumber()
    {
        $this->__load();
        return parent::getNumber();
    }

    public function setPiso($piso)
    {
        $this->__load();
        return parent::setPiso($piso);
    }

    public function getPiso()
    {
        $this->__load();
        return parent::getPiso();
    }

    public function setCity($city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setProvince($province)
    {
        $this->__load();
        return parent::setProvince($province);
    }

    public function getProvince()
    {
        $this->__load();
        return parent::getProvince();
    }

    public function setCountry($country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function getFriends()
    {
        $this->__load();
        return parent::getFriends();
    }

    public function addFriend($friend)
    {
        $this->__load();
        return parent::addFriend($friend);
    }

    public function removeFriend($friend)
    {
        $this->__load();
        return parent::removeFriend($friend);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function getNews()
    {
        $this->__load();
        return parent::getNews();
    }

    public function setNews($news)
    {
        $this->__load();
        return parent::setNews($news);
    }

    public function addNew($newsUser)
    {
        $this->__load();
        return parent::addNew($newsUser);
    }

    public function removeNew($new)
    {
        $this->__load();
        return parent::removeNew($new);
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setCreateTime($createTime)
    {
        $this->__load();
        return parent::setCreateTime($createTime);
    }

    public function getCreateTime()
    {
        $this->__load();
        return parent::getCreateTime();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setLastname($lastname)
    {
        $this->__load();
        return parent::setLastname($lastname);
    }

    public function getLastname()
    {
        $this->__load();
        return parent::getLastname();
    }

    public function setCodePassword($codePassword)
    {
        $this->__load();
        return parent::setCodePassword($codePassword);
    }

    public function getCodePassword()
    {
        $this->__load();
        return parent::getCodePassword();
    }

    public function setPhoto($photo)
    {
        $this->__load();
        return parent::setPhoto($photo);
    }

    public function getPhoto()
    {
        $this->__load();
        return parent::getPhoto();
    }

    public function setTyc($tyc)
    {
        $this->__load();
        return parent::setTyc($tyc);
    }

    public function getTyc()
    {
        $this->__load();
        return parent::getTyc();
    }

    public function setLanguage($language)
    {
        $this->__load();
        return parent::setLanguage($language);
    }

    public function getLanguage()
    {
        $this->__load();
        return parent::getLanguage();
    }

    public function setLastUpdateDate($lastUpdateDate)
    {
        $this->__load();
        return parent::setLastUpdateDate($lastUpdateDate);
    }

    public function getLastUpdateDate()
    {
        $this->__load();
        return parent::getLastUpdateDate();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function setIsOnline($isOnline)
    {
        $this->__load();
        return parent::setIsOnline($isOnline);
    }

    public function getIsOnline()
    {
        $this->__load();
        return parent::getIsOnline();
    }

    public function setTipeUser($tipeUser)
    {
        $this->__load();
        return parent::setTipeUser($tipeUser);
    }

    public function getTipeUser()
    {
        $this->__load();
        return parent::getTipeUser();
    }

    public function isEqualTo(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->__load();
        return parent::isEqualTo($user);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }

    public function getRegistrations()
    {
        $this->__load();
        return parent::getRegistrations();
    }

    public function setRegistrations($registrations)
    {
        $this->__load();
        return parent::setRegistrations($registrations);
    }

    public function addRegistration($registration)
    {
        $this->__load();
        return parent::addRegistration($registration);
    }

    public function removeRegistration($registration)
    {
        $this->__load();
        return parent::removeRegistration($registration);
    }

    public function getBirhDate()
    {
        $this->__load();
        return parent::getBirhDate();
    }

    public function setBirhDate($birhDate)
    {
        $this->__load();
        return parent::setBirhDate($birhDate);
    }

    public function getSport()
    {
        $this->__load();
        return parent::getSport();
    }

    public function setSport($sport)
    {
        $this->__load();
        return parent::setSport($sport);
    }

    public function getGoogleId()
    {
        $this->__load();
        return parent::getGoogleId();
    }

    public function setGoogleId($googleId)
    {
        $this->__load();
        return parent::setGoogleId($googleId);
    }

    public function getNickname()
    {
        $this->__load();
        return parent::getNickname();
    }

    public function setNickname($nickname)
    {
        $this->__load();
        return parent::setNickname($nickname);
    }

    public function getWorkHourStart()
    {
        $this->__load();
        return parent::getWorkHourStart();
    }

    public function setWorkHourStart($workHourStart)
    {
        $this->__load();
        return parent::setWorkHourStart($workHourStart);
    }

    public function getWorkHourEnd()
    {
        $this->__load();
        return parent::getWorkHourEnd();
    }

    public function setWorkHourEnd($workHourEnd)
    {
        $this->__load();
        return parent::setWorkHourEnd($workHourEnd);
    }

    public function getFirstTime()
    {
        $this->__load();
        return parent::getFirstTime();
    }

    public function setFirstTime($firstTime)
    {
        $this->__load();
        return parent::setFirstTime($firstTime);
    }

    public function getLatitude()
    {
        $this->__load();
        return parent::getLatitude();
    }

    public function setLatitude($latitude)
    {
        $this->__load();
        return parent::setLatitude($latitude);
    }

    public function getLongitude()
    {
        $this->__load();
        return parent::getLongitude();
    }

    public function setLongitude($longitude)
    {
        $this->__load();
        return parent::setLongitude($longitude);
    }

    public function getOrganizer()
    {
        $this->__load();
        return parent::getOrganizer();
    }

    public function setOrganizer(\Amateur\ObjectBundle\Entity\Organizer $organizer)
    {
        $this->__load();
        return parent::setOrganizer($organizer);
    }

    public function getUserConfiguration()
    {
        $this->__load();
        return parent::getUserConfiguration();
    }

    public function setUserConfiguration(\Amateur\ObjectBundle\Entity\UserConfiguration $userConfiguration)
    {
        $this->__load();
        return parent::setUserConfiguration($userConfiguration);
    }

    public function getFriendsUser()
    {
        $this->__load();
        return parent::getFriendsUser();
    }

    public function getFollowerUser()
    {
        $this->__load();
        return parent::getFollowerUser();
    }

    public function getFriendsAndFolloweUser()
    {
        $this->__load();
        return parent::getFriendsAndFolloweUser();
    }

    public function equals(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->__load();
        return parent::equals($user);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'email', 'createTime', 'salt', 'password', 'isActive', 'name', 'lastname', 'codePassword', 'photo', 'tyc', 'firstTime', 'language', 'lastUpdateDate', 'isOnline', 'tipeUser', 'street', 'number', 'piso', 'city', 'province', 'country', 'birhDate', 'latitude', 'longitude', 'sport', 'organizer', 'userConfiguration', 'friends', 'news', 'registrations');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}