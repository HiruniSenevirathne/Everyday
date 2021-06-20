<x-app-layout>
        <div class="row" style="padding-left: 10%; padding-top:2%">
            <div class="col-md-6 col-md-offset-2">
            <h1>Registration</h1>
            <form  data-parsley-validate class="" method="POST" action="{{route('addimage')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <h6>Index Number:</h6>
                    <input type="text" class="form-control " name="Index_Number" placeholder="Enter the index number"><br>
                    <h6>Fingerprint ID:</h6>
                    <input type="text" class="form-control " name="Fingerprint_Id" placeholder="Fingerprint ID"><br>
                    <h6>Name With Initials:</h6>
                    <input type="text" class="form-control " name="Name" placeholder="Enter the name"><br>
                    <h6>Gender:</h6>
                    <input type="text" class="form-control " name="Gender" placeholder="Gender"><br>
                    <h6>Class Name:</h6>
                    <input type="text" class="form-control " name="Class_Name" placeholder="Enter the class name"><br>
                    <h6>Parent Name:</h6>
                    <input type="text" class="form-control " name="Parent_Name" placeholder="Enter the Parent name"><br>
                    <h6>Telephone No:</h6>
                    <input data-parsley-maxlength="10" type="text" class="form-control " name="Telephone" placeholder="Enter the telephone number"><br>
                    <h6>Select image to upload:</h6>
                    <input type="file" name="Image" id="fileToUpload"><br><br>
                    <input type="submit" class="btn btn-primary" value="Register">
                </form>
            </div>
        </div>
        </x-app-layout>
