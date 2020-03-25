<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $projects = Project::where('user_id', Auth::user()->id)->get();
    
            return view('projects.index', ['projects' => $projects]);
        }

        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id = null)
    {
        return view('projects.create', ['company_id' => $company_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $project = Project::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'company_id' => $request->input('company_id'),
                'user_id' => Auth::user()->id
            ]);

            if ($project) {
                return redirect()->route('projects.show', ['project' => $project->id])
                ->with('success', 'Project created successfully.');
            }
        }
        
        return back()->withInput()->with('errors', ['Error in creating project.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $project = Project::where($project->id);

        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $project = Project::find($project->id);

        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $projectUpdate = Project::where('id', $project->id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        if ($projectUpdate) {
            return redirect()->route('projects.show', ['project' => $project->id])
            ->with('success', 'Project updated successfully');
        }

        return back()->withInput()->with('errors', ['Error in updating Project.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $findProject = Project::find($project->id);

        if ($findProject->delete()) {
            return redirect()->route('projects.index', ['project' => $project->id])
            ->with('success', 'Project deleted successfully.');
        }

        return back()->withInput()->with('errors', ['Project could not be deleted.']);
    }
}
