<?php

class Contacts extends Controller {

  private $columns = array(
      'name', 'phone_work', 'phone_mobile',
      'email_work', 'email_private', 'home',
      'note'
  );

  function __construct() {
    parent::__construct();

    $this->model = new Contacts_Model();
  }


  public function index() {
    $this->view->contacts = $this->model->getAll();
    $this->view->render('contacts/index');
  }

  public function favorites() {
    $this->view->contacts = $this->model->getFavorites();
    $this->view->render('contacts/index');
  }

  public function view($id = 0) {

    if (!$id) {
      $error = new Error;
    }
    else {
      $this->view->contact = $this->model->getByPrimaryKey($id);
      $this->view->render('contacts/view');
    }
  }


  public function add() {

    $name = $this->request->post('name');

    if (!empty($name)) {
      foreach($this->columns as $column) {
        $this->model->setColumnValue($column, $this->request->post($column));
      }
       $this->model->save();
       $this->view->contact = $this->model->getByPrimaryKey(Database::getInstance()->lastInsertId());
        $this->view->render('contacts/view');
    }
    else {
      $this->view->render('contacts/add');
    }
  }


  public function edit($id = 0) {

    if (!$id) {
      $error = new Error;
    }
    else {

      $this->view->contact = $this->model->getByPrimaryKey($id);
      $name = $this->request->post('name');

      if (!empty($name)) {
         $this->view->contact->setColumnValue('id', $id);

        foreach($this->columns as $column) {
          $this->view->contact->setColumnValue($column, $this->request->post($column));
        }

        $this->view->contact->save();
        $this->view->render('contacts/view');
      }
      else {
        $this->view->render('contacts/edit');
      }
    }
  }


  public function delete($id = 0) {

    if (!$id) {
      $error = new Error;
    }
    else {
     $this->model->deleteContact($id);
     $this->index();
    }

  }

  public function toggle_favorite($id = 0) {
    $contact = $this->model->getByPrimaryKey($id);

    if ($contact->getFavorite()) {
      $contact->setColumnValue('id', $id);
      $contact->setColumnValue('favorite', 0);
      echo "untoggled";
    }
    else {
      $contact->setColumnValue('id', $id);
      $contact->setColumnValue('favorite', 1);
      echo "toggled";
    }
    $contact->save();
  }
}