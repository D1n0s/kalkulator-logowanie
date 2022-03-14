<?php

//inicjacja mechanizmu sesji
session_start();

//pobranie roli
 $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	include 'login.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}
