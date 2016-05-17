<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


	/**
	* 						
	*/
	class AdminController extends Controller
	{	
		public function index(Request $request)	{
			//get authenticated user
			
			$user =  $request->user();
			$data =array(
				'username' => $user['first_name'].' '.$user['last_name']
			);
			
			$data['url'] = url('admin/users');
			return view('admin.admin_dashboard', $data);			
		}
	}
 ?>