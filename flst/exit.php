<div class="container mt-4">
<?php
setcookie('user', $user['name'], time() - 3600, "/");
header('Location: index.php');
?>
</div>