<x-layout>
    <x-slot name="title">Task Dashboard</x-slot>
    <x-slot name="main">
        <body>
            <h1>Task List</h1>
            <a id="link" href="{{ url('createtask') }}">Assign Task</a>

            <table>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Task Details</th>
                    <th>Task Type</th>
                </tr>
                @if($tasks->isEmpty())
                    <tr>
                        <td colspan="5" class="no-users">No tasks found.</td>
                    </tr>
                @else
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{-- <td>{{ $task->username }}</td> --}}
                            <td>{{ $task->user->name }}</td>
                            <td>{{ $task->user->email }}</td>
                            <td>{{ $task->taskdetail }}</td>
                            <td>
                                @if($task->tasktype === 'Pending')
                                    <span class="task-type pending">Pending</span>
                                @elseif($task->tasktype === 'Done')
                                    <span class="task-type done">Done</span>
                                @else
                                    <span class="task-type unknown">Unknown</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
            <br><br>

            {{ $tasks->links() }}
            <style>
                .w-5.h-5{
                    width: 25px;
                }
            </style>

        </body>
    </x-slot>
</x-layout>

