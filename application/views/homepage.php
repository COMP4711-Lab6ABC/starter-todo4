<div class="alert alert-info">{remaining_tasks} tasks are left to do!</div>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Task</th>
        <th>Priority</th>
		<th>Size</th>
		<th>Group</th>
		<th>Status</th>
    </tr>
    
	
    {display_tasks}
    <tr>
    <td>{id}</td>
    <td>{task}</td>
    <td>{priority}</td>
		<td>{size}</td>
	<td>{group}</td>
	<td>{status}</td>
    </tr>
    {/display_tasks}
</table>
