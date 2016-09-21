@extends('layouts.dashboard')
@section('page_heading','Employees')
@section('section')
           
           <!-- Current Tasks -->
    @if (count($employees) > 0)
    	<div class="panel panel-default">
    		<div class="panel-body">
    			<table class="table table-striped task-table">
    				<!-- Table Headings -->
    				<thead>
    					 <th>Employee Name</th>
    					 <th>&nbsp;</th>
    					 <th>&nbsp;</th>
    				</thead>
    				
    				<!-- Table Body -->
    				<tbody>
    					@foreach ($employees as $employee)
    						<tr>
    							<!-- Employee Name -->
    							<td class="table-text">
    								<div>{{ $employee->name }}</div>
    							</td>
    							<td>
    								<!-- Edit Button -->
    								
    								<a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary">
    								<i class="fa fa-btn fa-pencil-square-o"></i>&nbsp;Edit
    								</a>
    							</td>
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
    					@endforeach
    				</tbody>
    			</table>
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
