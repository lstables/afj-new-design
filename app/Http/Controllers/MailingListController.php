<?php

namespace App\Http\Controllers;

use App\MailingList;
use Illuminate\Http\Request;


class MailingListController extends Controller
{
    public function index()
    {
        $lists = MailingList::paginate(10);
        return view('admin.mailing-list.list', compact('lists'));
    }

}
