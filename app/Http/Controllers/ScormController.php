<?php
 
namespace App\Http\Controllers;

// use App\vendor\devianl2\laravel-scorm\src\Manager\ScormManager;
use App\Http\Controllers\Controller;
use Peopleaps\Scorm\Manager;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Exceptions\Handler;

use Peopleaps\Scorm\Exception\InvalidScormArchiveException;
use Peopleaps\Scorm\Library\ScormLib;
use Peopleaps\Scorm\Manager\ScormManager;
use Peopleaps\Scorm\Model\ScormScoModel;
use App\Http\Controllers\HomeController;
use Peopleaps\Scorm\Model\ScormModel;
use App\Models\Proyecto;






class ScormController extends Controller
{
    /** @var ScormManager $scormManager */
    private $scormManager;
    /**
     * ScormController constructor.
     * @param ScormManager $scormManager
     */
    public function __construct(ScormManager $scormManager)
    {
        $this->scormManager = $scormManager;
    }

    public function show($id)
    {
        $item = ScormModel::with('scos')->findOrFail($id);
        // response helper function from base controller reponse json.
        return $this->respond($item);
    }
    public function store(Proyecto $proyecto, Request $request) 
    // AQUI habia una request personalizada lamada ScormRequest
    {
        try {
            $scorm = $this->scormManager->uploadScormArchive($proyecto, $request->file('archivo') );
            // handle scorm runtime error msg
        }catch (InvalidScormArchiveException | StorageNotFoundException $ex) {
            return $this->respondCouldNotCreateResource(trans('scorm.' .  $ex->getMessage()));
        }

        $scorm=ScormModel::with('scos')->whereUuid($scorm['uuid'])->first();
        // response helper function from base controller reponse json.

        // return (ScormModel::with('scos')->whereUuid($scorm['uuid'])->first());

        return route('desarrollo', $proyecto);

    }

    public function saveProgress(Request $request)
    {
        // TODO save user progress...
    }
}