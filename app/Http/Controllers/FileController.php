<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FileController extends Controller
{
    public function destroy(File $file)
    {
        $this->deleteFile($file->file);
        $file->delete();
        Alert::success('File Deleted Successfullly!!');
        return back();
    }
}
