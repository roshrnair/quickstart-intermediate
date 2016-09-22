@extends('layouts.dashboard')
@section('page_heading','Employees')
@section('section')
           
           
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
           <!-- Current Tasks -->
    @if (count($employees) > 0)
    	<div class="panel panel-default">
    		<div class="panel-body">
    			<table class="table table-striped task-table">
    				<!-- Table Headings -->
    				<thead>
    					<th>No.</th>
    					<th>Employee Name</th>
    					<th>&nbsp;</th>
    					<th>&nbsp;</th>
    				</thead>
    				
    				<!-- Table Body -->
    				<tbody>
    					@foreach ($employees as $key => $employee)
    						<tr>
    							<td>{{ ++$i }}</td>
    							<!-- Employee Name -->
    							<td class="table-text">
    								<div>{{ $employee->name }}</div>
    							</td>
    							<td>
    								<table>
	    								<tr>
		    								<td><a class="btn btn-info" href="{{ route('cntEmployee.show',$employee->id) }}"><i class="fa fa-btn fa-binoculars"></i>&nbsp;Show&nbsp;&nbsp;</a>&nbsp;</td>
		    								<td><a class="btn btn-primary" href="{{ route('cntEmployee.edit',$employee->id) }}"><i class="fa fa-btn fa-edit"></i>&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>&nbsp;</td>
		    								<td>
			    								 <!-- Delete Button -->
			    								 <form action="{{ url('employee/'.$employee->id) }}" method="POST">
			    								 	 {{ csrf_field() }}
			    								 	  {{ method_field('DELETE') }}
			    								 	  
			    								 	  <button type="submit" id="delete-employee-{{ $employee->id }}" class="btn btn-danger" value = "Delete">
			    								 	  	<i class="fa fa-btn fa-trash"></i>&nbsp;Delete
			    								 	  </button>
			    								 </form>
		    								</td>
	    								</tr>
    								</table>
    								
    								

 
    							</td>
    						</tr>
    					@endforeach
    				</tbody>
    			</table>
    			
    			{!! $employees->render() !!}
    		</div>
    	</div>
    @else
    	No Employees
    @endif
            
@stop

@section('scripts')

<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>

@stop
