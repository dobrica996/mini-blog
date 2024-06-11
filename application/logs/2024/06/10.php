<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-06-10 13:14:12 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database/MySQL.php:171
2024-06-10 13:14:12 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM \n...', false, Array)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(48): Kohana_Database_Query->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database/MySQL.php:171
2024-06-10 13:17:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 35 ] in file:line
2024-06-10 13:17:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:32:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 35 ] in file:line
2024-06-10 13:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:37:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 35 ] in file:line
2024-06-10 13:37:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:43:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 35 ] in file:line
2024-06-10 13:43:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:52:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Controller/Pages.php [ 51 ] in file:line
2024-06-10 13:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:52:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 34 ] in file:line
2024-06-10 13:52:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:53:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/Controller/Pages.php [ 53 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:53
2024-06-10 13:53:19 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 53, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:53
2024-06-10 13:53:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Controller/Pages.php [ 30 ] in file:line
2024-06-10 13:53:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:54:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Controller/Pages.php [ 55 ] in file:line
2024-06-10 13:54:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:57:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Controller/Pages.php [ 57 ] in file:line
2024-06-10 13:57:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 13:57:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 38 ] in file:line
2024-06-10 13:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:03:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/Controller/Pages.php [ 64 ] in file:line
2024-06-10 14:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:05:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database' not found ~ MODPATH/database/classes/Database.php [ 3 ] in file:line
2024-06-10 14:05:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:06:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:06:02 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 65, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(65): Kohana_Database::instance()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:13:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:13:56 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 65, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(66): Kohana_Database::instance()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:22:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: local ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:22:55 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 65, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(67): Kohana_Database::instance()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:28:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:28:54 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 65, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(68): Kohana_Database::instance('default')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:65
2024-06-10 14:31:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: blog_db ~ MODPATH/database/classes/Kohana/Database.php [ 66 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:66
2024-06-10 14:31:01 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 66, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(68): Kohana_Database::instance('default')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:66
2024-06-10 14:31:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 66 ] in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:66
2024-06-10 14:31:16 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 66, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(68): Kohana_Database::instance('default')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/modules/database/classes/Kohana/Database.php:66
2024-06-10 14:32:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Database type not defined in default configuration ~ MODPATH/database/classes/Kohana/Database.php [ 72 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:68
2024-06-10 14:32:15 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(68): Kohana_Database::instance('default')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:68
2024-06-10 14:49:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Database type not defined in default configuration ~ MODPATH/database/classes/Kohana/Database.php [ 72 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:68
2024-06-10 14:49:35 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(68): Kohana_Database::instance('default')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:68
2024-06-10 14:49:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Message' not found ~ APPPATH/classes/Controller/Pages.php [ 70 ] in file:line
2024-06-10 14:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:51:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'direct' (T_STRING) ~ APPPATH/classes/Model/message.php [ 1 ] in file:line
2024-06-10 14:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:51:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 41 ] in file:line
2024-06-10 14:51:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:52:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 41 ] in file:line
2024-06-10 14:52:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:53:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 41 ] in file:line
2024-06-10 14:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:54:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 41 ] in file:line
2024-06-10 14:54:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:54:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/classes/Model/message.php [ 53 ] in file:line
2024-06-10 14:54:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:54:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 57 ] in file:line
2024-06-10 14:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:55:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 41 ] in file:line
2024-06-10 14:55:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:55:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/message.php [ 57 ] in file:line
2024-06-10 14:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 14:55:45 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘messages’ - assumed '‘messages’' ~ APPPATH/classes/Controller/Pages.php [ 71 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:71
2024-06-10 14:55:45 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(71): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 71, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:71
2024-06-10 14:56:22 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘messages’ - assumed '‘messages’' ~ APPPATH/classes/Controller/Pages.php [ 72 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:72
2024-06-10 14:56:22 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(72): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 72, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:72
2024-06-10 14:57:09 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘messages’ - assumed '‘messages’' ~ APPPATH/classes/Controller/Pages.php [ 73 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:73
2024-06-10 14:57:09 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(73): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 73, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:73
2024-06-10 15:00:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 36 ] in file:line
2024-06-10 15:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 15:07:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 45 ] in file:line
2024-06-10 15:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 15:11:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 45 ] in file:line
2024-06-10 15:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 15:12:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_messages' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2024-06-10 15:12:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 15:12:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 13 ] in file:line
2024-06-10 15:12:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 15:14:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 13 ] in file:line
2024-06-10 15:14:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 15:15:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 13 ] in file:line
2024-06-10 15:15:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 16:28:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 13 ] in file:line
2024-06-10 16:28:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 16:32:01 --- EMERGENCY: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/Controller/Pages.php [ 82 ] in file:line
2024-06-10 16:32:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_connect()...', '/opt/lampp/htdo...', 82, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(82): mysql_connect('localhost', 'root', '')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in file:line
2024-06-10 16:32:26 --- EMERGENCY: ErrorException [ 2 ]: mysql_close() expects parameter 1 to be resource, object given ~ APPPATH/classes/Controller/Pages.php [ 87 ] in file:line
2024-06-10 16:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_close() e...', '/opt/lampp/htdo...', 87, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(87): mysql_close(Object(mysqli))
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in file:line
2024-06-10 16:33:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/message.php [ 13 ] in file:line
2024-06-10 16:33:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 16:36:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: con ~ APPPATH/classes/Model/message.php [ 31 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/message.php:31
2024-06-10 16:36:53 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/message.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 31, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(79): Model_Message->find_all()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/message.php:31
2024-06-10 16:37:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: con ~ APPPATH/classes/Model/message.php [ 27 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/message.php:27
2024-06-10 16:37:25 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/message.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 27, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(79): Model_Message->find_all()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/message.php:27
2024-06-10 16:37:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/Model/message.php [ 35 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/message.php:35
2024-06-10 16:37:40 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/message.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 35, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(79): Model_Message->find_all()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/message.php:35
2024-06-10 16:42:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/classes/Controller/Pages.php [ 107 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:107
2024-06-10 16:42:04 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 107, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:107
2024-06-10 16:53:48 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/message.php [ 60 ] in file:line
2024-06-10 16:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 60, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/message.php(60): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(35): Model_Message->find_all()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 17:20:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Post' not found ~ APPPATH/classes/Controller/Pages.php [ 32 ] in file:line
2024-06-10 17:20:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 18:51:04 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 42 ] in file:line
2024-06-10 18:51:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(42): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(36): Model_Post->get_posts_by_category()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 18:52:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: authorId ~ APPPATH/classes/Model/post.php [ 49 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:49
2024-06-10 18:52:05 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 49, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(36): Model_Post->get_posts_by_category()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:49
2024-06-10 18:52:27 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Pages.php [ 39 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:39
2024-06-10 18:52:27 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(39): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 39, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:39
2024-06-10 18:53:44 --- EMERGENCY: ErrorException [ 2 ]: substr() expects parameter 3 to be long, string given ~ APPPATH/classes/Model/post.php [ 50 ] in file:line
2024-06-10 18:53:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'substr() expect...', '/opt/lampp/htdo...', 50, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(50): substr('1', 30, '\r\n\r\nMeta is qui...')
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(36): Model_Post->get_posts_by_category()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 18:59:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: con ~ APPPATH/classes/Model/post.php [ 22 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:22
2024-06-10 18:59:30 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 22, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(35): Model_Post->count()
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:22
2024-06-10 19:01:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/post.php [ 39 ] in file:line
2024-06-10 19:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:02:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/post.php [ 43 ] in file:line
2024-06-10 19:02:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:10:21 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/about.php [ 16 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:10:21 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(16): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 16, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(52): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:13:31 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/about.php [ 16 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:13:31 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(16): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 16, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(53): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:20:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/Model/post.php [ 77 ] in file:line
2024-06-10 19:20:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:20:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/Model/post.php [ 77 ] in file:line
2024-06-10 19:20:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:23:19 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/about.php [ 16 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:23:19 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(16): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 16, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(54): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:24:58 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Pages.php [ 52 ] in file:line
2024-06-10 19:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:25:25 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/about.php [ 16 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:25:25 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(16): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 16, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(55): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:16
2024-06-10 19:28:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/classes/Controller/Pages.php [ 42 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:42
2024-06-10 19:28:36 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:42
2024-06-10 19:34:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/views/pages/about.php [ 17 ] in file:line
2024-06-10 19:34:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:40:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact_info ~ APPPATH/views/pages/blog.php [ 14 ] in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:14
2024-06-10 19:40:02 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/blog.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 14, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(55): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:14
2024-06-10 19:42:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Post' not found ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in file:line
2024-06-10 19:42:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 19:43:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/home could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-10 19:43:25 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(145): Kohana_View->set_filename('pages/home')
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/home', NULL)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(8): Kohana_View::factory('pages/home')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php:145
2024-06-10 19:52:43 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'posts' ~ APPPATH/views/pages/about.php [ 17 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:17
2024-06-10 19:52:43 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(17): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(88): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:17
2024-06-10 19:53:25 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'posts' ~ APPPATH/views/pages/about.php [ 17 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:17
2024-06-10 19:53:25 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(17): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(88): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:17
2024-06-10 19:53:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: categoryId ~ APPPATH/views/pages/blog.php [ 18 ] in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:18
2024-06-10 19:53:59 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/blog.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 18, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(45): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:18
2024-06-10 19:55:55 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'posts' ~ APPPATH/views/pages/about.php [ 17 ] in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:17
2024-06-10 19:55:55 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/about.php(17): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(88): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_about()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/about.php:17
2024-06-10 21:03:50 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant categoryId - assumed 'categoryId' ~ APPPATH/classes/Controller/Pages.php [ 26 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:26
2024-06-10 21:03:50 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(26): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 26, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:26
2024-06-10 21:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: conn ~ APPPATH/classes/Model/post.php [ 126 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:126
2024-06-10 21:07:55 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 126, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(50): Model_Post->get_posts_by_id(3)
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:126
2024-06-10 21:09:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: conn ~ APPPATH/classes/Model/post.php [ 126 ] in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:126
2024-06-10 21:09:00 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 126, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(50): Model_Post->get_posts_by_id(3)
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/gitorial/application/classes/Model/post.php:126
2024-06-10 21:09:25 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/pages/blog.php [ 15 ] in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:15
2024-06-10 21:09:25 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/blog.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 15, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(56): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/blog.php:15
2024-06-10 21:16:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _get ~ APPPATH/classes/Controller/Pages.php [ 47 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:47
2024-06-10 21:16:38 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 47, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:47
2024-06-10 21:19:42 --- EMERGENCY: ErrorException [ 8192 ]: Non-static method Kohana_Request::post() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Pages.php [ 48 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:19:42 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(48): Kohana_Core::error_handler(8192, 'Non-static meth...', '/opt/lampp/htdo...', 48, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:20:26 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 105 ] in file:line
2024-06-10 21:20:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 105, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(105): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(53): Model_Post->get_posts_by_id(NULL)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 21:28:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/Pages.php [ 50 ] in file:line
2024-06-10 21:28:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 21:28:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/Controller/Pages.php [ 51 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:51
2024-06-10 21:28:57 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 51, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:51
2024-06-10 21:29:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/Pages.php [ 50 ] in file:line
2024-06-10 21:29:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 21:36:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Pages.php [ 52 ] in file:line
2024-06-10 21:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2024-06-10 21:43:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Pages.php [ 50 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:50
2024-06-10 21:43:04 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(50): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 50, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:50
2024-06-10 21:44:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idd ~ APPPATH/classes/Controller/Pages.php [ 59 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:59
2024-06-10 21:44:17 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 59, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:59
2024-06-10 21:45:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: iidd ~ APPPATH/classes/Controller/Pages.php [ 48 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:45:28 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 48, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:45:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: iidd ~ APPPATH/classes/Controller/Pages.php [ 48 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:45:35 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 48, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:45:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: iidd ~ APPPATH/classes/Controller/Pages.php [ 48 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:45:50 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 48, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:48
2024-06-10 21:52:48 --- EMERGENCY: ErrorException [ 8192 ]: Non-static method Kohana_Request::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Pages.php [ 47 ] in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:47
2024-06-10 21:52:48 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(47): Kohana_Core::error_handler(8192, 'Non-static meth...', '/opt/lampp/htdo...', 47, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php:47
2024-06-10 21:53:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/pages/blogs.php [ 19 ] in /opt/lampp/htdocs/gitorial/application/views/pages/blogs.php:19
2024-06-10 21:53:59 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/pages/blogs.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(32): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/pages/blogs.php:19
2024-06-10 22:01:04 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 105 ] in file:line
2024-06-10 22:01:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 105, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(105): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(55): Model_Post->get_posts_by_id(NULL)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:03:04 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 105 ] in file:line
2024-06-10 22:03:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 105, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(105): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(55): Model_Post->get_posts_by_id('meta-rolls-out-...')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:03:12 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 105 ] in file:line
2024-06-10 22:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 105, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(105): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(55): Model_Post->get_posts_by_id(NULL)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:03:46 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 134 ] in file:line
2024-06-10 22:03:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 134, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(134): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(56): Model_Post->get_posts_by_slug('meta-rolls-out-...')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:04:06 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 134 ] in file:line
2024-06-10 22:04:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 134, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(134): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(56): Model_Post->get_posts_by_slug('meta-rolls-out-...')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:04:39 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 134 ] in file:line
2024-06-10 22:04:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 134, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(134): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(56): Model_Post->get_posts_by_slug('meta-rolls-out-...')
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:04:50 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 105 ] in file:line
2024-06-10 22:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 105, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(105): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(55): Model_Post->get_posts_by_id(NULL)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blog()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:06:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: current_url ~ APPPATH/views/welcome/home.php [ 19 ] in /opt/lampp/htdocs/gitorial/application/views/welcome/home.php:19
2024-06-10 22:06:51 --- DEBUG: #0 /opt/lampp/htdocs/gitorial/application/views/welcome/home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Response.php(162): Kohana_View->__toString()
#5 /opt/lampp/htdocs/gitorial/application/classes/Controller/Welcome.php(27): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/gitorial/application/views/welcome/home.php:19
2024-06-10 22:14:03 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 101 ] in file:line
2024-06-10 22:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 101, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(101): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(31): Model_Post->get_posts_by_category(NULL)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line
2024-06-10 22:18:14 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ APPPATH/classes/Model/post.php [ 101 ] in file:line
2024-06-10 22:18:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/opt/lampp/htdo...', 101, Array)
#1 /opt/lampp/htdocs/gitorial/application/classes/Model/post.php(101): mysqli_num_rows(false)
#2 /opt/lampp/htdocs/gitorial/application/classes/Controller/Pages.php(31): Model_Post->get_posts_by_category(NULL)
#3 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Controller.php(84): Controller_Pages->action_blogs()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/gitorial/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/gitorial/index.php(119): Kohana_Request->execute()
#9 {main} in file:line