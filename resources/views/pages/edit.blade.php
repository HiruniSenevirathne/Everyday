<x-app-layout>
        <div class="row" style="padding-left: 10%; padding-top:2%">
            <div class="col-md-6 col-md-offset-2">
            <h1>Registration</h1>
            <form  data-parsley-validate class="" method="POST" action="{{route('studentinfo.update')}}" enctype="multipart/form-data" >
            <input type="hidden" name="id" value={{$reg->id}}>
                    {{csrf_field()}}
                    <h6>Index Number:</h6>
                    <input type="text" class="form-control " name="Index_Number" value={{$reg->Index_Number}}><br>
                    <h6>Fingerprint ID:</h6>
                    <input type="text" class="form-control " name="Fingerprint_Id" value={{$reg->Fingerprint_Id}}><br>
                    <h6>Name With Initials:</h6>
                    <input type="text" class="form-control " name="Name" value={{$reg->Name}}><br>
                    <h6>Gender:</h6>
                    <input type="text" class="form-control " name="Gender" value={{$reg->Gender}}><br>
                    <h6>Class Name:</h6>
                    <input type="text" class="form-control " name="Class_Name" value={{$reg->Class_Name}}><br>
                    <h6>Parent Name:</h6>
                    <input type="text" class="form-control " name="Parent_Name" value={{$reg->Parent_Name}}><br>
                    <h6>Telephone No:</h6>
                    <input data-parsley-maxlength="10" type="text" class="form-control " name="Telephone" value={{$reg->Telephone_No}}><br>
                    <h6>Select image to upload:</h6>
                    <input type="file" name="Image" id="fileToUpload" value={{$reg->Image}}><br><br>
                    <input type="submit" class="btn btn-success" value="Update">
                </form>
            </div>
        </div>
        
        </x-app-layout>
