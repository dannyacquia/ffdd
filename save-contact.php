<?php
  function get_contacts() {
    $contactsJson = file_get_contents('data/contacts.json');
    $contacts = json_decode($contactsJson, true);

    return $contacts;

  }
  
    if (isset($_POST['inputName']) && isset($_POST['inputEmail']) && isset($_POST['inputSubject']) && isset($_POST['inputMessage'])) {
     
        //check if any of the inputs are empty
        if (empty($_POST['inputName']) || empty($_POST['inputEmail']) || empty($_POST['inputSubject']) || empty($_POST['inputMessage'])) {
            $data = array('success' => false, 'message' => 'Please fill out the form completely.');
            echo json_encode($data);
            exit;
        }
     
        $contacts = get_contacts();
        $newContact = array(
            'name' => $_POST['inputName'],
            'email' => $_POST['inputEmail'],
            'subject' => $_POST['inputSubject'],
            'message' => $_POST['inputMessage']
            );
        $contacts[] = $newContact;

        $newContactsJson = json_encode($contacts, JSON_PRETTY_PRINT);
        file_put_contents('data/contacts.json', $newContactsJson);
     
        $data = array('success' => true, 'message' => 'Thanks! We have received your message.');
        echo json_encode($data);
     
    } else {
        $data = array('success' => false, 'message' => 'Please fill out the form completely.');
        echo json_encode($data);
    }

?>