<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contacts = json_decode(
        file_get_contents('contacts.json'),
        true
    );
    $contacts[] = [
        'name' => $_POST['name'],
        'phone' => $_POST['phone']
    ];
    file_put_contents('contacts.json', json_encode($contacts));
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
    <button id="add">Add</button>
</form>
