<?php
  if (isset($_POST['btn-login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
      switch ($username) {
        case 'admin':
          header('Location: ../admin/index.php');
          break;
        case 'user':
          header('Location: ../user/index.php');
          break;
        default:
          exit();
          break;
      }

    } else {
      echo 'Required fields is empty!';
    }
  }