<?php defined('SYSPATH') or die('No direct script access.'); 
/** 
* Message Model 
* Handles CRUD for user messages 
*/ 
class Model_Post extends Model { 
	// Table name used by this model 
	protected $_table = 'post'; 
	protected $_table2 = 'category'; 
	protected $con; 

	public function __construct() {
		$this->con = mysqli_connect('localhost', 'root', '', 'blog_db');

		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  exit();
		}
		mysqli_set_charset($this->con,"utf8");
	}

    public function count()
    {

		if ($result = mysqli_query($this->con, "SELECT * FROM {$this->_table}")) {
		  $num_rows =  mysqli_num_rows($result);

		  return $num_rows;
		  mysqli_free_result($result);
		}

		mysqli_close($con);            

    }

    public function get_categories()
    {

		$sql = "SELECT * FROM {$this->_table2} ORDER BY createdAt";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			// SELECT `id`, `authorId`, `categoryId`, `title`, `metaTitle`, `slug`, `tags`, `published`, `createdAt`, `updatedAt`, `publishedAt`, `content`, `image` FROM `post` WHERE 1
			while($row = mysqli_fetch_assoc($result)) {
				echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = $row["createdAt"];
				$data[$i]['title'] = $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = substr(strip_tags($row["content"]), 0, 240);
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($conn);        
    }

    public function get_posts_top()
    {

		$sql = "SELECT * FROM {$this->_table} WHERE home_top='1'";
		$sql = "SELECT post.id AS id, user.id AS uid, firstName, lastName, category.id AS cid, category.title AS ctitle, `authorId`, `categoryId`, post.`title`, post.`metaTitle`, post.`slug`, `tags`, `createdAt`, post.`content`, `image`, `home_top`, `home_box` FROM `post` INNER JOIN user ON post.authorId = user.id INNER JOIN category ON post.categoryId = category.id WHERE 1 AND published='1' AND home_box='1'";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = date( 'F d, Y', strtotime($row["createdAt"]));
				$data[$i]['title'] = substr(strip_tags($row["title"]), 0, 140);// $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['lastName'] = $row["lastName"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = substr(strip_tags($row["content"]), 0, 240);
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($conn);        
    }

    public function get_posts_box()
    {

		$sql = "SELECT * FROM {$this->_table} WHERE home_box='1'";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = $row["createdAt"];
				$data[$i]['title'] = substr(strip_tags($row["title"]), 0, 140);// $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = substr(strip_tags($row["content"]), 0, 240);
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($conn);        
    }

    public function get_posts()
    {

		$sql = "SELECT * FROM {$this->_table} ORDER BY createdAt";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;

			while($row = mysqli_fetch_assoc($result)) {
				echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = $row["createdAt"];
				$data[$i]['title'] = $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = substr(strip_tags($row["content"]), 0, 240);
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($conn);        
    }

    public function get_posts_by_ws($categoryId, $tag='')
    {    	
    	if(!empty($categoryId)) {
    		$where_ws = " AND categoryId = '$categoryId'";
    	} else {
    		$where_ws = " AND (tags LIKE '%$tag, %' OR tags LIKE '%, $tag%')";
    	}
		$sql = "SELECT post.id AS id, user.id AS uid, firstName, lastName, category.id AS cid, category.title AS ctitle, `authorId`, `categoryId`, post.`title`, post.`metaTitle`, post.`slug`, `tags`, `createdAt`, post.`content`, `image`, `home_top`, `home_box` FROM `post` INNER JOIN user ON post.authorId = user.id INNER JOIN category ON post.categoryId = category.id WHERE 1 $where_ws AND published='1'";

		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				// echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = date( 'F d, Y', strtotime($row["createdAt"]));
				$data[$i]['title'] = $row["title"];
				$data[$i]['ctitle'] = $row["ctitle"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['lastName'] = $row["lastName"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = substr(strip_tags($row["content"]), 0, 240);
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($this->con);        
    }

    public function get_posts_by_category($categoryId)
    {    	
		$sql = "SELECT post.id AS id, user.id AS uid, firstName, lastName, category.id AS cid, category.title AS ctitle, `authorId`, `categoryId`, post.`title`, post.`metaTitle`, post.`slug`, `tags`, `createdAt`, post.`content`, `image`, `home_top`, `home_box` FROM `post` INNER JOIN user ON post.authorId = user.id INNER JOIN category ON post.categoryId = category.id WHERE categoryId = '$categoryId' AND published='1'";

		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				// echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = date( 'F d, Y', strtotime($row["createdAt"]));
				$data[$i]['title'] = $row["title"];
				$data[$i]['ctitle'] = $row["ctitle"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['lastName'] = $row["lastName"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = substr(strip_tags($row["content"]), 0, 240);
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($this->con);        
    }

   public function get_post_by_id($id)
    {

		$sql = "SELECT * FROM {$this->_table} WHERE id = '$id'";
		$sql = "SELECT post.id AS id, user.id AS uid, firstName, lastName, category.id AS cid, category.title AS ctitle, `authorId`, `categoryId`, post.`title`, post.`metaTitle`, post.`slug`, `tags`, `createdAt`, post.`content`, `image`, `home_top`, `home_box` FROM `post` INNER JOIN user ON post.authorId = user.id INNER JOIN category ON post.categoryId = category.id WHERE post.id = '$id' AND published='1'";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				// echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = date( 'F d, Y', strtotime($row["createdAt"]));
				$data[$i]['title'] = $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['tags'] = $row["tags"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['lastName'] = $row["lastName"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['ctitle'] = $row["ctitle"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = $row["content"];
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($this->con);        
    }

   public function get_posts_by_id($id)
    {

		$sql = "SELECT * FROM {$this->_table} WHERE id = $id";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				// echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = $row["createdAt"];
				$data[$i]['title'] = $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = $row["content"];
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($this->con);        
    }
   public function get_posts_by_slug($slug)
    {

		$sql = "SELECT * FROM {$this->_table} WHERE slug = $slug";
		$result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				// echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['createdAt'] = $row["createdAt"];
				$data[$i]['title'] = $row["title"];
				$data[$i]['slug'] = $row["slug"];
				$data[$i]['authorId'] = $row["authorId"];
				$data[$i]['categoryId'] = $row["categoryId"];
				$data[$i]['image'] = $row["image"];
				$data[$i]['content'] = $row["content"];
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}
		mysqli_close($this->con);        
    }

    public function find_all2()
    {
		$conn = mysqli_connect('localhost', 'root', '', 'blog_db');

		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM messages";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($obj = mysqli_fetch_object($result)) {
				// echo "id: " . $obj->id . "<br>";
				$data[$i]['id'] = $obj->id;
				$data[$i]['id'] = $obj;
				// $data[$i]['user_id'] = $row["user_id"];
				// $data[$i]['content'] = $row["content"];
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}

		mysqli_close($conn);        


    }

    public function find_all()
    {
		$conn = mysqli_connect('localhost', 'root', '', 'blog_db');

		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM messages";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
			$data = array();
			$i=1;
			while($row = mysqli_fetch_assoc($result)) {
				// echo "id: " . $row["id"]. "<br>";
				$data[$i]['id'] = $row["id"];
				$data[$i]['user_id'] = $row["user_id"];
				$data[$i]['content'] = $row["content"];
				$i++;
			}
			return $data;
		} else {
		  echo "0 results";
		}

		mysqli_close($conn);        


    }

	/** 
	* Adds a new message for a user 
	* 
	* @param int user_id 
	* @param string user’s message 
	* @return Database 
	*/ 
	public function add($user_id, $content) 
	{ 
		/*
		$data = array(‘user_id’, ‘content’, ‘date_published’); 
		return DB::insert($this->_table, $data) 
		->values(array($user_id, $content, time())) 
		->execute(); 
		*/
		return array('1', '2', '3');
	} 

	/** 
	* Gets all messages 
	* 
	* @param int $limit 
	* @param int $offset 
	* @param int $user_id 
	* @return array */ 
	public function get_all($limit = 10, $offset = 0, $user_id = 
	null)

	{ 
		$query = DB::select() 
		->from($this->_table) 
		->order_by(‘date_published’, ‘DESC’) 
		->limit($limit) 
		->offset($offset); 
		if ($user_id AND 0) 
		{ 
			$query->where('user_id', '=', (int) $user_id); 
		} 
		return $query->execute()->as_array(); 
	} 
	/** 
	* Counts all messages 
	* 
	* @param int $user_id 
	* @return int 
	*/ 
	public function count_all($user_id = null) 
	{ 
		$query = DB::select(DB::expr('COUNT(*) AS message_count')) 
		->from($this->_table); 
		if ($user_id) 
		{ 
		$query->where('user_id', '=', $user_id); 
		} 
		return $query->execute()->get(‘message_count’); 
	} 
}







