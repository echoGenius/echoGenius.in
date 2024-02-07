<main id="main">
<?php
// PHP logic to determine the page
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home'; // set a default page
}

// Include the appropriate page content
$pageFilePath = 'pages/' . $page . '.php';

if (file_exists($pageFilePath)) {
    include $pageFilePath;
} else {
    echo 'Invalid page requested';
}
?>

  </main><!-- End #main -->