<?php
session_start();
require_once 'functions_session.php';

function pageController() {
    clearSession();
    redirect("login_session.php");
}
pageController();
