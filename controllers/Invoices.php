<?php
namespace controllers;

class Invoices extends Controller {

    public function index() {
      echo $this->getView('invoices');
    }

    public function view($id) {
      echo $this->getView('invoices_view', compact('id'));
    }

}

?>
