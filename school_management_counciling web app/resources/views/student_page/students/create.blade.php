@extends('student_page.app')

@section('breadcrumb')
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
</ol>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card text-left col-md-12">
        <div class="card-header">
        </div>

        <div class="card text-left">
            <div class="card-header">

                <div class="d-flex align-items-center">
                    <h2>Create New student </h2>

                </div>

            </div>

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{route('student.store')}}" class="form-horizontal" id="driver_reg"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">

                            <div class="form-group 	required">
                                <label class="control-label" for="dob">Birth Date</label>
                                <div class="input-group">
                                    <input name="dob" type="date" id="dob"
                                        class="form-control select {{ $errors->has('dob') ? ' is-invalid' : '' }}"
                                        value="{{old('dob') }}">
                                    @if ($errors->has('dob'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  required">
                                <label class="control-label" for="gender"> gender</label>
                                <div class="input-group">
                                    <select name="gender" id="gender"
                                        class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        onfocusout="validategender()">
                                        <option class="dropup" value="1" selected>Male </option>
                                        <option class="dropup" value="0">Female</option>

                                    </select>
                                    @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                    <span class="invalid-feedback" role="alert"></span>
                                </div>
                            </div>


                            <div class="form-group 	required">
                                <label class="control-label" for="nationality">Nationality</label>
                                <div class="input-group">
                                    <input name="nationality" type="text" id="nationality"
                                        class="form-control select {{ $errors->has('nationality') ? ' is-invalid' : '' }}"
                                        value="{{old('nationality') }}">
                                    @if ($errors->has('nationality'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group 	required">
                                <label class="control-label" for="phone_no">phone_no</label>
                                <div class="input-group">
                                    <input name="phone_no" type="text" id="phone_no"
                                        class="form-control select {{ $errors->has('phone_no') ? ' is-invalid' : '' }}"
                                        value="{{old('phone_no') }}">
                                    @if ($errors->has('phone_no'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group 	required">
                                <label class="control-label" for="father_name">father_name</label>
                                <div class="input-group">
                                    <input name="father_name" type="text" id="father_name"
                                        class="form-control select {{ $errors->has('father_name') ? ' is-invalid' : '' }}"
                                        value="{{old('father_name') }}">
                                    @if ($errors->has('father_name'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('father_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group 	required">
                                <label class="control-label" for="mother_name">mother_name</label>
                                <div class="input-group">
                                    <input name="mother_name" type="text" id="mother_name"
                                        class="form-control select {{ $errors->has('mother_name') ? ' is-invalid' : '' }}"
                                        value="{{old('mother_name') }}">
                                    @if ($errors->has('mother_name'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mother_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group 	required">
                                <label class="control-label" for="mother_phone_no">mother_phone_no</label>
                                <div class="input-group">
                                    <input name="mother_phone_no" type="text" id="mother_phone_no"
                                        class="form-control select {{ $errors->has('mother_phone_no') ? ' is-invalid' : '' }}"
                                        value="{{old('mother_phone_no') }}">
                                    @if ($errors->has('mother_phone_no'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mother_phone_no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                        </div>
                        <div class="col-6">

                            <div class="form-group 	required">
                                <label class="control-label" for="father_phone_no">father_phone_no</label>
                                <div class="input-group">
                                    <input name="father_phone_no" type="text" id="father_phone_no"
                                        class="form-control select {{ $errors->has('father_phone_no') ? ' is-invalid' : '' }}"
                                        value="{{old('father_phone_no') }}">
                                    @if ($errors->has('father_phone_no'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('father_phone_no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group 	required">
                                <label class="control-label" for="mother_name">mother_name</label>
                                <div class="input-group">
                                    <input name="mother_name" type="text" id="mother_name"
                                        class="form-control select {{ $errors->has('mother_name') ? ' is-invalid' : '' }}"
                                        value="{{old('mother_name') }}">
                                    @if ($errors->has('mother_name'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mother_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group 	required">
                                <label class="control-label" for="address">address</label>
                                <div class="input-group">
                                    <input name="address" type="text" id="address"
                                        class="form-control select {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                        value="{{old('address') }}">
                                    @if ($errors->has('address'))
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  required">
                                <label class="control-label" for="grade_id">Grade</label>
                                <div class="input-group">
                                    <select name="grade_id" id="grade_id"
                                        class="form-control {{ $errors->has('grade_id') ? ' is-invalid' : '' }}">
                                        <option class="dropup" value=""> Select One</option>

                                        @foreach ($grades as $grade)
                                        <option value="{{$grade->id}}"
                                            {{old('grade_id') == $grade->id ? 'selected' : ''}}> {{$grade->grade}}
                                        </option>

                                        @endforeach
                                    </select>
                                    @if ($errors->has('grade_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('grade_id') }}</strong>
                                    </span>
                                    @endif
                                    <span class="invalid-feedback" role="alert"></span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="note">note</label>
                                <div class="input-group">
                                    <textarea name="note"
                                        class="form-control {{ $errors->has('note') ? ' is-invalid' : '' }}"
                                        id="note">{{ old('note') }}</textarea>
                                    @if ($errors->has('note'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                    @endif
                                    <span class="invalid-feedback" role="alert"></span>
                                </div>
                            </div>

                            <div class="form-group ml-auto">
                                <button type="submit" class="btn btn-primary" name="save"> <i class="fas fa-save mr-1"
                                        aria-hidden="true"></i>Save</button>

                            </div>

                        </div>
                    </div>


                </form>
            </div>

        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>

</script>

@endsection
