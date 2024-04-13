<?php
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads1/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "Το αρχείο μεταφορτώθηκε επιτυχώς.";
    } else {
        echo "Υπήρξε κάποιο πρόβλημα κατά τη μεταφόρτωση του αρχείου.";
        error_log("Σφάλμα μεταφόρτωσης αρχείου: " . $_FILES['file']['error'], 0);
    }
} else {
    echo "Υπήρξε κάποιο πρόβλημα κατά τη μεταφόρτωση του αρχείου.";
    error_log("Σφάλμα μεταφόρτωσης αρχείου: " . $_FILES['file']['error'], 0);
}
?>
