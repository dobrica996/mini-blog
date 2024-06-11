<?php defined('SYSPATH') or die('No direct script access.');

require_once '/opt/lampp/htdocs/gitorial/application/classes/Model/post.php';

/*
require_once '/opt/lampp/htdocs/gitorial/application/classes/Model/message.php';
require_once '/opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php';
require_once '/opt/lampp/htdocs/gitorial/modules/database/classes/Database.php';
require_once '/opt/lampp/htdocs/gitorial/modules/database/config/database.php';
*/
class Controller_Pages extends Controller {

	public function action_blogs()
	{

        $view = View::factory('pages/blogs');

        View::set_global('site_name', 'Mini Blog'); 
        $view->set("title", 'Blogs');





        $view->set("description", 'Blog us description');
        $view->set("pg_header", 'Blog us CCD dddddd rrrrrr');

		$categoryId = rand(1, 4);

		$categoryId = $this->request->query('cid');

		$tag = '';
		if(empty($categoryId)) {
			$tag = $this->request->query('tag');
		}




		$data['current_url'] = URL::base(true);

		$messages = new Model_Post;   
		$data['all'] = Model::factory('post')->count();

		// $data['posts'] = Model::factory('post')->get_posts_by_category($categoryId);
		$data['posts'] = Model::factory('post')->get_posts_by_ws($categoryId, $tag);

        $view->set("head", View::factory('layout/head'));		
        $view->set("header", View::factory('layout/header'));		
        $view->set("content", $data);
        // $view->set("sidebar", View::factory('layout/sidebar'));		
        $view->set("footer", View::factory('layout/footer'));		
        $this->response->body($view);
	}

	public function action_blog()
	{

        $view = View::factory('pages/blog');

        View::set_global('site_name', 'Blog'); 
        $view->set("title", 'Blogs');
        $view->set("description", 'Blog us description');
        $view->set("pg_header", 'Blog us CCD');

		$id = intval($this->request->query('id'));
		$slug = $this->request->query('slug');

		// $data['current_url'] = URL::base(true).Request::uri().URL::query();
		$data['current_url'] = URL::base(true);

		$messages = new Model_Post;   
		$data['all'] = Model::factory('post')->count();

		$data['posts'] = Model::factory('post')->get_post_by_id($id);
		// $data['posts'] = Model::factory('post')->get_posts_by_slug($slug);

        $view->set("head", View::factory('layout/head'));		
        $view->set("header", View::factory('layout/header'));		
        $view->set("content", $data);
        // $view->set("sidebar", View::factory('layout/sidebar'));		
        $view->set("footer", View::factory('layout/footer'));		
        $this->response->body($view);
	}
	/*
	public function action_about()
	{
		// $this->response->body('hello, about 2!');
        $contact_info = new StdClass;
        $contact_info->telephone = "1800 111 888";
        $contact_info->address = "123 Fake st. Springfield";
        $contact_info->email = "demo@demosite.com";


        $view = View::factory('pages/about');
        View::set_global('site_name', 'Blog'); 
        $view->set("title", 'About us AAB');
        $view->set("description", 'About us description');
        $view->set("pg_header", 'About us CCD');
        // keywords, xmlrpc_parse_method_descriptions(xml)


        // $view->set("content", View::factory('welcome')->bind("contact_info", $contact_info));
        $view->bind("contact_info", $contact_info);

		$id = 1;

		$messages = new Model_Post;   
		// $messages = Model::factory('message')->get_all();

		$all = Model::factory('post')->count();
        $view->set("all", $all);

		$posts = Model::factory('post')->get_posts_by_category(2);
        $view->set("posts", $posts);

		echo '<br>all ' .$all.'<br>';
		// echo '<br>users ' .print_r($users, true).'<br>';
		echo '<br>posts ' .print_r($posts, true).'<br>';

        $view->set("header", View::factory('layout/header'));		
        // $view->set("content", View::factory('content'));		
        $view->set("content", 'DATABASE PAGE CONTENT');
        $view->set("sidebar", View::factory('layout/sidebar'));		
        $view->set("footer", View::factory('layout/footer'));		
        $this->response->body($view);
	}
	*/
	public function action_contact() 
	{
        $contact_info = new StdClass;
        $contact_info->telephone = "1800 111 888";
        $contact_info->address = "123 Fake st. Springfield";
        $contact_info->email = "demo@demosite.com";


        $view = View::factory('pages/contact');
        $view->set("title", 'Contact');
        $view->set("description", 'About us description');
        $view->set("pg_header", 'Contact CCD');

        $view->bind("contact_info", $contact_info);
        $view->set("header", View::factory('layout/header'));		
        $view->set("content", View::factory('content'));
        $view->set("sidebar", View::factory('layout/sidebar'));		
        $view->set("footer", View::factory('layout/footer'));		
        $this->response->body($view);

	}

} // End Welcome
