document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const formData = new FormData();
        formData.append('file', file);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'upload.php', true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText); // Εδώ μπορείτε να κάνετε ο,τιδήποτε άλλο θέλετε με την απάντηση
                } else {
                    console.error('Προέκυψε σφάλμα κατά τη μεταφόρτωση του αρχείου.');
                }
            }
        };

        xhr.send(formData);
    });
});
