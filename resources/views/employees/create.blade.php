@extends('layouts.dashboard')
@section('page_heading','New Employee')
@section('section')
           
<div class="panel-body">
<!-- Display Validation Errors -->
@include('common.errors')

<!-- New Employee Form -->
        <form action="{{ url('employee') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        
        <!-- Employee Name -->
        <div class="form-group">
        	<label for="employee-name" class="col-sm-3 control-label">Name</label>
        	<div class="col-sm-6">
        		<input type="text" name="name" id="employee-name" class="form-control">
        	</div>
        </div>
        
        <!-- Add Employee Button -->
        <div class="form-group">
        	<div class="col-sm-offset-3 col-sm-6">
        		<button type="submit" class="btn btn-default">
        			<i class="fa fa-plus"></i> Add Employee
        		</button>
        	</div>
        </div>
        
        </form>

</div>           
            
@stop
