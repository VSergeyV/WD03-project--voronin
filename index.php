<?php 
// phpinfo();

$errors = array();
$success = array();
require "config.php";
require "db.php";
require ROOT . "libs/function.php";

session_start();

//===========================================================
// находим пользователя с правами админа
$admin = R::findOne('users', 'role_id = ?', array( '1' ));
//============================================================
/* ..........................................

РОУТЕР

............................................. */

// request URL = http://project/blog/post?id=15
$uri =  $_SERVER["REQUEST_URI"];
$uri = rtrim($uri, "/"); 
$uri = filter_var($uri, FILTER_SANITIZE_URL);
$uri = substr($uri, 1);
$uri = explode('?', $uri);

switch ( $uri[0]) {
	case '':
		require ROOT . "modules/main/index.php";
		break;
	//====================== Users ====================	
	case 'login':
		require ROOT . "modules/login/login.php";
		break;
	case 'registration':
		require ROOT . "modules/login/registration.php";
		break;
	case 'logout':
		require ROOT . "modules/login/logout.php";
		break;
	case 'lost-password':
		require ROOT . "modules/login/lost-password.php";
		break;
	case 'set-new-password':
		require ROOT . "modules/login/set-new-password.php";
		break;
	case 'profile':
		require ROOT . "modules/profile/index.php";
		break;
	case 'profile-edit':
		require ROOT . "modules/profile/edit.php";
		break;
//================== ROOT =================================================
	case 'root':
		require ROOT . "modules/root/index.php";
		break;
	// case 'root/user-edit':
	// 	require ROOT . "modules/root/edit.php";
	// 	break;
	case 'root/user-new':
		require ROOT . "modules/root/new.php";
		break;
	case 'root/user-delete':
		require ROOT . "modules/root/delete.php";
		break;

//=================== categories ==========================================
	case 'blog/category':
		require ROOT . "modules/blog/categories/all.php";
		break;
	case 'blog/category-new':
		require ROOT . "modules/blog/categories/new.php";
		break;
	case 'blog/category-edit':
		require ROOT . "modules/blog/categories/edit.php";
		break;
	case 'blog/category-delete':
		require ROOT . "modules/blog/categories/delete.php";
		break;
//=================== blog ==========================================
	case 'blog':
		require ROOT . "modules/blog/index.php";
		break;
	case 'blog/post-new':
		require ROOT . "modules/blog/post-new.php";
		break;
	case 'blog/post-edit':
		require ROOT . "modules/blog/post-edit.php";
		break;	
	case 'blog/post-delete':
		require ROOT . "modules/blog/post-delete.php";
		break;
	case 'blog/post':
		require ROOT . "modules/blog/post.php";
		break;
//============= ABOUT ==============================
	case 'about':
		require ROOT . "modules/about/index.php";
		break;
	case 'edit-text':
		require ROOT . "modules/about/edit-text.php";
		break;
	case 'edit-skills':
		require ROOT . "modules/about/edit-skills.php";
		break;
	case 'edit-jobs':
		require ROOT . "modules/about/edit-jobs.php";
		break;
//============= PORTFOLIO ==========================
	case 'works':
		require ROOT . "modules/works/index.php";
		break;
	case 'work':
		require ROOT . "modules/works/work.php";
		break;
	case 'work-new':
		require ROOT . "modules/works/work-new.php";
		break;
	case 'work-edit':
		require ROOT . "modules/works/work-edit.php";
		break;
	case 'work-deleted':
		require ROOT . "modules/works/work-deleted.php";
		break;
//============== contacts  ==========
	case 'contacts':
		require ROOT . "modules/contacts/index.php";
		break;
	case 'contacts-edit':
		require ROOT . "modules/contacts/edit.php";
		break;
	case 'messages':
		require ROOT . "modules/contacts/messages.php";
		break;

	default:
		require ROOT . "modules/main/index.php";
		break;
}

?>