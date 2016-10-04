<?php defined('BASEPATH') or die('No direct script access allowed');
class Userlookup{

    protected $uri_page;
    protected $connection_method;
        
    protected $hostname;
    protected $username;
    protected $password;
    protected $database;

    public function __construct()
    {
        // Configure database connection
        include(APPPATH.'config/database'.EXT);
        $this->hostname = $db[$active_group]['hostname'];
        $this->username = $db[$active_group]['username'];
        $this->password = $db[$active_group]['password'];
        $this->database = $db[$active_group]['database'];
    }

    public function check_uri()
    {
		 $request_uri = explode('/',substr($_SERVER['REQUEST_URI'], 1));
		 $this->uri_page = array_shift($request_uri);
		 $this->uri_page2 = array_shift($request_uri);
		 $connection_router = array_shift($request_uri);
		 $daftarfunc = array('page','home','media','investor','sitemap','contact','search','product','lang','');
		 
		 if (in_array($this->uri_page, $daftarfunc)){

		 }else{

		 if($this->uri_page == "products"){
                $func = 'product/type';
            }else{
               $func = 'page/id'; 
            }
		 if ($this->uri_page2 == ""){
			$link_page = $this->uri_page;
		 }else{
			 $link_page = $this->uri_page."/".$this->uri_page2;
		 }
		 $this->connection_method = empty($connection_router) ? 'index' : $connection_router;
		 $db = new mysqli($this->hostname, $this->username,  $this->password, $this->database);
		
		$res = $db->query("SELECT menu_id FROM menu WHERE link='".$link_page ."'");
		if(mysqli_num_rows($res)>0)
		{
			if ($row = mysqli_fetch_object($res))
			{						
				$_SERVER['REQUEST_URI'] = '/'.$func.'/'.$row->menu_id;
				$_SERVER['PATH_INFO'] = '/'.$func.'/'.$row->menu_id;
			}
			mysqli_free_result($res);
		
		}
		mysqli_close($db);
		 }
		
    }
} 
?>