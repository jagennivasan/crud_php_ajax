<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center text-light title-cl">PHP CRUD BOOTSTRAP MODEL</h1>
    <div class="container">

<button class=" btn add-button text-light fw-bold h5 " data-bs-toggle="modal" data-bs-target="#userdata">Add new user</button>


<!-- Button trigger modal -->


<!-- Add user model -->
<form id="adduser">
<div class="modal fade" id="userdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" id="username"  class="form-control" placeholder="Enter your name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" id="useremail" class="form-control"  placeholder="Enter your email">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Mobile</label>
  <input type="number" id="usermobile" class="form-control"  placeholder="Enter your mobile number">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Place</label>
  <input type="text" id="userplace" class="form-control"  placeholder="Enter your place">
</div>
 </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-success" onclick="addUser()">Submit</button>

        <button type="button" class="btn btn-secondary btn-danger " data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</form>
<!-- update user -->
<form id="updatdata">
<div class="modal fade" id="updateuser" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabe2">Update details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Name</label>
  <input type="text" id="updatename"  class="form-control" placeholder="Update your name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Email</label>
  <input type="email" id="updateemail" class="form-control"  placeholder="Update your email">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Mobile</label>
  <input type="number" id="updatemobile" class="form-control"  placeholder="Update your mobile number">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Place</label>
  <input type="text" id="updateplace" class="form-control"  placeholder="Update your place">
</div>
 </div>
    <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="updateDetails()">Update</button>

        <button type="button" class="btn btn-secondary btn-danger " data-bs-dismiss="modal">Close</button>
        <input type="hidden" id="hiddendata" >
      </div>

    </div>
  </div>
</div>
</form>
<div class="mt-5" id="displayDataTable">
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>