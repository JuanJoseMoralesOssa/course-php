<?php

// include_once '../src/Controllers/ContactController.php';
// include_once '../src/Models/Contact.php';

require_once '../vendor/autoload.php';

use Dia2\Controllers\ContactController;
use Dia2\Models\Contact;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contactController = new ContactController('../contacts.json');
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $contact = new Contact($name, $phone, $email);
    $contactController->add($contact);

    header('Location: index.php');
}
?>

<!-- Podriamops colocarle un action  -->
<form method="POST">
    <label>Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label>Phone</label>
    <input type="text" name="phone" id="phone">
    <br>
    <label>Email</label>
    <input type="email" name="email" id="email">
    <br>

    <button id="add">Add</button>
</form>
