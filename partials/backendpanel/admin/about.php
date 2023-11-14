<?php
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
        <script src="https://cdn.ckbox.io/ckbox/1.3.2/ckbox.js"></script>
    </head>
    <body>
        <div id="editor"></div>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    ckbox: {
                        tokenUrl: 'https://your.token.url',
                    },
                    toolbar: [
                        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                    ],
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </body>
</html>
<?php
include('include/footer.php');
?>