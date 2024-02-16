<?php

namespace App\Helpers;
use Session;
use DB;

class Helper{

	public static function get_user_data(string $string)

    {
        $query = DB::table("users")->where("id",$string);
        if($query->count() > 0)
        {
            return $query->get()->first();
        } else
        {
            return false;
        }
		
    }

    public static function get_front_user_data(string $string)

    {
        $query = DB::table("front_users")->where("id",$string);
        if($query->count() > 0)
        {
            return $query->get()->first();
        } else
        {
            return false;
        }
        
    }

    public static function get_product_data(string $string)

    {
        $query = DB::table("products")->where("id",$string);
        if($query->count() > 0)
        {
            return $query->get()->first();
        } else
        {
            return false;
        }
        
    }

    public static function get_permission_data(string $string)
    {
        $query = DB::table("user_permissions")->where("id",$string);
        if($query->count() > 0)
        {
            return $query->get()->first();
        } else
        {
            return false;
        }
    }
    public static function user_role_name(int $id){

		$result = DB::table('user_permissions')->where('id',$id)->first();
                                                            
		
        if($result !='' && isset($result)){
            return $result->cname;
        }else{
            echo "-";
        }        
	}

	public static function categoryname(int $id){

		$result = DB::table('categories')->where('id',$id)->first();                                                     
		
        if($result !='' && isset($result)){
            return $result->name;
        }else{
            echo "-";
        }
	}
	
	
	
} 