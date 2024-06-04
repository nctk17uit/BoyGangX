<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware(['role:owner']);
            $this->middleware('auth');
    }
    public function index()
    {
        // $role = Role::create(['name' => 'vip']);
        // $permission = Permission::create(['name' => 'watch vip movies']);
        // $role = Role::find(2);
        // $permission = Permission::find(2);
        // $role->givePermissionTo($permission);


        // $role = Role::create(['name' => 'ok']);
        // $user1= User::find (1);
        // $user1 -> assignRole('admin');
        // $user1= User::find (5);
        // $user1 -> assignRole('owner');
        // $user1= User::find (7);
        // $user1 -> assignRole('owner');
        // $user1= User::find (8);
        // $user1 -> assignRole('admin');
        $user = User::orderBy('id','DESC')->get();
        return view('admincp.useradmin.form',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.useradmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->save();
        return redirect()->back()->with('status','Thêm user thành công');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
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
