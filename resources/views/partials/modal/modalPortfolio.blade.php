<div class="modal fade w-100" id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content bg-info p-5 container w-75">
        <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">NAVBAR</h5>
            <button type="button" class="bg-danger btn btn-close text-white" data-dismiss="modal"
                aria-label="Close">X</button>
        </div>
        <form action="/backoffice/portfolio/{{ $portfolios->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $portfolios->portfolioTitle }}" name="portfolioTitle"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                <input type="text" class="form-control"
                    value="{{ $portfolios->p }}" name="p"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li 1</label>
                <input type="text" class="form-control"
                    value="{{ $portfolios->li1 }}" name="li1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li 2</label>
                <input type="text" class="form-control"
                    value="{{ $portfolios->li2 }}" name="li2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li 3</label>
                <input type="text" class="form-control"
                    value="{{ $portfolios->li3 }}" name="li3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li 4</label>
                <input type="text" class="form-control"
                    value="{{ $portfolios->li4 }}" name="li4"
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