
    <div class="panel panel-default">
      <div class="panel-body">
         {{ Form::open(array("url"=>url('admin/category/add'),"class"=>"form-horizontal","id"=>'FileUploader')) }}

            <div class='form-group'>
                <div class='col-sm-11'>
                    Title<br> {{ Form::text('title','',array('class'=>'form-control','placeholder'=>'Category Name','required'=>'required')) }}
                </div>
                <div class='col-sm-11'>
                    Description<br> {{ Form::textarea('description','',array('class'=>'form-control','placeholder'=>'Description(optional)','value'=>'0')) }}
               </div>
            </div>

          <div id="output"></div>
       <div class='col-sm-12 form-group text-center'>
            {{ Form::submit('Add',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
            {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
        </div>
      {{ Form::close() }}
    </div>
      </div>
    <script>
        $(document).ready(function (){
            $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
                $(this).ajaxSubmit({
                    target: '#output',
                    success:  afterSuccess
                });

            });

            function afterSuccess(){
                setTimeout(function() {
                    $("#myModal").modal("hide");
                }, 1000);
                $("#listuser").load("<?php echo url("admin/category/list") ?>")
            }
        });
    </script>
