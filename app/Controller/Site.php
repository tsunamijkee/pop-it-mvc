<?php

namespace Controller;

use Model\Post;
use Src\Session;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Site
{
    public function main(): string
    {
        return new View('site.main', ['message' => 'hello working']);
    }

    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/');
    }

    public function Recording(): string
    {
        return new View('site.Recording', ['message' => 'hello working']);
    }

    public function ReceptionHistory(): string
    {
        if (!User::isAdmin()) {
           app()->route->redirect('/');
        }
        return new View('site.ReceptionHistory', ['message' => 'hello working']);
    }

    public function Search(): string
    {

        return new View('site.ReceptionHistory', ['message' => 'hello working']);
    }

    public function DiagnosisByPatient(): string
    {
        if (!User::isAdmin()) {
            app()->route->redirect('/');
        }
        return new View('site.DiagnosisByPatient', ['message' => 'hello working']);
    }

    public function PatientToDoctor(): string
    {
        if (!User::isAdmin()) {
            app()->route->redirect('/');
        }
        return new View('site.PatientToDoctor', ['message' => 'hello working']);
    }

    public function DoctorChoice(): string
    {
        if (!User::isAdmin()) {
            app()->route->redirect('/');
        }
        return new View('site.DoctorChoice', ['message' => 'hello working']);
    }

    public function checking()
    {
//        if ($_SESSION["getUser"] && $_SESSION["getUser"]["role"] != 1)
//            app()->route->redirect('/');
    }
}
