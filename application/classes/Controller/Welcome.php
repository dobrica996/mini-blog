<?php defined('SYSPATH') or die('No direct script access.');

require_once '/opt/lampp/htdocs/gitorial/application/classes/Model/post.php';

class Controller_Welcome extends Controller {

	public function action_index() {
                $view = View::factory('welcome/home');

                View::set_global('site_name', 'Blog'); 
                $view->set("title", 'Blog us AAB');
                $view->set("description", 'Blog us description');
                $view->set("pg_header", 'Blog us CCD');

                $messages = new Model_Post;   
                // $messages = Model::factory('message')->get_all();

                $data['all'] = Model::factory('post')->count();
                $data['current_url'] = URL::base(true);

                // $data['posts'] = Model::factory('post')->get_posts_by_category(2);
                // $data['posts'] = Model::factory('post')->get_posts();
                $data['posts'] = Model::factory('post')->get_posts_top();
                $data['posts_box'] = Model::factory('post')->get_posts_box();

                $view->set("head", View::factory('layout/head'));           
                $view->set("header", View::factory('layout/header'));           
                $view->set("content", $data);
                // $view->set("sidebar", View::factory('layout/sidebar'));         
                $view->set("footer", View::factory('layout/footer'));           
                $this->response->body($view);                
        }

} // End Welcome
