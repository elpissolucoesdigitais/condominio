<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Http\Request;

class PermissionProfileController extends Controller
{
    protected $profile, $permission;
    public function __construct(Profile $profile, Permission $permission)
    {
        $this->profile = $profile;
        $this->permission = $permission;
    }

    public function permissions($idProfile)
    {
        if(!$profile= $this->profile->find($idProfile))
        {
            return redirect()->back();
        }
        $permissions  = $profile->permissions()->paginate();
        return view('pages.admin.profiles.permissions.permission',compact('profile','permissions'));
    }


    public function profiles($idPermission)
    {
        if(!$permission= $this->permission->find($idPermission))
        {
            return redirect()->back();
        }
        $profiles  = $permission->profiles()->paginate();
        return view('pages.admin.permissions.profiles.profiles',compact('permission','profiles'));
    }

    public function permissionsAvailable($idProfile)
    {
        if(!$profile= $this->profile->find($idProfile))
        {
            return redirect()->back();
        }
        $permissions = $profile->permissionsAvailable();

        return view('pages.admin.profiles.permissions.available',compact('profile','permissions'));
    }

    public function attachPermissionsProfile(Request $request, $idProfile)
    {
        if(!$profile= $this->profile->find($idProfile))
        {
            return redirect()->back();
        }
        if (!$request->permissions || count($request->permissions) == 0)
        {
            return redirect()
                            ->back()
                            ->with('info','Precisa escolher pelo menos uma permissão');
        }

        $profile->permissions()->attach($request->permissions);

        return redirect()->route('profile.permissions',$profile->id);
    }

    public function detachPermissionsProfile($idProfile, $idPermission)
    {
        $profile= $this->profile->find($idProfile);
        $permission= $this->permission->find($idPermission);
        if(!$profile || !$permission)
        {
            return redirect()->back();
        }
        $profile->permissions()->detach($permission);

        return redirect()->route('profile.permissions',$profile->id);
    }
}

