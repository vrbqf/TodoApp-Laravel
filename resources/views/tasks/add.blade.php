@extends("layouts.default")

@section("content")
    <div class="d-flex align-items-center">
        <div class="container card shadow-sm" style="margin-top:100px;max-width: 500px">
            <div class="fs-3 fw-bold text-center">Add new task</div>
            <form class="p-3" method="POST" action="{{route("task.add.post")}}">
                @csrf
                <div class="mb-3 mt-1">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Term</label>
                    <input type="datetime-local" id="deadline" class="form-control" name="deadline">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="3"></textarea>

                </div>
                @if(session()->has("success"))
                    <div class="alert alert-success">
                        {{session()->get("success")}}
                    </div>
                @endif
                @if(session("$errors"))
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button class="btn btn-success rounded-pill" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
