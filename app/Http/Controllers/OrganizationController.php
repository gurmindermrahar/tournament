<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\OrgContact;
use App\Http\Requests\Frontend\createOrgRequest;
use App\Http\Requests\Frontend\createOrgContactsRequest;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    public function createOrg(Request $request)
    {
        return view('frontend.add_organization');
    }

    public function createOrgPost(createOrgRequest $request)
    {
        $data = $request->except(['_token','org_id']);

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $data['logo'] = uploadImage($file,'organization/image');
        }

        if($request->hasFile('headerImage')){
            $file = $request->file('headerImage');
            $data['headerImage'] = uploadImage($file,'organization/image');
        }

        $auth = auth()->user();
        $data['user_id'] = $auth->id;

        $org = Organization::updateOrCreate(['id' => $request->org_id],$data);

        return sendResponse($org,'successfully created');
    }

    public function createOrgContactPost(createOrgContactsRequest $request)
    {
        $auth = auth()->user();

        if(count($request->links)){
            foreach($request->links as $key => $link){
                $data =[
                    'name' => $key,
                    'link' => $link,
                    'user_id' => $auth->id,
                    'org_id' => $request->org_id,
                ];

                $org = OrgContact::updateOrCreate(['org_id' => $request->org_id,'name' => $key],$data);
            }
        }

        return sendResponse([],'successfully created');
    }

    public function geTorganizationView(Request $request)
    {
        return view('frontend.view_organization');
    }

}
