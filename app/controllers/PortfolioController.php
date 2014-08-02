<?php

class PortfolioController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Return View::make("admin.portfolio.index");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Return View::make("admin.portfolio.add");
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
            $layer->resizeInPixel(300, null, false);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."portfolios";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 90; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            //connect & insert file record in database
            Portfolio::create(array(
                'image'           => $filename,
                'description'      => Input::get("description"),
                'title'      => Input::get("title"),
            ));

            return '<h3 class="text-success">Portfolio Added Successful</h3>';
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
        return View::make("admin.portfolio.list");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return View::make("admin.portfolio.edit",compact("portfolio"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->description=Input::get("description");
        $portfolio->title=Input::get("title");
        $portfolio->save();
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
                $layer->resizeInPixel(300, null, true);
                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                $dirPath =public_path().'/uploads/' ."portfolios";
                $filename = "_".$RandNumber.".png";
                $createFolders = true;
                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                chmod($dirPath ."/".$filename , 0777);
                if($portfolio->image != ""){
                    unlink(public_path().'/uploads/portfolios/'.$portfolio->image);
                }
                //connect & insert file record in database
                $portfolio->image  = $filename;
                $portfolio->save();

            }
        }

        return "<h4 class='text-success'>portfolio Updated Successful</h4>";
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        chmod(public_path().'/uploads/portfolios/'.$portfolio->image , 0777);
        if($portfolio->image != ""){
            unlink(public_path().'/uploads/portfolios/'.$portfolio->image);
        }
        $portfolio->delete();

    }


}