<div class="modal fade w-100" id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content bg-info p-5 container w-75">
        <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">NAVBAR</h5>
            <button type="button" class="bg-danger btn btn-close text-white" data-dismiss="modal"
                aria-label="Close">X</button>
        </div>
        <form action="/backoffice/facts/{{ $facts->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $facts->factsTitle }}" name="factsTitle"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                <input type="text" class="form-control"
                    value="{{ $facts->p1 }}" name="p1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 1</label>
                <input type="text" class="form-control"
                    value="{{ $facts->icon1 }}" name="icon1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre 1 </label>
                <input type="text" class="form-control"
                    value="{{ $facts->span }}" name="span"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p1 </label>
                <input type="text" class="form-control"
                    value="{{ $facts->p2 }}" name="p2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon2</label>
                <input type="text" class="form-control"
                    value="{{ $facts->strong1 }}" name="strong1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre2</label>
                <input type="text" class="form-control"
                    value="{{ $facts->icon2 }}" name="icon2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p2</label>
                <input type="text" class="form-control"
                    value="{{ $facts->span2 }}" name="span2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon3</label>
                <input type="text" class="form-control"
                    value="{{ $facts->p3 }}" name="p3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre3</label>
                <input type="text" class="form-control"
                    value="{{ $facts->strong2 }}" name="strong2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p3</label>
                <input type="text" class="form-control"
                    value="{{ $facts->icon3 }}" name="icon3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormName</label>
                <input type="text" class="form-control"
                    value="{{ $facts->span3 }}" name="span3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormEmail</label>
                <input type="text" class="form-control"
                    value="{{ $facts->p4 }}" name="p4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormSubject</label>
                <input type="text" class="form-control"
                    value="{{ $facts->strong3 }}" name="strong3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $facts->icon4 }}" name="icon4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $facts->span4 }}" name="span4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $facts->p5 }}" name="p5"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $facts->strong4 }}" name="strong4"
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