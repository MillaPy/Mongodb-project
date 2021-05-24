<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <title>Edit Contact</title>
    <meta name = "csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Contacts Edition</h2>
                    <p>Please fill this form and submit to add a record</p>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <div class="col-md-12">
                <h4>Edit Contacts with IIN {{$student->id}}</h4>
            </div>
            <form action ="{{route('students.update', $student->id)}}" method ="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="fullname" value ="{{$student->fullname}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value ="{{$student->email}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>IIN</label>
                    <input type ="text" name="iin" value ="{{$student->student_id}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value ="{{$student->phone}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="phone" value ="{{$student->address}}" class="form-control" required>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Gender
                        </label>
                    </div>
                <div class="md:w-2/3">
                    <div class="flex flex-row items-center">
                        <label class="block text-gray-500 font-bold">
                            <input name="gender" class="mr-2 leading-tight" type="radio" value="male">
                            <span class="text-sm">Male</span>
                        </label>
                        <label class="ml-4 block text-gray-500 font-bold">
                            <input name="gender" class="mr-2 leading-tight" type="radio" value="female">
                            <span class="text-sm">Female</span>
                        </label>
                        <label class="ml-4 block text-gray-500 font-bold">
                            <input name="gender" class="mr-2 leading-tight" type="radio" value="other">
                            <span class="text-sm">Other</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>DOB</label>
                    <input type="text" name="phone" value ="{{$student->date_of_birth}}" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="{{route('students.index')}}" class="btn btn-default">Cancel</a>
            </form>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
