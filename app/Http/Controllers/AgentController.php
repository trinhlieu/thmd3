<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgentController extends Controller
{
    function index()
    {
        $agents = Agent::all();
        return view('agents.index', compact('agents'));
    }

    function create()
    {
        return view('agents.create');
    }

    function store(AgentRequest $request)
    {
        $agent = new Agent();
        $agent->name = $request->name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->address = $request->address;
        $agent->manager = $request->manager;
        $agent->stt = $request->stt;
        $agent->save();
        Session::flash('success', 'Thêm mới đại lý thành công');
        return redirect()->route('agent.index');
    }

    function edit($id)
    {
        $agent = Agent::findOrFail($id);
        return view('agents.update', compact('agent'));
    }

    function update(AgentRequest $request, $id)
    {
        $agent = Agent::findOrFail($id);
        $agent->name = $request->name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->address = $request->address;
        $agent->manager = $request->manager;
        $agent->stt = $request->stt;
        $agent->save();
        Session::flash('success', 'Cập nhập đại lý thành công');
        return redirect()->route('agent.index');
    }

    function delete($id)
    {
        $agent = Agent::findOrFail($id);
        $agent->delete();
        Session::flash('success', 'Xoá đại lý thành công');
        return redirect()->route('agent.index');
    }

    function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword) {
            return redirect()->route('agent.index');
        }
        $agents = Agent::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);

        return view('agents.index', compact('agents'));
    }
}
