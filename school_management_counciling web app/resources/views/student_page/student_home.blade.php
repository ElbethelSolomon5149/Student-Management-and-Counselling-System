@extends('student_page.app')

@section('content')
<div class="col-md-12">
    @if (!is_null($student))
    <div class="card text-left col-md-12">
        <div class="card-header">

        </div>

        <div class="card text-left">
            <div class="card-header">

                <div class="d-flex align-items-center">
                    <h2>View student Detials </h2>

                </div>

            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group 	required">
                            <label class="control-label" for="name">Full Name</label>
                            <div class="input-group">
                                <input disabled name="name" type="text" id="name" class="form-control select "
                                    value="{{$student->name ?? ''}}">
                            </div>
                        </div>

                        <div class="form-group 	required">
                            <label class="control-label" for="dob">Birth Date</label>
                            <div class="input-group">
                                <input disabled name="dob" type="date" id="dob" class="form-control select "
                                    value="{{$student->dob ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group  required">
                            <label class="control-label" for="gender"> gender</label>
                            <div class="input-group">
                                <select name="gender" id="gender" class="form-control " onfocusout="validategender()">
                                    <option class="dropup" value="1" selected>Male </option>
                                    <option class="dropup" value="0">Female</option>

                                </select>
                                <span class="invalid-feedback" role="alert"></span>
                            </div>
                        </div>


                        <div class="form-group 	required">
                            <label class="control-label" for="nationality">Nationality</label>
                            <div class="input-group">
                                <input disabled name="nationality" type="text" id="nationality"
                                    class="form-control select " value="{{$student->nationality ?? '' }}">
                            </div>
                        </div>


                        <div class="form-group 	required">
                            <label class="control-label" for="email">Email</label>
                            <div class="input-group">
                                <input disabled name="email" type="email" id="email" class="form-control select "
                                    value="{{$student->email ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group 	required">
                            <label class="control-label" for="phone_no">phone_no</label>
                            <div class="input-group">
                                <input disabled name="phone_no" type="text" id="phone_no" class="form-control select "
                                    value="{{$student->phone_no ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group 	required">
                            <label class="control-label" for="father_name">father_name</label>
                            <div class="input-group">
                                <input disabled name="father_name" type="text" id="father_name"
                                    class="form-control select " value="{{$student->father_name ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group 	required">
                            <label class="control-label" for="mother_name">mother_name</label>
                            <div class="input-group">
                                <input disabled name="mother_name" type="text" id="mother_name"
                                    class="form-control select " value="{{$student->mother_name ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group 	required">
                            <label class="control-label" for="mother_phone_no">mother_phone_no</label>
                            <div class="input-group">
                                <input disabled name="mother_phone_no" type="text" id="mother_phone_no"
                                    class="form-control select " value="{{$student->mother_phone_no ?? '' }}">
                            </div>
                        </div>



                    </div>
                    <div class="col-6">

                        <div class="form-group 	required">
                            <label class="control-label" for="father_phone_no">father_phone_no</label>
                            <div class="input-group">
                                <input disabled name="father_phone_no" type="text" id="father_phone_no"
                                    class="form-control select " value="{{$student->father_phone_no ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group 	required">
                            <label class="control-label" for="mother_name">mother_name</label>
                            <div class="input-group">
                                <input disabled name="mother_name" type="text" id="mother_name"
                                    class="form-control select " value="{{$student->mother_name ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group 	required">
                            <label class="control-label" for="address">address</label>
                            <div class="input-group">
                                <input disabled name="address" type="text" id="address" class="form-control select "
                                    value="{{$student->address ?? '' }}">
                            </div>
                        </div>

                        <div class="form-group  required">
                            <label class="control-label" for="grade_id">Grade</label>
                            <div class="input-group">
                                <select name="grade_id" id="grade_id" class="form-control ">
                                    <option class="dropup" value=""> Select One</option>

                                    {{-- @foreach ($grades as $grade)
                                    <option value="{{$grade->id}}"
                                    {{$student->grade_id ?? '' == $grade->id ? 'selected' : ''}}>
                                    {{$grade->grade}}
                                    </option>

                                    @endforeach --}}
                                </select>
                                <span class="invalid-feedback" role="alert"></span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="note">note</label>
                            <div class="input-group">
                                <textarea name="note" class="form-control "
                                    id="note">{{ $student->note ?? '' }}</textarea>
                                <span class="invalid-feedback" role="alert"></span>
                            </div>
                        </div>

                    </div>
                </div>


                </form>
            </div>

        </div>
        <div class="card-footer">

        </div>
    </div>
    @else
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Alert</h4>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Fill the Student Registration Form First</h4>
            </div>
        </div>

        <p></p>
        <p class="mb-0"></p>
    </div>
    @endif


</div>

@endsection
@section('scripts')
<script>

</script>

@endsection