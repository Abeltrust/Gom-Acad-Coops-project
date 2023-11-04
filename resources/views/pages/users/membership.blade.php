@extends('layouts.app')

@section('content')
<div class="container mt-4 ">
       <div class="row mb-2">
         <div class="col-sm-12 ">
         <h2 class="text-center ">Membership Registration Form</h2>
        <form>
            <div class="row ">
                <div class="form-group col-md-12 mb-3">
                    <label for="staffId">Full Name</label>
                    <input type="text" disabled class="form-control" id="staffId" name="staffId">
                </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6 mb-3">
                    <label for="staffId">Staff ID</label>
                    <input type="text" disabled class="form-control" id="staffId" name="staffId">
                </div>
               <div class="form-group col-md-6 mb-3">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                </div>
           </div>
           <div class="row ">
              <div class="form-group col-md-6 mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="maritalStatus">Marital Status</label>
                    <select class="form-control" id="maritalStatus" name="maritalStatus">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>
           </div>
           <div class="row">
               <div class="form-group col-md-6 mb-3">
                    <label for="monthlyDeduction">Amount to be Deducted Monthly</label>
                    <input type="number" class="form-control" id="monthlyDeduction" name="monthlyDeduction">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="userImage">Upload Image <span><strong>(not larger than 3mb) </strong></strong></span></label>
                    <input type="file" class="form-control-file" id="userImage" name="userImage">
                </div>
                <div class="form-group col-md-12 mb-3">
                    <label for="office">Office Address</label>
                    <textarea type="text" class="form-control" id="office" name="office"></textarea>
                </div>
           </div>
           <div class="row">
             <div class="col-md-12">
                <span>Next Of Kin Information</span>
                <hr>
             </div>
           </div>
           <div class="row ">
               <div class="form-group col-md-6 mb-3">
                    <label for="nextOfKinFullName">Next of Kin's Full Name</label>
                    <input type="text" class="form-control" id="nextOfKinFullName" name="nextOfKinFullName">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="nextOfKinPhoneNumber">Next of Kin's Phone Number</label>
                    <input type="tel" class="form-control" id="nextOfKinPhoneNumber" name="nextOfKinPhoneNumber">
                </div>
           </div>
           <div class="row">
             <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="nextOfKinAddress">Next of Kin's Address</label>
                    <textarea type="text" class="form-control" id="nextOfKinAddress" name="nextOfKinAddress"></textarea>
                </div>
             </div>
           </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
         </div>
       </div>  
</div>
@endsection