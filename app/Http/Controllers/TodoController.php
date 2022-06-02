<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Models\File_uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = todos::all();
        return response()->json([
            'todos' => $todos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    
    public function store(Request $request)
    {
        
            $todos = new Todos;
            $todos->message = $request->message;
            $todos->is_complete = "0";
            $todos->user_id = $request->user_id;
            $todos->save();

            if($request->hasFile("pics")){
                $files=$request->file("pics");
                foreach($files as $file){
                    $imageName= $file->getClientOriginalName();
                    $uploadedFilesName = $file->storeAs('images', $imageName);
                    $fileNameOnly = pathinfo($imageName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $sizeFile = $file->getSize();
                    $request['name'] = $fileNameOnly;
                    $request['extension'] = $extension;
                    $request['size'] = $sizeFile;
                    $request['path'] = $uploadedFilesName;

                    $file->move(\public_path("/images"),$imageName);
                    File_uploads::create($request->all());
                }
            }

            return response()->json([
                'status' => 'success'
            ]);
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

    public function makeActive(Request $request, $id) {

    $todo = todos::findOrFail($id);

    if(request('active') === true)
    {
        $todo->is_complete = 1;

    }elseif(request('active') === false){
        $todo->is_complete = 0;
    }

    $todo->save();

    return response()->json([
        'status' => 'success'
    ]);
    
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



    public function update(Request $request, $id)
    {

        $todo = todos::findOrFail($id);
        $todo->message = $request->message;
        $todo->save();

        if($request->hasFile("pics")){
            $files=$request->file("pics");
            foreach($files as $file){
                $imageName= $file->getClientOriginalName();
                $uploadedFilesName = $file->storeAs('images', $imageName);
                $fileNameOnly = pathinfo($imageName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $sizeFile = $file->getSize();
                $request['name'] = $fileNameOnly;
                $request['extension'] = $extension;
                $request['size'] = $sizeFile;
                $request['path'] = $uploadedFilesName;

                $file->move(\public_path("/images"),$imageName);
                File_uploads::create($request->all());
            }
        }

        // RELATIONSHIP MANY TO MANY (TODO_FILE_UPLOADS)
        $todo->fileUploads()->sync( $request->file_upload_id );


        return response()->json([
            'status' => 'success'
        ]);

    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = todos::find($id);
        $todo->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Category deleted succesfully',
        ]);
    }
}
