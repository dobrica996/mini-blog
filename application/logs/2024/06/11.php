<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-06-11 08:53:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/pages/blog.php [ 83 ] in file:line
2024-06-11 08:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-11 10:05:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/sidebar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-11 10:05:54 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('layout/sidebar')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('layout/sidebar', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(26): Kohana_View::factory('layout/sidebar')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-11 13:26:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/post.php [ 165 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:165
2024-06-11 13:26:46 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(165): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 165, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(33): Model_Post->get_posts_by_category('1')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:165
2024-06-11 13:44:24 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 163 ] in file:line
2024-06-11 13:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 163, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(163): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(33): Model_Post->get_posts_by_category('1')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-11 13:45:20 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 166 ] in file:line
2024-06-11 13:45:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 166, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(166): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(33): Model_Post->get_posts_by_category('1')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-11 13:50:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ctitle ~ APPPATH/views/pages/blogs.php [ 53 ] in /opt/lampp/htdocs/gitorial/application/views/pages/blogs.php:53
2024-06-11 13:50:02 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/blogs.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 53, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(39): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/blogs.php:53
2024-06-11 13:54:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: categoryId ~ APPPATH/classes/Model/post.php [ 190 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:190
2024-06-11 13:54:34 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(190): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 190, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(61): Model_Post->get_post_by_id(2)
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:190
2024-06-11 13:55:21 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 193 ] in file:line
2024-06-11 13:55:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 193, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(193): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(61): Model_Post->get_post_by_id(2)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-11 14:20:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/pages/blog.php [ 66 ] in file:line
2024-06-11 14:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-11 14:20:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tags_s ~ APPPATH/views/pages/blog.php [ 66 ] in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:66
2024-06-11 14:20:56 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/blog.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 66, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(68): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:66
2024-06-11 14:43:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH/classes/Controller/Pages.php [ 38 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:38
2024-06-11 14:43:18 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 38, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:38