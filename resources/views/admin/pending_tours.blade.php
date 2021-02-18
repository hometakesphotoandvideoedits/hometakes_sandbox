@extends('main.index')

@section('css')
<style>
.boxhead{
    margin: 0px 0px 20px 0px;
}
    
</style>

@endsection

@section('content')

<section class="content">  
    <div id="pendingtourlist">
        <div class="box box-success">
            <div class="box-header clr boxhead">
                <h2 class="box-title">Pending Tours</h2>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="display compact" style="width:100%" cellspacing="0" id="dtPendingTours">
                    <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Username</th>
                            <th class="text-left">Company</th>
                            <th class="text-left">Filming Date</th>
                            <th class="text-left">Last Name</th>
                            <th class="text-left">First Name</th>
                            <th class="text-left">Type</th>
                            <th class="text-left">Music</th>
                            <th class="text-left">Narrator1</th>
                            <th class="text-left">Narrator2</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Modern</th>
                            <th class="text-left">Classic</th>
                            <th class="text-left">Website 3D Tour</th>
                            <th class="text-left">3D Tour</th>
                            <th class="text-left">Amenities</th>
                            <th class="text-left">Town</th>
                            <th class="text-left">Address</th>
                            {{-- <th class="text-left">Gate Code</th>
                            <th class="text-left">Property Notes</th>
                            <th class="text-left">Cancelation Ins</th>
                            <th class="text-left">Plus</th>
                            <th class="text-left">Premium</th>
                            <th class="text-left">Supreme</th>
                            <th class="text-left">Twilight</th>
                            <th class="text-left">Twilight Enhancement</th>
                            <th class="text-left">Original Video</th>
                            <th class="text-left">Photos</th>
                            <th class="text-left">No Branding</th>
                            <th class="text-left">MLS Photo Upload</th>
                            <th class="text-left">Realtor.com Upload</th>
                            <th class="text-left">Youtube Upload</th>
                            <th class="text-left">MLS Link Upload</th>
                            <th class="text-left">Photo Tour</th>
                            <th class="text-left">3D Tour Option</th>
                            <th class="text-left">Mattertags</th>
                            <th class="text-left">Matterport Floor Plan</th>
                            <th class="text-left">Additional Hosting</th>
                            <th class="text-left">Agent Notes</th>
                            <th class="text-left">First Film Date</th>
                            <th class="text-left">Status</th> 
                            <th class="text-left">Actions</th> --}}
                        </tr>
                    </thead>
                    
                </table>
            </div>
            <!--end of box body -->
            <div class="box-footer"></div><!-- box-footer -->
        </div>
    </div>
    
</section>

@endsection

@section('script')

<script>
$(document).ready(function() {

    $('#dtPendingTours').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('pending_tours.getdata') }}",
        "columns": [
            { "data": "id"},
            { "data": "username" },
            { "data": "company" },
            { "data": "fname" },
            { "data": "lname" },
            { "data": "mls_agent_id" },
            { "data": "mls_area" },
            { "data": "mls_address" },
            { "data": "mls_login_id" },
            { "data": "mls_login_pwd" },
            { "data": "credentials" },
            { "data": "email" },
            { "data": "phone" },
            { "data": "assist_phone" },
            { "data": "phone1_carrier" },
            { "data": "phone2_carrier" },
            { "data": "cell1_reminder" },
            { "data": "cell2_reminder" }
        ],
    });

});
</script>
    
@endsection