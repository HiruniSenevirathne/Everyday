<x-app-layout>

   
    
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="row">
            <div class="col-md-9">
            <h1 style="text-align:center; font-size:xx-large; margin-left:35%;">Attendance Sheet</h1>
            </div>
            <div class="col-sm-12">
                <hr>
            </div>
            <div class="row" style="padding-left: 13%;">
                <div class="col-md-12" >
                    <table class="table table-hover" style=" width:1000px;">
                        <thead style="text-align: center; ">
                            <th>#</th>
                            <th>Index Number</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                         </thead>
                         <tbody style="text-align: center; ">
                             @foreach($users as $user)
                         <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->Index_Number}}
                            </td>
                            <td>
                                {{$user->Name}}
                            </td>
                            <td>
                                {{$user->Date}}
                            </td>
                            <td>
                                {{$user->Time_In}}
                            </td>
                            <td>
                                {{$user->Time_Out}}
                            </td>
                         </tr>
                        @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
            </div>
            </div>
    
</x-app-layout>
