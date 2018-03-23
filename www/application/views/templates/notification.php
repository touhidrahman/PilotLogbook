<?php

if (isset($error)) {
    echo "<div class='alert alert-danger text-center'>";
    echo $error;
    echo "</div>";
} else {
    echo '';
}

if (isset($notification)) {
    echo "<div class='alert alert-success text-center'>";
    echo $notification;
    echo "</div>";
} elseif ($this->session->flashdata('notification')) {
    echo "<div class='alert alert-success text-center'>";
    echo $this->session->flashdata('notification');
    echo "</div>";
    echo '';
} else {
    echo '';
}

?>