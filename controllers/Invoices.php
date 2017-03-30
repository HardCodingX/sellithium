<?php
namespace controllers;

class Invoices extends Controller {

    public function index() {
      $invoices = $this->mysqli->query("select * from invoices where user_id = ". $_SESSION['id']);
      $invoicesList = [];
      while ($row = $invoices->fetch_assoc()) {
        $invoicesList[] = $row;
      }
      echo $this->getView('invoices', compact('invoicesList'));
    }

    public function view($id) {
      $invoices = $this->mysqli->query("select * from invoices where id = ".$id." and user_id = ". $_SESSION['id']);
      $invoice = $invoices->fetch_assoc();
      echo $this->getView('invoices_view', compact('invoice'));
    }

}

?>
