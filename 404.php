<?php
http_response_code(404);
// Use same header/footer for styling consistency
include __DIR__ . '/includes/header.php';
?>
<main class="container vh-75 d-flex flex-column justify-content-center align-items-center text-center">
  <h1 class="display-1">404</h1>
  <p class="lead">Oops, page not found.</p>
  <a href="/portal/index.php" class="btn btn-outline-primary">Go Home</a>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>