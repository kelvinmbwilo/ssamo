
<div class="panel panel-default">
    <div class="panel-body">
        {{ Form::open(array("url"=>url("admin/portfolio/edit/{$portfolio->id}"),"class"=>"form-horizontal","id"=>'FileUploader','files' => true)) }}

        <div class='form-group'>
            <div class='col-sm-11' id="">
                Title<br> {{ Form::text('title',$portfolio->title,array('class'=>'form-control','placeholder'=>'Title(Company Name,Project Name)','required'=>'required')) }}
            </div>
            <div class='col-sm-11' >
                Description<br> {{ Form::textarea('description',$portfolio->description,array('class'=>'form-control','placeholder'=>'Image Description','required'=>'required','rows'=>'5')) }}
            </div>
            <div class='col-sm-11' >
                <img src='{{ asset("uploads/portfolios/{$portfolio->image}") }}' style="width: 70px; height: 70px"/>
                <br>Change Image(logo) {{ Form::file('image','',array('class'=>'form-control')) }}
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            </div>
        </div>
        <div id="output"></div>
        <div class='col-sm-12 form-group text-center'>
            {{ Form::submit('Update',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
<script>
    $(document).ready(function (){
        $(".progress").hide();
        $('#FileUploader').on('submit', function(e) {
            e.preventDefault();
            $(".progress").show();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                xhr: function(){

                    var xhr = new window.XMLHttpRequest();
                    //Upload progress
                    xhr.upload.addEventListener("progress", function(evt){
                        if (evt.lengthComputable) {
                            var percentComplete = (evt.loaded / evt.total)*100;
                            //Do something with upload progress
                            $(".progress-bar").css('width',percentComplete+'%');
                            console.log(percentComplete);
                        }
                    }, false);
                    return xhr;
                },
                success:  afterSuccess
            });

        });

        function afterSuccess(){
            setTimeout(function() {
                $("#myModal").modal("hide");
            }, 1000);
            $("#listuser").load("<?php echo url("admin/portfolio/list") ?>")
        }
    });
</script>


