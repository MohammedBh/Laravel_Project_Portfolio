<div class="modal fade w-100" id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content bg-info p-5 container w-75">
        <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">NAVBAR</h5>
            <button type="button" class="bg-danger btn btn-close text-white" data-dismiss="modal"
                aria-label="Close">X</button>
        </div>
        <form action="/backoffice/navbar/{{ $navbar->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Image</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->img }}" name="img"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->h1 }}" name="h1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 1</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->icon1 }}" name="icon1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white"> Icon 2 </label>
                <input type="text" class="form-control"
                    value="{{ $navbar->icon2 }}" name="icon2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 3</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->icon3 }}" name="icon3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 4</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->icon4 }}" name="icon4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 5</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->icon5 }}" name="icon5"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 1</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->nav1 }}" name="nav1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 2</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->nav2 }}" name="nav2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 3</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->nav3 }}" name="nav3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 4</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->nav4 }}" name="nav4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 5</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->nav5 }}" name="nav5"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Button</label>
                <input type="text" class="form-control"
                    value="{{ $navbar->btn_icon }}" name="btn_icon"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

</div>
</div>