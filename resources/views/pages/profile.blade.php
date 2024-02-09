
@extends('dashboard')

@section('profile')

<div class="tab-pane fade {{ request()->is('home/view') ? 'show active' : '' }}" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="box-main">
        <div class="box">
            <div class="box-text">
                <h3 class="text-center">Your CV is incomplete!</h3>
                <span><strong> You need to fill out the following information to be eligible to apply
                        for jobs:</strong> <br>

                   <p class="text-center"> Date of birth, Street address, City, Province, Work history,
                    Education</p></span>
                <br>
                <div class="d-flex justify-content-center mt-2">
                    <a class="btn btn-secondary w-25" href="{{route('user_info')}}"> Complete Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection