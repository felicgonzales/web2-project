<?php
require __DIR__ . '/../../../vendor/autoload.php';
require_once "../../lib/lib-db-film.php";
use codeguy\upload;

$storage = new \Upload\Storage\FileSystem('../../img/Movie');
$file = new \Upload\File('film_pic', $storage);

// Optionally you can rename the file on upload
$new_filename = uniqid();
$file->setName($new_filename);

// Validate file upload
// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
$file->addValidations(array(
    // Ensure file is of type "image/png"
    new \Upload\Validation\Mimetype(array('image/png','image/jpg', 'image/gif')),

    //You can also add multi mimetype validation
    //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

    // Ensure file is no larger than 5M (use "B", "K", M", or "G")
    new \Upload\Validation\Size('5M')
));

// Access data about the file that has been uploaded
$data = array(
    'name'       => $file->getNameWithExtension(),
    'extension'  => $file->getExtension(),
    'mime'       => $file->getMimetype(),
    'size'       => $file->getSize(),
    'md5'        => $file->getMd5(),
    'dimensions' => $file->getDimensions()
);

// Try to upload file
try {
    // Success!
    $judul = $_POST['judul'];
    $desc = $_POST['desc'];
    $film_pic = $data['name'];
    $category = $_POST['category'];
    $rilis = $_POST['rilis'];
    tambahFilm($judul,$desc,$film_pic,$category,$rilis);
    $file->upload();
    header("location: ../manage-film.php");
} catch (\Exception $e) {
    // Fail!
    $errors = $file->getErrors();
}