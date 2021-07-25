<?php
session_start();
session_unset();
echo "<script>alert('Logout Success'); location.href='/index'; </script>";
?>