<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function getUserAction($slug)
    {
    	$em = $this -> getDoctrine() -> getManager();

    	$users = $em -> getRepository("AppBundle:User") -> findAll();

    	return array('users' => $users);

    } // "get_user"   [GET] /users/{slug}

    // ...
}