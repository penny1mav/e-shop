<?php
   session_start();

   if(session_destroy()) {
      header("Location: e17098.html");
   }
?>