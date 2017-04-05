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
      $invoices_products = $this->mysqli->query("SELECT products.id, products.name, products.price FROM invoices_products INNER JOIN products ON invoices_products.product_id = products.id WHERE invoices_products.invoice_id=". $id);

      $invoice = $invoices->fetch_assoc();
      $invoice_products = [];
      while ($row = $invoices_products->fetch_assoc()) {
        $invoice_products[] = $row;
      }
      echo $this->getView('invoices_view', compact('invoice', 'invoice_products'));
    }

}

?>
