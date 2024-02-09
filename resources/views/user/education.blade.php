@extends('pages.user_info')

@section('user_info')

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
                                <h5 class="modal-title" id="education"> Add Course</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <!-- Edit Form Inside Modal -->
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name"
                                            name="name" placeholder="Course Name*">
                                    <
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
                                    <label for="">Level*</label>
                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                                    <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                                    
                                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>

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

@endsection