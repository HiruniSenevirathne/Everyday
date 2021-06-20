<x-app-layout>
        <div class="row" >
            <div class="col-md-9">
            <h1 style="text-align:center; padding-left:30%">Students Informations</h1>
            </div>
            <div class="col-md-2">
                <a href="{{route('studentinfo.create')}}" class="btn btn-block btn-primary  btn-h1-spacing" style="margin-top: 18px;">Register New Student</a>
            </div>
            <div class="col-sm-12">
                <hr>
            </div>
            <div class="row" style="padding-left: 15%;">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead style="text-align: center;">
                            <th>#</th>
                            <th>Index Number</th>
                            <th>Name</th>
                            <th>Class Name</th>
                            <th>Parent Name</th>
                            <th>Telephone No</th>
                            <th>Cretaed At</th>
                         </thead>
                         <tbody>
                             @foreach($regs as $reg)
                             <tr style="text-align: center;">
                             <td>{{$reg->id}}</td>
                             <td>{{$reg->Index_Number}}</td>
                             <td>{{$reg->Name}}</td>
                             <td>{{$reg->Class_Name}}</td>
                             <td>{{$reg->Parent_Name}}</td>
                             <td>{{$reg->Telephone_No}}</td>
                             <td>{{date('M j, Y', strtotime($reg->created_at))}}</td>
                             <td><a href={{ url('studentinfo/'.$reg->id) }} class="btn btn-default btn-success btn-sm">View</a>&nbsp;<a href={{ url('edit/'.$reg->id) }} class="btn btn-default btn-success btn-sm">Edit</a><a href={{ url('studentinfo/'.$reg->id) }} class="btn btn-default btn-success btn-sm">View</a></td>
                             </tr>
                             @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
               
            <div class="pagination" style="padding-left:150%;">
                        {!!$regs->links();!!}
                    
            </div>
            </div>
            </x-app-layout>