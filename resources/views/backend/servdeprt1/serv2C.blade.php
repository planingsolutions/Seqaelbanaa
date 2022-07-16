@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.Home.servdep2'))

@section('breadcrumb-links')
@include('backend.servdeprt1.includes.breadcrumb-links')
@endsection
@include('sweetalert::alert')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.Home.servdep2-cat')}} <small class="text-muted">{{ __('labels.backend.access.Home.Mainsectionf.active') }}</small>
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
                            <th> {{ trans('labels.backend.access.Home.id') }} </th>

                                <th> {{ trans('labels.backend.access.Home.MainTittle') }} </th>
                                <th> {{ trans('labels.backend.access.Home.breif') }} </th>
                                <th> {{ trans('labels.general.actions')}}</th>
                                
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


<!-- Main Tittle -->
                <div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.MainTittle') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="MainTittle" name="MainTittle" placeholder="{{trans('forms.Main.Placeholder.feild')}}" required>
                    </div>
                </div>


<!-- Description -->
<div class="form-group">
                    <label for="Description" class="col-sm-12 control-label">{{trans('labels.backend.access.Home.breif') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="paragraphhh" name="paragraphhh" placeholder="{{trans('forms.Main.Placeholder.feild')}}"  required>
                    </div>
                </div>


<!-- save Button -->
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary saveChange" id="btn-save" >{{trans('forms.Main.Label.saveButton')}}
                </button>
                </div>
        </form>
    </div>
<div class="modal-footer">
</div>
</div>
</div>
</div>

<!--  -->
        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
    var lang='{{ config('app.locale') }}';
  $('#Main_section').DataTable({
        processing: false,
        serverSide: true,
        ajax: "{{ url('admin/ShowServicessCategory') }}",
        columns: [
            { data: 'id', name: 'id' },

        { data: 'Tittle.'+lang, name: 'Tittle' },
        { data: 'Paragraph1.'+lang, name: 'Paragraph1' },
        { data: 'actions', name: 'actions', searchable: false, sortable: false },

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

// Edit-function
    function editFunc(id){

        $.ajax({
            type:"POST",
            url: "{{url('admin/Edit-ServicessCategory')}}",
            data:{id:id},
            dataType:'json',
            success:function(res)
            {
                $('#company-modal').modal('show');
                $('#id').val(res.id);
                $('#MainTittle').val(res.Tittle.lang);
                $('#paragraphhh').val(res.Paragraph1.lang);
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
    url: "{{ url('admin/Delete-ServicessMain') }}",
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
            url: "{{ url('admin/Store-ServicessCategory')}}",
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
    

</script>
@stop