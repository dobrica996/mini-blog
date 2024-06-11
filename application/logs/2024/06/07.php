<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-06-07 21:58:58 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /opt/lampp/htdocs/gitorial/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2024-06-07 21:58:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-07 21:59:07 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /opt/lampp/htdocs/gitorial/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2024-06-07 21:59:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-07 21:59:09 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /opt/lampp/htdocs/gitorial/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2024-06-07 21:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-07 21:59:50 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‹welcome› - assumed '‹welcome›' ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php:8
2024-06-07 21:59:50 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php:8
2024-06-07 22:00:31 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /opt/lampp/htdocs/gitorial/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2024-06-07 22:00:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-07 22:00:43 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php:10
2024-06-07 22:00:43 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php:10
2024-06-07 22:00:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php:11
2024-06-07 22:00:52 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 11, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php:11
2024-06-07 22:02:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:02:16 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(9): Kohana_View::factory('welcome')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:02:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:02:32 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('index')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('index', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(9): Kohana_View::factory('index')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:05:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:05:22 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(18): Kohana_View::factory('welcome')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:05:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:05:43 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(18): Kohana_View::factory('welcome')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:05:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:05:44 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(18): Kohana_View::factory('welcome')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:07:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:07:41 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('index')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('index', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(18): Kohana_View::factory('index')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:07:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:07:52 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/index')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/index', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(18): Kohana_View::factory('welcome/index')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:27:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:27:16 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/index')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/index', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(20): Kohana_View::factory('welcome/index')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:27:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:27:41 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/index')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/index', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(23): Kohana_View::factory('welcome/index')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:27:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:27:42 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/index')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/index', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(23): Kohana_View::factory('welcome/index')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:33:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/content could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:33:03 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/content')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/content', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(31): Kohana_View::factory('welcome/content')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:33:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact_info ~ APPPATH/views/welcome.php [ 4 ] in /opt/lampp/htdocs/gitorial/application/views/welcome.php:4
2024-06-07 22:33:58 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/welcome.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(37): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/welcome.php:4
2024-06-07 22:35:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact_info ~ APPPATH/views/welcome.php [ 6 ] in /opt/lampp/htdocs/gitorial/application/views/welcome.php:6
2024-06-07 22:35:15 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/welcome.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 6, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(37): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/welcome.php:6
2024-06-07 22:40:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/header could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:01 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/header')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/header', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(37): Kohana_View::factory('welcome/header')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/header could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:20 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/header')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/header', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(37): Kohana_View::factory('welcome/header')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/header could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:22 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/header')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/header', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(37): Kohana_View::factory('welcome/header')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/header could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:40:57 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('welcome/header')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/header', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(37): Kohana_View::factory('welcome/header')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 22:45:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/welcome.php [ 12 ] in /opt/lampp/htdocs/gitorial/application/views/welcome.php:12
2024-06-07 22:45:08 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/welcome.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 12, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(39): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/welcome.php:12
2024-06-07 23:47:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 23:47:51 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('home')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('home', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(28): Kohana_View::factory('home')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 23:50:11 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /opt/lampp/htdocs/gitorial/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2024-06-07 23:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-07 23:58:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/about could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-07 23:58:18 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('pages/about')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/about', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(32): Kohana_View::factory('pages/about')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145