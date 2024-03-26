@extends('layouts.event')
@section('content')
    <div class="container">
        <a href="{{ route('events.create') }}" class="btn btn-success btn-sm">Adauga</a>
        <div class="row">
            <h4>Platformă de gestionare a evenimentelor            </h4>
            <div class="table-responsive">
              <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Optiuni</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->date }}</td>
                            <td>{{ $event->location }}</td>
                            <td> 
                                <a href="{{ route('events.edit',['event' => $event->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('events.show',['event' => $event->id]) }}" class="btn btn-info btn-sm">Show</a>
                                <form action="{{ route('events.destroy', ['event' => $event]) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                              </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection