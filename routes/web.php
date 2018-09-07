<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function($route){
    //Middleware Guest
    $route->group(['middleware' => 'guest'], function($route){
        //Authentication Routes...
//        $route->post('web/login', 'Auth\Web\AuthController@login');
        $route->get('login', 'Auth\Web\AuthController@login')->name('web.login');
        $route->post('login', 'Auth\LoginController@login')->name('post.login');
        $route->post('web/refresh', 'Auth\Web\AuthController@refresh');

        //Registration Routes...
        $route->post('web/register', 'Auth\RegisterController@register');

        //Password Reset Routes...
        /*$route->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $route->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $route->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $route->post('password/reset', 'Auth\ResetPasswordController@reset');*/
    });

    $route->group(['middleware' => 'auth'], function($route){
        //Logout
        $route->get('/logout', 'Auth\Web\AuthController@logout')->name('logout');
    });

    //Blog
    $route->get('/blog', 'BlogController@viewBlog')->name('route.blog');
    $route->get('/blog/search', 'BlogController@viewBlogSearch')->name('route.blog.search');
    $route->get('/get-blog', 'BlogController@getBlog');

    //Blog Category
    $route->get('/blog/category/{category_id}', 'BlogController@viewBlogCategory')->name('route.blog.category');

    //Blog Post
    $route->get('/blog/post/{year}/{month}/{post_id}', 'BlogController@viewBlogPost')->name('route.blog.post');
    $route->get('/blog/post/{year}/{month}/{post_id}/search', 'BlogController@viewBlogPostSearch')->name('route.blog.post.search');

    //Home
    $route->get('/', 'Controller@viewHome')->name('route.home');

    //Portfolio
    $route->get('/portfolio', 'PortfolioController@viewPortfolio')->name('route.portfolio');
    $route->get('/portfolio/project/{portfolio_kind}', 'PortfolioController@viewPorfolioItem')->name('route.portfolio.item');

    //About
    $route->get('/about', 'Controller@viewAbout')->name('route.about');

    //Service
    $route->get('/service', 'Controller@viewService')->name('route.service');

    //Contact
    $route->get('/contact', 'Controller@viewContact')->name('route.contact');

    //Email
    $route->post('/subscribe', 'MailController@sendMailSubscribe')->name('route.mail.subscribe');

});