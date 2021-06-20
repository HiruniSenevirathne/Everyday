<x-app-layout>
    <br><h1 style="text-align: center;"><strong>Student Information</strong></h1>
 
        <div class="row">
    <div class="col-lg-3">
    <img src={{('/upload/students/'.$reg->Image)}} class="img-thumbnail" width="400" style="position: relative; left:800px; top:70px">
    </div>
    <div class="col-lg-9">
          <table  style="font-size: large; margin-left:-20%;  margin-top:2%;">
                <tr style="line-height: 50px;">
                    <td><b>Index Number</b></td>
                    <td>&nbsp;:   {{$reg->Index_Number}}</td><br>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Fingerprint ID</b></td>
                    <td>&nbsp;:   {{$reg->Fingerprint_Id}}</td>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Name With Initials</b></td>
                    <td>&nbsp;:   {{$reg->Name}}</td>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Gender</b></td>
                    <td>&nbsp;:   {{$reg->Gender}}</td>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Class Name</b></td>
                    <td>&nbsp;:   {{$reg->Class_Name}}</td>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Parent Name</b></td>
                    <td>&nbsp;:   {{$reg->Parent_Name}}</td>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Telephone No</b></td>
                    <td>&nbsp;:   {{$reg->Telephone_No}}</td>
                </tr>
               
                <tr style="line-height: 50px;">
                    <td><b>Created At</b></td>
                    <td>&nbsp;:   {{date('M j, Y H:i',strtotime($reg->created_at))}}</td>
                </tr>
                <tr style="line-height: 50px;">
                    <td><b>Last Updated</b></td>
                    <td>&nbsp;:   {{date('M j, Y H:i',strtotime($reg->updated_at))}}</td>
                </tr>
             </table><br>
            
             <div class="col-md-6 ">
             <div class="row" style="position:relative; text-align:center;">
                 <div class="col-sm-6">
                 <a href={{ url('edit/'.$reg->id)}}><button class="btn btn-lg btn-success btn-block">Edit</button></a>
                 </div>
                 <div class="col-sm-6">
                 <a href={{ url('delete/'.$reg->id)}} action="{{'studentinfo.destroy'}}" class="btn btn-danger btn-lg btn-block">Delete</a>
                 </div>
                
             </div>
             </div>
    </div>
    </div>
  
             
</x-app-layout>
