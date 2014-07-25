<?php

class PictureController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Return View::make("admin.picture.index");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Return View::make("admin.picture.add");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $file = Input::file('image'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('image')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            $layer1 = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->cropMaximumInPixel(0, 0, "MM");
            $layer->resizeInPixel(240, 240);
            $layer1->cropMaximumInPixel(0, 0, "MM");
            $layer1->resizeInPixel(900, 900);
//            $layer->resizeInPixel(400, 250, true, 0, 0, 'MM');
//            $layer->resizeInPixel(null, 240, false);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
//            $layer1->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
//            $layer1->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."pictures";
            $filename = "_".$RandNumber.".png";
            $filename1 = "g_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 90; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            $layer1->save($dirPath, $filename1, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            chmod($dirPath ."/".$filename1 , 0777);
            //connect & insert file record in database
            Picture::create(array(
                'image'           => $filename,
                'description'      => Input::get("description"),
                'category_id'      => Input::get("category"),
            ));

            return '<h3 class="text-success">Photo Added Successful</h3>';
        } else {
            return '<h3 class="text-danger">error Uploading file</h3>';
        }

    }


    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function lists()
    {
        return View::make("admin.picture.list");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $picture = Picture::find($id);
        return View::make("admin.picture.edit",compact("picture"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $picture = Picture::find($id);
        $picture->description=Input::get("description");
        $picture->category_id=Input::get("category");
        $picture->save();
        if(Input::file('image')){
            $file = Input::file('image'); // your file upload input field in the form should be named 'file'
            $destinationPath = public_path().'/uploads';
            $filename = $file->getClientOriginalName();
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $uploadSuccess = Input::file('image')->move($destinationPath, $filename);
            $RandNumber   		= rand(0, 9999999999);
            if( $uploadSuccess ) {
                require_once('PHPImageWorkshop/ImageWorkshop.php');
                chmod($destinationPath."/".$filename, 0777);
                $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                unlink(public_path().'/uploads/'.$filename);
                //$layer->resizeInPixel(420,240, null, true);
                $layer->resizeInPixel(420, 240, false);
                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                $dirPath =public_path().'/uploads/' ."pictures";
                $filename = "_".$RandNumber.".png";
                $createFolders = true;
                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                chmod($dirPath ."/".$filename , 0777);
                if($picture->image != ""){
                    unlink(public_path().'/uploads/pictures/'.$picture->image);
                }
                //connect & insert file record in database
                $picture->image  = $filename;
                $picture->save();

            }
        }

        return "<h4 class='text-success'>picture Updated Successful</h4>";
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        chmod(public_path().'/uploads/pictures/'.$picture->image , 0777);
        if($picture->image != ""){
            unlink(public_path().'/uploads/pictures/'.$picture->image);
        }
        $picture->delete();

    }


}
