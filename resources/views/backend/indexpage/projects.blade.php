@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.Home.Projects'))

@section('breadcrumb-links')
@include('backend.indexpage.includes.breadcrumb-linksServ')
@endsection
@include('sweetalert::alert')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.Home.Projects') }} <small class="text-muted">{{ __('labels.backend.access.Home.Mainsectionf.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->
       
        <div class="row mt-4">
            <div class="col">
            @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
                <div class="table-responsive">
                    <table id="Main_section" class="table">
                        <thead>

                            <tr>

                            <th> {{ trans('labels.backend.access.Home.Project_img') }} </th>
                            <th> {{ trans('labels.backend.access.Home.Project_Name') }} </th>
                            <th> {{ trans('labels.backend.access.Home.Project_desc') }} </th>
                            <th> {{ trans('labels.backend.access.Home.Project_loc') }} </th>
                                <th>{{ trans('labels.backend.access.Home.Mainsectionf.table.created_at') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
            <!--col-->
            <!-- Model Form -->

            <div class="modal fade" id="company-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CompanyModal">{{trans('forms.Main.FormName')}}</h4>
            </div>
            <div class="modal-body">
            <form action="javascript:void(0)" id="CompanyForm" name="CompanyForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id">

<!-- Images -->
                <div class="form-group">
                    <label for="Images" class="col-sm-12 control-label">{{trans('forms.Main.Label.Images')}}</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control"  onclick="FileDetails()" id="Images" name="Images[]" placeholder="{{trans('forms.Main.Placeholder.Images')}}" maxlength="255" style="height: calc(2.5em + 0.75rem + -4px);" multiple>
                    </div>
                </div> 
<!-- ProjectName -->
                <div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.Project_Name') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Tittle" name="Tittle" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" required>
                    </div>
                   
                </div>  

<!-- Project des -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.Project_desc') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Description" name="Description" placeholder="{{trans('forms.Main.Placeholder.Description')}}" required>
                    </div>
                   
                </div>  
<!-- Project detailed -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.Project_loc') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="detalied" name="detalied" placeholder="{{trans('forms.Main.Placeholder.Description')}}" required>
                    </div>
                   
                </div> 

<!-- description1 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.P_descOne') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="descOne" name="descOne" placeholder="{{trans('forms.Main.Placeholder.Description')}}"  required>
                    </div>
                   
                </div> 
<!-- description2 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.P_descTwo') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="descTwo" name="descTwo" placeholder="{{trans('forms.Main.Placeholder.Description')}}" required>
                    </div>
                   
                </div>  

<!-- save Button -->
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary saveChange" id="btn-save" onclick=" return CheckDimension()">{{trans('forms.Main.Label.saveButton')}}
                </button>
                </div>
        </form>
    </div>
<div class="modal-footer">
</div>
</div>
</div>
</div>


<div class="modal fade" id="company-create" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CompanyModalcreate">{{trans('forms.Main.FormName')}}</h4>
            </div>
            <div class="modal-body">
            <form action="javascript:void(0)" id="CompanyFormCreate" name="CompanyFormCreate" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id">

<!-- Images -->
<div class="form-group">
                    <label for="Images" class="col-sm-12 control-label">{{trans('forms.Main.Label.Images')}}</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" onclick="FileDetails()" id="Images" name="Images[]" placeholder="{{trans('forms.Main.Placeholder.Images')}}"  required multiple>
                    </div>
                </div> 
<!-- ProjectName -->
                <div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.Project_Name') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Tittle" name="Tittle" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" required>
                    </div>
                   
                </div>  

<!-- Project des -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.Project_desc') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Description" name="Description" placeholder="{{trans('forms.Main.Placeholder.Description')}}"  required>
                    </div>
                   
                </div>  
<!-- Project detailed -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.Project_loc') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="detalied" name="detalied" placeholder="{{trans('forms.Main.Placeholder.Description')}}" maxlength="255" required>
                    </div>
                   
                </div>  
<!-- description1 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.P_descOne') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="descOne" name="descOne" placeholder="{{trans('forms.Main.Placeholder.Description')}}"  required>
                    </div>
                   
                </div>  

<!-- description2 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.P_descTwo') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="descTwo" name="descTwo" placeholder="{{trans('forms.Main.Placeholder.Description')}}"  required>
                    </div>
                   
                </div>  

<!-- save Button -->
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary saveChange" id="btn-ss" onclick=" return CheckDimension()">{{trans('forms.Main.Label.saveButton')}}
                </button>
                </div>
        </form>
    </div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
var _URL = window.URL || window.webkitURL;
$("#Images").change(function (e) {
    var file, img;
    if ((file = this.files[0]) && (file = this.files[1] )) {
       
        img = new Image();
        img.onload = function () {
        var width=this.width;
         var height=this.height;
         if(width > 500 || height > 500)
         {
           alert("{{__('translation.Imagesize')}}");
           document.getElementById("Images").value = "";

         }                          
        };
        img.src = _URL.createObjectURL(file);
    }
});
    var lang='{{ config('app.locale') }}';
    $('#Main_section').DataTable({
        processing: false,
        serverSide: true,
        ajax: "{{ url('admin/ShowMainProjects') }}",
        columns: [
            { data: 'imagess', name: 'imagess' , "render": function ( data, type, row, meta ) {
                var ima=[];
                    $.each(data, function(i,v) {
                    ima[i]= v;
                });
                return "<img src=\"{{asset('public/img/')}}/" +ima[0]+"\" height=\"50\"/>" + "<img src=\"{{asset('public/img/')}}/" +ima[1]+"\" height=\"50\"/>" ;
            }},
            { data: 'Tittle.'+lang, name: 'Tittle'},
            { data: 'Paragraph1.'+lang, name: 'Paragraph1'},
            { data: 'Paragraphh.'+lang, name: 'Paragraphh'},
            { data: 'created_at', name: 'created_at'},
            { data: 'actions', name: 'actions', searchable: false, sortable: false }
        ],
        order: [
            [3, "asc"]
        ],
        "language": {
            
            "url":'//cdn.datatables.net/plug-ins/1.11.5/i18n/'+lang+'.json',
           
    },
        searchDelay: 500,
        "createdRow": function(row, data, dataIndex) {
            FTX.Utils.dtAnchorToForm(row);
}});
// add
        function add(){
        $('#CompanyFormCreate').trigger("reset");
        $('#CompanyModalcreate').html("{{trans('forms.Main.CreateName')}}");
        $('#company-create').modal('show');
        $('#id').val('');
        }  
// Edit-function
    function editFunc(id){

        $.ajax({
            type:"POST",
            url: "{{url('admin/Edit-MainProjects')}}",
            data:{id:id},
            dataType:'json',
            success:function(res)
            {
                $('#company-modal').modal('show');
                $('#id').val(res.id);
                $('#Images').val(res.Imagess)
                $('#Tittle').val(res.Tittle.lang);
                $('#Description').val(res.Paragraph1.lang);
                $('#detalied').val(res.Paragraphh.lang);
                $('#descOne').val(res.Paragraph4.lang);
                $('#descTwo').val(res.Paragraph5.lang);

            }
});
} 

// Delete Function
function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
    var id = id;
    // ajax
    $.ajax({
    type:"POST",
    url: "{{ url('admin/Delete-MainProjects') }}",
    data: { id: id },
    dataType: 'json',
    success: function(res){
    var oTable = $('#Main_section').dataTable();
    oTable.fnDraw(false);
    }
    });
    }
}
// submit Button Function
    $('#CompanyForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
            type:'POST',
            url: "{{ url('admin/Store-MainProjects')}}",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
            $("#company-modal").modal('hide');
            var oTable = $('#Main_section').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
            },
            error: function(data){
            console.log(data);
        }
});
});


    $('#CompanyFormCreate').submit(function(e) {
        
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
            type:'POST',
            url: "{{ url('admin/Create-MainProjects')}}",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
            $("#company-create").modal('hide');
            var oTable = $('#Main_section').dataTable();
            oTable.fnDraw(false);
            $("#btn-ss").html('Submit');
            $("#btn-ss"). attr("disabled", false);
            },
            error: function(data){
            console.log(data);
        }
});

    
// Show Delete Alert 
$(document).ready(function() {
            $(document).on('click', '#delete_id', function(e) {
                var id = $(this).data('id');
                SwalDelete(id);
                e.preventDefault();
            });
        });

        function SwalDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "It will be deleted permanently!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: 'office_info_delete.php',
                                type: 'POST',
                                data: 'id=' + id,
                                dataType: 'json'
                            })
                            .done(function(response) {
                                Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
                            })
                            .fail(function() {
                                Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')
                            });
                    });
                },
            });
        }
    
    });

      
    function FileDetails() {

// GET THE FILE INPUT.
            var fi = document.getElementById('Images');

// VALIDATE OR CHECK IF ANY FILE IS SELECTED.
            if (fi.files.length < 2) {

                alert('{{__('translation.Image Test')}}');

                }
                else{
                    alert('{{__('translation.Image Testt')}}');
                }
}

</script>
@stop