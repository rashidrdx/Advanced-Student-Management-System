<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>
    <!-- Include the navbar -->
@include('sidebar')

<!-- Your home page content goes here -->
 
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
        <form action="/adminregistration" method="post">
@csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="firstName" name="name" class="form-control form-control-lg" required />
                      <label class="form-label" for="firstName">Full Name</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                        <input type="date" class="form-control form-control-lg" name="dob" id="birthdayDate" required>
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="female"
                        value="Female" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="male"
                        value="Male" required/>
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="other"
                        value="Other" required />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" required />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="number" required/>
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>
  
                  </div>
                </div>
                <div class="mt-4 pt-2">
                  <button class="btn btn-primary btn-lg" >SUBMIT</button>
                  <!-- <input class="btn btn-primary btn-lg" type="submit" value="Submit" /> -->
                </div>
  
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>