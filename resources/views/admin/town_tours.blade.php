@extends('main.index')

@section('css')
<style>
    .martop{
        margin-top:10px
    }

</style>

@endsection

@section('content')
<section class="content">  
    {{-- <div id="TownTourslist"> --}}
        <div class="box box-success">
            <div class="box-header clr boxhead">
                <h2 class="box-title">Town Tours</h2>
            </div><!-- /.box-header -->
            <div class="box-body">
                <button class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#AddTown">Add Town</button>
                <br><br>
                <table class="display compact" style="width:100%" cellspacing="0" id="dtTownTours">
                    <thead>
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Town</th>
                            <th class="text-left">Actions</th>             
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($towntours as $t_tours)
                        <tr>
                            <td>
                                {{$t_tours->id}}
                            </td>
                            <td>
                                {{$t_tours->name}}
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end of box body -->
            <div class="box-footer"></div><!-- box-footer -->
        </div>
    {{-- </div> --}}

    {{-- Modal Add Town --}}
    <div class="modal fade" id="AddTown" tabindex="-1" role="dialog" aria-labelledby="EditTownLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modaladdbckgrnd">
                    <h5 class="modal-title txt-white">Add Town</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="90days">Town Name:</label>
                                <input type="text" class="form-control" id="add_town" name="add_town" value="">
                            </div>
                            <div class="col-md-12">
                                <label for="90days">Code:</label>
                                <textarea id="add_code" name="add_code" rows="4" cols="50" class="form-control">
                                 asdasdasd
                                </textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="90days">First Zip Code:</label>
                                <input id="add_zip" type="text" class="form-control" name="add_zip" value="">
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addTown()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</section>
  

@endsection

@section('script')
<script>
    var table = $('#dtTownTours').DataTable();

    //On click example [CLASS EXAMPLE]
    // $('.btn-success').on('click', function(){
    //     addTown();
    // });
    
    function addTown(){
        // var town = $('#agent_pho').val(); // getting id
        // var sample = $('.asd').val(); //getting classname
        var town = $('input[name="add_town"]').val(); //getting name
        var code = $('textarea[name="add_code"]').val();
        var zip = $('input[name="add_zip"]').val();


        var data = {
            town: town,
            code: code,
            zip: zip
        }
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/town_tours_add') }}",
        method: 'POST',
        data: data,
        success: function(response){
            let _ret = JSON.parse(response);

            if(_ret.length > 0) {
                table.row.add({
                    0: _ret[0].id,
                    1: _ret[0].name,
                    2: addbuttons(_ret[0].id)
                }).draw();
            }
        }

        // $('[')
        });
    }
    
    function addbuttons(id) {
        return '<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#EditTown' + id + '">Edit</button>'+
            '<button class="btn btn-danger pull-right" data-toggle="modal" data-target="#deleteTown' + id + '">Delete</button>'+
            '<div class="modal fade" id="EditTown' + id + '" tabindex="-1" aria-labelledby="EditTownLabel' + id + '" aria-hidden="true">'+
                '<div class="modal-dialog modal-lg">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header">'+
                            '<h5 class="modal-title clr">Edit Town</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            '<div class="row">'+
                                '<div class="col-md-12">'+
                                    '<label for="90days">Town Name: </label>'+
                                    '<input type="text" class="form-control" id="add_town" name="add_town" value="">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">Code:</label>'+
                                    '<input type="text" class="form-control" id="add_code" name="add_code" value="">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">First Zip Code:</label>'+
                                    '<input id="add_zip" type="text" class="form-control" name="add_zip" value="">'+
                                '</div>'+
                                '<div class="col-md-12"> '+
                                    '<center>'+
                                        '<video width="auto" height="auto" controls>'+
                                            '<source src="videos/sample2.mov" type="video/mp4">'+
                                            'Your browser does not support the video tag.'+
                                        '</video>'+
                                    '</center>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-success pull-right">Save changes</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="modal fade" id="deleteTown' + id + '" tabindex="-1" aria-labelledby="deleteTown' + id + 'Label" aria-hidden="true">'+
                '<div class="modal-dialog">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header">'+
                            '<h5 class="modal-title clr">Delete Town</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            'Are you sure you want to delete town?'+
                            '</div>'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-success pull-right">Save changes</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
    }
</script>
    
@endsection