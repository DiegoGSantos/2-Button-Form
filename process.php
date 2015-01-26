<?php

function user_pressed_reset() {
	return isset($_POST['form_button'])
	 && ($_POST['form_button'] == "Reset Password");
}

function user_pressed_log_in() {
	return isset($_POST['form_button'])
	 && ($_POST['form_button'] == "Log in");
}

if (user_pressed_reset()) {
	echo "An email with your new password was sent!";
} elseif (user_pressed_log_in()) {
	echo "You are loged in!";
}

?>