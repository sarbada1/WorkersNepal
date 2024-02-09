@extends('dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multi-Step Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #3572ae;
            }

            .form-container {
                max-width: 900px;
                margin: 10px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }



            .step-bar {
                height: 100%;
                border-radius: 5px;
                transition: width 0.3s ease-in-out;
            }

            .step {
                display: none;
            }

            .step.active {
                display: block;
            }

            .btn-container {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="form-container">

                <div class="d-flex justify-content-space-around">
                    <ul class="nav nav-pills mb-3 ">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" id="step1-tab" data-bs-toggle="pill" href="#step1">
                                Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="step2-tab" data-bs-toggle="pill" href="#step2"> Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="step3-tab" data-bs-toggle="pill" href="#step3"> Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="step4-tab" data-bs-toggle="pill" href="#step4">Career</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="step1">

                        <!-- Add profile form fields here -->
                        <!-- ... -->

                        <form action="" method="post">

                            @csrf

                            <div class="d-flex">
                                <div class="col-md-4 text-center">
                                    <i class="fa fa-user" style="font-size: 200px; margin-bottom: 10px;"></i>
                                    <div class="input-group mb-3">
                                        <label for="photoInput" class="btn btn-secondary mx-auto w-75">
                                            + Add Image
                                            <input type="file" id="photoInput" name="image" style="display: none;">
                                        </label>
                                    </div>

                                    <div class="input-group mt-5">
                                        <label for="photoInput" class="btn btn-secondary mx-auto w-75">
                                            + Documents

                                            <input type="file" id="photoInput" name="image" style="display: none;">
                                        </label>
                                        <p style="font-size: 14px">Upload any other supporting documents</p>
                                    </div>
                                </div>


                                <div class="col-md-8">
                                    <h4>Profile Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="mb-2">Name<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $data->username }}">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="mobile_no" class="mb-2">Mobile Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                                    value="{{ $data->mobile_no }}">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="email" class="mb-2">Email<span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        value="{{ $data->email }}">
                                                    <span class="input-group-text" data-bs-toggle="modal"
                                                        data-bs-target="#editModal">
                                                        <i class="fa fa-pencil"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal" tabindex="-1"
                                                aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel"> Email Change</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Edit Form Inside Modal -->
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control" id="newEmail"
                                                                    name="email" placeholder="Enter Email">
                                                            </div>
                                                            <p><strong>Please Note:</strong>This will also change your login
                                                                credentials</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn "
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-info"
                                                                onclick="saveNewEmail()">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="city" class="mb-2">City<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="city"
                                                    name="city">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="dob" class="mb-2">Date of Birth<span
                                                        class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="dob"
                                                    name="dob">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="tel" class="mb-2">Telephone Number</label>
                                                <input type="text" class="form-control" id="tel"
                                                    name="tel">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="province" class="mb-2">Province<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="province"
                                                    name="province">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="postal" class="mb-2">Postal Code</label>
                                                <input type="text" class="form-control" id="postal"
                                                    name="postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </form>
                    </div>

                    <div class="tab-pane fade" id="step2">

                        <!-- Add personal form fields here -->
                        <!-- ... -->~

                        <form action="" method="post">

                            @csrf
                            <div class="container">
                                <div class="d-flex">



                                    <div class="col-md-12">
                                        <h4>Personal Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">


                                                <div class="form-group mb-3">
                                                    <label for="nationality" class="mb-2">Nationality<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nationality"
                                                        name="nationality">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="nationality" class="mb-2">Disabilities</label>
                                                    <input type="text" class="form-control" id="nationality"
                                                        name="nationality">

                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="gender" class="mb-2">Gender<span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input type="radio" id="genderMale" name="gender"
                                                            value="male">
                                                        <label for="genderMale">Male</label>

                                                        <input type="radio" id="genderFemale" name="gender"
                                                            value="female">
                                                        <label for="genderFemale">Female</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <h4>Personal Statement</h4>
                                            <div class="row">
                                                <p>Please use this section to provide a personal statement.</p>
                                                <textarea name="info" id="" cols="20" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <h4>Declaration of Criminal Convictions </h4>
                                            <div class="row">
                                                <label for="flexRadioDefault1">Do you have any criminal
                                                    convictions?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="yes"
                                                        name="crime" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="no"
                                                        name="crime" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="tab-pane fade" id="step3">

                        <!-- Add education form fields here -->
                        <!-- ... -->
                        <form action="" method="post">

                            @csrf
                            <div class="container mt-5">

                                <div class="col-md-12">
                                    <div class="row">
                                        <h4>Education* <i class="fa fa-plus-circle" data-bs-toggle="modal"
                                                data-bs-target="#education" style="font-size: 30px"></i>
                                        </h4>
                                        <p>Primary and tertiary qualifications</p>
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Institution</th>
                                                    <th>Qualification</th>
                                                    <th>Subjects</th>
                                                    <th>Completion Year</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-5">
                                        <h4>Courses <i class="fa fa-plus-circle" data-bs-toggle="modal"
                                                data-bs-target="#courses" style="font-size: 30px"></i></h4>
                                        <p>Include any on the job training as well as formal courses</p>
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Course</th>
                                                    <th>Completion Year</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-5">
                                        <h4>Skills <i class="fa fa-plus-circle" data-bs-toggle="modal"
                                                data-bs-target="#skills" style="font-size: 30px"></i> </h4>
                                        <p>Technical and soft skills</p>
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Skill</th>
                                                    <th>Level</th>

                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>

                                    <div class="modal fade" id="education" tabindex="-1" aria-labelledby="education"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="education"> Add Education</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <!-- Edit Form Inside Modal -->
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="qualification"
                                                                name="qualification" placeholder="Qualification*">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="institution"
                                                                name="institution" placeholder="Institution*">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                id="completion_year" name="completion_year"
                                                                placeholder="Completion Year*">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="subjects"
                                                                name="subjects" placeholder="Subjects">
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn "
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="courses" tabindex="-1" aria-labelledby="courses"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="courses"> Add Courses</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <!-- Edit Form Inside Modal -->
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" placeholder="Course Name*">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                id="completion_year" name="completion_year"
                                                                placeholder="Completed Year*">
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn "
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="skills" tabindex="-1" aria-labelledby="skills"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="courses"> Add Courses</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <!-- Edit Form Inside Modal -->
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="skill"
                                                                name="name" placeholder="Skill*">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label for="">Level*</label>
                                                        
                                                            <input type="radio" class="btn-check" value="average" name="options-outlined" id="average-outlined" autocomplete="off">
                                                            <label class="btn btn-outline-success"  for="average-outlined">Average</label>
                                                        
                                                            <input type="radio" class="btn-check" value="good" name="options-outlined" id="good-outlined" autocomplete="off">
                                                            <label class="btn btn-outline-success" for="good-outlined">Good</label>
                                                        
                                                            <input type="radio" class="btn-check" value="limited" name="options-outlined" id="limited-outlined" autocomplete="off">
                                                            <label class="btn btn-outline-success" for="limited-outlined">Limited</label>
                                                        </div>
                                                        


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn "
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="step4">
                        
                        <!-- Add career form fields here -->
                        <!-- ... -->

                        <form action="" method="post">

                            @csrf
                            <div class="container mt-5">

                                <div class="col-md-12">
                                    <div class="row">
                                        <h4>Previous Employment* <i class="fa fa-plus-circle" data-bs-toggle="modal"
                                                data-bs-target="#education" style="font-size: 30px"></i>
                                        </h4>
                                        <p>Previous and current employment</p>
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Company</th>
                                                    <th>Duties</th>
                                                    <th>Reason for leaving</th>
                                                    <th>Period</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-5">
                                        <h4>Courses <i class="fa fa-plus-circle" data-bs-toggle="modal"
                                                data-bs-target="#courses" style="font-size: 30px"></i></h4>
                                        <p>Include any on the job training as well as formal courses</p>
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Course</th>
                                                    <th>Completion Year</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-5">
                                        <h4>Skills <i class="fa fa-plus-circle" data-bs-toggle="modal"
                                                data-bs-target="#skills" style="font-size: 30px"></i> </h4>
                                        <p>Technical and soft skills</p>
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Skill</th>
                                                    <th>Level</th>

                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>

                                    <div class="modal fade" id="education" tabindex="-1" aria-labelledby="education"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="education"> Add Education</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <!-- Edit Form Inside Modal -->
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="qualification"
                                                                name="qualification" placeholder="Qualification*">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="institution"
                                                                name="institution" placeholder="Institution*">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                id="completion_year" name="completion_year"
                                                                placeholder="Completion Year*">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="subjects"
                                                                name="subjects" placeholder="Subjects">
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn "
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="courses" tabindex="-1" aria-labelledby="courses"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="courses"> Add Courses</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <!-- Edit Form Inside Modal -->
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" placeholder="Course Name*">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                id="completion_year" name="completion_year"
                                                                placeholder="Completed Year*">
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn "
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="skills" tabindex="-1" aria-labelledby="skills"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="courses"> Add Courses</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <!-- Edit Form Inside Modal -->
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="skill"
                                                                name="name" placeholder="Skill*">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label for="">Level*</label>
                                                        
                                                            <input type="radio" class="btn-check" value="average" name="options-outlined" id="average-outlined" autocomplete="off">
                                                            <label class="btn btn-outline-success"  for="average-outlined">Average</label>
                                                        
                                                            <input type="radio" class="btn-check" value="good" name="options-outlined" id="good-outlined" autocomplete="off">
                                                            <label class="btn btn-outline-success" for="good-outlined">Good</label>
                                                        
                                                            <input type="radio" class="btn-check" value="limited" name="options-outlined" id="limited-outlined" autocomplete="off">
                                                            <label class="btn btn-outline-success" for="limited-outlined">Limited</label>
                                                        </div>
                                                        


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn "
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = new bootstrap.Tab(document.getElementById('step1-tab'));
                tabs.show();
            });
        </script>

    </body>

    </html>
@endsection
