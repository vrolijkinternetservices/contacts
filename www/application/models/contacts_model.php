<?php

class Contacts_Model extends Model {

  protected static $tableName = 'contacts_contacts';
  protected static $primaryKey = 'id';

  function deleteContact($id = 0) {
    if ($id = (int) $id) {  // security, must be number
      $db = Database::getInstance();
      $db->exec("DELETE FROM " . self::$tableName . " WHERE id = '$id'");
    }
  }

  function getFavorites() {
    return $this->get(' SELECT  *
                        FROM    ' . self::$tableName . '
                        WHERE   favorite = 1');
  }

  function getFavorite() {
    return $this->columns['favorite'];
  }

  function getId() {
    return $this->columns['id'];
  }

  function getName() {
    return $this->columns['name'];
  }

  function getPhoneWork() {
    return $this->columns['phone_work'];
  }

  function getPhoneMobile() {
    return $this->columns['phone_mobile'];
  }

  function getEmailWork() {
    return $this->columns['email_work'];
  }

  function getEmailPrivate() {
    return $this->columns['email_private'];
  }

  function getHome() {
    return $this->columns['home'];
  }

  function getNote() {
    return $this->columns['note'];
  }
}