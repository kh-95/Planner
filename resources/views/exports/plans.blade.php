<table>
    <thead>
    <tr>
  										
			
			<th>Tasks</th>
    </tr>
    </thead>
    <tbody>
    @foreach($plans as $plan)
    @foreach($plan->tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
          
        </tr>
    @endforeach
    @endforeach
    </tbody>
</table>