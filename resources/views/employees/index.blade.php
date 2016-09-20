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
    							</td>
    							<td>
    								<!-- Delete Button -->
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
