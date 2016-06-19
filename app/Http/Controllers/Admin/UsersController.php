<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{	
	private $data = array();
    public function index(Request $request)
    {

    	$this->data['user'] = $request->user();
    	
        $this->data['users'] = User::paginate(15);
        //var_dump($users);exit;
		$this->data['username']=$this->data['user']['first_name'].' '.$this->data['user']['last_name'];
			
		$assets['images'] = asset('public/image/test.png');
		$assets['styles'] = asset('public/css/test.css');
		$this->data['assets'] = $assets;

		//var_dump($this->data);exit;
		$this->data['url'] = url('admin/users');
		$this->data['edit_user'] = url('admin/users/{users}/edit');
		$permissions = new Role;
		//var_dump($permissions->permissions());exit;
    	return view('admin.users.userslist', $this->data);
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {

    	$this->data['user'] = User::findOrFail($user_id)->toArray();
       
    	$this->data['action'] = url('admin/users/{users}');
        $this->data['username']=$this->data['user']['first_name'].' '.$this->data['user']['last_name'];
        $assets['images'] = asset('public/image/test.png');
        $assets['styles'] = asset('public/css/test.css');
        $this->data['assets'] = $assets;

        
        $this->data['url'] = url('admin/users');
        $this->data['update_action'] = url('admin/users/'.$user_id.'/update');
    	return view('admin.users.useredit', $this->data);
        //var_dump($this->data);exit;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
