<div class="modal fade" id="exampleModalToggle_{{ $servicesDyns->id }}" aria-hidden="true" role="dialog"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel">SKILLS - DYNAMIC (Show)</h5>
                <button type="button" class="btn btn-close bg-danger" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body text-center">
                <div class="card " style="width: 100%;">
                    <div class="card-body">
                        <div class="mb-5">
                            <h3 class="text-primary">Titre</h3>
                            <h4>{{ $servicesDyns->span }}</h4>
                        </div>
                        <div class="border-bottom"></div>
                        <div class="mt-5">
                            <h3 class="text-primary">Pourcentage</h3>
                            <h4>{{ $servicesDyns->pourcentage }} %</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <a href="/contenuSkillsDynamic/{{ $servicesDyns->id }}/edit" class="btn btn-success mx-2 text-white"
                    data-target="#exampleModalToggle2_{{ $servicesDyns->id }}" data-toggle="modal"
                    data-dismiss="modal">EDIT</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2_{{ $servicesDyns->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel2">SKILLS - DYNAMIC (Edit)</h5>
                <button type="button" class="btn btn-close bg-danger" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body ">
                <form action="/backoffice/skillsDync/{{ $servicesDyns->id }}/update" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Span</label>
                        <input type="text" class="form-control" value="{{ $servicesDyns->span }}" name="span"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Pourcentage</label>
                        <input type="number" min="0" max="100"  class="form-control" value="{{ $servicesDyns->pourcentage }}"
                            name="pourcentage" id="exampleInputPassword1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn btn-success mx-2 text-white">SAVE</button>
            </div>
        </div>
    </div>
</div>
