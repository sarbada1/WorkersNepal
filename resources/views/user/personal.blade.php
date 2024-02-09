
@extends('pages.user_info')

@section('user_info')

<div class="tab-pane fade" id="step2">

    <!-- Add personal form fields here -->
    <!-- ... -->

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

@endsection