<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
</head>
<body>
<table>
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Address</td>
		<td>Salary</td>
		<td>Department</td>
	</tr>
	@foreach($employees as $employee)
	    <tr>
	        <td>{{$employee->id}}</td>
	        <td>{{$employee->name}}</td>
	        <td>{{$employee->email}}</td>
	        <td>{{$employee->address}}</td>
	        <td>{{$employee->salary}}</td>
	        <td>{{$employee->department}}</td>
	    </tr>
	@endforeach
</table>
</body>
</html>