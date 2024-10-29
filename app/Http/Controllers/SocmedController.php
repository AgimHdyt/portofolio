<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SocmedController extends Controller
{
    public function update(Request $request)
    {
        foreach ($request->all() as $name => $link) {
            $socmed = SocialMedia::where('name', $name)->first();
            if ($socmed) {
                $socmed->link = $link;
                $socmed->save();
            }
        }

        return redirect()->back()->with('success', 'Sosial media berhasil diperbarui');
    }
}